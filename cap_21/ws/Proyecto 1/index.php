<?php
	$miCadena = "Hola, Mundo.";
	
	function saludar($aQuien){
		echo $aQuien."<br />";
		echo "Hoy es ".date("d-m-Y");
	}
	
	saludar($miCadena);
?>
