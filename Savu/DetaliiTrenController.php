<?php
	
	class DetaliiTrenController extends Controller {
		
		public function showTrainDetails() {
			if ( isset( $_GET['train'] ) ) {
				$result = $this->model->getTrainDetails( $_GET['train'] );
				if($result != null) {
				    $result=json_decode($result);

                    $attributes="@attributes";
                    $ret=array('CategorieTren'=>$result->$attributes->CategorieTren,
                                'KmCum'=>$result->$attributes->KmCum,
                                'Lungime'=>$result->$attributes->Lungime,
                                'Numar'=>$result->$attributes->Numar,
                                'Operator'=>$result->$attributes->Operator,
                                'Proprietar'=>$result->$attributes->Proprietar,
                                'Putere'=>$result->$attributes->Putere,
                                'Rang'=>$result->$attributes->Rang,
                                'Servicii'=>$result->$attributes->Servicii,
                                'Tonaj'=>$result->$attributes->Tonaj);
                    //print_r($ret);
                    $this->loadView('ArataDetaliiTren',$ret);
                } else {

                    $this->loadView('ArataDetaliiTren',"Nu");
                }

			}
		}
	}
