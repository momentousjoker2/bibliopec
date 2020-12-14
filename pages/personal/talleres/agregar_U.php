<?php
include '../../../pages/php/conexiones.php';
$idTaller=$_POST['idTaller'];
$idUsuario=$_POST['idEmpleado'];



$insert="INSERT INTO InsertarAtaller( idTaller, idUsuario) VALUES ('".$idTaller."','".$idUsuario."')";

if (mysqli_query($conn, $insert)) {
    header('Location: ./consultarUpT.php');
} else {
    echo 'Error: ' . $insert . '<br>' . mysqli_error($conn);
}
