<?php
session_start();
if (isset($_SESSION["usuario"])) {
    echo "Sesion iniciada" . ":<br>";
    echo "Usuario: " . $_SESSION["usuario"] . ". Estado: " . $_SESSION["estado"];
} else {
    echo "No se inicio sesion";
}