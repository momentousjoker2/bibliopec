<?php
    include  '..\..\..\..\Listas\conexion.php';
    $idGrupo = $_POST['idGrupo'];
    $instruccion = "SELECT GA.idUsuario, U.nombre, U.apellidos, U.genero, U.escolaridad, U.Ocupacion FROM grupos_alumnos AS GA INNER JOIN usuarios AS U ON GA.idUsuario = U.idUsuario WHERE GA.idGrupoAlumno = ".$idGrupo;
    $sql=mysqli_query($conn,$instruccion);
    while ($dat = mysqli_fetch_assoc($sql)) {
        echo "<tr><td>$dat[idUsuario]</td><td>$dat[nombre] $dat[apellidos]</td><td>$dat[genero]</td><td>$dat[escolaridad]</td><td>$dat[Ocupacion]</td></tr>";
    }

?>