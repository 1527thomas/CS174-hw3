<?php

namespace cs174\hw3\views;

class ReviewPage {
    function renderReview($genre, $post) {
        ?>
        <h1><a href="index.php">Movie Reviews/</a><a href="index.php?a=genrePage&genre=<?=$genre?>"><?=$genre?></a></h1>
        <h2 style="margin-bottom:1px; padding-bottom: 1px;">Review: <?=$_REQUEST['movie']?></h2>
        
        <p>
        <?=$post?>
        </p>
        <?php 
    }
}