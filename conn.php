<?php
	session_start();
extract($_REQUEST);
	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>