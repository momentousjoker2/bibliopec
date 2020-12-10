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
                <img src="/assets/images/logo.svg" alt="logo"/> </a>
            <a class="navbar-brand brand-logo-mini" href="../index.php">
                <img src="/assets/images/logo-mini.svg" alt="logo"/> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                       aria-expanded="false"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <p class="mb-1 mt-3 font-weight-semibold"><?php echo $_SESSION['user_name']; ?></p>
                            <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION["user_curp"]; ?></p>
                        </div>
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
                                <a class="nav-link " href="../personal/agregar.php">Agregar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../personal/modificar.php">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="../personal/consultar.php">Consultar</a>
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
                                <a class="nav-link" href="../grupos/agregar.php">Agregar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../grupos/modificar.php">Modificar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../grupos/consultar.php">Consultar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../grupos/agregar_Usuarios.php">Agregar Usuarios</a>
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

	<?php
		include '../../../pages/php/conexiones.php';
		if(!@$_POST['CURP']){
			echo '
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Personal De Biblioteca</h4>
			  <p class="card-description">Ingrese su CURP </p>
              <form class="forms-sample" method="post" action="consultar.php">
			  	<div class="form-row">
					<div class="col-md-2 mb-3">
						<button class="btn btn-primary" type="submit">Buscar</button>
					</div>
				</div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nombre</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Apellidos</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" disabled>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">CURP</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="CURP">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">RFC</label>
                      <div class="col-sm-9">
                        <input type="text" disabled class="form-control">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="fechainicio">Fecha de nacimiento </label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" autocomplete="off" disabled >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Fecha de inicio laborar </label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" autocomplete="off" disabled  >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Dirección </label>
                  <input type="text" class="form-control" autocomplete="off" disabled  >
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Ciudad </label>
                  <input type="text" class="form-control" autocomplete="off" disabled  >
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Código Postal </label>
                  <input type="text" class="form-control" autocomplete="off" disabled  >
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Teléfono fijo </label>
                  <input type="tel" class="form-control" autocomplete="off" disabled  >
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Teléfono celular</label>
                  <input type="tel" class="form-control" autocomplete="off" disabled  >
                </div>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Hora de entrada </label>
                      <div class="col-sm-9">
                        <input disabled type="time" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Hora de salida</label>
                      <div class="col-sm-9">
                        <input disabled type="time" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 All rights reserved.</span>
          </div>
        </footer>
      </div>';
		}else{
			$CURP = $_POST['CURP'];
			$sql = "Select * from personal where CURP='".$CURP."'";
			$r=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($r);
			if(mysqli_num_rows($r)==1){
				$a =$row[1];$b =$row[2];$c=$row[3];$d=$row[4];$e=$row[5];$f=$row[6];$g=$row[7];
				$h =$row[8];$i=$row[9];$j=$row[10];$k=$row[11];$l=$row[12];$m=$row[13];$n=$row[14];
				echo'<div class="main-panel">
        <div class="content-wrapper">

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Personal De Biblioteca</h4>
			  <p class="card-description">Ingrese su CURP </p>
              <form class="forms-sample" method="post" action="consultar.php">
			  	<div class="form-row">
					<div class="col-md-2 mb-3">
						<button class="btn btn-primary" type="submit">Buscar</button>
					</div>
				</div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nombre</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" disabled value="'.$a.'">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Apellidos</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" disabled value="'.$c.'">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">CURP</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="CURP" disabled value='.$f.'>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">RFC</label>
                      <div class="col-sm-9">
                        <input type="text" disabled class="form-control" value='.$e.'>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="fechainicio">Fecha de nacimiento </label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" autocomplete="off" disabled  value='.$d.'>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Fecha de inicio laborar </label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" autocomplete="off" disabled  value='.$k.' >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Dirección </label>
                  <input type="text" class="form-control" autocomplete="off" disabled   value="'.$g.'">
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Ciudad </label>
                  <input type="text" class="form-control" autocomplete="off" disabled   value="'.$h.'">
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Código Postal </label>
                  <input type="text" class="form-control" autocomplete="off" disabled  value='.$i.' >
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Teléfono fijo </label>
                  <input type="tel" class="form-control" autocomplete="off" disabled  value='.$j.' >
                </div>

                <div class="form-group">
                  <label for="nombre-taller">Teléfono celular</label>
                  <input type="tel" class="form-control" autocomplete="off" disabled  value='.$l.' >
                </div>

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Hora de entrada </label>
                      <div class="col-sm-9">
                        <input disabled type="time" class="form-control" value='.$m.'>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Hora de salida</label>
                      <div class="col-sm-9">
                        <input disabled type="time" class="form-control" value='.$n.'>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 All rights reserved.</span>
          </div>
        </footer>
      </div>';
			}
		}
	  ?>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"  integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"> </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"> </script>
</body>

</html>