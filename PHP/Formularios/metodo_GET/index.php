<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="datos.php" method="GET">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" required="">
        <br>
        <label for="estudio">Estudio</label>
        <select name="estudio" id="estudio">
            <option value="bachiller">Bachiller</option>
            <option value="universitario">Universitario</option>
        </select>
        <br>
        <label for="op1">
            <input type="checkbox" name="materia[]" value="Sociales" id="op1">
            Sociales
        </label>
        <br>
        <label for="op2">
            <input type="checkbox" name="materia[]" value="Naturales" id="op2">
            Naturales
        </label>
        <br>
        <label for="op3">
            <input type="checkbox" name="materia[]" value="Matematicas" id="op3">
            Matematicas
        </label>
        <br>
        <input type="submit" value="Enviar">

    </form>
    <?php
        
    ?>
</body>
</html>