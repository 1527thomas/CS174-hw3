<?php 

namespace cs174\hw3\controllers;

require_once('./src/models/Genre.php');
require_once('./src/models/Model.php');
require_once('./src/models/Review.php');

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
                    $name = (isset($_GET['genre'])) ? 
                        filter_var($_GET['genre'], FILTER_SANITIZE_STRING) : "";
                    if (trim($_GET["genre"])) {
                        $this->genreModel = new M\Genre();
                        $this->genreModel->addGenre($mysqli, $name); 
                    }
                    break;
                case "deleteGenre":    
                    if(isset($_GET['genre'])) {
                        $genre = $_GET['genre'];
                        $this->genreModel = new M\Genre();
                        $this->genreModel->deleteGenre($mysqli, $genre);
                    }
                    break;
            }
        }
    }
}