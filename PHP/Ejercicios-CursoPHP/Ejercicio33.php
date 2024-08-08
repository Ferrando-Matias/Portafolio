<?php
// FUNCION PARA JSON DECODE

/* Los formatos JSON son informacion que a veces nos envian algunas apis, las apis que podemos encontrar
        puede ser por ejemplo para consumir un video, cuando consumimos ese video, este tiene cierta informacion
        como el titulo, la url. Si yo quiero consumir esa info la vamos a recibir en JSON y la vamos a tener que 
        interpretar  */

//tenemos que convertir el tipo de formato string que recibimos de una api en un objeto o un array

//este seria el JSON que recibimos
$jsonContenido = '[       
                {"nombre":"matias","apellido":"ferrando"},
                {"nombre":"enzo","apellido":"perez"}
        ]';

$resultado = json_decode($jsonContenido); //decodificamos el json y lo guardamos en una variable


foreach ($resultado as $persona) {
        //print_r($persona); //puedo ver como me crea dos objetos con los datos del JSON
        echo "<br>persona: <br> ";
        echo $persona->nombre . "<br>";
        echo $persona->apellido . "<br>";
}