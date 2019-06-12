<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 30-Apr-19
	 * Time: 1:51 PM
	 */

	Route::set('', function(){
		$homeController = new HomeController();
		$homeController->index();
	});

	Route::set( 'faq', function () {
		$faqController = new FaqController();
		$faqController->index();
	} );
	
	Route::set( 'anunturi', function () {
		$anunturiController = new AnunturiController();
		$anunturiController->index();
	} );
	
	Route::set( 'inconveniente', function () {
		$inconvenienteController = new InconvenienteController();
		$inconvenienteController->index();
	} );
	
	Route::set( 'detaliitren', function () {
		$detaliitrenController = new DetaliiTrenController();
		$detaliitrenController->index();
	} );
	
	Route::set( 'calatorii', function () {
		$calatoriiController = new CalatoriiController();
		$calatoriiController->index();
	} );
	
	Route::set( 'admin', function(){
		session_start();
		$adminController = new AdminController();
		$adminController->login();
	});
