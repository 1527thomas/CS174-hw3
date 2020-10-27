<?php

namespace cs174\hw3\models;

class Review {
    public function addGenre($name){

        $querey = "INSERT INTO Genres ('name') VALUES ($name)";
        // echo mysqli_query($db, $query);
    }
}
