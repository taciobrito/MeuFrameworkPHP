<?php
	session_start();
	
	require_once('app/config/constantes.php');
	require_once('system/system.php');
	require_once('system/controller.php');
	require_once('system/model.php');

	function __autoload( $file ) {
		if ( file_exists(MODEL . $file . '.php') ){
			require_once(MODEL . $file . '.php');
		} else if ( file_exists(HELPERS . $file . '.php')){
			require_once(HELPERS . $file . '.php');
		} else {
			die('Model or Helper not found!');
		}
	}

	try {
 		$start = new System;
		$start->run();
	} catch (Exception $e) {
	 	echo "Error! " . $e->getMessage();
	}