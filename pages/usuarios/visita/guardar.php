<?php

session_start();

include '../../../pages/php/conexiones.php';

$idUsuario=$_SESSION['id_user'];
$mConsulta = $_POST['consulta'];
date_default_timezone_set('America/Mexico_City');

$fecha = localtime(time(), true);
$hora= localtime(time(), true);

$hora=date('H:i');
$fecha=date('Y-m-d');


$insert = "INSERT INTO visitas(idUsuario,fecha,hora,mConsulta) VALUES (" . $idUsuario . ",'" . $fecha . "','" . $hora . "','" . $mConsulta . "')";

if (mysqli_query($conn, $insert)) {
    header('Location: ../index.php');
} else {
    echo 'Error Comunicate con el adminsitrador: ' . $insert . '<br>' . mysqli_error($conn);
}



