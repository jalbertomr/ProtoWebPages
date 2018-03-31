<html>
  <head>
  <title>Uso de sesiones</title>
  </head>
  <body>
  <?php
// Se define el salto de línea.
    define ("salto","<br>\n");
/* Se abre la sesion cuyo identificativo se ha recibido. */
    session_start();
/* Se muestra el nombre del usuario y, en el color elegido, la página en la que estamos.*/
    echo ("El nombre de usuario es: ".$_SESSION["nombreDeUsuario"].salto);
    echo ("El color elegido es: <h1><font color='".$_SESSION["colorElegido"]."'>P&Aacute;GINA UNO</font></h1>".salto);
  ?>
<!-- A continuación se proveen dos enlaces, para acceder a las restantes páginas de contenidos
pasando, en la URL, la constante de identificación de sesión. -->
  <a href="paginaDos.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Ir a p&aacute;gina 2</a>
  <br>
  <a href="paginaTres.php?<?php echo (session_name()); ?>=<?php echo (session_id()); ?>">Ir a p&aacute;gina 3</a>
  </body>
</html>
