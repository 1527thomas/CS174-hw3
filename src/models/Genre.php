<?php
namespace cs174\hw3\models;

class Genre {
    public function addGenre($mysqli, $name){

        $query = "INSERT INTO genres (name) VALUES ('$name')";
        echo $query;
        $mysqli->query($query);
        echo $mysqli->error;
    }

    public funtion getGenres($mysqli){
        $query = "SELECT * FROM `genres`";
        
    }
}