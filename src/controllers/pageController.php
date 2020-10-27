<?php

namespace cs174\hw3\controllers;
require_once('./src/views/layouts/htmlLayout.php');

class PageController {
    private $htmlLayout;

    public function render() {
        $this->htmlLayout = new \cs174\hw3\views\layouts\htmlLayout();
        if (isset($_GET['a'])) {
            $action = $_GET['a'];
            switch($action) {
                case "genrePage":
                    $this->htmlLayout->htmlLayout('/../genrePage.php');    
                    break;
                case "addGenrePage":
                    $this->htmlLayout->htmlLayout('/../addGenrePage.php');
                    break;
                case "reviewPage":
                    $this->htmlLayout->htmlLayout('/../reviewPage.php');  
                    break;
                case "addReviewPage":
                    $this->htmlLayout->htmlLayout('/../addReviewPage.php');  
                    break;
            }
        }

        else {
            $this->htmlLayout->htmlLayout('/../homePage.php');
        }
    }
}

