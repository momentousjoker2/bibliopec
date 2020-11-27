<?php
    include  '../php/conexiones.php';
    $idGrupo =$_POST['idGrupo'];
    $instruccion = "Select idTaller, Escuela, Nombre_Encargado From grupos where idGrupo =" . $idGrupo;
    $sql=mysqli_query($conn,$instruccion);
    while ($dat = mysqli_fetch_assoc($sql)) {
        echo $dat['idTaller'].','.$dat['Escuela'].','.$dat['Nombre_Encargado'];       
        }
?>