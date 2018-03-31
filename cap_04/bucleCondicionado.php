<?php
	$ciudades=array("Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago");
	$ciudad="";
	$indice=0;
	while ($ciudad!="Londres") {
		$ciudad=$ciudades[$indice];
		echo ($ciudad."<br>");
		$indice++;
	}
	echo ("Final de la ejecución.");
?>
