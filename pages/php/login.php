<?php
session_start();

    $conn = new PDO("mysql:host=mysql-bibliopec.alwaysdata.net;dbname=bibliopec_db;charset=utf8", 'bibliopec', '3bcHABETUjkl');
    //$conn = new PDO("mysql:host=localhost;dbname=bibliopec_db;charset=utf8", 'bibliopec', '3bcHABETUjkl');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $queryA = $conn->prepare("SELECT * FROM personal WHERE Nombre=? AND password=?");
    $queryB = $conn->prepare("SELECT * FROM usuario WHERE Nombre=? AND Password=?");

    $queryA->bindParam(1, $username,PDO::PARAM_STR);
    $queryA->bindParam(2, $password,PDO::PARAM_STR);
    $queryA->execute();
    $countA=$queryA->rowCount();
    $resultA=$queryA->fetchAll();

    $queryB->bindParam(1, $username,PDO::PARAM_STR);
    $queryB->bindParam(2, $password,PDO::PARAM_STR);
    $queryB->execute();
    $countB=$queryB->rowCount();
    $resultB=$queryB->fetchAll();

    if ($countA>=1) {

        $_SESSION['Login']='ok';
        $_SESSION['user_rol'] = 'administrador';
        $_SESSION['user_name']=$resultA[0]['Nombre']." ".$resultA[0]['Apellido'];
        $_SESSION['user_curp']=$resultA[0]['CURP'];


        header('Location: /pages/personal/index.php');

    } else if($countB>=1) {

        $_SESSION['Login']='ok';
        $_SESSION['user_rol'] = 'Usuario';
        $_SESSION['user_name']=$resultB[0]['Nombre'];
        $_SESSION['user_ocupacion']=$resultB[0]['Ocupacion'];
        $_SESSION['id_user']=$resultB[0]['ID'];

        header('Location: /pages/usuarios/index.php');

    }else {
        $_SESSION['Login']='error';

        header('Location: ../../index.php');
    }







