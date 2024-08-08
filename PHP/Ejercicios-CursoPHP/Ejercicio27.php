<?php
//METODOS ESTATICOS

class unaClase
{
    public static function unMetodo()
    {
        echo "Hola soy un metodo estatico <br>";
    }
}

$objeto = new unaClase();
$objeto->unMetodo();

unaClase::unMetodo();   //otra manera de llamar a un metodo estatico