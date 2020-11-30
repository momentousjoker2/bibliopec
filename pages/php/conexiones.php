<?php
$servername = "mysql-bibliopec.alwaysdata.net";
$database = "bibliopec_db";
$username = "bibliopec";
$password = "3bcHABETUjkl";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
  //  echo('ok');
}

 ?>
