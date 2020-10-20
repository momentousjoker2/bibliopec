<?php
$servername = "localhost";
$database = "id15146877_bibliopec";
$username = "id15146877_admin";
$password = "JxzTyKmVZ@zM!-~5";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}else{
    echo ('ok');
}

 ?>
