s<?php
/* Si se intenta acceder sin haber seleccionado una cita, se regresa al inicio. */
  if (!isset($_POST["citaSeleccionada"])) header("Location: agenda.php");
?>
<html>
  </head>
  <?php
// Se incluye el miniscript de tratamiento de fechas
    include ("inc/fechas.php");
// Se incluye el miniscript que abre la base de datos.
    include ("inc/usarBD.php");
  ?>
  <script language="javascript" type="text/javascript">
    function volver(){
      document.retorno.submit();
    }
  </script>
  </head>

  <body onLoad="javascript:volver();">
  <?php
/* Se crea una consulta para eliminar la cita que se haya seleccionado en la página principal.
La cita se designa aa través del campo 'idCita', cuyo valor queda asignado a los botones de
radio de la pagina index.php (ver código).*/
    $query="DELETE FROM CITA WHERE ID_CITA='".$_POST["citaSeleccionada"]."';";
// Se ejecuta la consulta de eliminación.
    $result=mysql_query($query, $db_conn);
// Se liberan recursos y se cierra la base de datos.
    @mysql_free_result ($result);
    mysql_close ($dd_conn);
  ?>
  <form action="agenda.php" method="post" name="retorno" id="retorno">
    <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($fechaEnCurso); ?>">
  </form>
  </body>
</html>

