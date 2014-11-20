<?php/*Objects are important because they let us store,access the information, or modify the information*/
/*gives us access to model folder checks if file is in
 memory if so use the file stored in memory*/
require_once(__DIR__ . "/../model/config.php");
/*creates connection with mysqli*/

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


?>