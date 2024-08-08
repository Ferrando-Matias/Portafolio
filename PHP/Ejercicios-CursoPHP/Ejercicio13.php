<!-- Switch y manejo de botones -->

<?php
if ($_POST) {
    $boton = $_POST['btnValor'];
    switch ($boton) {
        case 1:
            echo "Presiono el boton 1";
            break;
        case 2:
            echo "Presiono el boton 2";
            break;
        case 3:
            echo "Presiono el boton 3";
            break;
        default:

            break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 - PHP - Switch y Manejo de Botones</title>
</head>

<body>
    <form action="" method="POST">
        <input type="submit" value="1" name="btnValor">
        <br>
        <input type="submit" value="2" name="btnValor">
        <br>
        <input type="submit" value="3" name="btnValor">
    </form>
</body>

</html>