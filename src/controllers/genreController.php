<?php 

namespace cs174\hw3\controllers;

require_once('./src/models/Genre.php');
require_once('./src/models/Model.php');

use cs174\hw3\models as M;

class GenreController {
    private $genreModel;

    private $model;

    public function genreController(){
        if (isset($_GET['b'])) {
            $this->model = new M\Model();
            $mysqli = $this->model->connect();
            $action = $_GET['b'];
            switch($action) {
                case "addGenre":
                    if (isset($_GET['genreName'])) {
                        $name = $_GET['genreName'];
                        $this->genreModel = new M\Genre();
                        $this->genreModel->addGenre($mysqli, $name);  
                    break;
                    }
                case "addReview":
                    if (isset($_GET['title']) . (isset($_GET['post']))) {
                        $title = $_GET['title'];
                        $post = $_GET['post'];
                        $this->genreModel = new M\Genre();
                        $this->reviewModel = new M\Review();
                        $genreId = $this->genreModel->getId($mysqli, $name);
                        $this->reviewModel->addReview($title, $post, $name);
                        
                    }    
            }
        }
        else if (isset($_GET['a'])) {
            $this->model = new M\Model();
            $mysqli = $this->model->connect();
            $action = $_GET['a'];
            switch($action) {
                case "genrePage":
                    if (isset($_GET['genre'])) {
                        $name = $_GET['genre'];
                        $this->genreModel = new M\Genre();
                        $this->genreModel->getGenre($mysqli);
                        $id = $this->genreModel->getId($mysqli, $name);
                        
                    }
            }
        }
    }
}