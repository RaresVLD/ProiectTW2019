<?php
	
	require_once( '../Classes/Database.php' );
	
	Database::connect();
	
	$sql = "CREATE OR REPLACE TABLE inconveniente (
id INT AUTO_INCREMENT PRIMARY KEY,
 nume VARCHAR(255) NOT NULL ,
  prenume VARCHAR(255) NOT NULL ,
   mail VARCHAR(255) NOT NULL ,
    tara VARCHAR(255) NOT NULL ,
     plangere VARCHAR(255) NOT NULL)
           ";
	
	Database::installerQuery( $sql );
