<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 05-Jun-19
	 * Time: 8:57 PM
	 */
	
	class CalatoriiController extends Controller {
		
		public function setTripData() {
			$cities = $this->model->getAllCities();
			$data   = [
				'cities' => $cities
			];
			
			$this->loadView( 'Calatorii', $data );
		}
		
		/*public function getRoute() {
			if ( isset( $_GET['plecare'], $_GET['sosire'] ) ) {
				if ( ! isset( $_GET['escale'] ) ) {
					ini_set( 'memory_limit', '2048M' );
					ini_set( 'max_execution_time', 0 );
					//					$startStation = $this->model->getCityCode( $_GET['plecare'] );
					//					$endStation   = $this->model->getCityCode( $_GET['sosire'] );
					
					$result = $this->getMinWay( $this->model->getStationsMatrix(), 60921, $this->model->getStationsNumber() );
					
					//$test = $this->getPath( $result, 60921, 10017);
					exit;
					
					echo "<PRE>";
					print_r( $result );
					exit;
					
				}
			}
		}*/
		
		/*public function getMinWay( $map, $startpoint, $stations ) {
			$MAXDIST   = 999999; // ne luam o distanta babana
			$distances = array(); // aici ne vom pune distantele minime din punctul de start
			$queue     = array(); // coada de vizitat
			$previous  = array(); // vom nota pe indexul "i" unde am fost inainte de i pentru a reconstituii drumul
			
			for ( $j = 0; $j <= $stations; $j ++ ) {
				echo $map[60921][ $j ] . "<br>";
			}
			exit;
			for ( $i = 1; $i <= $stations; $i ++ ) {
				$distances[ $i ] = $MAXDIST;
				$visited[ $i ]   = 0;
			}
			
			$distances[ $startpoint ] = 0; // notam distanta de la punctul de start la punctul de start cu 0 FUCK LOGIC
			
			array_push( $queue, $startpoint ); // bagam punctul de start in coada
			
			while( ! empty( $queue ) ) {
				for ( $i = 1; $i <= $stations; $i ++ ) {
					if ( $visited[ $i ] == 0 ) {
						if ( $distances[ $queue[0] ] + $map[ $queue[0] ][ $i ] < $distances[ $i ] && $map[ $queue[0] ][ $i ] > 0 ) {
							$distances[ $i ] = $distances[ $queue[0] ] + $map[ $queue[0] ][ $i ];
							$previous[ $i ]  = $queue[0];
							array_push( $queue, $i );
						}
					}
				}
				array_shift( $queue );
			}
			//
			//			for ( $i = 1; $i <= $stations; $i ++ ) {
			//				echo $distances[ $i ] . " ";
			//			}
			//
			//			echo "<br>";
			
			$results = array( "distances" => $distances, "previous" => $previous );
			
			return $results;
			
		}*/
		
		/*public function getPath( $results, $startpoint, $endpoint ) {
			$previous = $results["previous"];
			$current  = $endpoint;
			$my_road  = array();
			array_push( $my_road, $endpoint );
			while( $previous[ $current ] != $startpoint ) {
				array_push( $my_road, $previous[ $current ] );
				$current = $previous[ $current ];
			}
			array_push( $my_road, $startpoint );
			$my_road  = array_reverse( $my_road );
			$toReturn = [];
			foreach ( $my_road as $road ) {
				$toReturn[] = $road;
			}
			
			return $toReturn;
		}*/
		
		public function mapTest() {
			//			$url = "http://data.gov.ro/dataset/c4f71dbb-de39-49b2-b697-5b60a5f299a2/resource/66121dd3-9cb0-4eb5-814e-9b5709d6ac06/download/mers-trensntfc2018-2019.xml";
			//			$xml = simplexml_load_file( $url ) or die( "Error: Cannot create object" );
			//			$trenuri = $xml->children()[0]->Mt->Trenuri;
			//
			//			foreach ( $trenuri->children() as $tren ) {
			//				foreach ( $tren->children() as $trase ) {
			//
			//					foreach ( $trase->children() as $trasa ) {
			//
			//						foreach ( $trasa->children() as $element_trasa ) {
			//							$map[ trim( $element_trasa['DenStaDestinatie'] ) ] = trim( $element_trasa['CodStaDestinatie'] );
			//							$map[ trim( $element_trasa['DenStaOrigine'] ) ]    = trim( $element_trasa['CodStaOrigine'] );
			//						}
			//					}
			//				}
			//			}
			//			echo '<PRE>';
			////			print_r( $map );
			////			print_r( count( $map ) );
			//
			//			$db = new Database();
			//			foreach($map as $city => $id){
			//				$sql = "INSERT INTO CITY_CODES (ID_CITY, NAME) VALUES ($id, '$city');";
			//				$db->queryInsert($sql);
			//			}
			
			
			//			$url = "http://data.gov.ro/dataset/c4f71dbb-de39-49b2-b697-5b60a5f299a2/resource/66121dd3-9cb0-4eb5-814e-9b5709d6ac06/download/mers-trensntfc2018-2019.xml";
			//			$xml = simplexml_load_file( $url ) or die( "Error: Cannot create object" );
			//			$trenuri = $xml->children()[0]->Mt->Trenuri;
			//			$trainz  = array();
			//			foreach ( $trenuri->children() as $tren ) {
			//				$nr_tren = $tren['Numar'];
			//				foreach ( $tren->children() as $trase ) {
			//
			//					foreach ( $trase->children() as $trasa ) {
			//
			//						foreach ( $trasa->children() as $element_trasa ) {
			//							$elem = array(
			//								'Numar'      => trim( $nr_tren ),
			//								'Origine'    => trim( $element_trasa['CodStaOrigine'] ),
			//								'Destinatie' => trim( $element_trasa['CodStaDest'] ),
			//								'Timp'       => trim( $element_trasa['OraS'] - $element_trasa['OraP'] ),
			//								'Sosire'     => trim( $element_trasa['OraS'] ),
			//								'Plecare'    => trim( $element_trasa['OraP'] )
			//							);
			//
			//							array_push( $trainz, $elem );
			//						}
			//					}
			//				}
			//			}
			//			echo '<PRE>';
			//			print_r( $trainz );
			//			exit;
			//
			//			ini_set( 'max_execution_time', 0 );
			//			$db = new Database();
			//			foreach ( $trainz as $train ) {
			//				$origine = $train['Origine'];
			//				$destinatie = $train['Destinatie'];
			//				$timp = $train['Timp'];
			//				$plecare = $train['Plecare'];
			//				$sosire = $train['Sosire'];
			//				$tren = $train['Numar'];
			//				$sql = "INSERT INTO CITY_MAP (id_city_1, id_city_2, cost, start_time, end_time , train) values ($origine, $destinatie , $timp , $plecare , $sosire, $tren);";
			//				$db->queryInsert( $sql );
			//			}
			//
			
		}
		
		public function getShortestPath() {
			if ( isset( $_GET['plecare'], $_GET['sosire'] ) ) {
				if ( ! isset( $_GET['escale'] ) ) {
					
					$startStation = $this->model->getCityCode( $_GET['plecare'] );
					$endStation   = $this->model->getCityCode( $_GET['sosire'] );
					
					$routes = $this->model->getTrainRoutes();
					require( "./app/Controllers/ShortestPath/Dijkstra.php" );
					
					$graph = new Graph();
					foreach ( $routes as $route ) {
						$graph->addedge( $route['Origine'], $route['Destinatie'], $route['Timp'] );
					}
					list( $distances, $prev ) = $graph->paths_from( $startStation );
					
					$path = $graph->paths_to( $prev, $endStation );
					
					$costs     = $this->model->getPathCosts( $path );
					$startTime = number_format( (float) $costs['start_time'] / 3600, 2, '.', '' );
					$totalTime = 0;
					foreach ( $costs['cost'] as $time ) {
						$totalTime += $time;
					}
					$totalTime = number_format( (float) $totalTime / 3600, 2, '.', '' );
					
					$cities = [];
					foreach ( $path as $road ) {
						$cities[] = $this->model->getCityName( $road );
					}
					
					$this->loadView( 'Calatorie', [
						'cities'     => $cities,
						'cost'       => $totalTime,
						'start_time' => $startTime
					] );
				} else {
					$startStation = $this->model->getCityCode( $_GET['plecare'] );
					$endStation   = $this->model->getCityCode( $_GET['sosire'] );
					$escale       = $this->model->getScaleCities( $_GET['escale'] );
					
					
					$routes = $this->model->getTrainRoutes();
					require( "./app/Controllers/ShortestPath/Dijkstra.php" );
					
					$graph = new Graph();
					foreach ( $routes as $route ) {
						$graph->addedge( $route['Origine'], $route['Destinatie'], $route['Timp'] );
					}
					
					if ( count( $escale ) == 1 ) {
						$bigRoute   = [];
						$bigRoute[] = $this->getPathFromCityToCity( $startStation, $escale[0], $graph );
						$bigRoute[] = $this->getPathFromCityToCity( $escale[0], $endStation, $graph );
					} else {
						$bigRoute  = [];
						$toParse   = [];
						$toParse[] = $startStation;
						foreach ( $escale as $escala ) {
							$toParse[] = $escala;
						}
						$toParse[] = $endStation;
						for ( $i = 0; $i < count( $toParse ) - 1; $i ++ ) {
							$bigRoute[] = $this->getPathFromCityToCity( $toParse[ $i ], $toParse[ $i + 1 ], $graph );
						}
						$finalPath = [];
						foreach ( $bigRoute as $route ) {
							foreach ( $route as $station ) {
								$finalPath[] = $station;
							}
						}
						
						$finalPath = array_values( array_unique( $finalPath ) );
						$costs     = $this->model->getPathCosts( $finalPath );
						$startTime = number_format( (float) $costs['start_time'] / 3600, 2, '.', '' );
						$totalTime = 0;
						foreach ( $costs['cost'] as $time ) {
							$totalTime += $time;
						}
						$totalTime = number_format( (float) $totalTime / 3600, 2, '.', '' );
						
						$cities = [];
						foreach ( $finalPath as $road ) {
							$cities[] = $this->model->getCityName( $road );
						}
						
						$this->loadView( 'Calatorie', [
							'cities'     => $cities,
							'cost'       => $totalTime,
							'start_time' => $startTime
						] );
					}
				}
			}
		}
		
		public function getPathFromCityToCity( $city1, $city2, $graph ) {
			list( $distances, $prev ) = $graph->paths_from( $city1 );
			
			$path = $graph->paths_to( $prev, $city2 );
			
			return $path;
		}
		
		public function compareTrips() {
			if ( isset( $_GET['plecare'] ) && isset( $_GET['sosire'] ) && isset( $_GET['an'] ) ) {
				
				$startStation = $this->model->getCityCode( $_GET['plecare'] );
				$endStation   = $this->model->getCityCode( $_GET['sosire'] );
				$year         = $_GET['an'];
				$routes       = $this->model->getTrainRoutesByYear( $year );
				require( "./app/Controllers/ShortestPath/Dijkstra.php" );
				
				$graph = new Graph();
				foreach ( $routes as $route ) {
					$graph->addedge( $route['Origine'], $route['Destinatie'], $route['Timp'] );
				}
				list( $distances, $prev ) = $graph->paths_from( $startStation );
				
				$path = $graph->paths_to( $prev, $endStation );
				
				$costs     = $this->model->getPathCosts( $path );
				$startTime = number_format( (float) $costs['start_time'] / 3600, 2, '.', '' );
				$totalTime = 0;
				foreach ( $costs['cost'] as $time ) {
					$totalTime += $time;
				}
				$totalTime = number_format( (float) $totalTime / 3600, 2, '.', '' );
				
				$cities = [];
				foreach ( $path as $road ) {
					$cities[] = $this->model->getCityName( $road );
				}
				
				$ruta1 = $this->getFirstTrip();
				$ruta2 = [
					'cities'     => $cities,
					'cost'       => $totalTime,
					'start_time' => $startTime
				];
				
				$this->loadView( 'ComparareRute', [
					'ruta1' => $ruta1,
					'ruta2' => $ruta2
				] );
			}
		}
		
		public function getFirstTrip() {
			$startStation = $this->model->getCityCode( $_GET['plecare'] );
			$endStation   = $this->model->getCityCode( $_GET['sosire'] );
			$routes       = $this->model->getTrainRoutes();
			
			$graph = new Graph();
			foreach ( $routes as $route ) {
				$graph->addedge( $route['Origine'], $route['Destinatie'], $route['Timp'] );
			}
			list( $distances, $prev ) = $graph->paths_from( $startStation );
			
			$path = $graph->paths_to( $prev, $endStation );
			
			$costs     = $this->model->getPathCosts( $path );
			$startTime = number_format( (float) $costs['start_time'] / 3600, 2, '.', '' );
			$totalTime = 0;
			foreach ( $costs['cost'] as $time ) {
				$totalTime += $time;
			}
			$totalTime = number_format( (float) $totalTime / 3600, 2, '.', '' );
			
			$cities = [];
			foreach ( $path as $road ) {
				$cities[] = $this->model->getCityName( $road );
			}

			return [
				'cities'     => $cities,
				'cost'       => $totalTime,
				'start_time' => $startTime
			];
		}
	}
