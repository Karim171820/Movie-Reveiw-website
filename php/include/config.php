<?php

$db_user = "root";
$db_password = '';
$db_name = "ip";

try {
    $db = new PDO("mysql:host=127.0.0.1; dbname=" . $db_name, $db_user, $db_password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

define("APP_NAME", 'IP Poject');
