<?php

// require_once('./src/configs/CreateDB.php');
include('./src/controllers/pageController.php');
include('./src/controllers/genreController.php');
include('./src/controllers/reviewController.php');

$genreController = new cs174\hw3\controllers\genreController();
$genreController->genreController();

$reviewController = new cs174\hw3\controllers\reviewController();
$reviewController->reviewController();

$pageController = new cs174\hw3\controllers\pageController();
$pageController->render();
