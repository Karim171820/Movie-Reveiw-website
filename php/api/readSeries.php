<?php

// headers
header("Access-Control-Allow-Origin");
header("Content-Type:application/json");
require_once("../core/initailize.php");

$series = new Series($db);
$result = $series->readSeries();
$num = $result->rowCount();

if ($num > 0) {
    $series_arr = array();
    $series_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $post_item = array(
          
            "image"=> $image
        );
        array_push($series_arr['data'], $post_item);
    }
    echo json_encode($series_arr);
} else {
    echo json_encode(array('message' => 'No Series found'));
}
