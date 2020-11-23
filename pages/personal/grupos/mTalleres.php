<?php
    include  '..\..\..\..\..\Listas\conexion.php';
    $instruccion = "Select idTaller, Nombre From talleres";
    $sql=mysqli_query($conn,$instruccion);
    echo "<option selected disabled value=''></option> ";
    while ($dat = mysqli_fetch_assoc($sql)) {
        
        echo "<option value='$dat[idTaller]'>".utf8_encode($dat['Nombre']).'</option>';       
        }
    ?>