<html>
  <body>
    <?php
		$datosDeURL=parse_url("http://www.todoligues.com");
		echo ("<table border='2' cellpadding='2' cellspacing='2'>\n");
		echo ("<tr>\n<th colspan='2'>DATOS DE URL</th>\n");
		echo ("<tr>\n<th>Dato</th>\n<th>Valor</th>\n");
		echo ("</tr>\n");
		foreach ($datosDeURL as $clave=>$valor){
			echo ("<td>$clave</td>\n<td>$valor</td>\n</tr>\n<tr>\n");
		}
		echo ("</tr>\n");
		echo ("</table>\n");
    ?>
  </body>
</html>
