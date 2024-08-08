<?php
    require_once "../php/conect.php";
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $clave1 = $_POST['clave1'];
    $clave2 = $_POST['clave2'];
    $clave3 = $_POST['clave3'];
    
    //corroboramos que la clave original que puso sea la correcta
    $cons = "SELECT * FROM usuario WHERE id='$id'";
    $consulta1 = consultarSQL($cons);
    $fila = $consulta1->fetch_array(MYSQLI_NUM);
   

    if ($clave1!="" && $clave2!=="" && $clave3!=="") {
        if ($fila[4] == md5($clave1)) {
            if ($clave2 == $clave3) {
                $clave = md5($clave2);
                $campos = "nombre='$nombre', apellido='$apellido', email='$email', clave='$clave'";
            }else{
                echo "Las claves son distintas";
                exit();
            }
        }else{
            echo "Clave original incorrecta";
            exit();
        }        
    }else{
        $campos = "nombre='$nombre', apellido='$apellido', email='$email'";
    }

    $query = "UPDATE usuario SET $campos WHERE id='$id'";
    if (consultarSQL($query)) {
        echo "Datos Actualizados";
    }else{
        echo "No se pudo actualizar";
    }
    

    