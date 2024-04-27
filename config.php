<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "movieticketing";

// Connection 
$con = new mysqli($servername, 
		$username, $password, $database);

// For checking if connection is
// successful or not
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
