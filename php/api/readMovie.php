<?php

// headers
header("Access-Control-Allow-Origin");
header("Content-Type:application/json");

require_once("../core/initailize.php");

$movie = new Movie($db);
$result = $movie->readMovie();
$num = $result->rowCount();

if ($num > 0) {
    $Movie_arr = array();
    $Movie_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $post_item = array(
        
            "image"=> $image,
            "id" => $id
        );
        array_push($Movie_arr['data'], $post_item);
    }
    echo json_encode($Movie_arr);
} else {
    echo json_encode(array('message' => 'No Moives found'));
}
