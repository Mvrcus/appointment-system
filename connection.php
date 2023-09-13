<?php

    $database= new mysqli("localhost:3306","kwamecasey_hk2aftfsp8a","","kwamecasey");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
