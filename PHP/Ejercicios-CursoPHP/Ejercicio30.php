<?php
// SESIONES
//nos sirven para mantener informacion en cualquier pagina mientras el navegador este abierto

session_start();    // iniciamos la sesion

$_SESSION["usuario"] = "admin";    //creamos una variable de tipo sesion
$_SESSION["estado"] = "logueado";

echo "Sesion iniciada" . ":<br>";
echo "Usuario: " . $_SESSION["usuario"] . ". Estado: " . $_SESSION["estado"];