<?php

// headers
header("Access-Control-Allow-Origin");
header("Content-Type:application/json");

require_once("../core/initailize.php");

$anime = new Anime($db);
$result = $anime->readAnime();
$num = $result->rowCount();

if ($num > 0) {
    $anime_arr = array();
    $anime_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $post_item = array(
           
            "image"=> $image
        );
        array_push($anime_arr['data'], $post_item);
    }
    echo json_encode($anime_arr);
} else {
    echo json_encode(array('message' => 'No anime found'));
}
