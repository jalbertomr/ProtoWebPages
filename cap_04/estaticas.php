<?php
	function estaticas(){
		$variableNormal+=5;
		echo ("El valor de \$variableNormal al comienzo de la funci�n es $variableNormal.<br>");
		$variableNormal*=2;
		echo ("Al duplicar \$variableNormal su valor es $variableNormal.<br>");
	}
	echo ("<u>Primera ejecuci�n de la funci�n.</u><br>");
	estaticas();
	echo ("<u>Segunda ejecuci�n de la funci�n.</u><br>");
	estaticas();
?>
