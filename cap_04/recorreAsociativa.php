<?php
	$ciudades=array("md"=>"Madrid", "ba"=>"Barcelona", "lo"=>"Londres", "ny"=>"New York", "la"=>"Los Angeles", "ch"=>"Chicago");
	foreach ($ciudades as $clave => $valor){
		echo ("La ciudad con el �ndice $clave tiene el nombre $valor. <br>");
	}
	echo ("Final de la ejecuci�n.");
?>
