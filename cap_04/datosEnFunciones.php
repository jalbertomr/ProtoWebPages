<?php
	function cuadrado($numero){
		$cuadrado = $numero * $numero;
		echo ("El cuadrado de $numero es $cuadrado.<br>");
	}
	$numero = 3;
	cuadrado( $numero);
	echo ("La variable \$numero vale $numero y es de tipo ".gettype($numero)."<br>");
	echo ("La variable \$cuadrado vale $cuadrado y es de tipo ".gettype($cuadrado)."<br>");
?>
