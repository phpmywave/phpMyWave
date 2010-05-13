<?php
class ErrorController extends Zend_Controller_Action
{
    public function init()
    {
    }

    public function errorAction()
    {
       $errors = $this->_getParam('error_handler');
       
       var_dump($errors);
       exit;
    }
}