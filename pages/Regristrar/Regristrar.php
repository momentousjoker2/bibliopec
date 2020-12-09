<?php
session_start();
ini_set("display_errors", false);

if($_SESSION['user_rol']=='Usuario'){
    header('Location: /pages/usuarios/index.php');
}else if($_SESSION['user_rol']=='administrador') {
    header('Location: /pages/personal/index.php');
}

if (!is_null($_SESSION['Login']))
    if ($_SESSION['Login']!='error')
        $_SESSION['Login']='no-login';

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
    <link rel="shortcut icon" href="/assets/images/logo.ico"/>
</head>
<body>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">

                        <center>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">CONSULTA DE USUARIOS</h4>
                                    <form class="forms-sample" method="post" action="Guardar.php">
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationDefault01">Nombre Completo</label>
                                                <input type="text" class="form-control" name="Nombre"   required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationDefault02">Password</label>
                                                <input type="password" class="form-control" name="Password" maxlength="30" required  >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationDefault01">Domicilio</label>
                                                <input type="text" class="form-control" name="Domicilio"   required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationDefault01">Ciudad</label>
                                                <input type="text" class="form-control" name="Ciudad"  required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationDefault01">CP</label>
                                                <input type="text" class="form-control" name="CP"  required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationDefault03">Fecha de Nacimiento</label>
                                                <input type="date" class="form-control" name="FechaNacimiento"  required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationDefault01">Grado Estudios</label>
                                                <select class="custom-select" id="GradoEstudios" name="GradoEstudios">
                                                    <option value="Preescolar">Preescolar</option>
                                                    <option value="Primaria">Primaria</option>
                                                    <option value="Secundaria">Secundaria</option>
                                                    <option value="Preparatoria">Preparatoria</option>
                                                    <option value="Universidad">Universidad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationDefault02">Genero</label>
                                                <select class="custom-select" id="validationDefault06" name="Genero" required>
                                                    <option value="Hombre">Hombre</option>
                                                    <option value="Mujer">Mujer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationDefault02">Ocupacion</label>
                                                <input type="text" class="form-control" name="Ocupacion" maxlength="30" required  >
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mr-2">Regristarme</button>

                                    </form>
                                </div>
                            </div>
                        </center>
                    </div>
                    </div>
                </div>
            </div>
        </div>
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

