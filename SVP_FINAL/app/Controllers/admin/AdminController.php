<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 31-May-19
	 * Time: 6:54 PM
	 */
	
	class AdminController extends Database {
		
		private $apiCalls = [ 'addAnnouncement', 'addFaq' ];
		
		public function loadView( $view, $data = [] ) {
			require_once( './app/Views/admin/' . lcfirst( $view ) . '.php' );
		}
		
		public function login() {
			
			if ( $_SERVER['REQUEST_URI'] != '/admin/menu' && isset( $_SESSION['login'] ) && $_SESSION['login'] == 1 ) {
				if ( ! $_SERVER['REQUEST_URI'] == '/admin' && ! $_SERVER['REQUEST_URI'] == '/admin/' ) {
					require_once( './app/Views/RouteNotFound.php' );
					die();
				}
				
				$url = explode( '/', $_SERVER['REQUEST_URI'] );
				if ( count( $url ) == 4 ) {
					$method = $url[3];
					if ( in_array( $method, $this->apiCalls ) ) {
						$this->$method();
						exit;
					}
				}
				
				header( 'Location: http://localhost:8001/admin/menu' );
				exit;
			}
			
			if ( $_SERVER['REQUEST_URI'] != '/admin' && ! isset( $_SESSION['login'] ) ) {
				header( 'Location: http://localhost:8001/admin' );
			}
			
			if ( ! isset( $_SESSION['login'] ) ) {
				$this->loadView( 'adminLogin', null );
			} else if ( $_SESSION['login'] == 1 ) {
				$this->menu();
				die();
			}
		}
		
		public function menu() {
			if ( $_SESSION['login'] == false ) {
				header( 'Location: http://localhost:8001/admin' );
			} else {
				$this->loadView( 'adminMenu', null );
			}
			
		}
		
		public function addFaq() {
			if ( isset( $_POST['question'] ) && isset( $_POST['answer'] ) ) {
				$question = $_POST['question'];
				$answer   = $_POST['answer'];
				
				$this->queryInsert( "INSERT INTO FAQ (QUESTION, ANSWER) VALUES ('$question', '$answer');" );
				
				echo json_encode( [
					                    'success' => true,
					                    'message' => 'Inserted!'
				                    ] );
				return;
			}
			
			echo json_encode( [
				                    'success' => false,
				                    'message' => 'Fail!'
			                    ] );
			return;
		}
		
		public function addAnnouncement() {
			if ( isset( $_POST['title'] ) && isset( $_POST['content'] ) ) {
				$title   = $_POST['title'];
				$content = $_POST['content'];
				$date    = date( "Y-m-d h:i:s" );
				
				$this->queryInsert( "INSERT INTO ANUNTURI (title, content, created_at) VALUES ('$title', '$content', '$date');" );
				
				echo json_encode( [
					                    'success' => true,
					                    'message' => 'Inserted!'
				                    ] );
				return;
			}
			
			echo json_encode( [
				                    'success' => false,
				                    'message' => 'Fail!'
			                    ] );
			return;
		}
	}
