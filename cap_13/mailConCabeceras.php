<?php
// Se declaran los tres parámetros que se usarán en el correo.
  $destinatario="pruebas@localhost.com";
  $asunto="Correo de prueba.";
  $mensaje="Esto es un correo para probar la función mail() de PHP.";
  $cabeceras="From: usuario@localhost.com"."\r\n"."Reply-To: webmaster@localhost.com";
// Se intenta enviar el correo y se muestra un mensaje en la página con el resultado.
  if (mail ($destinatario, $asunto, $mensaje, $cabeceras)){
    echo ("MENSAJE ENVIADO");
  } else {
    echo ("ENVIO FALLIDO");
  }
?>
