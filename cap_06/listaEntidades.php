<html>
  <body>
    <?php
      $matrizDeEntidades=get_html_translation_table (HTML_ENTITIES);
	  echo ("<table border='2' cellpadding='2' cellspacing='4'>\n");
	  echo ("<tr>\n");
	  echo ("<th colspan='16'>LISTADO DE ENTIDADES HTML</th>\n");
	  echo ("</tr>\n<tr>\n");
	  for ($contador=0; $contador<8; $contador++){
		  echo ("<td>Car.</td>\n<td>Entidad</td>\n");
	  }
	  echo ("</tr>\n");
	  echo ("<tr>\n");
	  $contador=0;
	  foreach ($matrizDeEntidades as $clave=>$valor){
		  $valor=substr($valor,1);
		  echo ("<td>$clave</td>\n<td>&amp;$valor</td>\n");
		  $contador++;
		  if ($contador>7){
			echo ("</tr>\n<tr>\n");
			$contador=0;
		  }
	  }
	  echo ("</tr>\n");
	  echo ("</table>");
    ?>
  </body>
</html>
