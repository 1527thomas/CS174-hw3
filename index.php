<?php

// require_once('./src/configs/CreateDB.php');
include('./src/controllers/pageController.php');
include('./src/controllers/genreController.php');

$pageController = new cs174\hw3\controllers\pageController();
$pageController->render();


$genreController = new cs174\hw3\controllers\genreController();
$genreController->genreController();