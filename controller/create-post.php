<?php
/*takes us out of the controller folder into model folder to access config file*/
require_once(__DIR__ . "/../model/config.php");


/*filters input to make sure there's no malicuos things occuring in th input for title*/
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
/*filters input to make sure there's no malicuos things occuring in th input for post*/
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

if ($query) {
	echo "<p>successfully inserted post:$title</p>";
}
else{
	echo "<p>" . $connection->error . "</p>";
}
