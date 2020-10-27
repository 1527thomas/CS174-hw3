<?php
namespace cs174\hw3\models;

class Genre {
    public function addGenre($db, $name){
        $query = "INSERT INTO Genres ('name') VALUES ($name)";
        echo mysqli_query($db, $query);
    }
}