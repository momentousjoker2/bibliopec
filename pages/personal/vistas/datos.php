<?php
    include 'https://bibliopec.000webhostapp.com/pages/php/conexiones.php';
    $mes = $_POST["mes"];
    $ann = $_POST["ann"];
    $sql=mysqli_query($conn,"Select V.idVisita, V.fecha, V.Hora, V.mConsulta, U.idUsuario, 
    U.Apellidos, U.Nombre, U.Escolaridad, U.Ocupacion, U.Genero 
    from Visitas As V Inner join USUARIOS AS U ON V.idUsuario = U.idUsuario 
    WHERE MONTH(V.fecha) =" . $mes . ' AND YEAR(V.fecha) ='.$ann );
    while ($dat = mysqli_fetch_assoc($sql)) {
        $arr[]=$dat;
    }
    echo json_encode($arr);
?>