<?php
	function estaticas(){
		$variableNormal+=5;
		echo ("El valor de \$variableNormal al comienzo de la función es $variableNormal.<br>");
		$variableNormal*=2;
		echo ("Al duplicar \$variableNormal su valor es $variableNormal.<br>");
	}
	echo ("<u>Primera ejecución de la función.</u><br>");
	estaticas();
	echo ("<u>Segunda ejecución de la función.</u><br>");
	estaticas();
?>
