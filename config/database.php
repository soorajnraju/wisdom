<?php

defined('HOME') or exit('No direct access is not allowed');

/**
 * Database configuration and instantiation
 */
$this->db = new MysqliDb('localhost', 'root', 'root', 'test');
