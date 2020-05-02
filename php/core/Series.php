<?php

class Series
{


    private $conn;
    private $table = "series";

    public $name;
    public $id;
    public $description;
    public $image;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function readSeries()
    {

        $query = 'SELECT * FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        // exceute the query 
        $stmt->execute();
        return $stmt;
    }
};
