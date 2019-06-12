<?php

require_once ('../Classes/Database.php');

Database::connect();

$sql = "CREATE TABLE ADMIN (
id INT AUTO_INCREMENT PRIMARY KEY,
username TEXT NOT NULL,
password TEXT NOT NULL
)";

Database::installerQuery( $sql );
