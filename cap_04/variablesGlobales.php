<?php
	function cuadrado($valor){
		global $numero;
		$cuadrado=$valor*$valor;
		echo ("El cuadrado de $valor es $cuadrado.<br>");
		echo ("La variable \$numero dentro de la funci�n vale $numero y es de tipo ".gettype ($numero)."<br>");
	}
	$numero=3;
	cuadrado($numero);
	echo ("La variable \$numero fuera de la funci�n vale $numero y es de tipo ".gettype ($numero)."<br>");
	echo ("La variable \$cuadrado fuera de la funci�n vale $cuadrado y es de tipo ".gettype ($cuadrado)."<br>");
?>
