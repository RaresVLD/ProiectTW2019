<?php
	
	require_once( '../Classes/Database.php' );
	
	Database::connect();
	
	$sql = "CREATE OR REPLACE TABLE city_map (
 id INT AUTO_INCREMENT PRIMARY KEY,
 id_city_1 int NOT NULL,
 id_city_2 int NOT NULL,
 cost int NOT NULL
     )";
	
	Database::installerQuery( $sql );
