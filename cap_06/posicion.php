<?php
	$cadena="Esta es la cadena en la que se buscar� una subcadena.";
	echo ("La cadena es: $cadena<br>");
	$subcadena="XXXX";
	echo ("La subcadena a buscar es: $subcadena<br>");
	$posicion=strpos ($cadena, $subcadena);
	if ($posicion) {
		echo ("La subcadena se inicia dentro de la cadena en la posici�n: $posicion.<br>");
	} else {
		echo ("La subcadena no forma parte de la cadena.<br>");
	}
?>
