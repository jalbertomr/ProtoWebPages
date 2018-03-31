<?php
/* Se inicia una nueva sesi�n y se registra la variable que pasar� la cadena a otras p�ginas. */
  session_start ();
  session_register ("cadena");
/* Se establece la longitud de la cadena en un valor aleatorio entre cinco y diez caracteres. */
  $longitud=rand(5,10);
/* La cadena se declara sin contenido. */
  $cadena="";
/* Un bucle generar� la cadena, car�cter a car�cter. Se repite tantas veces como caracteres vaya a tener la cadena. */
  for ($contador=1; $contador<=$longitud; $contador++){
/* Se genera un n�mero aleatorio correspondiente a los c�digos ASCII de las may�sculas. */
    $caracter=rand(97,122);
/* Se a�ade el caracter a la cadena. */
    $cadena.=chr($caracter);
  }
/* La cadena aleatoria generada se asigna a la variable de sesi�n para que pase a otras p�ginas. */
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


