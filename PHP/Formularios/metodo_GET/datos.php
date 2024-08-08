<?php
$email = $_GET['email'];
$contraseña = $_GET['contraseña'];
$estudio = $_GET['estudio'];
$materia = $_GET['materia'];


echo $email."<br>";
echo $contraseña."<br>";
echo $estudio."<br>";

foreach($materia as $mate){
    echo $mate."<br>";
}
 
/*La diferencia entre GET y POST es que en el primero se pueden ver los valores enviados
en la barra de direcciones y en el ultimo no */