<!-- OPERADORES ARITMETICOS BASICOS -->
<?php
if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    //Suma
    $suma = $valorA + $valorB;
    echo "Suma: " . $suma . "<br>";

    //Resta
    $resta = $valorA - $valorB;
    echo "Resta: " . $resta . "<br>";

    //Multiplicacion
    $multiplicacion = $valorA * $valorB;
    echo "Multiplicacion: " . $multiplicacion . "<br>";

    //Division
    $division = $valorA / $valorB;
    echo "Division: " . $division . "<br>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - PHP - Operadores Aritmeticos</title>
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