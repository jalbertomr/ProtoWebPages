<?php
	$amigos=array("Madrid"=>array("nombre"=>"Pedro", "edad"=>32, "telefono"=>"91-999.99.99"), 
	              "Barcelona"=>array("nombre"=>"Susana", "edad"=>34, "telefono"=>"93-000.00.00"), 
	              "Toledo"=>array("nombre"=>"Sonia", "edad"=>42, "telefono"=>"925-09.09.09")
	              );
	foreach ($amigos as $ciudad => $cadaUno){
		echo ("En $ciudad tiene el amigo:<br>");
		foreach ($cadaUno as $clave => $valor) {
			echo ($clave.": ".$valor."<br>");
		}
	}
	echo ("Final de la ejecución.");
?>
