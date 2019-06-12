<?php
	/**
	 * Created by PhpStorm.
	 * User: Rares
	 * Date: 12-May-19
	 * Time: 9:59 PM
	 */
	
	require_once ('../Classes/Database.php');
	
	Database::connect();
	
	$sql = "CREATE TABLE FAQ (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
QUESTION TEXT NOT NULL,
ANSWER TEXT NOT NULL
)";
	
	Database::installerQuery( $sql );
