<?php
    include  '..\..\..\..\Listas\conexion.php';
    $instruccion = "Select idUsuario, apellidos, nombre From usuarios";
    $sql=mysqli_query($conn,$instruccion);
    echo '<option selected disabled value="1"></option>';
    while ($dat = mysqli_fetch_assoc($sql)) {
        echo "<option value='$dat[idUsuario]'>".utf8_encode($dat['nombre']).' '.utf8_encode($dat['apellidos']).'</option>';       
        }
?>