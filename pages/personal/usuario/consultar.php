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

    //aqui voy
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
                    <a class="nav-link" data-toggle="collapse" href="#ui-talleres" aria-expanded="false" aria-controls="ui-talleres">
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
                    <a class="nav-link" data-toggle="collapse" href="#ui-Usuarios" aria-expanded="false"  aria-controls="ui-Usuarios">
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
                                <a class="nav-link disabled" href="../usuario/consultar.html">Consultar</a>
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
                                <a class="nav-link" href="../vistas/consultar.html">consultar</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
		<?php
		include '..\..\php\conexiones.php';
		if(!@$_POST['id']){
			echo '
        <div class="main-panel">
            <div class="content-wrapper">
                <center>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">CONSULTA DE USUARIOS</h4>
                            <p class="card-description">Ingrese ID de Usuario </p>
                            <form class="forms-sample" method="post" action="consultar.php">
                                <div class="form-row">
                                    <div class="col-md-2 mb-3">
                                        <label for="id">ID Usuario:</label>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <input type="text" class="form-control" name="id" required>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Nombre Completo</label>
                                        <input type="text" class="form-control" name="Nombre" value="Mark" maxlength="35" disabled required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 mb-3">
                                        <label for="validationDefault03">Domicilio</label>
                                        <input type="text" class="form-control" name="Domicilio" disabled  required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Ciudad</label>
                                        <input type="text" class="form-control" name="Ciudad" disabled required>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="validationDefault03">CP</label>
                                        <input type="text" class="form-control" name="CP" disabled required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault03">Fecha de Nacimiento</label>
                                        <input type="text" class="form-control" name="FechaNacimiento" disabled required>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault03">Grado de Estudios</label>
                                            <input type="text" class="form-control" name="GradoEstudios" disabled required>
                                        </div>
										<div class="col-md-4 mb-3">
											<label for="validationDefault02">Genero</label>
                  							<input type="text" class="form-control" name="Genero" maxlength="30" required disabled>
                						</div>
										<div class="col-md-4 mb-3">
											<label for="validationDefault02">Ocupacion</label>
                  							<input type="text" class="form-control" name="Ocupacion" maxlength="30" required disabled>
                						</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </center>
            </div>
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 All rights reserved.</span>
                    </span>
                </div>
            </footer>
        </div>
';
		}else{
			$a = $_POST['id']; 
			$sql = "Select * from usuario where ID=".$a;
			$r=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($r);
			if(mysqli_num_rows($r)==1){
				//INSERT INTO `usuario`(`ID`, `Nombre`, `password`, `Domicilio`, `Ciudad`, `CP`, `Genero`, `Ocupacion`, `GradoEstudios`, `Fecha_Nacimiento`)
				$id =$row[0];$a =$row[1];$b=$row[3];$c=$row[4];$d=$row[5];$e=$row[6];$f=$row[7];$g=$row[8];$h=$row[9];
				echo '
        <div class="main-panel">
            <div class="content-wrapper">
                <center>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">CONSULTA DE USUARIOS</h4>
                            <p class="card-description">Ingrese ID de Usuario </p>
                            <form class="forms-sample" method="post" action="consultar.php">
                                <div class="form-row">
                                    <div class="col-md-2 mb-3">
                                        <label for="id">ID Usuario:</label>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <input type="text" class="form-control" name="id" required value='.$id.'>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <input class="btn btn-primary" type="submit" id="Busca" value="Buscar!" style="color: white; margin-left: 18%; font-size:large;">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Nombre Completo</label>
                                        <input type="text" class="form-control" name="Nombre" value="'.$a.'" maxlength="35" disabled required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 mb-3">
                                        <label for="validationDefault03">Domicilio</label>
                                        <input type="text" class="form-control" name="Domicilio" disabled  required value="'.$b.'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Ciudad</label>
                                        <input type="text" class="form-control" name="Ciudad" disabled required value="'.$c.'">
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="validationDefault03">CP</label>
                                        <input type="text" class="form-control" name="CP" disabled required value='.$d.'>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault03">Fecha de Nacimiento</label>
                                        <input type="text" class="form-control" name="FechaNacimiento" disabled required value='.$h.'>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault03">Grado de Estudios</label>
                                            <input type="text" class="form-control" name="GradoEstudios" disabled required value='.$g.'>
                                        </div>
										<div class="col-md-4 mb-3">
											<label for="validationDefault02">Genero</label>
                  							<input type="text" class="form-control" name="Genero" maxlength="30" required disabled value='.$e.'>
                						</div>
										<div class="col-md-4 mb-3">
											<label for="validationDefault02">Ocupacion</label>
                  							<input type="text" class="form-control" name="Ocupacion" maxlength="30" required disabled value='.$f.'>
                						</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </center>
            </div>
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 All rights reserved.</span>
                    </span>
                </div>
            </footer>
        </div>
';
		}}
		
	?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</body></html>
=======
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">

          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../../assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <p class="mb-1 mt-3 font-weight-semibold">Usuario</p>
                  <p class="font-weight-light text-muted mb-0">Correo</p>
                </div>
                <a class="dropdown-item">My Profile <i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:./partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Menú Principal</li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true" href="./index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title disabled">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse"  href="#ui-Personal" aria-expanded="false" aria-controls="ui-Personal">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Personal</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-Personal">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link " href="../../pages/personal/agregar.html">Agregar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/personal/modificar.html">Modificar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/personal/consultar.html">Consultar</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-permisos" aria-expanded="false" aria-controls="ui-permisos">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Permisos</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-permisos">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item" >
                    <a class="nav-link " href="../../pages/permisos/agregar.html">Agregar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/permisos/modificar.html">Modificar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/permisos/consultar.html">Consultar</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-talleres" aria-expanded="false" aria-controls="ui-talleres">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Talleres</span>
                <i class="menu-arrow"></i>
              </a>
              
              <div class="collapse" id="ui-talleres">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link " href="../../pages/talleres/agregar.html">Agregar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/talleres/modificar.html">Modificar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/talleres/consultar.html">Consultar</a>
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
                    <a class="nav-link" href="../../pages/grupos/agregar.html">Agregar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/grupos/modificar.html">Modificar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/grupos/consultar.html">Consultar</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-Usuarios" aria-expanded="false" aria-controls="ui-Usuarios">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Usuarios</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-Usuarios">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/usuario/agregar.html">Agregar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/usuario/modificar.html">Modificar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/usuario/consultar.html">Consultar</a>
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
                    <a class="nav-link" href="../../pages/vistas/agregar.html">Agregar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/vistas/modificar.html">Modificar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/vistas/consultar.html">Consultar</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper"> 
            <center>
				<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">CONSULTA DE USUARIOS</h4>
                    <p class="card-description">Ingrese sus ID de Usuario </p>
                    <form class="forms-sample">
						<div class="form-row">
                <div class="col-md-2 mb-3">
                  <label for="id">ID Usuario:</label>
							</div>
							<div class="col-md-2 mb-3">
                  <input type="text" class="form-control" id="id" required>
							</div>
							<div class="col-md-2 mb-3">
							<button class="btn btn-primary" type="submit">Buscar</button>
							</div>
						</div>
                      <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault01">Nombre</label>
                  <input type="text" class="form-control" id="validationDefault01" value="Mark" maxlength="35" disabled required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Apellidos</label>
                  <input type="text" class="form-control" id="validationDefault02" value="Otto" maxlength="30" disabled required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-5 mb-3">
                  <label for="validationDefault03">Domicilio</label>
                  <input type="text" class="form-control" id="validationDefault03" disabled required>
                </div>
				  <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Ciudad</label>
                  <input type="text" class="form-control" id="validationDefault06" disabled required>
                </div>
				  <div class="col-md-1 mb-3">
                  <label for="validationDefault03">CP</label>
                  <input type="text" class="form-control" id="validationDefault06" disabled required>
                </div>
				  <div class="col-md-3 mb-3">
                  <label for="validationDefault03">Fecha de Nacimiento</label>
                  <input type="text" class="form-control" id="validationDefault03"  disabled required>
                </div>
				  <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Grado de Estudios</label>
                  <input type="text" class="form-control" id="validationDefault03"  disabled required>
                </div>
              </div>
              </div>
              
              
                    </form>
                  </div>
                </div>  
			</center>
          </div>
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <!-- <script src="assets/js/shared/off-canvas.js"></script> -->
    <script src="../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
>>>>>>> Stashed changes:pages/usuario/consultar.html
</html>