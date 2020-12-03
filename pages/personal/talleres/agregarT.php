<?php

include '../../../pages/php/conexiones.php';


    $nombre=$_POST['nombre-taller'];
    $fechainicio=$_POST['fechainicio'];
    $fechafin=$_POST['fechafin'];
    $horas_taller=$_POST['horas-taller'];
    $idEmpleado=$_POST['idEmpleado'];


    $insert = "INSERT INTO talleres(IdEmpleado,Nombre,fecha_inicio,fecha_fin,horas_taller) VALUES (".$idEmpleado.",'".$nombre."','".$fechainicio."','".$fechafin."','".$horas_taller."')";
    if (mysqli_query($conn, $insert)) {

    header('Location: ./consultar.php');
    } else {
       echo 'Error: ' . $insert . '<br>' . mysqli_error($conn);
    }
?>