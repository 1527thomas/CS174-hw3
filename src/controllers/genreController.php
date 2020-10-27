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
            $db = $this->model->connect();
            $action = $_GET['b'];
            switch($action) {
                case "addGenre":
                    if (isset($_GET['genreName'])) {
                        $name = $_GET['genreName'];
                        $this->genreModel = new M\Genre();
                        $this->genreModel->addGenre($db, $name);  
                    break;
                    }
            }
        }
    }
}