<?php
include '../../../pages/php/conexiones.php';
$idTaller=$_POST['idTaller'];
$idUsuario=$_POST['idEmpleado'];



$insert="INSERT INTO grupos_alumnos( idGrupo, idUsuario) VALUES ('".$idTaller."','".$idUsuario."')";

if (mysqli_query($conn, $insert)) {
    header('Location: ./consultar.php');
} else {
    echo 'Error: ' . $insert . '<br>' . mysqli_error($conn);
}
