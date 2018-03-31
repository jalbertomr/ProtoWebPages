<?php
// Se graba una cookie con una validez de 24 horas.
   $idiomaUsuario = $_GET["idiomaUsuario"];
   echo("GrabarCookie idiomaUsuario con:".$idiomaUsuario.":<br>");
	setcookie("idiomaUsuario",$idiomaUsuario,time()+86400);
?>
<html>
	<body>
	en javascript GrabarCookie
	<script language="javascript" type="text/javascript">
// Se regresa a la página principal.
      varCookie = "<?php echo ($idiomaUsuario);?>";
      
		location.href="usoDeCookies.php";
	</script>
	</body>
</html>
