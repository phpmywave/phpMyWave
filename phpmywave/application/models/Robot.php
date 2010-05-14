<?php
class Robot extends phpMyWave_AbstractRobot
{
    public function onDocumentChanged()
    {
        echo 'document changed';
    }
}