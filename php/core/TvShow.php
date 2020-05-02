<?php

class TvShow
{


    private $conn;
    private $table = "tvshow";

    public $name;
    public $id;
    public $description;
    public $image;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function readTvShow()
    {

        $query = 'SELECT * FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        // exceute the query 
        $stmt->execute();
        return $stmt;
    }
};
