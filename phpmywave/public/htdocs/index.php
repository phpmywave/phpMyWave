<?php

/**
 * Include the Configuration file
 */
require_once '../../config/config.php';

/**
 * Bootstrap the Application
 */
Zend_Controller_Front::run('../../application/controllers');