<?php

	ob_start();


	// private dir
	define("PRIVATE_PATH", dirname(__FILE__));
	// chain_gang dir (root)
	define("PROJECT_PATH", dirname(PRIVATE_PATH));
	// public dir
	define("PUBLIC_PATH", PROJECT_PATH . '/public');
	// shared dir (header, footer, etc.)
	define("SHARED_PATH", PRIVATE_PATH . '/shared');


	// store end of 'public' index
	$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
	// store path to 'public' end
	$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
	define("WWW_ROOT", $doc_root);


	// contains common handy functions (i.e. redirect, etc.)
	require_once('functions.php');




	// load class definitions manually
	function my_autoload($class) {
		if ( preg_match('/\A\w+\Z/', $class) ) {
			include('classes/' . $class . '.class.php');
		}
	}
	spl_autoload_register('my_autoload');


?>

