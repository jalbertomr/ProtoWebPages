<?php
	function cuadrado($numero){
		$numero*=$numero;
		return $numero;
	}
	$numero=3;
	$cuadrado=cuadrado($numero);
	echo ("El cuadrado del n�mero $numero es $cuadrado.");
?>
