<?php
    include  __DIR__ . '..\php\conexiones.php';
    $idUsuario=$_POST['idUsuario'];
    $mconsulta=$_POST['mConsulta'];
    date_default_timezone_set('America/Mexico_City');
    $fecha = localtime(time(), true);
    $hora=$fecha['tm_hour'].":".$fecha['tm_min'];
    $fecha=date('Y-m-d H:i:s');
    //Falta el id de la visita se puede agregar o a la tabla Visitas darle la propiedad identity
    $sql = "insert into visitas(idUsuario, fecha, hora, mConsulta) values ($idUsuario, $fecha,$hora,$mConsulta)";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
?>