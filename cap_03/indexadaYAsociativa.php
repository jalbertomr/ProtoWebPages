<?php
	$amigos = array (array("nombre"=>"Pedro Torres", "direccion"=>"CL Mayor, 37", "telefono"=>123456789), array("nombre"=>"Carlos Gómez", "direccion"=>"CL Alfareros, 12", "telefono"=>567891234), array("nombre"=>"Susana Casas", "direccion"=>"CL Sierra Grande, 2", "telefono"=>987654321), array("nombre"=>"Carmen Pérez", "direccion"=>"CL Himalaya, 189", "telefono"=>502983948));

	echo ("<table border='2' cellpadding='2' cellspacing='0'>");
	echo ("<tr>");
	echo ("<th>Número</th>");
	echo ("<th>Nombre</th>");
	echo ("<th>Dirección</th>");
	echo ("<th>Teléfono</th>");
	echo ("</tr>");
	echo ("<tr>");
	echo ("<td>0</td>");
	echo ("<td>".$amigos[0]["nombre"]."</td>");
	echo ("<td>".$amigos[0]["direccion"]."</td>");
	echo ("<td>".$amigos[0]["telefono"]."</td>");
	echo ("</tr>");
	echo ("<tr>");
	echo ("<td>1</td>");
	echo ("<td>".$amigos[1]["nombre"]."</td>");
	echo ("<td>".$amigos[1]["direccion"]."</td>");
	echo ("<td>".$amigos[1]["telefono"]."</td>");
	echo ("</tr>");
	echo ("<tr>");
	echo ("<td>2</td>");
	echo ("<td>".$amigos[2]["nombre"]."</td>");
	echo ("<td>".$amigos[2]["direccion"]."</td>");
	echo ("<td>".$amigos[2]["telefono"]."</td>");
	echo ("</tr>");
	echo ("<tr>");
	echo ("<td>3</td>");
	echo ("<td>".$amigos[3]["nombre"]."</td>");
	echo ("<td>".$amigos[3]["direccion"]."</td>");
	echo ("<td>".$amigos[3]["telefono"]."</td>");
	echo ("</tr>");
	echo ("</table>");
?>
