<?php
	
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 30-Apr-19
	 * Time: 2:05 PM
	 */
	class Controller {
		
		public $model;
		
		public function createView( $view ) {
			require_once( "./app/Views/" . $view . '.php' );
		}
		
		public function __construct() {
			$modelName = str_replace('Controller', '', get_class( $this ));
			$this->model = new $modelName();
		}
		
		/**
		 * Get the url and parse it under the
		 * domain/controller/method?params logic
		 */
		public function index() {
			
			$url           = substr( $_SERVER['REQUEST_URI'], 1 );
			$requestParams = explode( '/', $url );
			$controller    = $requestParams[0];

			// If the URL has a bad controller and more than 2 params redirect to 404 page;
			if(empty($controller) && count($requestParams) > 1){
				require_once( './app/Views/RouteNotFound.php' );
				die();
			}
			
			/* If no controller is passed in the url, load home page */
			if ( empty( $controller ) ) {
				$homepage = new HomeController();
				$homepage->homepage();
				die();
			}
			
			/* If a controller is passed in the url, but no method is given, load view*/
			if ( count( $requestParams ) == 1 ) {
				$view = ucfirst( $requestParams[0] );
				require_once( './app/Views/' . $view . '.php' );
				die();
			}
			
			/* If the url doesn't respect domain/controller/method?params logic, load 404 view*/
			if ( count( $requestParams ) > 2 ) {
				require_once( './app/Views/RouteNotFound.php' );
				die();
			}
			
			/* Get the method passed in the url */
			$requestAux = explode( '?', $requestParams[1] );
			$method     = $requestAux[0];
			
			/* Check if params are passed through url */
			if ( isset( $requestAux[1] ) ) {
				$params = $requestAux[1];
			}
			
			/* Create new instance of the controller given through url */
			$auxController = ucfirst( $controller ) . 'Controller';
			$appController = new $auxController();
			
			/*
			 *
			 * If method isset and exists in the controller
			 * call the method ( with params optionally),
			 * else render the view
			 *
			 * */
			if ( isset( $method ) && ! empty( $method ) && method_exists( $appController, $method ) ) {
				if ( isset( $params ) && ! empty( $params ) ) {
					$appController->$method( $params );
				} else {
					$appController->$method();
				}
				
			} else {
				$appController->createView( $controller );
			}
			
		}
		
		public function loadView( $view, $data = []) {
			require_once('./app/Views/' . lcfirst($view) . '.php');
		}
		
	}
