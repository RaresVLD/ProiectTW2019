<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 12-May-19
	 * Time: 9:59 PM
	 */
	
	require_once ('../Classes/Database.php');
	
	Database::connect();
	
	$sql = "CREATE TABLE ANUNTURI (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
content TEXT NOT NULL
)";
	
	Database::installerQuery( $sql );
