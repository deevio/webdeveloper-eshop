<?php

$server 	= "localhost";
$dbname 	= "php_login_script";
$user 		= "apredsa";
$pass 		= "cxbHvBNWBT8qeePBEa2Uf";
$table 		= "users";

try {

	$conn = new PDO("mysql:host=$server; dbname=$dbname;", $user, $pass);

} catch (PDOexception $e) {

	die("Connection failed: " . $e->getMessage() );

}