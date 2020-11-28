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
                <a class="nav-link" href="../talleres/agregar.php">Agregar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="../talleres/modificar.php">Modificar</a>
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

	<?php
	  include '..\..\php\conexiones.php';
	  if (!@$_POST['Nombre']){
		  echo '<div class="main-panel">
          <div class="content-wrapper"> 
            <center>
				<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">REGISTRO DE USUARIOS</h4>
                    <p class="card-description">Ingrese sus Datos </p>
                    <form class="forms-sample" method="post" action="agregar.php">
                      <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault01">Nombre</label>
                  <input type="text" class="form-control" name="Nombre" maxlength="15" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Apellidos</label>
                  <input type="text" class="form-control" name="Apellido" maxlength="15" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-5 mb-3">
                  <label for="validationDefault03">Domicilio</label>
                  <input type="text" class="form-control" name="Domicilio" required maxlength="50">
                </div>
				  <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Ciudad</label>
                  <input type="text" class="form-control" name="Ciudad" required maxlength="30"> 
                </div>
				  <div class="col-md-1 mb-3">
                  <label for="validationDefault03">CP</label>
                  <input type="text" class="form-control" name="CP" required maxlength="5">
                </div></div>
				<div class="form-row">
				<div class="col-md-4 mb-3">
                  <label for="validationDefault03">Contraseña</label>
                  <input type="password" class="form-control" name="password" required maxlength="32">
                </div>
				  <div class="col-md-3 mb-3">
                  <label for="validationDefault03">Fecha de Nacimiento</label>
                  <input type="date" class="form-control" name="FechaNacimiento"  required >
                </div>
				<div class="col-md-4 mb-3">
                  <label for="validationDefault05">Género</label>
                  <select class="custom-select" id="Genero" name="Genero" required>
                    <option selected disabled value=""></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                </div>
				  <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault05">Grado de Estudios</label>
                  <select class="custom-select" id="GradoEstudios" name="GradoEstudios" required>
                    <option selected disabled value=""></option>
                    <option value="Preescolar">Preescolar</option>
                    <option value="Primaria">Primaria</option>
                    <option value="Secundaria">Secundaria</option>
					  <option value="Preparatoria">Preparatoria</option>
					  <option value="Universidad">Universidad</option>
                  </select>
                </div>
				<div class="col-md-6 mb-3">
                  <label for="validationDefault03">Ocupación</label>
                  <input type="text" class="form-control" name="Ocupacion" required maxlength="16">
                </div>
				
              </div>
              </div>
              
              <input class="btn btn-primary" type="submit" id="Save" value="Registrarme!" style="color: white; margin-left: 18%; font-size:large;">
                    </form>
                  </div>
                </div>  
			</center>
          </div>

          <footer class="footer">
            <div class="container-flunameclearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019  All rights reserved.</span>
              </span>
            </div>
          </footer>
        </div>';

	  }else{
		$a = $_POST['Nombre'];
		  $ap = $_POST['Apellido'];
		  $b = $_POST['password'];	  
		  $c = $_POST['Domicilio'];
		  $d = $_POST['Ciudad'];
		  $e = $_POST['CP'];
		  $f = $_POST['Genero'];
		  $g = $_POST['Ocupacion'];
		  $h = $_POST['GradoEstudios'];
		  $i = $_POST['FechaNacimiento'];
		  $na = $a." ".$ap;
		  $sql = "INSERT INTO usuario(`Nombre`, `password`, `Domicilio`, `Ciudad`, `CP`, `Genero`, `Ocupacion`, `GradoEstudios`, `Fecha_Nacimiento`) VALUES ('$na','$b','$c','$d','$e','$f','$g','$h','$i')";
		  mysqli_query( $conn, $sql );
		  $sql = "Select ID from usuario where Nombre='".$na."' AND Fecha_Nacimiento='".$i."'";
		  echo 'alert("'.$sql.'")';			
		  $r=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($r);
		  	$id=0;
			if(mysqli_num_rows($r)==1){
				$id = $row[0];
			}
		  mysqli_close( $conn );
		  $he = 'http://bibliopec/pages/personal/usuario/agregado.php?id='.$id;
		  echo "<script>window.location = '".$he."'</script>";
		  
	  }
    
		?>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
=======
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bibloteca</title>
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="../../assets/css/shared/style.css">
    <link rel="stylesheet" href="../../assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="/index.php">
            <img src="../../assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="/index.php">
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
                    <h4 class="card-title">REGISTRO DE USUARIOS</h4>
                    <p class="card-description">Ingrese sus Datos </p>
                    <form class="forms-sample">
                      <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault01">Nombre</label>
                  <input type="text" class="form-control" id="validationDefault01" value="Mark" maxlength="35" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Apellidos</label>
                  <input type="text" class="form-control" id="validationDefault02" value="Otto" maxlength="30" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-5 mb-3">
                  <label for="validationDefault03">Domicilio</label>
                  <input type="text" class="form-control" id="validationDefault03" required>
                </div>
				  <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Ciudad</label>
                  <input type="text" class="form-control" id="validationDefault06" required>
                </div>
				  <div class="col-md-1 mb-3">
                  <label for="validationDefault03">CP</label>
                  <input type="text" class="form-control" id="validationDefault06" required>
                </div>
				  <div class="col-md-3 mb-3">
                  <label for="validationDefault03">Fecha de Nacimiento</label>
                  <input type="date" class="form-control" id="validationDefault03"  required>
                </div>
				  <div class="form-row">
                <div class="col-md-7 mb-3">
                  <label for="validationDefault05">Grado de Estudios</label>
                  <select class="custom-select" id="validationDefault04" required>
                    <option selected disabled value=""></option>
                    <option value="Preescolar">Preescolar</option>
                    <option value="Primaria">Primaria</option>
                    <option value="Secundaria">Secundaria</option>
					  <option value="Preparatoria">Preparatoria</option>
					  <option value="Universidad">Universidad</option>
                  </select>
                </div>
              </div>
              </div>
              
              <button class="btn btn-primary" type="submit">Registrarme!</button>
                    </form>
                  </div>
                </div>  
			</center>
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