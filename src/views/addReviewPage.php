<?php

namespace cs174\hw3\views;

class AddReviewPage {
    function renderAddReview() {
        ?>
        <h1><a href="index.php">Movie Reviews/</a><a href="index.php?a=genrePage&genre=<?=$_REQUEST['genre']?>"><?=$_REQUEST['genre']?></a></h1>
        <h2>Add Review</h2>
        <form action="index.php">
            <input type="hidden" name="b" value="addReview"/>
            <input type="hidden" name="genre" value=<?=$_REQUEST['genre']?>>
            <div>
                <label for='post-title'>Title</label>:
                <input id='post-title' name="title" type="text" />
            </div>
            <div>
                <label for='post-body'>Post</label>:<br />
                <textarea id='post-body' name="post" rows="10" cols="40"></textarea>
            </div>
            <div>
                <button name="a" value="genrePage">Save</button>
            </div>
        </form>
        <?php 
    }
}
