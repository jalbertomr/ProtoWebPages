<?php
	$fecha = getdate();
?>
<html>
	<body>
		<table border="1" cellpadding="2">
			<tr>
				<th colspan="2">DATOS DE LA FECHA</th>
			</tr>
			<tr>
				<th>CLAVE</th>
				<th>VALOR</th>
			</tr>
			<?php
				foreach ($fecha as $clave => $valor){
					echo ("<tr>\n");
					echo ("<td>$clave</td>\n");
					echo ("<td>$valor</td>\n");
					echo ("</tr>\n");
				}
			?>
		</table>
	</body>
</html>
