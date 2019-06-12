<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 30-Apr-19
	 * Time: 2:20 PM
	 */
	
	class AnunturiController extends Controller {
		
		public function showAnnouncements() {
			$result = $this->model->getAllAnnouncement();
			
			$toEncode = [];
			foreach ( $result as $item ) {
				$toEncode[] = array(
					'title'      => $item['title'],
					'content'    => $item['content'],
					'created_at' => $item['created_at']
				);
			}
			
			$this->loadView( 'Anunturi', [ 'result' => $toEncode ] );
			
		}
		
		public function showFiveAnnouncements() {
			$result   = $this->model->getFiveAnnouncement();
			$toEncode = [];
			foreach ( $result as $item ) {
				$toEncode[] = array(
					'title'      => $item['title'],
					'content'    => $item['content'],
					'created_at' => $item['created_at']
				);
			}
			
			return $toEncode;
		}
		
	}
