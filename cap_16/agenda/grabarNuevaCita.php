<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  <script language="javascript" type="text/javascript">
    function volver(){
      document.retorno.submit();
    }
  </script>
  </head>
  <body onLoad="javascript:volver();">
  <?php
// Se incluye el miniscript de tratamiento de fechas
  include ("inc/fechas.php");
// Se incluye el miniscript que abre la base de datos.
  include ("inc/usarBD.php");
// Se crea la hora, a partir de las horas y minutos establecidos en el formulario de nueva cita.
  $horaDeCita=$_POST["hora"].":".$_POST["minutos"];
// Se monta la consulta para grabar una nueva cita.
  $query="INSERT INTO CITA (DIA, HORA, ASUNTO) VALUES ('$fechaEnCurso','$horaDeCita','".$_POST["asunto"]."');";
// Se ejecuta la consulta.
  $result=mysql_query ($query,$db_conn);
// Se liberan recursos y se cierra la base de datos.
  @mysql_free_result($result);
  mysql_close($db_conn);
  ?>
  <form action="agenda.php" name="retorno" id="retorno" method="post">
    <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo ($fechaEnCurso); ?>">
  </form>
  </body>
</html>
