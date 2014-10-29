<?php
/*gives us access to model folder checks if file is in
 memory if so use the file stored in memory*/
require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);
 /*if else conditional statement to die off program if there 
 is a connection error and echos success if theres no errors*/
if($connection -> connect_error) {
	die("Error: " . $connection->connect_error);
}
else {
	echo "success: " . $connection->host_info;
}

$exists = $connection->select_db($database);
/*checks if datbase exists only runs if database doesnt exist*/
if(!$exists) {
	/*asks "questions"*/
	$query = $connection->query("CREATE DATABASE $database");
	/*checks whether or not query was successful*/
	if($query) {
		echo "successfully created database " . $database;
	}
}
else {
	echo "Database has been created";/*echos out to show database has been created*/
}

/*closes connection*/
$connection->close();
?>