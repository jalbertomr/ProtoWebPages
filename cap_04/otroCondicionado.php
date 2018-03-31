<?php
	$ciudades=array("Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago");
	$indice=0;
	$ciudad=$ciudades[$indice];
	while ($ciudad!="Madrid") {
		$ciudad=$ciudades[$indice];
		echo ($ciudad."<br>");
		$indice++;
	}
	echo ("Final de la ejecución.");
?>
