<?php

/**
 * @var ClassLoader $loader
 */
$loader = require_once( dirname( __DIR__ ) . '/vendor' . '/autoload.php' );

/// TODO: add classloader init action to application log data

return $loader;
