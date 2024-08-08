<?php
    require_once "php/conect.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM usuario WHERE id='$id'";
        if (consultarSQL($query)) {
            echo "Datos eliminados";
        }else{
            echo "No se pudo eliminar los datos";
        }
    }else{
        echo "Error";
    }
    