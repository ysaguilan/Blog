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
}
