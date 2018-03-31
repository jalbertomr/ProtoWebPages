<?php
// Se comprueba si existe la cookie.
	if (!$_COOKIE["idiomaUsuario"]){
	   echo("no Hay cookie idiomaUsuario"."<br>");
// Si no existe, se determina como página la destinada a elegir el idioma.
		$pagina="pedirIdioma.htm";
	} elseif ($_COOKIE["idiomaUsuario"]=="sp"){
// Si existe la cookie y el valor de la variable es "sp" se irá a la página en español.
      echo("Si hubo cookie sp"."<br>");
		$pagina="spanish.htm";
	} else {
		echo("Si hubo cookie en"."<br>");
// Si el valor no es "sp" se irá a la página en inglés.
		$pagina="english.htm";
	}
?>
<html>
	<head>
	<script language="javascript" type="text/javascript">
// Se redirige a la página seleccionada.
      document.write("$pagina=" + "<?php echo($pagina);?>;");
		location.href="<?php echo($pagina); ?>";
	</script>
	</head>
</html>
