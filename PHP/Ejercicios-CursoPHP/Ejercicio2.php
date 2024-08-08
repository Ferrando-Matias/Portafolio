<!-- ENVIO DE INFO POR METODO POST -->
<?php

//Recibir informacion del formulario HTML

// Verificamos si hubo un envio antes de guardarlo en una variable
if ($_POST) {

    //Guardamos lo que recibimos de txtNombre en una variable
    $nombre = $_POST['txtNombre'];

    // echo "Hola " . $nombre;
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - PHP - Metodo POST</title>
</head>

<body>
    <form action="" method="POST">
        <!-- El action del form indica a que archivo php va a enviar la info, si lo queremos enviar al mismo archivo podemos poner el nombre o bien no poner nada

        El method es mediante que metodo vamos a enviar la informacion:
            metodo POST: envia la informacion de manera oculta
            metodo GET: envia la informacion visible a traves de la URL
        -->

        <input type="text" name="txtNombre" value="<?php echo $nombre; ?>">
        <input type="submit" value="Enviar">

    </form>
</body>

</html>