<?php

    error_reporting(0);

    $dbhost = 'localhost';  
    $user = 'root';   
    $pass = '';    
    $database = 'ip';   
    $connection = new mysqli($dbhost, $user, $pass, $database) or die("Unable to connect to database");

?>