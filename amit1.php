
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
<!--link to css file to make it look fancy-->
<link rel="stylesheet" type="text/css" href="css/header.css">
<nav class = "login">
<li>
<a href="view/login-form.php">login</a>
</li>
</nav>


<?php
require_once(__DIR__ . "/controller/login-verify.php");
/*inserts header code into this php file*/
require_once(__DIR__ . "/view/header.php");
if(authenticateUser()) {	
	/*inserts navigation code into this php file*/
	require_once(__DIR__ . "/view/navigation.php");
}
/*includes information in database.php within create-db.php*/
require_once(__DIR__ . "/controller/create-db.php");
/*inserts footer code into this php file*/
require_once(__DIR__ . "/model/config.php");

require_once(__DIR__ . "/controller/read-posts.php");
?>
