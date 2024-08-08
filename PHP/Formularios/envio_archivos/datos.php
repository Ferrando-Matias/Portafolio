<?php
/*
echo $_FILES['archivo']['name']; //nombre del archivo
echo "<br>";
echo $_FILES['archivo']['type']; //tipo de archivo
echo "<br>";
echo $_FILES['archivo']['size']; //tamañod el archivo en bytes
echo "<br>";
echo $_FILES['archivo']['tmp_name']; //ruta temporal del archivo en el servidor
echo "<br>";
echo $_FILES['archivo']['error']; // cuando hay un error al enviar archivos
*/

//cuando recibimos el archivo lo guardamos en una carpeta determinada que nosotros querramos
$ruta = "archivos/".$_FILES['archivo']['name'];
if(move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta)){
    // si el archivo se mueve satifactoriamente..
    echo "archivo subido con exito";
}else{
    echo "error en la transferencia";
}