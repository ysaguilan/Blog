
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
