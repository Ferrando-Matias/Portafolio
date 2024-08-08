<?php
//FUNCION JSON ENCONDE
// la inversa a decode, para brindar informacion en formato JSON

$persona = array("matias" => 26, "pedro" => 60);   //array con los datos
echo json_encode($persona);