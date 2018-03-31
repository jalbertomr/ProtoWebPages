<?php
/* Incluimos el fichero que contiene el mensaje que le queremos enviar al usuario. */
  include ("mensaje.php");
/* Incluimos el archivon de phpMailer. */
  include ("class.phpmailer.php");
/* Implementamos un nuevo objeto de la clase phpMailer. */
  $correo = new PHPMailer();
/* A continuación se establecen llos valores de algunas propiedades del objeto, y se invoca a alguno de sus métodos, para preparar el mensaje antes de enviarlo al usuario.*/
/* En primer lugar le indicamos al objeto que el mensaje
es HTML, mediante el método al efecto.*/
  $correo->IsHTML(true);
/* Indicamos cual va a ser el servidor SMTP. */
  $correo->host = "localhost.com";
/* Indicamos el nombre del remitente. */
  $correo->From = "Remitente del correo";
/* Indicamos la dirección de corrreo del destinatario. */
  $correo->AddAddress("jalbertomr@yahoo.com");
/* Aquí incluimos la imagen que aparecerá en el mensaje, con su alias,
separando ambos parámetros con una coma. Si nuestro mensaje lleva más
de una imagen (no se lo aconsejo), invoque al método AddEmbeddedImage
tantas veces como sea necesario, y dele a cada imagen un alias único. */
  $correo->AddEmbeddedImage("imagen/cabeceraCorreo.gif",logotipo);
/* El asunto del mensaje. */
  $correo->Subject = "MENSAJE PUBLICITARIO";
/* La dirección de correo del remitente.*/
  $correo->FromName = "jalbertomr@yahoo.com";
/* El cuerpo del mensaje, que es la variable que hemos definido en el
archivo mensaje.php. */
  $correo->Body = $contenidoDelMensaje;
/* El máximo de caracteres por línea.*/
  $correo->WordWrap = 50;
/* Se intenta enviar el mensaje con el método Send del objeto y se informa
al usuario del resultado. */  
	if ($correo->Send()){
		echo ("MENSAJE ENVIADO CORRECTAMENTE.");
	} else {
		echo ("EL ENVÍO HA FALLADO.");
	}
?>
