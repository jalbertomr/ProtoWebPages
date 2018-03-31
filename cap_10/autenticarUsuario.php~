<?php
// Se comprueba si existe la variable de nombre de usuario
  if (!isset($_SERVER['PHP_AUTH_USER'])){
// Si no existe se activa el mecanismo que la solicita.
    header('WWW-Authenticate: Basic realm="Solo clientes"');
    header('HTTP/1.0 401 Restricted area');
  }
// Creamos el salto de línea.
  define ("salto","<br>\n");
/* Establecemos la matriz de usuarios legitimos. En una
aplicación real, estos datos procederían de una base de datos.*/
  $matrizUsuarios=array("usuario_1"=>"clave_1","usuario_2"=>"clave_2", "usuario_3"=>"clave_3");
/* Se crea una variable con el valor false, que se usará para comprobar
si se produce alguna coincidencia con la lista de usuarios registrados.*/
  $autorizado=false;
/* Se comprueban los datos introducidos con cada elemento de la matriz. Si
hay alguna coincidencia se pone la variable autorizado en true y
se abandona el bucle.*/
  foreach ($matrizUsuarios as $login=>$pw){
    if ($login==$_SERVER['PHP_AUTH_USER'] || $pw==$_SERVER['PHP_AUTH_PW']){
      $autorizado=true;
      break;
    }
  }
/* Se comprueba si el usuario está autorizado.*/
  if ($autorizado){
    echo ("Bienvenido a los contenidos de la página.");
  } else {
    echo ("No estás autorizado a visitar este sitio.");
  }
?>
