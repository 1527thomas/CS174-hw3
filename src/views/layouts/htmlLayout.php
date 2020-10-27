<?php

namespace cs174\hw3\views\layouts;

class htmlLayout{
    function htmlLayout($htmlPage)
        {
            ?><!DOCTYPE html>
            <html>
            <head><title>Movie Reviews</title></head>
            <body>
            <?php
            include_once dirname(__FILE__) . $htmlPage;
            ?>
            </body>
            
        </html><?php
        }
}
