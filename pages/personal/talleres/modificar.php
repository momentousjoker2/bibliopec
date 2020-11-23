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
          <a class="nav-link" data-toggle="collapse" href="#ui-Personal" aria-expanded="false" aria-controls="ui-Personal">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">Empleados</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-Personal">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link " href="../personal/agregar.html">Agregar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../personal/modificar.html">Modificar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../personal/consultar.html">Consultar</a>
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
                <a class="nav-link" href="../usuario/modificar.html">Modificar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../usuario/consultar.html">Consultar</a>
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
            <div class="card">
            <div class="card-body">
              <h4 class="card-title">Talleres</h4>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="nombre-taller">Nombre del taller</label>
                  <input type="text" class="form-control" id="nombre-taller" disabled placeholder="Taller" autocomplete="off" style=" background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                </div>

              </br>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"  for="fechainicio" >Fecha de inicio</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" id="fechainicio" placeholder="dd/mm/yyyy" autocomplete="off"  style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"  for="fechafin" >Fecha de fin</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" id="fechafin" placeholder="dd/mm/yyyy" autocomplete="off"  style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                      </div>
                    </div>
                  </div>
                </div>

              </br>

                <div class="form-group">
                  <label for="nombre-taller">Horas totales del taller</label>
                  <input type="number" class="form-control" id="nombre-taller" placeholder="0" autocomplete="off" style=" background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                </div>

              </br>

                  <div class="form-group">
                      <label for="nombre-taller">Bibliotecaria</label>
                      <select class="form-control form-control-lg" name="idEmpleado">
                          <option selected disabled>Seleccioné una</option>
                          <?php
                          include '..\..\php\conexiones.php';

                          $querry = "Select idEmpleado, Nombre, Apellido From empleado";
                          echo $querry;
                          $sql=mysqli_query($conn,$querry);
                          while ($dat = mysqli_fetch_assoc($sql)) {
                              echo "<option value='$dat[idEmpleado]'>".$dat['Nombre'].' '.$dat['Apellido'].'</option>';
                          }
                          ?>
                      </select>
                  </div>

              </br>

                <button type="submit" class="btn btn-success mr-2">Guardar</button>
                <button class="btn btn-light">Cancel</button>
              </form>
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