<?
  function obtenerIPCliente() {
/* En la variable $ip se almacenar� la direcci�n del cliente. */
    $ip = 0;
/* Si la variable $_SERVER['HTTP_CLIENT_IP'] tiene alg�n contenido, se asigna a la variable $ip. */
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) $ip = $_SERVER['HTTP_CLIENT_IP'];
/* Si la variable $_SERVER['HTTP_X_FORWARDED_FOR'] tiene alg�n contenido, se asigna a la variable $ip.
En ese caso debe separarse la IP p�blica del cliente de las obtenidas a trav�s de posibles redes locales. */
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
/* Se abre la matriz de IP's obtenidas de $_SERVER['HTTP_X_FORWARDED_FOR']. */
      $ListaDeip = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
/* Si ya hay contenido en $ip, se a�ade a la matriz. */
      if ($ip) {
        array_unshift($ListaDeip, $ip);
        $ip = 0;
      }
/* Se eliminan IP's privadas, procedentes de posibles redes locales, as� como la direcci�n de bucle local.
Cuando se encuentra una IP p�blica (externa) se devuelve como resultado de la funci�n. */
      foreach ($ListaDeip as $direccion) if (!eregi("^(192\.168|172\.16|10|224|240|127|0)\.", $direccion)) return $direccion;
    }
/* Si no hab�a contenido en $_SERVER['HTTP_X_FORWARDED_FOR'] se devuelve la IP obtenida mediante $_SERVER['REMOTE_ADDR']. */
    return $ip ? $ip : $_SERVER['REMOTE_ADDR'];
  }
?>
