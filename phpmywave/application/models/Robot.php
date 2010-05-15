<?php

class Robot extends phpMyWave_AbstractRobot
{
    public function __construct() {

        // Getting AccessData from Configuration Section via Zend_Registry
        $accessData             = Zend_Registry::get('ROBOT_TWITTER_ACCESSDATA');

        // Saving Twitter Service to ClassVar for further work
        $this->twitterService   = new Zend_Service_Twitter($accessData['login'],$accessData['password']);
    }
    public function postOnTwitter($textMessage, $replyTo = 0) {

        // Parameterprüfung
        if (!is_string($textMessage) || !is_int($replyTo)) {
            throw new phpMyWave_Exception_Twitter_Usage('Malformed Parameters for Robot::postOnTwitter()!');
        }
        if (strlen($textMessage) > 140) {
            throw new phpMyWave_Exception_Twitter_Usage('Status Text too long!');
        }

        // Testverbindung
        if ($this->twitterService->accountVerifyCredentials()
                                 ->isError()
        ) {
            throw new phpMyWave_Exception_Twitter_Connection('Something has gone wrong with your twitter connection!');
        }
        if((int) $replyTo > 0) {
            $this->twitterService->statusUpdate($textMessage, $replyTo);
        } else {
            $this->twitterService->statusUpdate($textMessage);
        }
    }

    public function onDocumentChanged($eventMessageBundle)
    {
        $eventMessageBundle->reply('Ohne API sag\' ich nichts!!!');
    }
}