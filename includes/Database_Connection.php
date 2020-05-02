<?php

    error_reporting(0);

    $dbhost = 'localhost';  
    $user = 'root';   
    $pass = '';    
    $db = 'movie reviews';   
    $connection = new mysqli($dbhost, $user, $pass, $db) or die("Unable to connect to database");

?>