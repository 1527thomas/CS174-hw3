<?php
namespace cs174\hw3\models;

class Genre {
    public function addGenre($mysqli, $name){

        $query = "INSERT INTO genres (name) VALUES ('$name')\n";
        echo $query;
        $mysqli->query($query);
        echo $mysqli->error;
    }

    public function getId($mysqli, $name) {
        $query = "SELECT id FROM genres WHERE name='$name'";
        
        $res = $mysqli->query($query);
        $row = $res->fetch_assoc();
        $id = $row['id'];
        $res->free();
        return $id;
    }

    public function getGenre($mysqli){
        $query = "SELECT name FROM genres";
        $res = $mysqli->query($query);
        echo $mysqli->error;

        while($row = $res->fetch_assoc()) {
            //returns all names from the genre table
            // printf("%s \n", $row["name"]);
        }

        $res->free();
    }

    //get reviews for a specific genre
    public function getReviews($mysqli) {
        $query = "SELECT * FROM reviews WHERE";
    }
}