<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 30-Apr-19
	 * Time: 1:46 PM
	 */
	
	require_once( 'Routes.php' );
	
	$url    = explode( '?', $_SERVER['REQUEST_URI'] );
	$url[0] = substr( $url[0], 1 );
	$urlController = explode('/', $url[0]);
	if(!in_array($urlController[0], Route::$routes)){
		require_once ('./app/Views/RouteNotFound.php');
	}
	
	function __autoload( $class_name ) {
		if ( file_exists( './app/Classes/' . $class_name . '.php' ) ) {
			require_once './app/Classes/' . $class_name . '.php';
		} else if ( file_exists( './app/Controllers/' . $class_name . '.php' ) ) {
			require_once './app/Controllers/' . $class_name . '.php';
		} else if ( file_exists('./app/Models/' . $class_name . '.php')){
			require_once './app/Models/' . $class_name . '.php';
		} else if ( file_exists( './app/Controllers/admin/' . $class_name . '.php' ) ) {
			require_once './app/Controllers/admin/' . $class_name . '.php';
		}
	}
