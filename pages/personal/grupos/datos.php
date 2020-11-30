<?php
    include  '../../../pages/php/conexiones.php';
    $instruccion = "SELECT G.idGrupo, G.idTaller,T.Nombre,G.Escuela, G.Nombre_Encargado FROM grupos as G INNER JOIN talleres as T ON G.idTaller = T.idTaller ORDER BY G.idGrupo";
    $sql=mysqli_query($conn,$instruccion);
    while ($dat = mysqli_fetch_assoc($sql)) {
        
        echo "<tr><td>$dat[idGrupo]</td><td>$dat[idTaller]</td><td>".utf8_encode($dat['Nombre'])."</td><td>$dat[Escuela]</td><td>$dat[Nombre_Encargado]</td></tr>";       
        }
?>