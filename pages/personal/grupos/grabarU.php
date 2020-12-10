<?php
    include  '../../../pages/php/conexiones.php';
    $idGrupo = $_POST['idGrupo'];
    $idUsuario = $_POST['idUsuario'];
                       //idUsuario
    $tutor = $_POST['Tutor'];
    $estado = $_POST['Estado'];
    $sql = "select * from grupos_alumnos where idGrupo = $idGrupo and idUsuario = $idUsuario";
    $res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)==0){
    $sql = "insert into grupos_alumnos(idGrupo, idUsuario) values ($idGrupo, $idUsuario)";
    //echo $sql;
    mysqli_query($conn,$sql);
    $sql ='SELECT * FROM grupos_alumnos';
    $id = mysqli_query($conn,$sql);
    $id = mysqli_num_rows($id);
    $sql ="insert into permisos(idGrupoAlumno,Estado,Tutor) values ($id,'$estado','$tutor')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo "Usuario agregado al grupo";
   }else{
    echo 'Este usuario ya se encuentra registrado en este grupo';
} 
?>