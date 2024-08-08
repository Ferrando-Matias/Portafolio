<?php
//CONSUMIR UNA API
$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

//desactivamos las opciones de compatibilidad para que nos deje leer el contenido JSON
$opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));

//guardamos lo obtenido de la url y desactivamos la restriccion del https para leer el contenido
$respuesta = file_get_contents($url, false, stream_context_create($opciones));

$objRespuesta = json_decode($respuesta);

//print_r($objRespuesta);

//nosotros tenemos que acceder a list que es donde esta la info de los videos que queremos usar
foreach ($objRespuesta->list as $video) {

?>
<ul>
    <li><?php echo $video->title; ?> | <?php echo $video->channel; ?></li>
</ul>
<?php } ?>