<?php

namespace Wisdom\Module;

class Http{
	
	function __construct(){
		$this->run();
	}
	
	function get(){
		if(isset($_GET['page'])){
			$page = HOME.'views/'.$_GET['page'];
			$ext = ['.php', '.html'];
			if(file_exists($page.$ext[0])){
				$page = $page.$ext[0];
			}elseif(file_exists($page.$ext[1])){
				$page = $page.$ext[1];
			}else{
				$page = HOME.'views/404.php';
			}
			include $page;
		}else{
			$page = HOME.'views/index';
			$ext = ['.php', '.html'];
			if(file_exists($page.$ext[0])){
				$page = $page.$ext[0];
			}elseif(file_exists($page.$ext[1])){
				$page = $page.$ext[1];
			}
		}
		include $page;
	}
	
	function post(){
		print_r($_POST);
	}
	
	function run(){
		if(isset($_GET)){
			$this->get();
		}elseif(isset($_POST)){
			$this->post();
		}
	}

}