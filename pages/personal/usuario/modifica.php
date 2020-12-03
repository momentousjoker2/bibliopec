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
                                <a class="nav-link disabled" href="../usuario/modificar.php">Modificar</a>
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
                                <a class="nav-link" href="agregar.php">Agregar</a>
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
			$id = $_GET["id"];
			require '../../../pages/php/conexiones.php';
			$sql = mysqli_query($conn,"SELECT * FROM usuario WHERE id='$id'");
			$fila=mysqli_fetch_array($sql);
			$Nombre = $fila['Nombre'];
			$password = $fila['password'];
			$Domicilio = $fila['Domicilio'];
			$Ciudad = $fila['Ciudad'];
			$CP = $fila['CP'];
			$Genero = $fila['Genero'];
			$Ocupacion = $fila['Ocupacion'];
			$GradoE = $fila['GradoEstudios'];
			$FechaN = $fila['Fecha_Nacimiento'];
			
		?>
		<?php
		if($Nombre != ""){
		echo'
        <div class="main-panel">
            <div class="content-wrapper">
                <center>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">MODIFICAR DATOS DE USUARIO</h4>
                            <p class="card-description">Ingrese sus Cambios </p>
                            <form class="forms-sample" action="modded.php" method="post">
                                <div class="form-row">
                                    <div class="col-md-2 mb-3">
                                        <label for="id">ID Usuario</label>
                                        <input type="text" class="form-control" name="id" id="id" readonly required value='.$id.'>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Nombre</label>
                                        <input type="text" class="form-control"  name="Nombre" id="Nombre" value="'.$Nombre.'" maxlength="35" readonly required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 mb-3">
                                        <label for="validationDefault03">Domicilio</label>
                                        <input type="text" class="form-control" id="Domicilio"  name="Domicilio" required value="'.$Domicilio.'" maxlength="50">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Ciudad</label>
                                        <input type="text" class="form-control" id="Ciudad"  name="Ciudad" required value="'.$Ciudad.'" maxlength="30">
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="validationDefault03">CP</label>
                                        <input type="text" class="form-control" id="CP"  name="CP" required value="'.$CP.'" maxlength="5">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault03">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" id="FechaN"  name="FechaN" required value="'.$FechaN.'">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-7 mb-3">
                                            <label for="validationDefault05">Grado de Estudios</label>
                                            <select class="custom-select" id="GradoE" required  name="GradoE">
                                                <option selected readonly value="'.$GradoE.'">'.$GradoE.' - Actual</option>
                                                <option value="Preescolar">Preescolar</option>
                                                <option value="Primaria">Primaria</option>
                                                <option value="Secundaria">Secundaria</option>
                                                <option value="Preparatoria">Preparatoria</option>
                                                <option value="Universidad">Universidad</option>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-md-4 mb-3">
                                        <label for="validationDefault05">Género</label>
                  						<select class="custom-select" id="Genero" name="Genero" required>
                    						<option selected disabled value="'.$Genero.'">'.$Genero.'</option>
                    						<option value="Masculino">Masculino</option>
                    						<option value="Femenino">Femenino</option>
                  						</select>
                                    </div>
                                </div>
								<div class="form-row">
									<div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Ocupación</label>
                                        <input type="text" class="form-control" id="Ocupacion"  name="Ocupacion" required value="'.$Ocupacion.'" maxlength="16">
                                    </div>
									<div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Contraseña</label>
                                        <input type="password" class="form-control" id="pass1"  name="password" maxlength="32">
                                    </div>
									<div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Repetir Contraseña</label>
                                        <input type="password" class="form-control" id="pass2" maxlength="32">
                                    </div>
								</div>
                                <button class="btn btn-primary" type="submit" disabled=true>Guardar Cambios!</button>
								<button class="btn btn-light" type="button" id="Com" value="Comprobar" onclick="activar();">Comprobar</button>
                            </form>
							<script type="text/javascript">
			  					function validar() {
									var pass1  = document.getElementById("Pass").value;
									var pass2 = document.getElementById("Pass2").value;
									if (pass1 != pass2){
										alert("La contraseña no coincide");
										return false;
									}
        							return true;
									}
					
									function activar(){
										alert("Shet");
										if (validar() == true){
											document.getElementById("sub").disabled = false;
										}
									}
				
			  				</script>
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
        </div>';
		}else{
			echo '<div class="main-panel">
          <div class="content-wrapper"> 
            <center>
				<div class="card">
                  <div class="card-body">
                    <form class="forms-sample" method="post" action="agregar.php">
					<h4 class="card-title">EL USUARIO CON ESA ID NO EXISTE</h4>
                    </form>
                  </div>
                </div>  
			</center>
          </div>';
		}
	?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>



