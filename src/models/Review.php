<?php

namespace cs174\hw3\models;

class Review {
    public function addReview($mysqli, $title, $post, $genreId){

        $query = "INSERT INTO reviews (title, post, genreId) VALUES ('$title', '$post', '$genreId')";
        echo $query;
        $mysqli->query($query);
        echo $mysqli->error;
    }

    
}
