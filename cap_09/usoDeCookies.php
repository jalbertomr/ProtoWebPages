<?php
// Se comprueba si existe la cookie.
	if (!$_COOKIE["idiomaUsuario"]){
	   echo("no Hay cookie idiomaUsuario"."<br>");
// Si no existe, se determina como p�gina la destinada a elegir el idioma.
		$pagina="pedirIdioma.htm";
	} elseif ($_COOKIE["idiomaUsuario"]=="sp"){
// Si existe la cookie y el valor de la variable es "sp" se ir� a la p�gina en espa�ol.
      echo("Si hubo cookie sp"."<br>");
		$pagina="spanish.htm";
	} else {
		echo("Si hubo cookie en"."<br>");
// Si el valor no es "sp" se ir� a la p�gina en ingl�s.
		$pagina="english.htm";
	}
?>
<html>
	<head>
	<script language="javascript" type="text/javascript">
// Se redirige a la p�gina seleccionada.
      document.write("$pagina=" + "<?php echo($pagina);?>;");
		location.href="<?php echo($pagina); ?>";
	</script>
	</head>
</html>
