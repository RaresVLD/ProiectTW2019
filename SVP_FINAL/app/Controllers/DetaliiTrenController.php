<?php
	
	class DetaliiTrenController extends Controller {
		
		public function showTrainDetails() {
			if ( isset( $_GET['train'] ) ) {
				$result = $this->model->getTrainDetails( $_GET['train'] );
				if ( $result != null ) {
					$result = json_decode( $result ,true);
					$ret        = array(
						'CategorieTren' => $result[0]['categorietren'],
						'KmCum'         => $result[0]['kmcum'],
						'Lungime'       => $result[0]['lungime'],
						'Numar'         => $result[0]['numar'],
						'Operator'      => $result[0]['operator'],
						'Proprietar'    => $result[0]['proprietar'],
						'Putere'        => $result[0]['putere'],
						'Rang'          => $result[0]['rang'],
						'Servicii'      => $result[0]['servicii'],
						'Tonaj'         => $result[0]['tonaj']
					);
					$this->loadView( 'ArataDetaliiTren', $ret );
				} else {
					$this->loadView( 'ArataDetaliiTren', ['error' => 'Train not found'] );
				}
				
			}
		}
	}
