<?php
	$pais="ITALIA";
	switch ($pais){
		case "INGLATERRA":
			echo ("El usuario es ingl�s.");
			break;
		case "ALEMANIA":
			echo ("El usuario es alem�n.");
			break;
		case "ITALIA":
			echo ("El usuario es italiano.");
			break;
		case "ESPA�A":
			echo ("El usuario es espa�ol.");
			break;
		case "FRANCIA":
			echo ("El usuario es franc�s.");
			break;
		default:
			echo ("El usuario es de una nacionalidad no especificada en la lista.");
			break;
	}
?>
