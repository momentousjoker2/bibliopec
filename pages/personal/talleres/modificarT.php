<?php

include '../../../pages/php/conexiones.php';

$ID=$_POST['ID'];
$nombre=$_POST['nombre-taller'];
$fechainicio=$_POST['fechainicio'];
$fechafin=$_POST['fechafin'];
$horas_taller=$_POST['horas-taller'];
$idEmpleado=$_POST['idEmpleado'];

$update="UPDATE talleres SET IdEmpleado =' $idEmpleado', Nombre='$nombre',fecha_inicio='$fechainicio',fecha_fin='$fechafin',horas_taller='$horas_taller' where idTaller ='$ID'";

if (mysqli_query($conn, $update)) {
    header('Location: ./consultar.php');
} else {
    echo 'Error: ' . $update . '<br>' . mysqli_error($conn);
}
?>