<?php
session_start();
($_SESSION['logueado'] == false) ? header("location:login.php") : "";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Integrando bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Portafolio</title>
</head>

<body>

    <div class="container">
        <a href="index.php">Inicio | </a>
        <a href="portafolio.php">Portafolio | </a>
        <a href="cerrar.php">Cerrar</a>