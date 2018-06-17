<?php

is_direct();

/**
 * 
 * @param string $data
 * @return string
 */
function filter_user_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * To prevent direct access.
 */
function is_direct(){
    defined('HOME') or exit('No direct access is not allowed');
}
