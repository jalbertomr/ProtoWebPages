<html>
  <head>
  <title>Algunas cabeceras de la solicitud</title>
  </head>
  <body>
    <?php
      define ("salto","<BR>\n");
      echo ("ALGUNAS CABECERAS".salto);
      echo ("El valor de <b>\$HTTP_USER_AGENT</b> es <b>".$_SERVER['HTTP_USER_AGENT']."</b>".salto);
      echo ("El valor de <b>\$HTTP_ACCEPT_LANGUAGE</b> es <b>".$_SERVER['HTTP_ACCEPT_LANGUAGE']."</b>".salto);
    ?>
  </body>
</html>
