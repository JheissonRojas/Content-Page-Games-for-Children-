<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por    " . $nombre . "  ,
 de la empresa   "  . $empresa . " \r\n";
$mensaje .= "Su e-mail es:  " . $mail . " \r\n";
$mensaje .= "Su telefono es:  " . $telefono . " \r\n";
$mensaje .= "Mensaje:  " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el  " . date('d/m/Y', time());

$para = 'didacticoshouse@gmail.com';
$asunto = 'informacion';

mail($para, $asunto, utf8_decode($mensaje), $header);

$titulo_categoria='';

$imagen_1='';
$imagen_2='';
$imagen_3='';

$titulo='MENSAJE RNVIADO CORRECTAMENTE';

//$enlace='';
$descripcion='


';
$edad='';
$caracteristicas=' ';


include 'plantilla_pagina_conozcanos.php';





?>