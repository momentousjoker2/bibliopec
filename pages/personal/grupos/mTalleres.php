<?php
    include  '../../../pages/php/conexiones.php';
    $instruccion = "Select idTaller, Nombre From talleres";
    $sql=mysqli_query($conn,$instruccion);
    echo "<option selected disabled value=''></option> ";
    while ($dat = mysqli_fetch_assoc($sql)) {
        
        echo "<option value='$dat[idTaller]'>".$dat['Nombre'].'</option>';       
        }
    ?>