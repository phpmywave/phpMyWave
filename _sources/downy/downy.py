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

from mercurial import commands
from api import document

import logging

FILE_STATUSES = 'modified added removed deleted _unknown _ignored clean'.split()

class LocalFile(object):
  def __init__(self, name, status):
    self.name = name
    self.status = status


class Downy(object):
  def __init__(self, repo):
    self.repo = repo
    self.tracked_files = []

  def on_wavelet_blip_created(self, props, context):
    logging.info('blip created')
    logging.info(props)
    logging.info(context)

  def on_wavelet_self_added(self, props, context):
    logging.info('Added to wave.')
    new_blip = context.GetRootWavelet().CreateBlip()
    self.refresh_status(new_blip.GetDocument())

  #def on_wavelet_created(self, props, context):
  #  logging.info('New wave.')
  #  root_blip = context.GetRootWavelet().GetRootBlip()
  #  self.refresh_status(root_blip.GetDocument())

  def on_form_button_clicked(self, props, context):
    logging.info('button clicked')
    button_name = props['button']
    if button_name.startswith('load_'):
      self.load_file(context, button_name[5:])
    elif button_name == 'loadselected':
      # TODO
      logging.info('load selected')

  def on_blip_submitted(self, props, context):
    blip = context.GetBlipById(props['blipId'])
    if not blip:
      logging.error('Unknown blip ID %s submitted.', props['blipId'])
    self.save_file(blip)

  def tip(self):
    tip_ctx = self.repo[len(self.repo) - 1]
    return '%s:%s' % (tip_ctx.rev(), tip_ctx.hex()[:10])

  def save_file(self, blip):
    doc = blip.GetDocument()
    file_name_ann = doc.GetAnnotation('downy-file-name')
    if not file_name_ann:
      logging.info('Ignoring blip %s', blip.GetId())
      return
    file_name = file_name_ann.value
    contents = doc.GetText()
    if contents.startswith(file_name + '\n\n'):
      contents = contents[len(file_name) + 2:]
    self.repo.wwrite(file_name, contents, '')

  def load_file(self, context, file_name):
    # TODO: check if child blip for file already exists
    stat_blip = self.find_status_blip(context)
    if not stat_blip:
      logging.info('Could not find status blip')
      return

    # Find insertion point
    parent_doc = stat_blip.GetDocument()
    file_name_loc = parent_doc.GetText().find(file_name)
    if file_name_loc == -1:
      logging.warn('Could not find insertion point for %s', file_name)
      return
    # TODO: also account for buttons next to file name
    insert_point = file_name_loc + len(file_name)

    new_blip = parent_doc.InsertInlineBlip(insert_point)
    doc = new_blip.GetDocument()
    doc.AnnotateDocument('downy-file-name', file_name)
    file_text = self.repo.wread(file_name)
    doc.AppendText(file_name + '\n\n')
    # Doesn't work. Need to use AppendStyledText.
    #doc.SetAnnotation(document.Range(0, len(file_name)),
    #                  'styled-text', 'HEADING4')
    # TODO: add <hr> here or something
    doc.AppendText(file_text)

  def command(self, cmd):
    cmd_fn = getattr(commands, cmd)
    cmd_fn(self.repo.ui, self.repo)

  def find_status_blip(self, context):
    for blip in context.GetBlips():
      if blip.GetDocument().HasAnnotation('downy-stat'):
        return blip

  def repo_status(self):
    all_files = []
    files_by_status = self.repo.status(clean=True)
    for files, status in zip(files_by_status, FILE_STATUSES):
      if status.startswith('_'):
        continue
      for file_name in files:
        all_files.append(LocalFile(file_name, status))
    all_files.sort(key=lambda f: f.name)
    return all_files

  def refresh_file_status(self, doc, f):
    # TODO: check if the file is already opened
    file_ann = doc.GetAnnotation(f.name + '-controls')
    if file_ann:
      logging.info('Refresh %s', file_ann)
      doc.DeleteRange(file_ann.range)
    stat_start = len(doc.GetText())
    # TODO: use f.status
    doc.AppendElement(document.FormElement(
        document.ELEMENT_TYPE.CHECK, name='sel_' + f.name))
    doc.AppendText(f.name + ' ')
    doc.AppendElement(document.FormElement(
        document.ELEMENT_TYPE.BUTTON, name='load_' + f.name, label='Load',
        value='Load'))
    doc.AppendText('\n')
    stat_end = len(doc.GetText())
    logging.info('%s is from %d to %d', f.name, stat_start, stat_end)
    doc.SetAnnotation(document.Range(stat_start, stat_end),
                      f.name + '-controls', '1')

  def refresh_status(self, doc):
    rev = self.tip()
    intro = 'Mercurial repository at %s\nRevision %s\n' % (self.repo.root, rev)
    prev_stat = doc.GetAnnotation('downy-stat')
    if prev_stat:
      doc.SetTextInRange(prev_stat.range, intro)
    else:
      doc.AppendText(intro)
    doc.AnnotateDocument('downy-stat', rev)
    files = self.repo_status()
    for f in files:
      self.refresh_file_status(doc, f)
    doc.AppendElement(document.FormElement(
        document.ELEMENT_TYPE.BUTTON, name='loadselected',
        value='Load Selected'))
