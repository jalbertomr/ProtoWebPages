<?php
	echo ("<u>TABLA DE GASTO DE COMBUSTIBLE</u><br>");
	$formato = "%'_7d * %'_3d = %'_3d<br>";
	echo ("L/diarios - Dias - Total<br>");
	for ($dia = 1; $dia <= 15; $dia++){
		printf($formato, 17, $dia, $dia*17);
	}
	
	echo ("<u>TABLA DE GASTO DE COMBUSTIBLE</u><br>");
	$formato = "%'_7.2f * %'_3.3f = %'_3d<br>";
	echo ("L/diarios - Dias - Total<br>");
	for ($dia = 1; $dia <= 15; $dia++){
		printf($formato, 17, $dia, $dia*17);
	}
	
?>
