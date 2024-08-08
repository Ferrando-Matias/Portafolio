<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Datos</title>
</head>
<body>
    <form action="./procesos/guardarDatos.php" method="POST">
        <label>Nombre</label><input type="text" id="nombre" name="nombre"><br><br>
        <label>Apellido</label><input type="text" id= "apellido" name="apellido"><br><br>
        <label>E-mail</label><input type="email" id="email" name="email"><br><br>
        <label>Clave</label><input type="password" id="clave" name="clave"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>