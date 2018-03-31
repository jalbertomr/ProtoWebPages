<?php
	$cadenaDeTexto="Esto es una cadena de texto";
	$fragmento=substr($cadenaDeTexto, 8,3);
	echo ("La cadena original es '$cadenaDeTexto'.<br>");
	echo ("Aplicamos 'substr(\$cadenaDeTexto, 8,3)'.<br>");
	echo ("El fragmento resultante es '$fragmento'.<br>");
	
	$cadenaFuente = "01234567890123456";
	$subcadena = substr($cadenaFuente, 7,4);
	echo ("La cadena original es '$cadenaFuente'.<br>");
	echo ("Aplicamos 'substr(\$cadenaFuente,7, 4)'.<br>");
	echo ("La subcadena resultante es $subcadena'.<br>"); 
?>
