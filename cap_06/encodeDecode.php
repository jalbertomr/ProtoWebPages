<?php
	$cadena="Esta es la cadena que usaremos para su codificaci�n";
	echo ("La cadena es: $cadena<br>");
	$cadenaCodificada=urlencode($cadena);
	echo ("La cadena codificada es: $cadenaCodificada<br>");
	$cadenaRecuperada=urldecode($cadenaCodificada);
	echo ("La cadena recuperada es: $cadenaRecuperada<br>");
?>
