<?php
// Se incluye el miniscript que abre la base de datos.
  include ("inc/usarBD.php");
// Se toman todos los datos necesarios del formulario de modificaciones.
  $nuevaHora=$_POST["hora"].":".$_POST["minutos"];
  $nuevaFecha=$_POST["annio"]."-".$_POST["mes"]."-".$_POST["dia"];
// Se monta y ejecuta la consulta de actualización.
  $query="UPDATE CITA SET DIA='".$nuevaFecha."', HORA='".$nuevaHora."', ASUNTO='".$_POST["asunto"]."' WHERE ID_CITA=".$_POST["citaSeleccionada"].";";
  $result=mysql_query($query, $db_conn);
// Se liberan recursos y se cierra la base de datos.
  @mysql_free_result($result);
  mysql_close ($db_conn);
?>
<html>
  <head>
    <script language="javascript" type="text/javascript">
/* Cuando se ha cargado la página (ya se ha hecho la actualización) se vuelve a
index, pasando la fecha en curso como un campo oculto.*/
      function volver(){
        document.retorno.submit();
      }
    </script>
  </head>
  <body onLoad="javascript:volver();">
<!-- El siguiente formulario es para volver a index xon la fecha en curso. -->
    <form action="agenda.php" method="post" name="retorno" id="retorno">
	  <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($_POST['fechaEnCurso']);?>">
	</form>
  </body>
</html>
