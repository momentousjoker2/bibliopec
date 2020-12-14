<?php
session_start();

if($_SESSION['user_rol']!='Usuario'){

    if($_SESSION['user_rol']=='administrador') {

        header('Location: /pages/personal/index.php');

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
    <link rel="stylesheet" href="/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="/assets/css/shared/style.css">
    <link rel="stylesheet" href="/assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="/assets/images/logo.ico" />
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
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user-cog"></i></a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <p class="mb-1 mt-3 font-weight-semibold"><?php echo $_SESSION['user_name']; ?></p>
                            <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION["user_ocupacion"]; ?></p>
                        </div>
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
                                <a class="nav-link " href="../visita/agregar.php">Agregar</a>
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
                                <a class="nav-link disabled" disabled="true" href="../usuarios/usuarios/usuarios.php">Perfil</a>
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

        <?php
        include '../../../pages/php/conexiones.php';


        $querry = "Select * from usuario where ID=".$_SESSION['id_user'];
        $sql=mysqli_query($conn,$querry);
        $dat = mysqli_fetch_assoc($sql);
        if ($dat['Genero']=='Masculino')
            $sexo ="<option selected value='Masculino'>Masculino</option><option value='Masculino'>Femenino</option>";
        else
            $sexo ="<option value='Masculino'>Masculino</option><option selected value='Masculino'>Femenino</option>";


        switch ($dat['GradoEstudios']){
            case 'Preescolar':
                $grado="
                <option select value='Preescolar'>Preescolar</option>
                <option value='Primaria'>Primaria</option>
                <option value='Secundaria'>Secundaria</option>
                <option value='Preparatoria'>Preparatoria</option>
                <option value='Universidad'>Universidad</option>
                ";
                break;
            case 'Primaria':
                $grado="
                <option value='Preescolar'>Preescolar</option>
                <option selected value='Primaria'>Primaria</option>
                <option value='Secundaria'>Secundaria</option>
                <option value='Preparatoria'>Preparatoria</option>
                <option value='Universidad'>Universidad</option>
                ";
                break;
            case 'Secundaria':
                $grado="
                <option value='Preescolar'>Preescolar</option>
                <option value='Primaria'>Primaria</option>
                <option selected value='Secundaria'>Secundaria</option>
                <option value='Preparatoria'>Preparatoria</option>
                <option value='Universidad'>Universidad</option>
                ";
                break;
            case 'Preparatoria':
                $grado="
                <option value='Preescolar'>Preescolar</option>
                <option value='Primaria'>Primaria</option>
                <option value='Secundaria'>Secundaria</option>
                <option selected value='Preparatoria'>Preparatoria</option>
                <option value='Universidad'>Universidad</option>
                ";
                break;
            case 'Universidad':
                $grado="
                <option value='Preescolar'>Preescolar</option>
                <option value='Primaria'>Primaria</option>
                <option value='Secundaria'>Secundaria</option>
                <option value='Preparatoria'>Preparatoria</option>
                <option selected value='Universidad'>Universidad</option>
                ";
                break;
        }
            echo '
  
                <center>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">CONSULTA DE USUARIOS</h4>
                            <form class="forms-sample" method="post" action="guardar.php">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Nombre Completo</label>
                                        <input type="text" class="form-control" name="Nombre"  value="'.$dat['Nombre'].'" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault01">Contraseña</label>
                                        <input type="text" class="form-control" name="password"  value="'.$dat['password'].'" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 mb-3">
                                        <label for="validationDefault03">Domicilio</label>
                                        <input type="text" class="form-control" name="Domicilio"   required value="'.$dat['Domicilio'].'">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault03">Ciudad</label>
                                        <input type="text" class="form-control" name="Ciudad"  required value="'.$dat['Ciudad'].'">
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="validationDefault03">CP</label>
                                        <input type="text" class="form-control" name="CP"  required value="'.$dat['CP'].'">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault03">Fecha de Nacimiento</label>
                                        <input type="text" class="form-control" name="FechaNacimiento"  required value="'.$dat['Fecha_Nacimiento'].'">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault03">Grado de Estudios</label>
                                             <select class="custom-select" id="validationDefault06" name="GradoEstudios" required ">
                                                    '.$grado.'
                                                </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault02">Genero</label>
                                                
                                                    <select class="custom-select" id="validationDefault06" name="Genero" required ">
                                                    '.$sexo.'
                                                </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationDefault02">Ocupacion</label>
                                            <input type="text" class="form-control" name="Ocupacion" maxlength="30" required  value="'.$dat['Ocupacion'].'">
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-success mr-2">Guardar</button>

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
        ';

        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/78cdf3c4d1.js" crossorigin="anonymous"></script>

</body>
</html>