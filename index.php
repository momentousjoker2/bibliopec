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
    <link rel="stylesheet" href="./assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="./assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="./assets/css/shared/style.css">
    <link rel="stylesheet" href="./assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="./assets/images/logo.ico"/>
</head>
<body>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form action="./pages/php/login.php" method="post">
                            <div class="form-group">
                                <label class="label">Usuario</label>
                                <div class="input-group">
                                    <input type="text" name="username" class="form-control" placeholder="Usuario" required >
                                    <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Contraseña</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="*********" required >
                                    <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Inicio sesion</button>
                            </div>
                        </form>
                        <div id="idMensaje" style="display: <?php  if ($_SESSION['Login']=='error') {echo ";";} else {echo "none;"; }?>;" class="alert alert-danger my-3" role="alert">
                            <p>El Usuario y/o contraseña no es correcto.</p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block g-login">
                                <img class="mr-3"  alt="">Registrar
                            </button>
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

<script>
    const queryString = window.location.search;
    if (queryString != "") {
        //?c=401
        const eCode = parseInt(queryString.replace("?c=", ""));
        if (eCode == 401) {
            document.getElementById("idMensaje").style.display = "block";
        }
    }
</script>
</body>
</html>

