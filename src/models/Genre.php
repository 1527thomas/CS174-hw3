<?php
namespace cs174\hw3\models;

class Genre {
    public function addGenre($mysqli, $name){

        $query = "INSERT INTO genres (name) VALUES ('$name')\n";
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

    public function getGenres($mysqli){
        $query = "SELECT name FROM genres ORDER BY name";
        $res = $mysqli->query($query);
        echo $mysqli->error;

        $genreArray = Array();
        
        while($row = $res->fetch_array()) {
            $genreArray[] = $row['name'];
        }
        $res->free();
        return $genreArray;
    }

    public function getGenreFromId($mysqli, $id) {
        $query = "SELECT name FROM genres WHERE id = '$id'";
        $res = $mysqli->query($query);
        $row = $res->fetch_assoc();
        $genre = $row['name'];
        $res->free();
        return $genre;
    }
}