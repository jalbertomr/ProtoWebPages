<?php
/* Se inicia una nueva sesión y se registra la variable que pasará la cadena a otras páginas. */
  session_start ();
  session_register ("cadena");
/* Se establece la longitud de la cadena en un valor aleatorio entre cinco y diez caracteres. */
  $longitud=rand(5,10);
/* La cadena se declara sin contenido. */
  $cadena="";
/* Un bucle generará la cadena, carácter a carácter. Se repite tantas veces como caracteres vaya a tener la cadena. */
  for ($contador=1; $contador<=$longitud; $contador++){
/* Se genera un número aleatorio correspondiente a los códigos ASCII de las mayúsculas. */
    $caracter=rand(97,122);
/* Se añade el caracter a la cadena. */
    $cadena.=chr($caracter);
  }
/* La cadena aleatoria generada se asigna a la variable de sesión para que pase a otras páginas. */
  $_SESSION["cadena"]=$cadena;
?>
<html>
  <head>
    <script language="javascript" type="text/javascript">
	  function irAlFormulario(){
        location.href="formulario.php?"+"<?php echo(SID); ?>";
      }
    </script>
  </head>
  <body onLoad="javascript:irAlFormulario();">
  </body>
</html>


