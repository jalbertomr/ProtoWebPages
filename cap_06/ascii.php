<?php   // ord("A"  y chr(65)
	$caracter="A";
	$valor=97;
	echo ("El car�cter '$caracter' (may�scula) tiene el codigo ASCII ".ord($caracter)."<br>");
	echo ("El valor $valor corresponde al car�cter '".chr($valor)."'<br>");
	$caracter="\\";
	echo ("El car�cter '$caracter' tiene el codigo ASCII ".ord($caracter)."<br>");
	$caracter = "/";
	echo ("El car�cter '$caracter' tiene el codigo ASCII ".ord($caracter)."<br>");
?>