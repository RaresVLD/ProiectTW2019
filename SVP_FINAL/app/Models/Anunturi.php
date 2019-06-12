<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 11-May-19
	 * Time: 12:43 AM
	 */
	
	class Anunturi extends Model {
		
		public function getAllAnnouncement(){
			$result = $this->query('SELECT * FROM anunturi order by created_at DESC;');
			
			return $result;
		}
		
        public function getFiveAnnouncement(){
            $result = $this->query('SELECT * FROM anunturi ORDER BY created_at DESC LIMIT 5;');

            return $result;
        }
		
	}
