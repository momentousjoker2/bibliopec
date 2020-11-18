<?php
    include  '..\..\..\..\Listas\conexion.php';
    $instruccion = "Select idGrupo From grupos";
    $sql=mysqli_query($conn,$instruccion);
    while ($dat = mysqli_fetch_assoc($sql)) {
        echo "<option value='$dat[idGrupo]'>".$dat['idGrupo'].'</option>';       
        }
?>