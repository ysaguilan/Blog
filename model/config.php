<?php
require_once(__DIR__ . "/database.php");
/*variable allows us to update files that have been moved from different server or folder*/
$path ="/Blog/";

/*variables for php database server info*/
	$host = "localhost";/*stores host*/
	$username = "root"; /*stores usernames*/
	$password = "root"; /*stores password*/
	$database = "blog_db"; /*stores info in blog database*/
	/*uses the mysqli to create new object: database, this is based off the class named database*/
	$connection = new Database($host, $username, $password, $database);