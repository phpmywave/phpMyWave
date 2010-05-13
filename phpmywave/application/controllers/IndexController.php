<?php

/**
 * Index Controller - gets the application to run
 *
 * The Index-Controller recieves the starting command directly from the bootstraping Index-File. It
 * keeps the process running and delegates Tasks.
 *
 * @category   Zend
 * @package    Zend_Controller
 * @subpackage Application
 * @link       http://www.phpmywave.org
 */
class IndexController extends Zend_Controller_Action
{

    /**
     * Function: init()
     *
     * Basic initialization method, no magic available here yet.
     *
     * @return NULL;
     */
    public function init()
    {
        $this->getFrontController()->setParam('noViewRenderer', true);
    }

    /**
     * Function: indexAction()
     *
     * This Action is run from the Index-File. Basic hello-world-page.
     *
     * @returns string  $hellpWorld     Simply echoes: "Hello phpMyWave!!!"
     */
    public function indexAction()
    {
        $server = new phpMyWave_Server();
        $server->setClass('Robot');
        
        echo $server->handle();
    }
}