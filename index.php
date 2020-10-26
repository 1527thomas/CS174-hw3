<?php

// require_once('./src/configs/CreateDB.php');
include('./src/controllers/pageController.php');

$pageController = new cs174\hw3\controllers\pageController();
$pageController->render();
