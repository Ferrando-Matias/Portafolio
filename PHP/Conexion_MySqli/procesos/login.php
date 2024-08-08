<?php
    $email = $_POST['email'];
    $clave = md5($_POST['clave']);
    $query = "SELECT * FROM usuario WHERE email='$email' AND clave='$clave'";
    $consulta2= consultarSQL($query);
   //contamos cuantos registros seleccionamos con la consulta
   if ( $consulta2->num_rows >= 1) {
     $fila = $consulta2->fetch_array(MYSQLI_ASSOC);
     
     // Manejo de sesiones
     session_start();
     $_SESSION['user'] = $fila['nombre']." ".$fila['apellido']; // Creamos una variable de sesion y le damos un nombre entre comillas y le asignamos un valor
     $_SESSION['verificar'] = true;

     header("Location: seleccionar.php"); //abrimos la otra pagina
   }else{
        echo "DATOS INCORRECTOS";
   }