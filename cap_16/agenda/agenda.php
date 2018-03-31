<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  <script language="javascript" type="text/javascript" >
    function saltar(pagina){
    	document.formularioCitaPrincipal.action = pagina;
    	document.formularioCitaPrincipal.submit();
    }
  </script>
    <title>Agenda</title>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" >
  </head>
  <body>
    <?php
      require_once('login.php');
      require_once('inc/fechas.php');
      require_once('inc/usarBD.php');

      $query="SELECT * FROM CITA WHERE DIA='".$fechaEnCurso."' ORDER BY HORA";
      $result=mysql_query($query,$db_conn);
      if(!$result) dir("No se pudo ejecutar consulta".$query.mysql_error()."<br />");
      
      $numeroDeCitasDelDia = mysql_num_rows($result);
      echo ("Citas del Dí­a: ".$numeroDeCitasDelDia."<br />");
    ?>
    AGENDA DEL D&Iacute;A
    <?php
      echo($diaActual." del ".$mesActual." de ".$annioActual."<br />");
    ?>
    <form action="" method="post" name="formularioCitaPrincipal" id="formularioCitaPrincipal">
      <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">
      <table witdh="500" border="0" cellpadding="0" cellspacing="0">
        <tr><th>CITAS</th></tr>
      </table>
      <hr>
      <?php
        if ($numeroDeCitasDelDia > 0){
          echo ("<table width='500' border='0' cellspacing='0' cellpadding='0'>");
          while ($cita = mysql_fetch_array($result, MYSQL_ASSOC)) {
            echo ("<tr><td>".$cita["ID_CITA"]."</td>");
            echo ("<td>".$cita["ASUNTO"]."</td>");
            echo ("<td><input type='radio' id='citaSeleccionada' name='citaSeleccionada' value='".$cita["ID_CITA"]."'>");
            echo ("</td></tr>");
          }
          echo ("</table>");
          echo ("<input name='borrarCita' type='button' id='borrarCita' value='Eliminar Cita' onClick='javascript:saltar(\"eliminarCita.php\");'>".salto);
          echo ("<input name='cambiarCita' type='button' id='cambiarCita' value='Modificar cita' onClick='javascript:saltar(\"cambiarCita.php\");'>".salto);
        }
/* En todo caso se mostrarÃ¡n los botones de agregar cita y cambiar la fecha en curso. */
        echo ("<input name='nuevaCita' type='button' id='nuevaCita' value='Agregar cita' onClick='javascript:saltar(\"agregarCita.php\");'>".salto);
        echo ("<input name='cambiarFecha' type='button' id='cambiarFecha' value='Otro d&iacute;a' onClick='javascript:saltar(\"cambiarFecha.php\");'>".salto);
      ?>
    </form>
  </body>  
</html>
  
