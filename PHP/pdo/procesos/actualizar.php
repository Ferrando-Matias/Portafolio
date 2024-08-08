<?php
    require_once "php/connect.php";
    
    //recuperar los datos
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $consulta = $pdo->prepare("SELECT * FROM usuario WHERE id=?");
        $consulta->execute(array($id));
        if ($consulta->rowCount()>=1) {
            $fila = $consulta->fetch();
            echo '<form action="" method="POST">
            <input type="hidden" name="id" id="id" value="'.$fila['id'].'">
            <label>Nombre</label><input type="text" id="nombre" name="nombre" value="'.$fila['nombre'].'"><br><br>
            <label>Apellido</label><input type="text" id= "apellido" name="apellido" value="'.$fila['apellido'].'"><br><br>          
            <p> Para actualizar la clave por favor ingrese la nueva clave y repitala </p>
            <label>Clave nueva</label><input type="password" id="claven1" name="claven1" ><br><br>
            <label>Repetir Clave</label><input type="password" id="claven2" name="claven2" ><br><br>
            <input type="submit" value="Guardar">
        </form>
            ';
        }else{
            echo "Ocurrio un error";
        }
    }else{
        echo "error, no se pudo procesar la peticion";
    }
        
    //Actualizar datos
    if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];       
     
        if ($_POST['claven1'] != "" || $_POST['claven2'] !="") {
            $claveN1 = md5($_POST['claven1']);
            $claveN2 = md5($_POST['claven2']);
            if ($claveN1 != $claveN2) {
                echo "Las claves no coinciden";
            }else{
                $consulta1 = $pdo->prepare("UPDATE usuario SET nombre = ?, apellido =?, clave=? WHERE id= ?");
                if ($consulta1->execute(array($nombre,$apellido,$claveN2, $id))) {
                    echo "datos modificados";
                } 
            }
        }else{
            $consulta1 = $pdo->prepare("UPDATE usuario SET nombre = ?, apellido =? WHERE id= ?");
            if ($consulta1->execute(array($nombre,$apellido, $id))) {
                echo "datos modificados sin clave";
            }   
            
                
        }
    }