<html>
  <head>
  <title>Uso de sesiones</title>
  </head>
  <body>
  <?php
    define ("salto","<br>\n");
    session_start();
    echo ("El nombre de usuario es: ".$_SESSION["nombreDeUsuario"].salto);
    echo ("El color elegido es: <h1><font color='".$_SESSION["colorElegido"]."'>P&Aacute;GINA DOS</font></h1>".salto);
  ?>
  <a href="paginaUno.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Ir a p&aacute;gina 1</a>
  <br>
  <a href="paginaTres.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Ir a p&aacute;gina 3</a>
  </body>
</html>
