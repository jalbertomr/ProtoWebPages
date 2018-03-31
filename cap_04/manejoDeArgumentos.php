<?php
	function comprobarArgumentos(){
//Uso de func_num_args().
		$numeroDeArgumentos=func_num_args();
		echo ("<u>Uso de func_num_args().</u><br>");
		echo ("El número de argumentos es $numeroDeArgumentos<br>");
		echo ("<br>");
//Uso de func_get_arg().
		echo ("<u>Uso de func_get_arg().</u><br>");
		for ($contador=0; $contador<$numeroDeArgumentos; $contador++){
			$argumento=func_get_arg($contador);
			echo ("El argumento $contador tiene el valor $argumento<br>");
		}
		echo ("<br>");
//Uso de func_get_args()
		echo ("<u>Uso de func_get_args().</u><br>");
		$matrizDeArgumentos=func_get_args();
		for ($contador=0; $contador<$numeroDeArgumentos; $contador++){
			$argumento=$matrizDeArgumentos[$contador];
			echo ("El argumento $contador tiene el valor $argumento<br>");
		}
	}
	$variable1=1;
	$variable2="HOLA";
	$variable3="ADIÓS";
	comprobarArgumentos($variable1, $variable2, $variable3);
?>
