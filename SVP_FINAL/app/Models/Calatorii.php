<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 05-Jun-19
	 * Time: 8:57 PM
	 */
	
	class Calatorii extends Model {
		
		public function getCityCode( $cityName ) {
			return $this->query( "SELECT ID_CITY FROM CITY_CODES WHERE NAME LIKE '$cityName';" )[0]['ID_CITY'];
		}
		
		public function getTrainRoutes() {
			ini_set( 'max_execution_time', 0 );
			$url = "http://data.gov.ro/dataset/c4f71dbb-de39-49b2-b697-5b60a5f299a2/resource/66121dd3-9cb0-4eb5-814e-9b5709d6ac06/download/mers-trensntfc2018-2019.xml";
			$xml = simplexml_load_file( $url ) or die( "Error: Cannot create object" );
			$trenuri = $xml->children()[0]->Mt->Trenuri;
			$trainz  = array();
			foreach ( $trenuri->children() as $tren ) {
				$nr_tren = $tren['Numar'];
				foreach ( $tren->children() as $trase ) {
					
					foreach ( $trase->children() as $trasa ) {
						
						foreach ( $trasa->children() as $element_trasa ) {
							if ( empty( trim( $element_trasa['CodStaOrigine'] ) ) || empty( trim( $element_trasa['CodStaDest'] )
							                                                                || empty( trim( $element_trasa['OraS'] ) ) || empty( trim( $element_trasa['OraP'] ) ) || trim( $element_trasa['OraS'] - $element_trasa['OraP'] ) == 0 ) ) {
								//
							} else {
								$elem = array(
									'Numar'      => trim( $nr_tren ),
									'Origine'    => trim( $element_trasa['CodStaOrigine'] ),
									'Destinatie' => trim( $element_trasa['CodStaDest'] ),
									'Timp'       => trim( $element_trasa['OraS'] - $element_trasa['OraP'] ),
									'Sosire'     => trim( $element_trasa['OraS'] ),
									'Plecare'    => trim( $element_trasa['OraP'] )
								);
								
								array_push( $trainz, $elem );
							}
						}
					}
				}
			}
			
			return $trainz;
		}
		
		public function getCityName( $id ) {
			return $this->query( "SELECT NAME FROM CITY_CODES WHERE ID_CITY = " . $id . ";" );
		}
		
		public function getAllCities() {
			$result = $this->query( "SELECT ID_CITY, NAME FROM CITY_CODES" );
			
			$toReturn = [];
			foreach ( $result as $city ) {
				$toReturn[] = [
					'code' => $city['ID_CITY'],
					'name' => $city['NAME']
				];
			}
			
			return $toReturn;
		}
		
		public function getCityId( $city ) {
			return $this->query( "SELECT ID_CITY FROM CityMap WHERE CITY_NAME LIKE $city;" );
		}
		
		public function getPathCosts( $path ) {
			$startTime = $this->getStartCost($path[0], $path[1]);
			$cost = [];
			for ( $i = 0; $i < count( $path ) - 1; $i ++ ) {
				$sql = "SELECT COST FROM CITY_MAP WHERE ID_CITY_1 = $path[$i] AND ID_CITY_2 = " . $path[ $i + 1 ] . " ORDER BY COST ASC LIMIT 1;";
				$cost[] = $this->query( $sql )[0]['COST'] ;
			}
			
			$map = [
				'start_time' => $startTime,
				'cost' => $cost
			];
			return $map ;
		}
		
		public function getStartCost( $startPoint, $firstStation ) {
			$sql = "SELECT start_time FROM CITY_MAP WHERE ID_CITY_1 = $startPoint AND ID_CITY_2 = $firstStation ORDER BY COST ASC LIMIT 1";
			return $this->query($sql)[0]['start_time'];
		}
		
		public function getScaleCities( $cities ) {
			$cities = explode(',', $cities);
			$toReturn = [];
			foreach($cities as $city){
				$toReturn[] = $this->getCityCode($city);
			}
			return $toReturn;
		}
		
		public function getTrainRoutesByYear( $year ) {
			ini_set( 'max_execution_time', 0 );
			
			if($year == 2016){
				$url = 'http://data.gov.ro/dataset/c4f71dbb-de39-49b2-b697-5b60a5f299a2/resource/ef848b2c-f80f-47ba-a799-bd3e2e05f6e9/download/mers-trensntfc2016-2017.xml';
			}else if($year == 2017){
				$url = 'http://data.gov.ro/dataset/c4f71dbb-de39-49b2-b697-5b60a5f299a2/resource/6025f0b7-e301-4d6f-a53f-0170ee95b197/download/mers-trensntfc2017-2018.xml';
			}
			
			$xml = simplexml_load_file( $url ) or die( "Error: Cannot create object" );
			$trenuri = $xml->children()[0]->Mt->Trenuri;
			$trainz  = array();
			foreach ( $trenuri->children() as $tren ) {
				$nr_tren = $tren['Numar'];
				foreach ( $tren->children() as $trase ) {
					
					foreach ( $trase->children() as $trasa ) {
						
						foreach ( $trasa->children() as $element_trasa ) {
							if ( empty( trim( $element_trasa['CodStaOrigine'] ) ) || empty( trim( $element_trasa['CodStaDest'] )
							                                                                || empty( trim( $element_trasa['OraS'] ) ) || empty( trim( $element_trasa['OraP'] ) ) || trim( $element_trasa['OraS'] - $element_trasa['OraP'] ) == 0 ) ) {
								//
							} else {
								$elem = array(
									'Numar'      => trim( $nr_tren ),
									'Origine'    => trim( $element_trasa['CodStaOrigine'] ),
									'Destinatie' => trim( $element_trasa['CodStaDest'] ),
									'Timp'       => trim( $element_trasa['OraS'] - $element_trasa['OraP'] ),
									'Sosire'     => trim( $element_trasa['OraS'] ),
									'Plecare'    => trim( $element_trasa['OraP'] )
								);
								
								array_push( $trainz, $elem );
							}
						}
					}
				}
			}
			
			return $trainz;
		}
		
		/*public function getStationsMatrix() {
			//			error_reporting( E_ALL ^ E_NOTICE );
			$cityMap = $this->insertCityIdToArray();
			$trains  = $this->getRoutesDetails();
			$cities  = $this->query( 'SELECT count(*) FROM CITY_CODES' )[0]['count(*)'];
			for ( $i = 0; $i < $cities + 1; $i ++ ) {
				for ( $j = 0; $j < $cities + 1; $j ++ ) {
					if ( ! isset( $map[ $i ][ $j ] ) ) {
						$map[ $i ][ $j ] = 0;
					}
				}
			}
			$contor = 0;
			for ( $i = 0; $i < count( $trains ); $i ++ ) {
				if ( isset( $cityMap[ $trains[ $i ]['Origine'] ] ) && isset( $cityMap[ $trains[ $i ]['Destinatie'] ] ) && isset( $trains[ $i ]['Timp'] ) ) {
					$id_city_1                       = $cityMap[ $trains[ $i ]['Origine'] ];
					$id_city_2                       = $cityMap[ $trains[ $i ]['Destinatie'] ];
					$cost                            = $trains[ $i ]['Timp'];
					$map[ $id_city_1 ][ $id_city_2 ] = $cost;
				}else{
					$contor++;
				}
			}
			echo "<PRE>";
			print_r($map[$cityMap[60921]]);
			die();
			for ( $i = 0; $i < count( $trains ) - $contor; $i ++ ) {
				print_r( $map[ $cityMap[60921] ][ $i ] );
			}
			die();
			
			return $map;
		}*/
		
		/*public function getStationsNumber() {
			return $this->query( 'SELECT count(*) FROM CITY_CODES;' )[0]['count(*)'];
		}*/
		
		/*public function getRoutesDetails() {
			$url = "http://data.gov.ro/dataset/c4f71dbb-de39-49b2-b697-5b60a5f299a2/resource/66121dd3-9cb0-4eb5-814e-9b5709d6ac06/download/mers-trensntfc2018-2019.xml";
			$xml = simplexml_load_file( $url ) or die( "Error: Cannot create object" );
			$trenuri = $xml->children()[0]->Mt->Trenuri;
			$trainz  = array();
			foreach ( $trenuri->children() as $tren ) {
				$nr_tren = $tren['Numar'];
				foreach ( $tren->children() as $trase ) {
					
					foreach ( $trase->children() as $trasa ) {
						
						foreach ( $trasa->children() as $element_trasa ) {
							$elem = array(
								'Numar'      => trim( $nr_tren ),
								'Origine'    => trim( $element_trasa['CodStaOrigine'] ),
								'Destinatie' => trim( $element_trasa['CodStaDest'] ),
								'Timp'       => trim( $element_trasa['OraS'] - $element_trasa['OraP'] ),
								'Sosire'     => trim( $element_trasa['OraS'] ),
								'Plecare'    => trim( $element_trasa['OraP'] )
							);
							
							array_push( $trainz, $elem );
						}
					}
				}
			}
			
			return $trainz;
		}*/
		
		/*public function insertCityIdToArray() {
			$codes    = $this->query( 'SELECT ID, ID_CITY FROM CITY_CODES' );
			$idsArray = [];
			foreach ( $codes as $city ) {
				$idsArray[ $city['ID_CITY'] ] = $city['ID'];
			}
			
			return $idsArray;
		}*/
		
	}
