<?php
	require_once('app/config/constantes.php');

	/*function __autoload( $file ) {
		if ( file_exists(MODEL . $file . '.php') ){
			require_once(MODEL . $file . '.php');
		} else if ( file_exists(HELPERS . $file . '.php')){
			require_once(HELPERS . $file . '.php');
		} else {
			die('Model or Helper not found!');
		}
	}*/

	require __DIR__ . "/app/config/ConfigPath.php";

	ConfigPath::define("BASEPATH",__DIR__);
	ConfigPath::define("BASEPATHSYSTEM",BASEPATH . DIRECTORY_SEPARATOR . ConfigPath::$system);
	ConfigPath::define("APPPATH",BASEPATH . DIRECTORY_SEPARATOR . ConfigPath::$application);

	require ConfigPath::barderInDirectories(BASEPATHSYSTEM . '/Autoloader/Autoload.php');

	$auto = new Autoload();
	$auto->register();

	try {
		$start = new \System\System;
		$start->run();
	} catch (\Exception $e) {
	 	require_once VIEW . 'errors/404.php';
	 	// echo "Error! " . $e->getMessage();
	}