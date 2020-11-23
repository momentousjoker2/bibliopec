<?php
session_start();

    $conn = new PDO("mysql:host=localhost;dbname=id15146877_bibliopec;charset=utf8", 'id15146877_admin', 'JxzTyKmVZ@zM!-~5');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $queryA = $conn->prepare("SELECT * FROM empleado WHERE Nombre=? AND Password=?");
    $queryB = $conn->prepare("SELECT * FROM usuarios WHERE Nombre=? AND Password=?");

    $queryA->bindParam(1, $username,PDO::PARAM_STR);
    $queryA->bindParam(2, $password,PDO::PARAM_STR);
    $queryA->execute();
    $countA=$queryA->rowCount();

    $queryB->bindParam(1, $username,PDO::PARAM_STR);
    $queryB->bindParam(2, $password,PDO::PARAM_STR);
    $queryB->execute();
    $countB=$queryB->rowCount();
    $result=$queryB->fetchAll();

    if ($countA>=1) {

        $_SESSION['Login']='ok';
        $_SESSION['user_rol'] = 'administrador';

        header('Location: /pages/personal/index.php');

    } else if($countB>=1) {

        $_SESSION['Login']='ok';
        $_SESSION['user_rol'] = 'Usuario';
        $_SESSION['id_user']=$result[0]['idUsuario'];

        header('Location: /pages/usuarios/index.php');

    }else {
        $_SESSION['Login']='error';

        header('Location: ../../index.php');
    }







