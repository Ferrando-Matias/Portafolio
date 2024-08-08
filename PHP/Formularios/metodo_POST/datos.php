<?php
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$estudio = $_POST['estudio'];

$materia = $_POST['materia'];


echo $email."<br>";
echo $contraseña."<br>";
echo $estudio."<br>";

foreach($materia as $mate){
    echo $mate."<br>";
}
 
/*La diferencia entre GET y POST es que en el primero se pueden ver los valores enviados
en la barra de direcciones y en el ultimo no */