<?php

class Movie{


    private $conn;
    private $table = "movie";

 public $name;
 public $id;
 public $description;
 public $image;
 public $rate;

 public function __construct($db)
 {
     $this->conn = $db;
 }

 public function readMovie(){

   $query = 'SELECT * FROM '.$this->table ;
   $stmt = $this->conn->prepare($query);
   // exceute the query 
   $stmt->execute();
   return $stmt;

 }

public function rateMovie($ratingValue){
  $query='INSERT INTO MOVIES(M_Rate) VALUES ('.$ratingValue.')';
  $stmt = $this->conn->prepare($query);
  // exceute the query 
  $stmt->execute();
  return $stmt;

}

};