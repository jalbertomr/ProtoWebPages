<?php
	define ("salto", "<br>\n");
//Se carga el script externo.
	require ("calculoIntereses.php");
	echo ("El capital solicitado es: ".$_POST["importe"]." euros.".salto);
	echo ("El tipo de inter�s es: ".$_POST["tipo"]." %.".salto);
	echo ("El plazo de amortizaci�n es de: ".$_POST["plazo"]." meses.".salto.salto);

	$pagoMensual=calculaCuota($_POST["importe"], $_POST["tipo"], $_POST["plazo"]);
	echo ("El importe de las cuotas es de: $pagoMensual euros mensuales".salto);
?>