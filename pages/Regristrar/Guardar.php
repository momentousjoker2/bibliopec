<?php

include '../php/conexiones.php';

$Nombre = $_POST['Nombre'];
$Domicilio = $_POST['Domicilio'];
$Password = $_POST['Password'];
$Ciudad = $_POST['Ciudad'];
$CP = $_POST['CP'];
$Genero = $_POST['Genero'];
$Ocupacion = $_POST['Ocupacion'];
$GradoE = $_POST['GradoEstudios'];
$FechaN = $_POST['FechaNacimiento'];

$sql = "INSERT INTO usuario(`Nombre`, `password`, `Domicilio`, `Ciudad`, `CP`, `Genero`, `Ocupacion`, `GradoEstudios`, `Fecha_Nacimiento`)   VALUES ('$Nombre','$Password','$Domicilio','$Ciudad','$CP','$Genero','$Ocupacion','$GradoE','$FechaN')";


if (mysqli_query($conn, $sql)) {
    header('Location: ../../index.php');
} else {
    echo 'Error Comunicate con el adminsitrador: ' . $sql . '<br>' . mysqli_error($conn);
}

?>