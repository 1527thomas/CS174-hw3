<?php

namespace cs174\hw3\views;
function renderReview() {
    ?>
    <h1><a href="index.php">Movie Reviews/<?=$_REQUEST['genre']?></a></h1>
    <h2 style="margin-bottom:1px; padding-bottom: 1px;">Review: <?=$_REQUEST['movie']?></h2>
    <?php 
}

renderReview();