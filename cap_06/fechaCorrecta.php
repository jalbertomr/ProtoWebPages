<?php
	$dia  =   30;
	$mes  =    2;
	$anio = 2003;
	echo ("La fecha $dia/$mes/$anio ");
	if (checkdate($mes, $dia, $anio)){
		echo ("es correcta.<br>");
	} else {
		echo ("NO es correcta.<br>");
	}

	$dia=31;
	$mes=3;
	$anio=2006;
	echo ("La fecha $dia/$mes/$anio ");
	if (checkdate($mes, $dia, $anio)){
		echo ("es correcta.<br>");
	} else {
		echo ("NO es correcta.<br>");
	}
?>
