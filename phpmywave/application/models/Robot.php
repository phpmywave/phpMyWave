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
        if(!is_string($textMessage) || !is_int($replyTo)){
            throw new phpMyWave_Exception_Twitter_Usage('Malformed Parameters for Robot::postOnTwitter()!');
        }

        var_dump("And the connection iiiiiiiiis: " . $this->twitterService->accountVerifyCredentials());
    }

    public function onDocumentChanged($eventMessageBundle)
    {
        $this->postOnTwitter('asdf');
        $eventMessageBundle->reply('Ohne API sag\' ich nichts!!!');
    }
}