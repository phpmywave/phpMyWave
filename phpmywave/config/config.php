<?php

/**
 * Setting the Inclusions
 */
// Set include paths.
$includePath  = get_include_path();
$includePath .= PATH_SEPARATOR . '../../library';
$includePath .= PATH_SEPARATOR . '../../application/models';

set_include_path($includePath);

/**
 * Defining and loading the Autoloader
 */
require_once 'Zend/Loader/Autoloader.php';

$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->registerNamespace('phpMyWave_');
$autoloader->setFallbackAutoloader(true);
$autoloader->suppressNotFoundWarnings(false);

Zend_Registry::set('ROBOT_TWITTER_ACCESSDATA', array('login'        => 'phpMyWave',
                                                     'password'     => 'BarCamp09!'));