<?php
	
	class DetaliiTren extends Model {
		
		private $XMLUrl = "http://data.gov.ro/dataset/c4f71dbb-de39-49b2-b697-5b60a5f299a2/resource/66121dd3-9cb0-4eb5-814e-9b5709d6ac06/download/mers-trensntfc2018-2019.xml";
		
		public function getTrainDetails( $number ) {
			$search = "SELECT * from trenuri_cache where numar ='" . $number . "'";
			$check  = $this->query( $search );
			if ( $check ) {
				return json_encode( $check );
			} else {
				$url = $this->XMLUrl;
				$xml = simplexml_load_file( $url ) or die( "Error: Cannot create object" );
				$trenuri = $xml->children()[0]->Mt->Trenuri;
				foreach ( $trenuri->children() as $trains ) {
					
					if ( $trains['Numar'] == $number ) {
						$insert = "INSERT INTO trenuri_cache
                    (categorietren, kmcum, lungime, numar, operator, proprietar, putere, rang, servicii, tonaj)
                    VALUES ( '" . $trains['CategorieTren'] . "'
                    , '" . $trains['KmCum'] . "'
                    , '" . $trains['Lungime'] . "'
                    , '" . $trains['Numar'] . "'
                    ,'" . $trains['Operator'] . "'
                    , '" . $trains['Proprietar'] . "'
                    , '" . $trains['Putere'] . "'
                    , '" . $trains['Rang'] . "'
                    , '" . $trains['Servicii'] . "'
                    , '" . $trains['Tonaj'] . "')";
						$this->query( $insert );
						$tren=$trains->attributes();
						return json_encode( $tren );
					}
				}
				
				return null;
				
			}
			
			
		}
	}

