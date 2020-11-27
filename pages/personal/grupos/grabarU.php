<?php
    include  '../php/conexiones.php';
    $idGrupo = $_POST['idGrupo'];
    $idUsuario = $_POST['idUsuario'];
                       //idUsuario
    $tutor = $_POST['Tutor'];
    $estado = $_POST['Estado'];
    $sql = "insert into grupos_alumnos(idGrupo, idUsuario) values ($idGrupo, $idUsuario)";
    //echo $sql;
    mysqli_query($conn,$sql);
    $sql ='SELECT * FROM grupos_alumnos';
    $id = mysqli_query($conn,$sql);
    $id = mysqli_num_rows($id);
    $sql ="insert into permisos(idGrupoAlumno,Estado,Tutor) values ($id,'$estado','$tutor')";
    echo $sql;
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo "Usuario agregado al grupo";
    
?>