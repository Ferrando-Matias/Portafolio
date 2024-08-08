<?php
//ABRIR UN ARCHIVO 
$archivo = "contenido.txt";

//abrimos el archivo en modo lectura con el "r"
$archivoAbierto = fopen($archivo, "r");

//leemos el contenido del archivo dandole el tamaño del mismo
$contenido = fread($archivoAbierto, filesize($archivo));

echo $contenido;