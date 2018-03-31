<?php
	$cadenaOriginal = "Esto es una cadena.";
	echo ("La cadena original es: $cadenaOriginal<br>");
// Se encripta la cadena.
	$cadenaCodificada = base64_encode($cadenaOriginal);
	echo ("La cadena codificada es: $cadenaCodificada<br>");
//Se invierten los caracteres.
	$cadenaInvertida = strrev($cadenaCodificada);
	echo ("La cadena codificada revertida es: $cadenaInvertida<br>");
//Se vuelven a inverir.
	$cadenaReinvertida = strrev($cadenaInvertida);
//Se desencripta la cadena.
	$cadenaRecuperada = base64_decode($cadenaReinvertida);
	echo ("La cadena recuperada es: $cadenaRecuperada<br>");
?>
