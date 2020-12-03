<?php

session_start();

include '../../../pages/php/conexiones.php';

$idUsuario=$_SESSION['id_user'];
$consulta = $_POST['consulta'];
$hora_llegada = $_POST['hora_llegada'];
$hora_salida = $_POST['hora_salida'];


$insert = "INSERT INTO visita(idUsuario,material,Hora_entrada,Hora_salida) VALUES (" . $idUsuario . ",'" . $consulta . "','" . $hora_llegada . "','" . $hora_salida . "')";

if (mysqli_query($conn, $insert)) {
    header('Location: ./agregar.php');
} else {
    echo 'Error Comunicate con el adminsitrador: ' . $insert . '<br>' . mysqli_error($conn);
}



