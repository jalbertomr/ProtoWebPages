<?php
// Se declaran los tres par�metros que se usar�n en el correo.
  $destinatario="jalbertomr@yahoo.com";
  $asunto="Correo de prueba.";
  $mensaje="Esto es un correo para probar la funci�n mail() de PHP.";
// Se intenta enviar el correo y se muestra un mensaje en la p�gina con el resultado.
  if (mail ($destinatario, $asunto, $mensaje)){
    echo ("MENSAJE ENVIADO");
  } else {
    echo ("ENVIO FALLIDO");
  }
?>
