<?php
/*A class is a collection of variables and functions working with these variables 
we use class to oraginize or hide variables. we use class to access later to make a new instance of the object*/
class Database {
	/*private means we cant access these variables any where else only in this file*/
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database
/*constructors are important because it allows us to build objects of type Database
its public because it needs to be able to be access from where ever in any file*/
	public function __construct($host, $username, $password, $database){
		/*helps us store these in our global variables so we can have access them through out our project*/
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
	/*opens connection*/
	public function openConnection() {
		/*establishes new connection*/
		$this ->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
		/*checks for connection error for connection thats created above, closes connection if theres error */
		if($this->connection -> connect_error) {
	/*paragraph tags help oraganize echos under one another*/
	die("<p>Error: " . $this->connection->connect_error . "</p>");
}
	}
	/*closes connection*/
	public function closeConnection() {

	}
}
/*runs query*/
public function query($string) {

}
