<!-- OPERADORES RELACIONALES -->
<?php
if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];


    /*  < : menor
        <= : menor o igual
        > : mayor
        >= : mayor o igual
        == : igual
        != : diferente
        === : mismo tipo y dato

    */

    if ($valorA > $valorB) {
        echo "el mayor es el valor A: " . $valorA;
    } else {
        echo "el mayor es el valor B: " . $valorB;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 - PHP - Operadores Aritmeticos</title>
</head>

<body>
    <form action="" method="POST">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>