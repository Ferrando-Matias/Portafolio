<?php
//ESCRIBIR UN ARCHIVO TXT

$nombreArchivo = "archivo.txt";
$contenidoArchivo = "Estamos escribiendo un archivo";

//abrimos el archivo en modo escritura
$archivoCrear = fopen($nombreArchivo, "w");

//escribimos el archivo
fwrite($archivoCrear, $contenidoArchivo);

//cerramos el archivo
fclose($archivoCrear);