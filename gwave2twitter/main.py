from waveapi import events
from waveapi import robot
from waveapi import appengine_robot_runner
import logging

def OnWaveletSelfAdded(event, wavelet):
  """Invoked when the robot has been added."""
  logging.info("OnWaveletSelfAdded called")
  wavelet.reply("\nHi everybody! I'm a Python robot!")
  
def OnWaveletParticipantsChanged(event, wavelet):
  logging.info("OnParticipantsChanged called")
  newParticipants = event.participants_added
  for newParticipant in newParticipants:
    wavelet.reply("\nHi : " + newParticipant)

if __name__ == '__main__':
  myRobot = robot.Robot('v2waveapi', 
      image_url='http://v2waveapi.appspot.com/icon.png',
      profile_url='http://v2waveapi.appspot.com/')
  myRobot.register_handler(events.WaveletParticipantsChanged, OnWaveletParticipantsChanged)
  myRobot.register_handler(events.WaveletSelfAdded, OnWaveletSelfAdded)
  appengine_robot_runner.run(myRobot)