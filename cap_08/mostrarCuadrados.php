<?php
	define ("salto","<br>\n");
	for ($contador=1; $contador<=10; $contador ++){
		include ("cuadradoExterno.php");
		calculaCuadrado ($contador);
	}
?>