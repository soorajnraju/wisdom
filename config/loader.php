<?php

defined('HOME') or exit('No direct access is not allowed');

/**
 * Load custom php files
 * Use absolute file path using constant HOME 
 */
$this->files = [
    'list' => [
        HOME . 'config/site.php',
        HOME . 'inc/functions/global_functions.php',
        HOME . 'config/database.php',
        //load your code over here, dont change the existing loading order
    ]
];
