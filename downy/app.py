#!/usr/bin/python2.5
#
# Copyright 2009 Google Inc.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""Simple wave robot WSGI application and forwarding middleware."""

import webob
import webob.exc

from api import robot_abstract

import logging


class RobotMiddleware(object):
  """WSGI middleware that routes /_wave/ requests to a robot wsgi app."""
  def __init__(self, robot_app, main_app):
    self._robot_app = robot_app
    self._main_app = main_app

  def __call__(self, environ, start_response):
    path = environ['PATH_INFO']
    if path.startswith('/_wave/'):
      return self._robot_app(environ, start_response)
    return self._main_app(environ, start_response)


class SimpleRobotApp(object):
  """WSGI application for serving an abstract robot.

  This is just like the Robot class in the Wave api, but it uses the plain WebOb
  request/response objects instead of the analogous AppEngine objects.
  """

  def __init__(self, robot):
    self._robot = robot

  def capabilities(self):
    xml = self._robot.GetCapabilitiesXml()
    response = webob.Response(content_type='text/xml', body=xml)
    response.cache_control = 'Private'  # XXX
    return response

  def profile(self):
    xml = self._robot.GetProfileJson()
    response = webob.Response(content_type='application/json', body=xml)
    response.cache_control = 'Private'  # XXX
    return response

  def jsonrpc(self, req):
    json_body = req.body
    logging.info('Incoming: %s', json_body)

    context, events = robot_abstract.ParseJSONBody(json_body)
    for event in events:
      self._robot.HandleEvent(event, context)

    json_response = robot_abstract.SerializeContext(
        context, self._robot.version)
    logging.info('Outgoing: %s', json_response)
    return webob.Response(content_type='application/json',
                          body=json_response)

  def __call__(self, environ, start_response):
    req = webob.Request(environ)
    if req.path_info == '/_wave/capabilities.xml' and req.method == 'GET':
      response = self.capabilities()
    elif req.path_info == '/_wave/robot/profile' and req.method == 'GET':
      response = self.profile()
    elif req.path_info == '/_wave/robot/jsonrpc' and req.method == 'POST':
      response = self.jsonrpc(req)
    else:
      response = webob.exc.HTTPNotFound()
    return response(environ, start_response)
