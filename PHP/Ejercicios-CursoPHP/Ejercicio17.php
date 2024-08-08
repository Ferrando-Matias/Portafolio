<?php

//FUNCIONES EN PHP

// si a un parametro le damos un valor vacio estamos indicando que no es obligatorio, estos tipos de parametros siempre van al final
function imprimirNombre($nombre, $apellido = "")
{
    //Rutinas (instrucciones)
    echo "Hola " . $nombre . " " . $apellido . "<br>";
}

imprimirNombre("matias", "ferrando");
imprimirNombre("manuel");