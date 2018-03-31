<?php
  function convertir($textoFinal) {
    foreach($_POST as $clave=>$valor) $textoFinal = str_replace("^^".strtoupper($clave)."^^", $valor, $textoFinal);
    return $textoFinal;
  }
  header("Content-type: application/msword");
  header("Content-Disposition: inline");
  $fichero = "saludos.rtf";
  $manejador = fopen($fichero,"r");
  $textoFinal = fread($manejador,filesize($fichero));
  $textoFinal = convertir($textoFinal);
  echo($textoFinal);
?>
