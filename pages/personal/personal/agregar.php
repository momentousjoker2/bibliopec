<?php
session_start();


//if($_SESSION['user_rol']!='administrador'){

  //  if($_SESSION['user_rol']=='Usuario') {

    //    header('Location: /pages/usuarios/index.php');

    //}else{
      //  $_SESSION['Login'] = 'error';
        //header('Location: ../../index.php');
    //}

//}

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
                <a class="nav-link disabled" disabled="true" href="../personal/agregar.php">Agregar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../personal/modificar.html">Modificar</a>
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
                <a class="nav-link" href="../talleres/consultar.php">Agregar Usuarios</a>
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

	<?php
	  include '..\..\php\conexiones.php';
	  if (!@$_POST['Nombre']){
		  echo '
    <div class="main-panel">
        <div class="content-wrapper">

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Personal De Biblioteca </h4>
              <form class="forms-sample"  method="post" action="agregar.php">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nombre</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Nombre" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Apellidos</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Apellidos" required>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">CURP</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="CURP" id="CURP" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">RFC</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="RFC" required>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="fechainicio">Fecha de nacimiento</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" autocomplete="off" style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" name="FechaNac" required>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Fecha de inicio laborar</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" autocomplete="off" style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" name="FechaInicioL" required>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Dirección</label>
                  <input type="text" class="form-control" autocomplete="off" name="Dirección" required>
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Ciudad </label>
                  <input type="text" class="form-control" autocomplete="off" name="Ciudad" required>
                </div>
				  
				<div class="row">
                  <div class="col-md-5">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Contraseña</label>
                      <div class="col-md-4">
                        <input type="password" class="form-control" name="Pass" id="Pass" required>
                      </div>
                    </div>
					<div class="form-group row">
                      <label class="col-md-3 col-form-label">Repetir Contraseña</label>
                      <div class="col-md-4">
                        <input type="password" class="form-control" name="Pass2" id="Pass2" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">CP</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="CP" required>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Teléfono fijo </label>
                  <input type="tel" class="form-control" autocomplete="off" name="Telefono" required>
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Teléfono celular </label>
                  <input type="tel" class="form-control" autocomplete="off" name="Celular" required>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Hora de entrada</label>
                      <div class="col-sm-9">
                        <input type="time" class="form-control" name="HEntrada" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Hora de salida</label>
                      <div class="col-sm-9">
                        <input type="time" class="form-control" name="HSalida" required>
                      </div>
                    </div>
                  </div>
                </div> 
                <button type="submit" class="btn btn-success mr-2" id="sub" disabled=true>Guardar</button>
                <button class="btn btn-light" type="button">Cancel</button>
				<input class="btn btn-success" type="button" id="Com" value="Comprobar" onclick="activar();">
              </form>
			  
			  <script type="text/javascript">
			  	function validar() {
        			var errores = 0;
        			var curp = document.getElementById("CURP").value;
					var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        			validado = curp.match(re);
					
    				if (!validado){  //Coincide con el formato general?
    					alert("La CURP NO es correcta");	
						return false;
					}
					
					var pass1  = document.getElementById("Pass").value;
					var pass2 =  = document.getElementById("Pass2").value;
					if (pass1 != pass2){
						alert("La contraseña no coincide");
						return false;
					}
        			return true;
					}
					
					function activar(){
					alert("pendejo");
						if (validar() == true){
							 document.getElementById("sub").disabled = false;
						}
					}
				}
			  </script>
			  
            </div>
          </div>
        </div>
      <footer class="footer">
        <div class="container-fluid clearfix">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 All rights reserved.</span>
        </div>
      </footer>
    </div>';
					  } else {
		  $a = $_POST['Nombre'];
		  $b = $_POST['Pass'];
		  $c = $_POST['Apellidos'];
		  $d = $_POST['FechaNac'];
		  $e = $_POST['RFC'];
		  $f = $_POST['CURP'];
		  $g = $_POST['Direccion'];
		  $h = $_POST['Ciudad'];
		  $i = $_POST['CP'];
		  $j = $_POST['Telefono'];
		  $k = $_POST['FechaInicioL'];
		  $l = $_POST['Celular'];
		  $m = $_POST['HEntrada'];
		  $n = $_POST['HSalida'];
		  $sql = "INSERT INTO personal (`Nombre`, `password`, `Apellido`, `Fecha_Nac`, `RFC`, `CURP`, `Domicilio`, `Ciudad`, `Codigo_Postal`, `Telefono`, `Fecha_Inicio`, `Celular`, `Hora_entrada`, `Hora_salida`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
		  mysqli_query( $conn, $sql );
		  mysqli_close( $conn );
		  echo "<script>window.location = 'http://bibliopec/pages/personal/personal/agregar.php'</script>";
	  }
	  ?>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>

</html>