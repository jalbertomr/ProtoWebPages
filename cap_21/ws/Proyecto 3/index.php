<?php
	$meses = Array(Array("mes"=>"Enero", "dias"=>"31"), Array("mes"=>"Febrero", "dias"=>"28"), Array("mes"=>"Marzo", "dias"=>"31"), Array("mes"=>"Abril", "dias"=>"30"), Array("mes"=>"Mayo", "dias"=>"31"), Array("mes"=>"Junio", "dias"=>"30"), Array("mes"=>"Julio", "dias"=>"31"), Array("mes"=>"Agosto", "dias"=>"31"), Array("mes"=>"Septiembre", "dias"=>"30"), Array("mes"=>"Octubre", "dias"=>"31"), Array("mes"=>"Noviembre", "dias"=>"30"), Array("mes"=>"Diciembre", "dias"=>"31"));

	$numeroDeMeses = count($meses);
	
	for($contador = 0; $contador<$numeroDeMeses; $contador ++){
		echo "El mes de ";
		echo $meses[$contador]["mes"];
		echo " tiene ";
		echo $meses[$contador]["dias"];
		echo " d&iacute;as.<br/>";
	}
	
	?>