<?php
    require_once "../php/connect.php";
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $clave = md5($_POST['clave']);

    $consulta = $pdo->prepare("INSERT INTO usuario (nombre, apellido, email, clave) VALUES (?, ?, ?, ?)");

    /*Otra forma es:

    $consulta = $pdo->prepare("INSERT INTO usuario (nombre, apellido, email, clave) VALUES (:nombre, :apellido, :email, :clave)");

    $consulta->bindParam(':nombre',$nombre);
    $consulta->bindParam(':apellido',$apellido);
    $consulta->bindParam(':email',$email);
    $consulta->bindParam(':clave',$clave);

    o tambien...

    $consulta = $pdo->prepare("INSERT INTO usuario (nombre, apellido, email, clave) VALUES (?, ?, ?, ?)");

    /*$consulta->bindParam(1,$nombre);
    $consulta->bindParam(2,$apellido);
    $consulta->bindParam(3,$email);
    $consulta->bindParam(4,$clave);

    ------------------------------------------------------------

    if ($consulta->execute()) {
        echo "Datos almacenados";
    }else{
        echo "error al guardar";
    }
    */

    if ($consulta->execute(array($nombre,$apellido,$email,$clave))) {
        echo "Datos almacenados";
    }else{
        echo "error al guardar";
    }