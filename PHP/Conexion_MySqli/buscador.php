<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>
<body>
    <form action="" method="POST" autocomplete="off">
        <input type="text" name="palabra" id="palabra">
        <input type="submit" value="Buscar" name="" id="">
    </form>

    <?php
        if (isset($_POST['palabra'])) {
            require_once "php/conect.php";
            require_once "procesos/buscar.php";
        }
    ?>    
</body>
</html>