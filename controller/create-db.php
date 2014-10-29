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

if(!$exists) {
	echo "database does not exists";
}

/*closes connection*/
$connection->close();
?>