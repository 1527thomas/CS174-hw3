<?php

namespace cs174\hw3\views;

class HomePage {
    function renderHome($genres, $reviews) {
        ?>
        <h1><a href=".">Movie Reviews</a></h1>
        <h2 style="margin-bottom:1px; padding-bottom: 1px;">Genres</h2>
        <div>
        <ul>
        <li><a href="index.php?a=addGenrePage">[New Genre]</a></li>
        <?php
            foreach($genres as $genre) {
                ?><li><a href="index.php?a=genrePage&genre=<?=$genre?>"><?=$genre?></a></li><?php 
            }
        ?></ul>
        <h2 style="margin-bottom:1px; padding-bottom: 1px;"> Reviews </h2>
        <ul>
        <?php
            foreach($reviews as $title => $date) {
                ?><li><a href="index.php?a=reviewPage&movie=<?=$title?>"><?=$title?></a> <?=$date?></li><?php 
            }
        ?></ul>
        </div>
        <?php 
    }
    
}


// $a = ["Action", "Comedy", "Drama"];
// $b = ["Sonic Lives!!", "What's Tenet spelt backwards?", "Don't have a First Cow"];

// renderHome($a, $b);