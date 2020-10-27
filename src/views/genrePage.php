<?php

namespace cs174\hw3\views;

class GenrePage{
    function renderGenre($genres, $reviews) {
        ?>
        <h1 style="font-size:20pt;"><a href=".">Movie Reviews/<?=$_REQUEST['genre']?></a></h1>
        <h2 style="margin-bottom:1px; padding-bottom: 1px;">Genres</h2>
        <div>
        <ul>
        <?php
            foreach($genres as $genre) {
                ?><li><a href="index.php?a=genre&genre=<?=$genre?>"><?=$genre?></a></li><?php 
            }
        ?></ul>
        <h2 style="margin-bottom:1px; padding-bottom: 1px;"> Reviews </h2>
        <ul>
        <li><a href="index.php?a=addReviewPage&genre=<?=$_REQUEST['genre']?>">[Add Review]</a></li>
        <?php
            foreach($reviews as $review) {
                ?><li><a href="index.php?a=review&movie=<?=$review?>"><?=$review?></a></li><?php 
            }
        ?></ul>
        </div>
        <?php 
    }
}


$a = ["Action", "Comedy", "Drama"];
$b = ["Sonic Lives!!", "What's Tenet spelt backwards?", "Don't have a First Cow"];

renderGenre($a, $b);