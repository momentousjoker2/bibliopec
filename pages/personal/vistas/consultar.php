<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Biblioteca</title>
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
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> </a>
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
                <a class="nav-link" href="../talleres/agregar.html">Agregar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../talleres/modificar.html">Modificar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../talleres/consultar.html">Consultar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../talleres/Agregar_Usarios.html">Agregar Usuarios</a>
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
                <a class="nav-link " href="../usuario/consultar.html">Consultar</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-grupos" aria-expanded="false" aria-controls="ui-grupos">
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
          <a class="nav-link" data-toggle="collapse" href="#ui-Visitas" aria-expanded="false" aria-controls="ui-Visitas">
            <i class="menu-icon typcn typcn-coffee"></i>
            <span class="menu-title">Visitas</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-Visitas">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link disabled" href="../vistas/consultar.html">consultar</a>
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
              <h4 class="card-title">Consultar visitas</h4>
              <form class="forms-sample" id='formulario'>
                <div class="form-row">
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Mes</label>
                    <select class="custom-select" id="validationDefault04" name="mes" required>
                      <option selected disabled value="">...</option>
                      <option>Enero</option>
                      <option>Febrero</option>
                      <option>Marzo</option>
                      <option>Abril</option>
                      <option>Mayo</option>
                      <option>Junio</option>
                      <option>Julio</option>
                      <option>Agosto</option>
                      <option>Septiembre</option>
                      <option>Octubre</option>
                      <option>Noviembre</option>
                      <option>Diciembre</option>
                    </select>  
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Años</label>
                    <select class="custom-select" id="validationDefault05" name="ann" required>
                      <option selected disabled value="">...</option>
                      <?php
                        date_default_timezone_set('America/Mexico_City');
                        $fecha = getdate();
                        $lim = intval($fecha['year']);
                        for ($i = 2000; $i <= $lim; $i++) {
                          echo "<option value='$i'>$i</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03" style="opacity: 0;">l</label><br>
                    <button class="btn btn-primary" type="submit" id="btnBuscar">Buscar Visita</button>
                  </div>
                </div>
              </form>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">idVisita</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Coleccion</th>
                    <th scope="col">idUsuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Escolaridad</th>
                    <th scope="col">Ocupacion</th>
                    <th scope="col">Genero</th>
                  </tr>
                </thead>
                <tbody id='tbody'>

                </tbody>
              </table>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 All rights reserved.</span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"  integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"> </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"> </script>
</body>
<script>
  var formulario=document.getElementById('formulario');
    formulario.addEventListener('submit', function(e){
      e.preventDefault();
      var datos = new FormData(formulario);
      fetch('datos.php',{
      method: 'POST',
      body: datos
  })
  .then(response =>response.text())
  .then(data =>{
      
      var tb= document.getElementById('tbody');
      tb.innerHTML = data;
  });
    });
</script>
</html>