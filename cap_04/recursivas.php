<?php
	function factorial($num){
		if ($num==0) {
			return 1;
		} else {
			$valor = $num * factorial ($num-1);
			return $valor;
		}
	}
	$original=6;
	$valor=factorial($original);
	echo ("El factorial de $original es $valor.<br>");
?>
