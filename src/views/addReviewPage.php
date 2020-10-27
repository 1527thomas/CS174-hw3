<?php

namespace cs174\hw3\views;
function renderAddReview() {
    ?>
    <h1><a href="index.php">Movie Reviews/<?=$_REQUEST['genre']?></a></h1>
    <h2>Add Review</h2>
    <form>
        <div>
            <label for='post-title'>Title</label>:
            <input id='post-title' name="title" type="text" />
        </div>
        <div>
            <label for='post-body'>Post</label>:<br />
            <textarea id='post-body' name="post" rows="10" cols="40"></textarea>
        </div>
        <div>
            <button>Save</button>
        </div>
    </form>
    <?php 
}

renderAddReview();