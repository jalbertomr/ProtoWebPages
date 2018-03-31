<?php
	$cadena="Esta es la cadena en la que se buscará una subcadena.";
	echo ("La cadena es: $cadena<br>");
	$subcadena="la cadena";
	echo ("La subcadena a buscar es: $subcadena<br>");
	if (strstr ($cadena,$subcadena)){
		echo ("La subcadena SI existe dentro de la cadena.<br>");
	} else {
		echo ("La subcadena NO existe dentro de la cadena.<br>");
	}
?>
