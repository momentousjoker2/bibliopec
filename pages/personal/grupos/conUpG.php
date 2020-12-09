<?php
    include  '../../../pages/php/conexiones.php';
    $idGrupo = $_POST['idGrupo'];
    $instruccion = "SELECT GA.idUsuario, U.Nombre, U.Genero, U.GradoEstudios, U.Ocupacion FROM grupos_alumnos AS GA INNER JOIN usuario AS U ON GA.idUsuario = U.ID WHERE GA.idGrupo = ".$idGrupo;
    $sql=mysqli_query($conn,$instruccion);
    while ($dat = mysqli_fetch_assoc($sql)) {
        echo "<tr><td>$dat[idUsuario]</td><td>$dat[Nombre] </td><td>$dat[Genero]</td><td>$dat[GradoEstudios]</td><td>$dat[Ocupacion]</td></tr>";
    }

?>