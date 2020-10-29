<?php

namespace cs174\hw3\models;

class Review {
    public function addReview($mysqli, $title, $post, $genreId){
        $query = "INSERT INTO reviews (title, post, genreId) VALUES ('$title', '$post', '$genreId')";
        $mysqli->query($query);
        echo $mysqli->error;
    }

    public function getReviews($mysqli) {
        $query = "SELECT title, date FROM reviews ORDER BY date DESC";
        $res = $mysqli->query($query);
        echo $mysqli->error;
        $reviewArray = Array();
        while($row = $res->fetch_array()) {
            $reviewArray[$row['title']] = $row['date'];
        }
        $res->free();
        return $reviewArray;
    }
    
    public function getPost($mysqli, $title) {
        $query = "SELECT post FROM reviews WHERE title = '$title'";
        $res = $mysqli->query($query);
        echo $mysqli->error;
        $row = $res->fetch_assoc();
        $post = $row['post'];
        $res->free();
        return $post;
    }

    public function getGenreId($mysqli, $title) {
        $query = "SELECT genreId FROM reviews WHERE title = '$title'";
        $res = $mysqli->query($query);
        echo $mysqli->error;
        $row = $res->fetch_assoc();
        $genreId = $row['genreId'];

        $res->free();
        return $genreId;
    }

    public function getReviewsFromGenre($mysqli, $genreId) {
        $query = "SELECT title, date FROM reviews WHERE genreId = '$genreId' ORDER BY date DESC";
        $res = $mysqli->query($query);
        echo $mysqli->error;
        $reviewArray = Array();
        while($row = $res->fetch_array()) {
            $reviewArray[$row['title']] = $row['date'];
        }
        $res->free();
        return $reviewArray;
    }
}
