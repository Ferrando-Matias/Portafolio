<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Para enviar archivos es necesario usar POST y agregarle el enctype-->
    <form action="datos.php" method="POST" enctype="multipart/form-data">
        <label for="">Archivo</label>
        <input type="file" id="" name="archivo">
        <br>       
        <input type="submit" value="Enviar">

    </form>
    <?php
        
    ?>
</body>
</html>