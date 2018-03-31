<?php
  session_start();
  if ($_POST["textoDeImagen"]==$_SESSION["cadena"]){
    echo ("ACCESO CONCEDIDO");
  } else {
    echo ("ACCESO DENEGADO");
  }
?>
