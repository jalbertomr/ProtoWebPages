<?php
// Se define el salto de línea
	define ("salto","<br>\n");
/* Como esta página recibe, en este caso a través de un campo ociulto, una constante que identifica una sesión,
la función session_start ya no crea una sesión, si no que abre la sesión vigente.*/
	session_start();
/* Los dos campos del formulario son asignados a las variables de sesión. */
	$_SESSION["nombreDeUsuario"]=$_POST["nombreDeUsuario"];
	$_SESSION["colorElegido"]=$_POST["colorElegido"];
?>
<html>
  <head>
  <script language="javascript" type="text/javascript">
/* La siguiente función, que se ejecuta a la carga de la página, llama a la primera
página de contenidos, pasándole, como campo oculto, la constante de identificación de la sesión. */
    function mandar(){
      document.f0.submit();
    }
  </script>
  <head>
<!-- Hacemos que, a la carga de la página, se envie un campo oculto con la constante PHPSESSID -->
  <body onLoad="javascript:mandar();">
<!-- El formulario contiene la constante PHPSESSID en un campo oculto. -->
    <form name="f0" id="f0" method="post" action="paginaUno.php">
      <input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
    </form>
  </body>
</html>
