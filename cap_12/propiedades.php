<html>
  <head>
    <title>Propiedades de una imagen</title>
  </head>
  <body>
    <h1>PROPIEDADES DE UNA IMAGEN</h1>
	<table width="300" border="2" cellpadding="2" cellspacing="0">
	  <tr><th colspan="2">Lista de propiedades</th></tr>
	  <?php
	    $matriz=getimagesize("imagenes/lenguaje.jpg");
		foreach ($matriz as $elemento=>$valor){
			echo ("<tr><td>$elemento</td><td>$valor</td></tr>");
		}
	  ?>
	</table>
  </body>
</html>
