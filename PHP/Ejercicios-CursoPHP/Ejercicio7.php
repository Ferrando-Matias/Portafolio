<!-- CONSTANTES -->
<?php
//Variables
$edad = 26;
echo $edad . "<br>";
$edad = 40; //Cambiamos el valor de la variable
echo $edad . "<br>";

//Constantes
define("nombre", "Matias");  //palabra reservada (nombreConst,Valor)
echo nombre; //Mostramos la constante, no lleva signo $

//nombre="pedro"; marca error porque no se permite que cambie el valor de una constante

?>