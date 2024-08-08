<!-- CONCATENACION DE CADENAS -->

<?php
if ($_POST) {
    $txtNombre = $_POST['Nombre'];
    $txtApellido = $_POST['Apellido'];
    echo "Hola " . $txtNombre . " " . $txtApellido;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - PHP - Concatenacion de Cadenas</title>
</head>

<body>
    <form action="" method="POST">
        <!-- El action del form indica a que archivo php va a enviar la info, si lo queremos enviar al mismo archivo podemos poner el nombre o bien no poner nada

        El method es mediante que metodo vamos a enviar la informacion:
            metodo POST: envia la informacion de manera oculta
            metodo GET: envia la informacion visible a traves de la URL
        -->
        Nombre:
        <input type="text" name="Nombre" id="">
        <br>
        Apellido:
        <input type="text" name="Apellido" id="">
        <br>
        <input type="submit" value="Enviar">
</body>

</html>