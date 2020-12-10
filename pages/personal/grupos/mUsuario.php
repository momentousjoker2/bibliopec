<?php
    include  '../../../pages/php/conexiones.php';
    $instruccion = "Select ID, Nombre From usuario";
    $sql=mysqli_query($conn,$instruccion);
    echo '<option selected disabled value=""></option>';
    while ($dat = mysqli_fetch_assoc($sql)) {
        echo "<option value='$dat[ID]'>".$dat['Nombre'].'</option>';       
        }
?>