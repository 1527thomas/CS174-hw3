<?php

namespace cs174\hw3\controllers;
require_once('./src/views/layouts/htmlLayout.php');
require_once('./src/views/addGenrePage.php');
require_once('./src/views/addReviewPage.php');
require_once('./src/views/genrePage.php');
require_once('./src/views/reviewPage.php');
require_once('./src/views/homePage.php');
require_once('./src/models/Model.php');

use cs174\hw3\models as M;
use cs174\hw3\views as V;

class PageController {
    private $htmlLayout;
    private $view;

    public function render() {
        $a = ["Action", "Comedy", "Drama"];
        $b = ["Sonic Lives!!", "What's Tenet spelt backwards?", "Don't have a First Cow"];
        $this->htmlLayout = new \cs174\hw3\views\layouts\htmlLayout();
        $this->model = new M\Model();
        $mysqli = $this->model->connect();
        if (isset($_GET['a'])) {
            $action = $_GET['a'];
            switch($action) {
                case "genrePage":
                    if(isset($_GET['genre'])) {
                        $name = $_GET['genre'];
                        $this->genreModel = new M\Genre();
                        $genres = $this->genreModel->getGenres($mysqli);
                        $id = $this->genreModel->getId($mysqli, $name);

                        $this->view = new V\GenrePage();
                        $this->reviewModel = new M\Review();
                        $reviews = $this->reviewModel->getReviewsFromGenre($mysqli, $id);
                        $this->htmlLayout->htmlLayout($this->view->renderGenre($genres, $reviews));    
                        break;
                    }
                case "addGenrePage":
                    $this->view = new V\AddGenrePage();
                    $this->htmlLayout->htmlLayout($this->view->renderAddGenre());
                    break;
                case "reviewPage":
                    $this->genreModel = new M\Genre();
                    $this->reviewModel = new M\Review();
                    $this->view = new V\ReviewPage();
                    $title = $_GET['movie'];
                    $genreId = $this->reviewModel->getGenreId($mysqli, $title);
                    
                    $genre = $this->genreModel->getGenreFromId($mysqli, $genreId);
                    $post = $this->reviewModel->getPost($mysqli, $title);
                    $this->htmlLayout->htmlLayout($this->view->renderReview($genre, $post));  
                    break;
                case "addReviewPage":
                    $this->view = new V\AddReviewPage();
                    $this->htmlLayout->htmlLayout($this->view->renderAddReview());  
                    break;
            }
        }

        else {
            $this->genreModel = new M\Genre();
            $genres = $this->genreModel->getGenres($mysqli);
            $this->reviewModel = new M\Review();
            $reviews = $this->reviewModel->getReviews($mysqli);
            $this->view = new V\homePage();
            $this->htmlLayout->htmlLayout($this->view->renderHome($genres, $reviews));
        }
    }
}

