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
    <link rel="shortcut icon" href="../../../assets/images/logo.ico" />
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
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!--Menu inicio-->
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
                <!--Submenu personal-->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-Personal" aria-expanded="false" aria-controls="ui-Personal">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Visitas</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-Personal">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="./agregar.php">Agregar</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Submenu personal fin-->

                <!--Submenu talleres-->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-talleres" aria-expanded="false"
                       aria-controls="ui-talleres">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Usuario</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-talleres">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="../talleres/modificar.php">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../talleres/consultar.php">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Submenu talleres fin-->

            </ul>
        </nav>
        <!--Fin de menu creo-->

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Talleres</h4>
                        <form class="forms-sample" method="post" action="./guardar.php">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="hora_llegada">Hora de llegada</label>
                                    <input type="time" name="hora_llegada" class="form-control"  placeholder="0" autocomplete="off" style=" background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                </div>

                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="hora_salida">Hora de salida</label>
                                    <input type="time" name="hora_salida" class="form-control"  placeholder="0" autocomplete="off" style=" background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault06">Material</label>
                                <select class="custom-select" id="validationDefault06" name="consulta" required>
                                    <option selected disabled value=""></option>
                                    <option value="Ninguna">Ninguna</option>
                                    <option value="Consulta">Colección consulta</option>
                                    <option value="General">Colección general</option>
                                    <option value="Infantil">Colección infantil</option>
                                </select>


                            </div>
                            <button type="submit" class="btn btn-success mr-4">Regristar visita</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019  All rights reserved.</span>
                    </span>
                </div>
            </footer>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>