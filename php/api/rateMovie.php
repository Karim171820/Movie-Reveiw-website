<?php

// headers
header("Access-Control-Allow-Origin");
header("Content-Type:application/json");
require_once("../core/initailize.php");


$movie = new Movie($db);
//$result = $movie->RateMovie();

if ($_POST['rate']) {
    $movie->rateMovie($_POST["rate"]);
    echo json_encode(array('message' => 'added'));
} else {
    echo json_encode(array('message' => 'not added'));
}
