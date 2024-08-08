<?php
    // include "procesos/seguridad.php";    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Datos</title>
</head>
<body>
    <form action="procesos/guardar.php" method="POST">
        <label>Nombre</label><input type="text" id="nombre" name="nombre" required=""><br><br>
        <label>Apellido</label><input type="text" id= "apellido" name="apellido" required=""><br><br>
        <label>E-mail</label><input type="email" id="email" name="email" required=""><br><br>
        <label>Clave</label><input type="password" id="clave" name="clave" required=""><br><br>
        <input type="submit" value="Guardar">
    </form>

    <?php
        if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['clave'])) {
            require_once "php/connect.php";
            require_once "procesos/guardar.php";
        }
    ?>
</body>
</html>