<?php
// Se define el salto de l�nea
	define ("salto","<br>\n");
/* Como esta p�gina recibe, en este caso a trav�s de un campo ociulto, una constante que identifica una sesi�n,
la funci�n session_start ya no crea una sesi�n, si no que abre la sesi�n vigente.*/
	session_start();
/* Los dos campos del formulario son asignados a las variables de sesi�n. */
	$_SESSION["nombreDeUsuario"]=$_POST["nombreDeUsuario"];
	$_SESSION["colorElegido"]=$_POST["colorElegido"];
?>
<html>
  <head>
  <script language="javascript" type="text/javascript">
/* La siguiente funci�n, que se ejecuta a la carga de la p�gina, llama a la primera
p�gina de contenidos, pas�ndole, como campo oculto, la constante de identificaci�n de la sesi�n. */
    function mandar(){
      document.f0.submit();
    }
  </script>
  <head>
<!-- Hacemos que, a la carga de la p�gina, se envie un campo oculto con la constante PHPSESSID -->
  <body onLoad="javascript:mandar();">
<!-- El formulario contiene la constante PHPSESSID en un campo oculto. -->
    <form name="f0" id="f0" method="post" action="paginaUno.php">
      <input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
    </form>
  </body>
</html>
