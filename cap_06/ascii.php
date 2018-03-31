<?php   // ord("A"  y chr(65)
	$caracter="A";
	$valor=97;
	echo ("El carácter '$caracter' (mayúscula) tiene el codigo ASCII ".ord($caracter)."<br>");
	echo ("El valor $valor corresponde al carácter '".chr($valor)."'<br>");
	$caracter="\\";
	echo ("El carácter '$caracter' tiene el codigo ASCII ".ord($caracter)."<br>");
	$caracter = "/";
	echo ("El carácter '$caracter' tiene el codigo ASCII ".ord($caracter)."<br>");
?>