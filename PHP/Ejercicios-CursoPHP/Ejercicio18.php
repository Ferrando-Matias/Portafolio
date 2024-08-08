<?php
//FUNCIONES BASICAS
//https://www.php.net/manual/es/funcref.php

//Generar numero aleatorio
echo $numAleatorio = rand(1, 10) . "<br>"; //rand(numMinimo, numMaximo) siempre son numeros enteros

//Strings
/*sacar espacios en blanco 
    ltrim: del inicio de un string
    rtrim: del final de un string
    trim: del inicuo y final de un string
*/
$texto = "   esto Es Un Ejemplo   ";
echo ltrim($texto) . "<br>";

//convertir un string a mayusculas o minusculas
echo strtolower($texto) . "<br>"; //minusculas
echo strtoupper($texto) . "<br>"; //mayusculas

//convierte a mayuscula el primer caracter de un string
$p = "esto es un texto";
echo ucfirst($p) . "<br>";

//convierte a mayuscula el primer caracter cada palabra de un string
echo ucwords($p) . "<br>";

/*
    verificar si son numericos, strings o tipos de variables
        is_string()
        is_numeric()
        is_double()
        is_float()
        is_null()
        is_object()
        is_bool()
        is_array()
        is_int()
        isset() - determina si una variable esta definida y no es null
        
        unset() - destruye una o mas variables especificadas
        // destruir una sola variable
            unset($foo);
        // destruir un solo elemento de una matriz
            unset($bar['quux']);
        // destruir más de una variable
            unset($foo1, $foo2, $foo3);        
*/

//Funciones de fecha
echo $hoy = date(" D - M - Y ") . "<br>";
echo $hoy = date(" d - m - y ") . "<br>";
echo $hoy = date(" d - m  ") . "<br>";
echo $hoy = date(" D ") . "<br>";