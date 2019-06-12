<?php
	
	require_once( '../Classes/Database.php' );
	
	Database::connect();
	
	$sql = "CREATE TABLE city_map (
id INT AUTO_INCREMENT PRIMARY KEY,
 city_name VARCHAR(255) NOT NULL ,
     id_city int NOT NULL)
           ";
	
	Database::installerQuery( $sql );
