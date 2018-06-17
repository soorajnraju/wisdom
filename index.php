<?php

/**
 * Version: 1.0
 * Author: soorajnraju
 * Website: https://soorajnraju.com/
 * Build: 180615
 */
define('HOME', dirname(__FILE__) . '/');

/**
 * Composer auto load
 */
if (file_exists('vendor/autoload.php')) {
    require_once 'vendor/autoload.php';
}
require_once 'inc/class-loader.php';

$loader = new Wisdom\Loader(true);
$loader->run();
