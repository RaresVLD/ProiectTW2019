<?php

require_once ('../Classes/Database.php');

Database::connect();

$sql = "CREATE OR REPLACE TABLE trenuri_cache (
id INT AUTO_INCREMENT PRIMARY KEY,
 categorietren VARCHAR(255) NOT NULL ,
  kmcum FLOAT NOT NULL ,
   lungime INT NOT NULL ,
    numar INT NOT NULL ,
     operator INT NOT NULL ,
      proprietar INT NOT NULL ,
       putere VARCHAR(255) NOT NULL ,
        rang INT NOT NULL ,
         servicii INT NOT NULL ,
          tonaj INT NOT NULL )
           ";

Database::installerQuery( $sql );
