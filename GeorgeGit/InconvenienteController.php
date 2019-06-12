<?php
	
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 30-Apr-19
	 * Time: 2:20 PM
	 */
	class InconvenienteController extends Controller {
		
		public function saveReport() {
			$vars = ( urldecode( base64_decode( $_GET['data'] ) ) );
			//TODO verify params
			$params       = explode( '&&&', $vars );
			$paramsToSend = [
				'nume'     => $params[0],
				'prenume'  => $params[1],
				'mail'     => $params[2],
				'tara'     => $params[3],
				'plangere' => $params[4]
			];
			
			$this->model->insertReportToDatabase( $paramsToSend );
			
			header( 'Location: http://localhost:8001' );
		}
	}

