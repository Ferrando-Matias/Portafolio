<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" autocomplete="ON">
        <label>Email</label> <input type="email" name="email" id="email"> <br><br>
        <label>Clave</label> <input type="password" name="clave" id="clave"> <br><br>
        <input type="submit" value="Ingresar">
    </form>

    <?php
        if(isset($_POST['email']) && isset($_POST['clave'])){
            require_once "procesos/login.php";
        }
    ?>
</body>
</html>