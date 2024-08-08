<?php
    require_once "php/connect.php";
    $id = $_GET['id'];
    $consulta2 = $pdo->prepare("DELETE FROM usuario WHERE id = ?");
    if ($consulta2->execute(array($id))) {
        echo "Datos Eliminados";
    }else{
        echo "Error al eliminar los datos";
    }