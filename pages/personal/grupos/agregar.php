<?php
session_start();


if($_SESSION['user_rol']!='administrador'){

    if($_SESSION['user_rol']=='Usuario') {

        header('Location: /pages/usuarios/index.php');

    }else{
        $_SESSION['Login'] = 'error';
        header('Location: ../../index.php');
    }

}

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
            <a class="navbar-brand brand-logo" href="/index.php">
                <img src="/assets/images/logo.svg" alt="logo"/> </a>
            <a class="navbar-brand brand-logo-mini" href="/index.php">
                <img src="/assets/images/logo-mini.svg" alt="logo"/> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user-cog"></i></a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <p class="mb-1 mt-3 font-weight-semibold"><?php echo $_SESSION['user_name']; ?></p>
                            <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION["user_curp"]; ?></p>
                        </div>
                        <a class="dropdown-item" href="/pages/extra/Programador.php">Manual de programador<i class="dropdown-item-icon ti-power-off"></i></a>
                        <a class="dropdown-item" href="/pages/extra/Cliente.php">Manual de Usuario<i class="dropdown-item-icon ti-power-off"></i></a>
                        <a class="dropdown-item" href="#" onclick="alert('Datos de programadores \n Emmanuel Camarena Becerra \n Manuel Everardo Figueroa García \n Jessica Jazmin Gonzalez Romero \n Cristian Emmanuel Amezcua Moreno');">Datos de programador</a>
                        <a class="dropdown-item" href="/pages/php/logout.php">Cerrar Sesión<i class="dropdown-item-icon ti-power-off"></i></a>

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
                    <a class="nav-link" data-toggle="collapse" href="#ui-Personal" aria-expanded="false"
                       aria-controls="ui-Personal">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Empleados</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-Personal">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="../personal/agregar.php">Agregar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../personal/modificar.php">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../personal/consultar.php">Consultar</a>
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
                                <a class="nav-link" href="../talleres/agregar.php">Agregar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../talleres/modificar.php">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../talleres/consultar.php">Consultar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../talleres/Agregar_Usarios.php">Agregar Usuarios</a>
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
                                <a class="nav-link disabled" href="agregar.php">Agregar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="modificar.php">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="consultar.php">Consultar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="agregar_Usuarios.php">Agregar Usuarios</a>
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
                                <a class="nav-link" href="../vistas/consultar.php">consultar</a>
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
                <center>
                <h4 class="card-title">REGISTRO DE GRUPOS</h4>
                <p class="card-description">Ingrese datos del grupo</p>
              </center>
              <form class="forms-sample" id='formulario'>
                <div class="form-row">
                  <div class="col-md-2 mb-3">
                    <label for="validationDefault00">idTaller</label>
                    <input type="number" class="form-control" id="validationDefault00"  name="idTaller" readonly required>
                  </div>
                  <div class="col-md-3 mb-3">
            <label for="validationDefault04">Taller *</label>
            <select class="custom-select" id="validationDefault04" name='Taller' required>
              <option selected disabled value="1"></option>  
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault02">Escuela *</label>
            <input type="text" class="form-control" id="validationDefault02" name='Escuela'  required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault01">Nombre del encargado *</label>
            <input type="text" class="form-control" id="validationDefault01" name='Encargado'  required>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Registrar</button>
              </form>
              </div>
            </div> 
            <div class="footer">
              <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
                  * Campos obligatorios
                  </span>
                </span>
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
<script src="https://kit.fontawesome.com/78cdf3c4d1.js" crossorigin="anonymous"></script>

</body>
  <script>
    var sl = document.getElementById('validationDefault04');
      function talleres() {
        fetch('mTalleres.php',{
      method: 'GET'
      }).then(response =>response.text())
      .then(data =>{
        sl.innerHTML = data;
      });
      }
      talleres();
      sl.addEventListener('input',function(e) {
        let idTaller = document.getElementById('validationDefault00');
        let selectedOption = this.options[sl.selectedIndex];
        idTaller.value = selectedOption.value;
      });
      var formulario=document.getElementById('formulario');
    formulario.addEventListener('submit', function(e){
      e.preventDefault();
      let datos = new FormData(formulario);
      fetch('grabar.php',{
      method: 'POST',
      body: datos
  })
  .then(response =>response.text())
  .then(data =>{
      
      alert(data);
      let esc = document.getElementById('validationDefault02');
      esc.value ="";
      let enc = document.getElementById('validationDefault01');
      enc.value ="";
  });
    });
  </script>
</html>