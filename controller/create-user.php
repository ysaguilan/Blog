<?php
require_once(__DIR__ . "/../model/config.php");

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

echo $password;
/*tells php to use sha256 creates 5000 rounds*/
$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

echo $salt;