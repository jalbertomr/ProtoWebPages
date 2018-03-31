<?php
  $conectado = @mysql_connect ("localhost","root","");
  if ($conectado){
    echo ("SE HA CONECTADO AL SERVIDOR MySQL.");
  } else {
    echo ("NO SE PUDO CONECTAR AL SERVIDOR MySQL.");
  }
?>
