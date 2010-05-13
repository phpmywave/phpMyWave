<?php
// Set include paths.
$includePath  = get_include_path();
$includePath .= PATH_SEPARATOR . '../../library';

set_include_path($includePath);

// Define autoloader.
require_once 'Zend/Loader/Autoloader.php';

$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->registerNamespace('phpMyWave_');
$autoloader->setFallbackAutoloader(true);
$autoloader->suppressNotFoundWarnings(false);
