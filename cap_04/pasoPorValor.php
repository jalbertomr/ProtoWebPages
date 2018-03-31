<?php
	function cuadrado($numero){
		$numero*=$numero;
		echo ("En la función el número se eleva al cuadrado, obteniendo el resultado: $numero<br>");
	}
	$numero=3;
	echo ("El número, antes de invocar la función vale: $numero<br>");
	cuadrado($numero);
	echo ("El número, después de invocar la función vale: $numero");
?>
