<?php
    include "procesos/seguridad.php";    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer datos de la BD</title>
</head>
<body>
    <p>Bienvenido <?php echo $_SESSION['Nombre']; ?></p>
   
    <?php
        require_once "procesos/actualizar.php";           
    ?>
    
    <a href="cerrar.php?tk=<?php echo $_SESSION['token']; ?>">Cerrar sesion</a>
</body>
</html>