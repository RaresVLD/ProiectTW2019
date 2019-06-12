<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 30-Apr-19
	 * Time: 1:57 PM
	 */
	
	class Route {
		
		public static $routes = array();
		
		public static function set( $route, $function ) {
			
			self::$routes[] = $route;
			
			$url = explode('?', $_SERVER['REQUEST_URI']);
			$url[0] = substr($url[0],1);
			$urlController = explode('/', $url[0]);
			
			if( $urlController[0] == $route){
				$function->__invoke();
			}
			
		}
	}
