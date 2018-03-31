<?php
	$pais="ITALIA";
	switch ($pais){
		case "INGLATERRA":
			echo ("El usuario es inglés.");
			break;
		case "ALEMANIA":
			echo ("El usuario es alemán.");
			break;
		case "ITALIA":
			echo ("El usuario es italiano.");
			break;
		case "ESPAÑA":
			echo ("El usuario es español.");
			break;
		case "FRANCIA":
			echo ("El usuario es francés.");
			break;
		default:
			echo ("El usuario es de una nacionalidad no especificada en la lista.");
			break;
	}
?>
