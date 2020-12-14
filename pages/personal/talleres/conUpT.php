<?php
include  '../../../pages/php/conexiones.php';
$idTaller = $_POST['idTaller'];
$instruccion = "Select  t.Nombre as taller,U.Nombre, U.Genero, U.GradoEstudios, U.Ocupacion from InsertarAtaller as i INNER JOIN talleres as t on i.idTaller=t.idTaller INNER JOIN usuario as U on i.idUsuario=U.ID WHERE i.idTaller=".$idTaller;

$sql=mysqli_query($conn,$instruccion);

while ($dat = mysqli_fetch_assoc($sql)) {

    echo "<tr>
            <td>$dat[taller]</td>
            <td>$dat[Nombre] </td>
            <td>$dat[Genero]</td>
            <td>$dat[GradoEstudios]</td>
            <td>$dat[Ocupacion]</td>
          </tr>";
}

?>
