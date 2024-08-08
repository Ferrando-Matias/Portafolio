<?php
// Usamos la variable de sesion
    session_start();
    if (!$_SESSION['verificar'] === true) {
        header("Location: index.php"); //redirigimos al inicio para que vuelva a iniciar sesion
    }
    echo $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer datos de la BD</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php
        require_once "php/conect.php"; // Llamamos a la clase de conexion
        $query = "SELECT * FROM usuario";
        $consulta1 = consultarSQL($query);
        /*
            creamos una variable (fila) para crear un array con todo lo que encuentre 
            en la BD y lo podemos recorrer con un while seleccionando los elementos de 
            distintas maneras...
            Con fetch_array(MYSQLI_NUM) recorremos los elementos de manera numerica,
            siempre arrancando con el cero.
            Con fetch_array(MYSQLI_ASSOC) recorremos los elementos llamandolos por su 
            nombre (id, nombre, apellido, email, clave). El nombre del campo siempre va 
            entre comillas simples
            Con fetch_array(MYSQLI_BOTH) podemos combinar ambas maneras
        */

        //llamamos a la pagina actualizar o eliminar y le enviamos el ID
        while($fila = $consulta1->fetch_array(MYSQLI_NUM)){
            echo "<tr>
            <td>".$fila[0]."</td>
            <td>".$fila[1]."</td>
            <td>".$fila[2]."</dh>
            <td>".$fila[3]."</td>
            <td><a href='actualizar.php?id=".$fila[0]."'>Actualizar</a></td> 
            <td><a href='eliminar.php?id=".$fila[0]."'>Eliminar</a></td>
        </tr>";
        }
    ?>
        
    </tbody>
    </table>
    <a href="logout.php">Cerrar sesion</a>
</body>
</html>