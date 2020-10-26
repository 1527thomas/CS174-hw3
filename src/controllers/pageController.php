<?php

namespace cs174\hw3\controllers;
require_once('./src/views/helpers/viewHelper.php');
require_once('./src/models/Genre.php');

class PageController {
    private $viewHelper;

    public function render() {
        $this->viewHelper = new \cs174\hw3\views\helpers\viewHelper();
        if (isset($_GET['a'])) {
            $action = $_GET['a'];
            switch($action) {
                default:
                    $this->viewHelper->display('/../homePage.php');
            }
        }

        else {
            $this->viewHelper->display('/../homePage.php');
        }
    }
}

