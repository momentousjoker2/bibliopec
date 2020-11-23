<?php
    include  '..\..\..\..\..\Listas\conexion.php';
    $idTaller = $_POST['idTaller'];
    $escuela = $_POST['Escuela'];
    $encargado = $_POST['Encargado'];
    $sql = "insert into grupos(idTaller, Escuela, Nombre_Encargado) values ($idTaller, '$escuela','$encargado')";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        echo "Grupo agregado";
?>