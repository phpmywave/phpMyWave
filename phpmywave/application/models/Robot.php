<?php
class Robot extends phpMyWave_AbstractRobot
{
    public function onDocumentChanged($eventMessageBundle)
    {
        $eventMessageBundle->reply('Ohne API sag\' ich nichts!!!');
    }
}