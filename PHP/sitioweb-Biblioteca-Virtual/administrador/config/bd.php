<?php
$host = "localhost";
$bd = "sitio";
$usuario = "root";
$contrasenia = ""; //NO USAR ÑÑÑÑÑÑ

try {
    $conexion = new PDO("mysql:host=$host; dbname=$bd", $usuario, $contrasenia);
    if ($conexion) {
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}