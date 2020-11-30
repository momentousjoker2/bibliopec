<?php
    include  '../../../pages/php/conexiones.php';
    $idGrupo =$_POST['idGrupo'];
    $idTaller = $_POST['idTaller'];
    $escuela = $_POST['Escuela'];
    $encargado = $_POST['Encargado'];
    $sql = "Update grupos set idTaller = $idTaller, Escuela = '$escuela', Nombre_Encargado ='$encargado' where idGrupo = $idGrupo";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        echo "Grupo $idGrupo modificado";
?>