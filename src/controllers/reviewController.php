<?php

namespace cs174\hw3\controllers;

use cs174\hw3\models as M;

class ReviewController {
    private $reviewModel;
    private $genreModel;

    private $model;

    public function reviewController(){
        if (isset($_GET['b'])) {
            $this->model = new M\Model();
            $mysqli = $this->model->connect();
            $action = $_GET['b'];
            switch($action) {
                case "addReview":
                    $name = $_GET['genre'];
                    $title = (isset($_GET['title'])) ? 
                        filter_var($_GET['title'], FILTER_SANITIZE_STRING) : "";
                    $post = (isset($_GET['post'])) ? 
                        filter_var($_GET['post'], FILTER_SANITIZE_STRING) : "";
                    if (trim($_GET["title"]) && (trim($_GET['post']))) {
                        $this->genreModel = new M\Genre();
                        $this->reviewModel = new M\Review();
                        $genreId = $this->genreModel->getId($mysqli, $name);
                        $this->reviewModel->addReview($mysqli, $title, $post, $genreId);
                    }
                    break;
                case "deleteReview":    
                    if(isset($_GET['title'])) {
                        $title = $_GET['title'];
                        $this->reviewModel = new M\Review();
                        $this->reviewModel->deleteReview($mysqli, $title);
                    }
                    break;
            }
            
        }
    }
}