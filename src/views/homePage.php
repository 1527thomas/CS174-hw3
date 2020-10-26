<?php

function render($genres, $reviews) {
    echo '<h1 style="font-size:20pt;"><a href=".">Movie Reviews</a></h1>';
    echo '<h2 style="margin-bottom:1px; padding-bottom: 1px;">Genres</h2>';
    echo '<ul>';

    foreach($genres as $genre) {
        echo '<li>' . $genre . '</li>';
    }

    echo '</ul>';
    echo '<h2 style="margin-bottom:1px; padding-bottom: 1px;"> Reviews </h2>';

    echo '<ul>';
    foreach($reviews as $review) {
        echo '<li>' . $review . '</li>';
    }

    echo '</ul>';

}

$a = ["Action", "Comedy", "Drama"];
$b = ["Sonic Lives!!", "What's Tenet spelt backwards?", "Don't have a First Cow"];

render($a, $b);