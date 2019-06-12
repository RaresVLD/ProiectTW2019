<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 15-May-19
	 * Time: 11:39 PM
	 */
	
	class Inconveniente extends Model {
		
		public function insertReportToDatabase( $params ) {
			
			$insert = "INSERT INTO inconveniente
                    (nume,prenume,mail,tara,plangere)
                    VALUES ( '" . $params['nume'] . "'
                    , '" . $params['prenume'] . "'
                    , '" . $params['mail'] . "'
                    , '" . $params['tara'] . "'
                    ,'" . $params['plangere'] . "')";
			$this->query( $insert );
			
			return null;
			
		}
	}
