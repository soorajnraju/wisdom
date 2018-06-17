<?php
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
