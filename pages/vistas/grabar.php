<?php
    include  '..\..\..\..\Listas\conexion.php';
    $idUsuario=$_POST['idUsuario'];
    $nombre=$_POST['nombre'];
    if ($nombre ==="") {
        if ($idUsuario <=0 ){
            $idUsuario =0;
        }
        $instruccion ="Select * from usuarios where idUsuario =".$idUsuario;
        $sql=mysqli_query($conn,$instruccion);
        if (mysqli_num_rows($sql) > 0){
            while ($dat = mysqli_fetch_assoc($sql)) {
                echo $dat['idUsuario'].','.$dat['apellidos'].','.$dat['nombre'].','.$dat['escolaridad'].','.$dat['Ocupacion'].','.$dat['genero'];
            }
        }
            //echo '<tr><td>'.$dat['idVisitas'].'</td><td>'.$dat['fecha'].'</td><td>'.$dat['Hora'].'</td><td>'.$dat['mConsulta'].'</td><td>'.$dat['idUsuario'].'</td><td>'.$dat['Apellidos'].' '.$dat['Nombre'].'</td><td>'.$dat['Escolaridad'].'</td><td>'.$dat['Ocupacion'].'</td><td>'.$dat['Genero'].'</td></tr>';       
            
    }else{
        
        $mconsulta=$_POST['mConsulta'];
        date_default_timezone_set('America/Mexico_City');
        $fecha = localtime(time(), true);
        $hora=$fecha['tm_hour'].":".$fecha['tm_min'];
        $fecha=date('Y-m-d H:i:s');
        //Falta el id de la visita se puede agregar o a la tabla Visitas darle la propiedad identity
        $sql = "insert into visitas(idUsuario, fecha, hora, mConsulta) values ($idUsuario, '$fecha','$hora','$mconsulta')";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        echo "Visita agregada";
    }
?>