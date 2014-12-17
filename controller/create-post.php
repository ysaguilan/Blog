
<?php
/*takes us out of the controller folder into model folder to access config file*/
require_once(__DIR__ . "/../model/config.php");

require_once(__DIR__ . "/../controller/login-verify.php");

if (!authenticateUser()) {
	header("Location: " . $path . "amit1.php");
	die();
}

/*filters input to make sure there's no malicuos things occuring in th input for title*/
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
/*filters input to make sure there's no malicuos things occuring in th input for post*/
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
/*holds the current time */
$date = new DateTime('today');
/*holds the current time in Los Angeles*/
$time = new DateTime('America/Los_Angeles');

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

if ($query) {
	echo "<p>successfully inserted post:$title</p>";
	/*echos date and time (current)*/                                 /*formats how time looks*/
	echo "Posted on: " . $date->format("M/D" ." " . "d/Y") . " at " . $time->format("g:i");
	header("Location: " . $path . "amit1.php");
}
else{
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
