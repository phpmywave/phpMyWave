<?php

error_reporting(E_ALL | E_STRICT);

// Get base, application and tests path
define('BASE_PATH',        dirname(dirname(__FILE__)));
define('APPLICATION_PATH', BASE_PATH . '/application');
define('TESTS_PATH',       BASE_PATH . '/tests');

// Define filters for clover report
PHPUnit_Util_Filter::addDirectoryToFilter(BASE_PATH . '/tests');
PHPUnit_Util_Filter::addDirectoryToFilter(BASE_PATH . '/library');
PHPUnit_Util_Filter::addDirectoryToFilter(BASE_PATH . '/config');
PHPUnit_Util_Filter::addDirectoryToWhitelist(BASE_PATH . '/application', '.php');

// Set include path
$includePath = BASE_PATH . '/library' . PATH_SEPARATOR
             . APPLICATION_PATH . '/library' . PATH_SEPARATOR
             . get_include_path();

set_include_path($includePath);

// Get the autolaoder and set module autoloaders
require_once 'Zend/Loader/Autoloader.php';

$autoLoader = Zend_Loader_Autoloader::getInstance();
$autoLoader->registerNamespace('phpMyWave_');

// Set locale
setlocale(LC_CTYPE, 'de_DE.utf-8');