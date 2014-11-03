<?php
/*gives us access to model folder checks if file is in
 memory if so use the file stored in memory*/
require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);
 /*if else conditional statement to die off program if there 
 is a connection error and echos success if theres no errors*/
if($connection -> connect_error) {
	/*paragraph tags help oraganize echos under one another*/
	die("<p>Error: " . $connection->connect_error . "</p>");
}
else {
	/*paragraph tags help oraganize echos under one another*/
	echo "<p>success: " . $connection->host_info . "</p>";
}

$exists = $connection->select_db($database);
/*checks if datbase exists only runs if database doesnt exist*/
if(!$exists) {
	/*asks "questions"*/
	$query = $connection->query("CREATE DATABASE $database");
	/*checks whether or not query was successful*/
	if($query) {
		/*paragraph tags help oraganize echos under one another*/
		echo "<p>successfully created database " . $database . "</p>";
	}
}
else {
	/*paragraph tags help oraganize echos under one another*/
	echo "<p>Database has been created</P>";/*echos out to show database has been created*/
}
/*will create table called posts*/
$query = $connection->query("CREATE TABLE posts ("/*creates table for posts*/
	. "id int(11) NOT NULL AUTO_INCREMENT,"/*can generate a billion unique ids, cant be empty, gives unique id to posts*/
	 . "title varchar(255) NOT NULL,"/*ability to create titles containing 255 characters or less, cant be empty*/
	  . "post text NOT NULL," /* for posts, contains text, cant be empty*/
	  . "PRIMARY KEY (id))");/*the way table are connected to each other, tells table primary key is id*/
/*checks if table posts has been created successfully*/
if($query) {
	/*echos this out if successful*/
	/*paragraph tags help oraganize echos under one another*/
	echo "<p>successfully created table posts</p>";
}
else{
	/*echos connection error if not successful*/
	/*paragraph tags help oraganize echos under one another*/
	echo "<p>$connection->error</p>";
}

/*closes connection*/
$connection->close();
?>