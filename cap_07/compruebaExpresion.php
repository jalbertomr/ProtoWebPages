<html>
<body>
<h1>resultado</h1>
<?php
  define("salto", "<br>\n");
// Eliminamos los carácteres "\" introducidos durante la recuperación de los parámetros enviados.
  $_POST['expresion'] = ereg_replace("\\\\\\\\", "\\", $_POST['expresion']);
  $_POST['cadena'] = ereg_replace("\\\\\\\\", "\\", $_POST['cadena']); 
  $correcto = ereg($_POST['expresion'], $_POST['cadena']);
  echo ("La cadena: \"<b>$_POST[cadena]</b>\"".salto);
  echo ("y la expresion: <b>$_POST[expresion]</b>".salto);
  if ($correcto){
    echo ("<font color=blue><b>CONCUERDAN</b></font>".salto);
  }else{
    echo ("<font color=red><b>NO CONCUERDAN</b></font>".salto);
  }
?>
</body>
</html>