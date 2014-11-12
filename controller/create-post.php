<?php
/*takes us out of the controller folder into model folder to access database file*/
require__once(__DIR__ . "/../model/database.php");
/*creates connection to the database using these variables*/
$connection = new mysqli($host, $username, $password);

/*filters input to make sure there's no malicuos things occuring in th input for title*/
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
/*filters input to make sure there's no malicuos things occuring in th input for post*/
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
/*echos out title and title variable*/
echo "<p>title: $title</p>";
/*echos out post and post variable*/
echo "<p>post: $post</p>";
/*closes connection*/
$connection ->close();