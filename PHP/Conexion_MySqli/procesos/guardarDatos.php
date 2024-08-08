<?php
    require_once "../php/conect.php"; // Llamamos a la clase de conexion
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $clave = md5($_POST['clave']);
    $query = "INSERT INTO usuario (nombre, apellido, email, clave) VALUES ('$nombre', '$apellido', '$email', '$clave')";

    if(consultarSQL($query)){
        echo "Datos guardados 3";
    }else{
        echo "Error 3";
    }