<?php
  foreach($GLOBALS as $cve => $valor){
    echo ($cve."=>".$valor);	
  }
// Se comprueba si existe la variable de nombre de usuario
  //if (!isset($PHP_AUTH_USER)){
// Si no existe se activa el mecanismo que la solicita.
  //  header('WWW-Authenticate: Basic realm="Solo clientes"');
  //  header('HTTP/1.0 401 Restricted area');
  //}
  //define ("salto","<br>\n");
// Se muestran los datos tecleados.
  //echo ("El login teleado es: <b>$PHP_AUTH_USER</b>".salto);
  //echo ("La contraseņa teleada es: <b>$PHP_AUTH_PW</b>".salto);
?>
