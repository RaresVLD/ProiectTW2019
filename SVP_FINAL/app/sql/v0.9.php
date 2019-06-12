<?php
	
	require_once( '../Classes/Database.php' );
	
	Database::connect();
	
	$sql = "CREATE OR REPLACE TABLE city_codes (
 id INT AUTO_INCREMENT PRIMARY KEY,
 id_city int NOT NULL,
 name varchar(255) NOT NULL
     )";
	
	Database::installerQuery( $sql );
