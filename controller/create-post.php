<?php
/*filters input to make sure there's no malicuos things occuring in th input for title*/
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
/*filters input to make sure there's no malicuos things occuring in th input for post*/
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
/*echos out title and title variable*/
echo "<p>title: $title</p>";
/*echos out post and post variable*/
echo "<p>post: $post</p>";