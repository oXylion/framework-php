<?php

// ../app/autopoad.php @app Autoloader node

/**
 * @var ClassLoader $loader
 */
$loader = require_once( dirname( __DIR__ ) . '/vendor' . '/autoload.php' );

/// TODO: add classloader init action to application run log

return $loader;
