<?php
session_start();
session_destroy();

include '../../pages/php/conexiones.php';
$conn=mysqli_close();
header("Location: /index.php");
