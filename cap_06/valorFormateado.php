<?php
	$precio1 = 68.75;
	$precio2 = 54.35;
	$precio = $precio1 + $precio2;
	echo ("El valor de \$precio es $precio<br>");
	$formateado = sprintf ("%.2f €", $precio);
	echo ("El mismo valor formateado es $formateado<br>");
	$formateado = sprintf("%.2d decimal", $precio);
	echo ("El mismo valor formateado es $formateado<br>");
?>
