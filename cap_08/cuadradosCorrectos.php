<?php
	define ("salto","<br>\n");
	for ($contador=1; $contador<=10; $contador ++){
		include_once ("cuadradoExterno.php");
		calculaCuadrado ($contador);
	}
?>
