<?php
//CONEXION A BASES DE DATOS E INSERCION DE DATOS

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=albun", $usuario, $password);    //establecemos la conexion con la base de datos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // activamos caracteristicas de la conexion para que se activen los errores y enterarnos cuales son y poder informarlos

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'blablabla', 'imagen.jpg');"; //string de la consulta

    $conexion->exec($sql);  //ejecutamos la consulta de insercion

    echo "conexion establecida";
} catch (PDOException $error) {
    echo "conexion errona: " . $error;
}