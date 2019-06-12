<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 06-May-19
	 * Time: 10:55 PM
	 */
	
	class Database {
		
		private static $host     = 'localhost';
		private static $username = 'root';
		private static $pass     = 'svp2019';
		private static $db       = 'svp';
		
		public static function connect() {
			$conn = new mysqli( self::$host,
			                           self::$username,
			                           self::$pass,
			                           self::$db );
			mysqli_set_charset( $conn, 'utf8' );
			return $conn;
		}
		
		public static function installerQuery( $sql ) {
			self::connect()->query($sql);
		}
		
		public function query($sql) {
			$result = self::connect()->query( $sql );

			$return = [];
			if ( $result->num_rows > 0 ) {
				while( $row = $result->fetch_assoc() ) {
					$return[] = $row;
				}
			}
			
			return $return;
		}
		
		public function queryInsert( $sql ) {
			$result = self::connect()->query( $sql );
			return true;
		}
		
	}
