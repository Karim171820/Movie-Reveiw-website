<?php

header("Access-Control-Allow-Origin");
header("Content-Type:application/json");
require_once("../core/initailize.php");

$tvShow=new TvShow($db);
$result=$tvShow->readTvShow();
$num=$result->rowcount();

if ($num > 0) {
    $tvShow_arr = array();
    $tvShow_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $post_item = array(
          
          "image"=>$image
        );
        array_push($tvShow_arr['data'], $post_item);
    }
    echo json_encode($tvShow_arr);
} else {
    echo json_encode(array('message' => 'No tvShow found'));
}