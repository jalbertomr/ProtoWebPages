<?php
	function cuadrado($numero){
		$numero*=$numero;
		echo ("En la funci�n el n�mero se eleva al cuadrado, obteniendo el resultado: $numero<br>");
	}
	$numero=3;
	echo ("El n�mero, antes de invocar la funci�n vale: $numero<br>");
	cuadrado($numero);
	echo ("El n�mero, despu�s de invocar la funci�n vale: $numero");
?>
