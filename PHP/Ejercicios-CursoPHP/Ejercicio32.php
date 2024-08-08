<?php
// VALORES INPUT FILE

if ($_POST) {
    print_r($_FILES);  // muestra la info del archivo que recibo

    print_r($_FILES['archivo']['name']);  //muestra solo el nombre del archivo

    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']); // vamos a mover el archivo con el nombre temporal (que es el original del archivo que el sistema operativo te esta enviando), lo vamos a guardar con el nombre original y le decimos que se copie en la misma carpeta
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 32 - PHP - Valores input file</title>
</head>

<body>
    <!-- el enctype="multipart/form-data" es para poder recibir todo tipo de archivos -->
    <form action="" method="POST" enctype="multipart/form-data">
        Imagen:
        <input type="file" name="archivo" id=""> <br>
        <input type="submit" value="Enviar informacion" name="enviar">
    </form>
</body>

</html>