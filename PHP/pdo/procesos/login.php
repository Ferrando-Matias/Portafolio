<?php
    require_once "php/connect.php";
    $email = $_POST['email'];
    $clave = md5($_POST['clave']);

    $consulta = $pdo->prepare("SELECT * FROM usuario WHERE email = ? AND clave = ?");
    $consulta->execute(array($email, $clave));
    if ($consulta->rowCount()>=1) {
        session_start();
        $fila = $consulta->fetch();
        $_SESSION['Nombre']= $fila['nombre'];
        $_SESSION['Apellido']= $fila['apellido'];
        $_SESSION['Email']= $fila['email'];
        $_SESSION['token'] = md5(uniqid(mt_rand(), true));
        header("Location: listado.php");
    }else{
        echo "Los datos no son reales";
    }