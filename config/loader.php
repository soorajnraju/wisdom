<?php

/**
 * Load custom php files
 * Use absolute file path using conctant HOME 
 */
$this->files = [
    'list' => [
        //HOME.'lib/hello.php',
        HOME . '/config/site_config.php',
        HOME . '/inc/functions/global_functions.php',
        HOME . '/config/database.php'
    ]
];
