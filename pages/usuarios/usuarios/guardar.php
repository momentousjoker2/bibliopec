<?php
session_start();


require '../../../pages/php/conexiones.php';
$id = $_SESSION['id_user'];
$Nombre = $_POST['Nombre'];
$Domicilio = $_POST['Domicilio'];
$Ciudad = $_POST['Ciudad'];
$CP = $_POST['CP'];
$Genero = $_POST['Genero'];
$Ocupacion = $_POST['Ocupacion'];
$GradoE = $_POST['GradoEstudios'];
$FechaN = $_POST['FechaNacimiento'];
$sql="UPDATE usuario SET Nombre='$Nombre',  Domicilio ='$Domicilio', Ciudad='$Ciudad', CP='$CP', Genero ='$Genero', Ocupacion='$Ocupacion', GradoEstudios='$GradoE', Fecha_Nacimiento='$FechaN' where id=$id";


if (mysqli_query($conn, $sql)) {
    header('Location: ../index.php');
} else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}


