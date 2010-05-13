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

import logging

from google.appengine.api import urlfetch
from google.appengine.ext import webapp
import google.appengine.ext.webapp.util

REMOTE_ROBOT = 'http://downy.artdent.homelinux.net'
ATTEMPTS = 3


class Proxy(webapp.RequestHandler):

  def _forward(self, method):
    path = REMOTE_ROBOT + self.request.path
    logging.info('path: <%s>', path)
    robot_response = None
    for i in range(ATTEMPTS):
      try:
        robot_response = urlfetch.fetch(path, method=method, deadline=10,
                                        payload=self.request.body)
        logging.info('remote response: %d', robot_response.status_code)
        break
      except urlfetch.DownloadError, e:
        logging.error('Download error: %s', e)
    if not robot_response:
      raise RuntimeError(
        'Did not receive response from %s after %s tries. '
        'Either the host is down or urlfetch is still broken.'
        % (path, ATTEMPTS))
    self.response.set_status(robot_response.status_code)
    # Only copy over Content-Type header for now
    for header in ['Content-Type']:
      if header in robot_response.headers:
        self.response.headers[header] = robot_response.headers[header]
    self.response.out.write(robot_response.content)

  def get(self):
    self._forward('GET')

  def post(self):
    self._forward('POST')


def main():
  app = webapp.WSGIApplication([('.*', Proxy)], debug=True)
  webapp.util.run_wsgi_app(app)


if __name__=='__main__':
  main()
