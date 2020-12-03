<?php
/*session_start();


if($_SESSION['user_rol']!='administrador'){

    if($_SESSION['user_rol']=='Usuario') {

        header('Location: /pages/usuarios/index.php');

    }else{
        $_SESSION['Login'] = 'error';
        header('Location: ../../index.php');
    }

}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bibloteca</title>
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="../../../assets/css/shared/style.css">
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="../../../assets/images/logo.ico"/>
</head>
<body>
<div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="../index.php">
                <img src="../../../assets/images/logo.svg" alt="logo"/> </a>
            <a class="navbar-brand brand-logo-mini" href="../index.php">
                <img src="../../../assets/images/logo-mini.svg" alt="logo"/> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <p class="mb-1 mt-3 font-weight-semibold">Usuario</p>
                            <p class="font-weight-light text-muted mb-0">Correo</p>
                        </div>
                        <a class="dropdown-item">Mi perfil<i class="dropdown-item-icon ti-dashboard"></i></a>
                        <a class="dropdown-item">Cerrar Sesión<i class="dropdown-item-icon ti-power-off"></i></a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar " id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-category">Menú Principal</li>
                <li class="nav-item">
                    <a class="nav-link " href="../index.php">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title disabled">Tablero De inicio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-Personal" aria-expanded="false"
                       aria-controls="ui-Personal">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Personal</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-Personal">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="../personal/agregar.php">Agregar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../personal/modificar.php">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../personal/consultar.php">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-talleres" aria-expanded="false"
                       aria-controls="ui-talleres">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Talleres</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-talleres">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="agregar.php">Agregar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="modificar.php">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="consultar.php">Consultar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Agregar_Usarios.php">Agregar Usuarios</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-Usuarios" aria-expanded="false"
                       aria-controls="ui-Usuarios">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Usuarios</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-Usuarios">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="../usuario/modificar.php">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../usuario/consultar.php">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-grupos" aria-expanded="false"
                       aria-controls="ui-grupos">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Grupos</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-grupos">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="../grupos/agregar.html">Agregar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../grupos/modificar.html">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../grupos/consultar.html">Consultar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../grupos/agregar_Usuarios.html">Agregar Usuarios</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-Visitas" aria-expanded="false"
                       aria-controls="ui-Visitas">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Visitas</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-Visitas">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="../vistas/consultar.html">consultar</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>

        
        <div class="main-panel">
            <div class="content-wrapper">

                <?php


                if ($_POST['nombre'] == ""){


                    echo '
                            <form class="forms-sample" method="post"  action="modificar.php">
                                <center>
                                    <div class="card">
                                        <div class="card-body">
    
                                        <h4 class="card-title">Ingresa el nombre del taller:</h4>
                                        <div class="form-row">
                                            <div class="col-md-2 mb-3">
                                                <label for="id">Nombre del taller:</label>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <input type="text" class="form-control" name="nombre" required>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <button class="btn btn-primary" type="submit">Buscar</button>
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                </center>
                            </form>';
                }else {


                    include '../../../pages/php/conexiones.php';

                    $sql = mysqli_query($conn, "SELECT * FROM talleres WHERE Nombre= '" . $_POST['nombre'] . "'");
                    $fila = mysqli_fetch_array($sql);
                    $rowCount = mysqli_num_rows($sql);

                    if ($rowCount == 1) {
                        $ID=$fila['idTaller'];
                        $nombre = $fila['Nombre'];
                        $fechainicio = $fila['fecha_inicio'];
                        $fechafin = $fila['fecha_fin'];
                        $horas_taller = $fila['horas_taller'];
                        $idEmpleado = $fila['IdEmpleado'];
                        echo '
<form action="modificarT.php" method="post">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Talleres</h4>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group row">
                                <label for="nombre-taller">Nombre del taller</label>

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nombre-taller" value="' . $nombre . '" autocomplete="off" style=" background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="col-sm-9">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="fechainicio" >Fecha de inicio</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" value="' . $fechainicio . '" name="fechainicio" placeholder="dd/mm/yyyy" autocomplete="off"  style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"  for="fechafin" >Fecha de fin</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" value="' . $fechafin . '" name="fechafin" placeholder="dd/mm/yyyy" autocomplete="off"  style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                </div>
                            </div>
                        </div>
                    </div>

                    </br>

                    <div class="form-group">
                            <label for="horas-taller">Horas totales del taller</label>
                            <input type="number" class="form-control" name="horas-taller" value="' . $horas_taller . '" placeholder="0" autocomplete="off" style=" background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                    </div>

                    </br>

                    <div class="form-group">
                        <label for="nombre-taller">Bibliotecaria</label>
                        <select class="form-control form-control-lg" name="idEmpleado" onselect="' . $idEmpleado . '">
                        
    
                            <option selected disabled>Seleccioné una</option>
                            
                            ';
                        $querry = "Select ID, Nombre, Apellido From personal";
                        $sql = mysqli_query($conn, $querry);
                        while ($dat = mysqli_fetch_assoc($sql)) {
                            if ($dat[ID] != $idEmpleado)
                                echo "<option value='$dat[ID]'>" . $dat['Nombre'] . ' ' . $dat['Apellido'] . '</option>';
                            else
                                echo "<option selected='true'  value='$dat[ID]'>" . $dat['Nombre'] . ' ' . $dat['Apellido'] . '</option>';
                        }
                        echo '
                        </select>
                    </div>

                    </br>
                    <input hidden="true" id="ID" name="ID" value="'.$ID.'">

                    <button type="submit" class="btn btn-success mr-2">Guardar</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                </div>
            </div>

</form>';
                    } else {

                        echo '
                            <form class="forms-sample" method="post"  action="modificar.php">
                                <center>
                                    <div class="card">
                                        <div class="card-body">
    
                                        <h4 class="card-title"> Regristro no encontrado </h4>
           
                                                <input hidden="true" type="text" class="form-control" name="nombre">
                                                <button class="btn btn-primary" type="submit">Regresar</button>
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                </center>
                            </form>';


                    }

                }
                ?>


                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019  All rights reserved.</span>
                        </span>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>