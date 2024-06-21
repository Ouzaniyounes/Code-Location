<?php 
    $DB_NAME = "dbname=Location_de_voiture"  ;
    $DB_SERVER = "mysql:host=localhost;$DB_NAME" ;
    $DB_USER  = "root";
    $DB_PASS = "";

    try {
        $db=new PDO($DB_SERVER ,$DB_USER ,$DB_PASS  );
    } catch (Exception $e) {
        die($e-> getMessage());
    }

?>