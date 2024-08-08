<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Usando include estamos llamando a otro archivo php pero si algo falla solo da un mensaje de advertencia y el resto sigue funcionando -->
    <?php include("Ejercicio36_1.php") ?>

    <br>

    <!-- el require funciona igual al include pero si algo falla no se carga nada mas de lo que sigue -->
    <?php require_once("Ejercicio36_1.php") ?>
    <?php require("Ejercicio36_1.php") ?>


    <br>

    <?php echo "esto es una prueba"; ?>

    <!-- el include_once o require_once lo que hace es que solo se llame a ese archivo una sola vez -->
</body>

</html>