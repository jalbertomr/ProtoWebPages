<?php
	$ciudades=array("md"=>"Madrid", "ba"=>"Barcelona", "lo"=>"Londres", "ny"=>"New York", "la"=>"Los Angeles");
	foreach ($ciudades as $clave => $valor){
		if ($valor=="Londres") continue;
		echo ("La ciudad con el �ndice $clave tiene el nombre $valor. <br>");
	}
	echo ("Final de la ejecuci�n.");
?>
