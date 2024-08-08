<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Corroboramos que la variable venga definida
        if (isset($_GET['id'])) {
            require_once "php/conect.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM usuario WHERE id = '$id'";
            $consulta1 = consultarSQL($query);
            $fila = $consulta1->fetch_array(MYSQLI_NUM);
            echo '<form action="./procesos/editarDatos.php" method="POST">
            <input type="hidden" id="id" name="id" value="'.$fila[0].'">
            <label>Nombre</label><input type="text" id="nombre" name="nombre" value="'.$fila[1].'"><br><br>
            <label>Apellido</label><input type="text" id= "apellido" name="apellido" value="'.$fila[2].'"><br><br>
            <label>E-mail</label><input type="email" id="email" name="email" value="'.$fila[3].'"><br><br>
            <p>Si quieres actualizar tu clave escribe la clave antigua y, posteriormente, escrube y repite la nueva clave</p> <br>
            <label>Clave</label><input type="password" id="clave" name="clave1"><br><br>
            <label>Nueva Clave</label><input type="password" id="clave" name="clave2"><br><br>
            <label>Repetir nueva clave</label><input type="password" id="clave" name="clave3"><br><br>
            <input type="submit" value="Actualizar">
            </form>';
        }else{
            echo "Ocurrio un error";
        }
    ?>
</body>
</html>