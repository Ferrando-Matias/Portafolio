<?php
    function consultarSQL($query){
        // Hacemos la conexion a la base de datos
        $mysqli = new mysqli("localhost", "root", "", "curso_php");
        if(mysqli_connect_errno()){
             echo "Error en la conexion a la base de datos";
        }

        $mysqli-> set_charset("utf8"); //Especificamos el conjunto de caracteres que usamos en la conexion
        $mysqli-> autocommit(FALSE); //Desactivamos el autocommit (evitar que cuando se pase una consulta no se guarde automaticamente)
        $mysqli-> begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT); // Usamos un tipo de transaccion del tipo especificado

        // Guardamos en una variable (consulta) la consulta que realizamos y solo la ejecutamos si no ocurre ningun error
        if($consulta = $mysqli -> query($query)){ 
             // ejecutamos la transaccion si funciono todo
            $mysqli -> commit();
        }else{
            $mysqli -> rollback(); // cancelamos la transaccion si hubo error
        }
        return $consulta; //retornamos el valor de consulta (true/false)
    }