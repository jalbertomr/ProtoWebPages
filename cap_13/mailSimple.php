<?php
// Se declaran los tres parámetros que se usarán en el correo.
  $destinatario="jalbertomr@yahoo.com";
  $asunto="Correo de prueba.";
  $mensaje="Esto es un correo para probar la función mail() de PHP.";
// Se intenta enviar el correo y se muestra un mensaje en la página con el resultado.
  if (mail ($destinatario, $asunto, $mensaje)){
    echo ("MENSAJE ENVIADO");
  } else {
    echo ("ENVIO FALLIDO");
  }
?>
