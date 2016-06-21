<?php

$servername = "mindworldzcom.ipagemysql.com";

// Username and password are of database
$username = "default";
$password = "default";
$database = "database_1";

// Create connection
$connection = new mysqli($servername,$username,$password,$database);

// Check connection
if ($connection->connect_error) {
	die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";


?>