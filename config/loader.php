<?php
/**
* Load custom php files(modules)
* Use absolute file path(HOME)
* @$this: Loader instance
* @modules: [] 
*/

$this->files = [
	'list' => [
		//HOME.'lib/hello.php',
		HOME.'/config/site_config.php',
		HOME.'/inc/functions/global_functions.php'
	]
];