<?php
    include 'https://bibliopec.000webhostapp.com/pages/php/conexiones.php';
    $mes = $_POST["mes"];
    $ann =  $_POST["ann"];
    if ($mes == '...' || $ann =='...') {
        echo 'Asigne ambos campos';
    }else{
        switch ($mes) {
            case "Enero":
                $mes =1;
                break;
            case "Febrero":
                $mes =2;
            break;
            case "Marzo":
                $mes =3;
                break;
            case "Abril":
                $mes =4;
            break;
            case "Mayo":
                $mes =5;
                break;
            case "Junio":
                $mes =6;
            break;
            case "Julio":
                $mes =7;
            break;
            case "Agosto":
                $mes =8;
            break;
            case "Septiembre":
                $mes =9;
            break;
            case "Octubre":
                $mes =10;
            break;
            case "Noviembre":
                $mes =11;
            break;
            case "Diciembre":
                $mes =12;
            break;
        }
    $instruccion ="Select V.idVisitas, V.fecha, V.Hora, V.mConsulta, U.idUsuario, 
    U.Apellidos, U.Nombre, U.Escolaridad, U.Ocupacion, U.Genero 
    from visitas As V Inner join USUARIOS AS U ON V.idUsuario = U.idUsuario 
    WHERE MONTH(V.fecha) =" . $mes . " AND YEAR(V.fecha) =".$ann;
    
    $sql=mysqli_query($enlace,$instruccion);
    while ($dat = mysqli_fetch_assoc($sql)) {
        
        echo '<tr><td>'.$dat['idVisitas'].'</td><td>'.$dat['fecha'].'</td><td>'.$dat['Hora'].'</td><td>'.$dat['mConsulta'].'</td><td>'.$dat['idUsuario'].'</td><td>'.$dat['Apellidos'].' '.$dat['Nombre'].'</td><td>'.$dat['Escolaridad'].'</td><td>'.$dat['Ocupacion'].'</td><td>'.$dat['Genero'].'</td></tr>';       
        }
    } 
?>