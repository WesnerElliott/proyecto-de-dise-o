<?php
$mail="wesner.arriola.jtr@educatrachos.hn";
$nombre = $_POST ["nombre"];
$pais = $_POST ["pais"];
$email = $_POST ["email"];
$mensaje = $_POST ["mensaje"];
$thank = "GRACIAS.html";
$message = "
nombre:".$nombre."
pais: ".$pais."
email: ".$email."
mensaje: ".mensaje."";
if (mail ($email , "formulario" , $message)) header ("location: 
$thank");

?>