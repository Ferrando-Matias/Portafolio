<?php
//CONEXION A BASES DE DATOS E INSERCION DE DATOS

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=albun", $usuario, $password);    //establecemos la conexion con la base de datos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // activamos caracteristicas de la conexion para que se activen los errores y enterarnos cuales son y poder informarlos

    $sql = "SELECT * FROM fotos"; //string de la consulta

    $sentencia = $conexion->prepare($sql);  //preparamos la consulta 
    $sentencia->execute();  //ejecutamos la consulta 

    $resultado = $sentencia->fetchAll();
    foreach ($resultado as $fotos) {
        echo $fotos['nombre'] . " - ";
        echo $fotos['ruta'] . "<br>";
    }

    echo "conexion establecida";
} catch (PDOException $error) {
    echo "conexion errona: " . $error;
}