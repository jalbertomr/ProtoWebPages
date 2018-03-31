<?php
	$nombres = array (1=>"Pedro", "Ana", 50=>"Carmen", "Alfredo", "Eva");
	$personas = count ($nombres);
	echo ("Número de personas: ".$personas."<br>");

	$amigo = array ("nombre"=>"Pedro Torres", "direccion"=>"CL Mayor, 37", "telefono"=>123456789);
	$datosDeAmigo = count ($amigo);
	echo ("Número de datos de mi amigo: ".$datosDeAmigo."<br>");

	$amigos = array (array("nombre"=>"Pedro Torres", "direccion"=>"CL Mayor, 37", "telefono"=>123456789), 
	                 array("nombre"=>"Carlos Gómez", "direccion"=>"CL Alfareros, 12", "telefono"=>567891234), 
	                 array("nombre"=>"Susana Casas", "direccion"=>"CL Sierra Grande, 2", "telefono"=>987654321), 
	                 array("nombre"=>"Carmen Pérez", "direccion"=>"CL Himalaya, 189", "telefono"=>502983948)
	                );
	$totalDeAmigos = count ($amigos);
	echo ("Total de amigos: ". $totalDeAmigos);
?>
