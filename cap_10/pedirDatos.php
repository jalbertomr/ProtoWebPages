<?php
  //header("Cache-Control: no-cache, must-revalidate");
  //header("Expires: Fri, 13 Nov 2015 17:51:00 GMT");
//  header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
//  header("Pragma: no-cache"); // HTTP 1.0.
//  header("Expires: 0"); // Proxies.
  function authenticate(){
    if (($_SERVER['PHP_AUTH_USER'] !== 'admin') || ($_SERVER['PHP_AUTH_PW'] !== 'admin')){
      header('WWW-Authenticate: Basic realm="Solo clientes"');
      header('HTTP\ 1.0 401 Unauthorized');
      echo "usuario o password no autorizado!";
      exit;
    }
  }

  authenticate();
  echo ("variable \$_SERVER[\"PHP_AUTH_USER\"]:".$_SERVER["PHP_AUTH_USER"]."<br>");
  echo ("variable \$_SERVER[\"PHP_AUTH_PW\"]:".$_SERVER["PHP_AUTH_PW"]."<br>");
  //ahora limpia variables cache
     $_SERVER['PHP_AUTH_USER']='NOUSEUARIO';
     $_SERVER['PHP_AUTH_PW']='NOPW';

  echo ("Bienvenidos a los contenidos de la p�gina");
  	foreach( $GLOBALS as $cve => $valor){
	  echo("$cve -> '$valor' DUMP: ".var_dump($valor)." <br>");
	}
?>
<!DOCTYPE html>
<html lang="sp">
<head>
  <meta charset="utf-8">
</head>
<body>
  <p>Hola Mundito!!</p>
  <?php
     $_SERVER['PHP_AUTH_USER']='NOUSEUARIO';
     $_SERVER['PHP_AUTH_PW']='NOPW';
     echo $_SERVER['PHP_AUTH_USER']." Y ".$_SERVER['PHP_AUTH_PW'];
  ?>
</body>

</html>
