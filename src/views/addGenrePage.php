<?php
namespace cs174\hw3\views;

class AddGenrePage {

    function renderAddGenre() {
        ?>
        <h1><a href="index.php">Movie Reviews</a></h1>
        
        <form action="index.php">
            <input type="hidden" name="b" value="addGenre"/>
            <input id='post-title' name="genre" placeholder="Genre Name" type="text" />
            <button>Add</button>
        </form>
        <?php 
    }
}