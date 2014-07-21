<?php

// - App mod development, enable display all errors
error_reporting(E_ALL);
ini_set('display_error', 'On');

// - Register use namespace
use \BoostFactor\ActionDummy;

// - Service autoloader  with boostrap module register.
$loader = require_once( dirname( __DIR__ ) . '\app' . '\bootstrap.php' );



// file end line