<?php
  define ("salto","<br>\n"); 
// Se intenta establecer una conexión FTP.
//  $conexionFTP=ftp_connect("localhost");
  $conexionFTP=ftp_connect("www.vickus.com");

/* Se comprueba si se ha podido establecer la conexión. Si no se ha logrado, se interrumpe la ejecución.*/
  if ($conexionFTP){
    echo ("CONEXIÓN ESTABLECIDA.".salto);
  } else {
    die ("NO HAY CONEXIÓN.");
  }
// Se intenta la autenticación del usuario.
  $acceso=ftp_login($conexionFTP,"vickuscom","\$Thx1138");
/* Se comprueba si se ha logrado el acceso. Si no, se interrumpe la ejecución.*/
  if ($acceso){
    echo ("ACCESO AUTORIZADO");
  } else {
    echo ("ACCESO DENEGADO");
  }
  echo (salto);
  
  $cadena='';
  $file_list = ftp_nlist($conexionFTP,'-la .');
  foreach ($file_list as $clave => $valor){
		echo ($clave."=>".$valor."<br>");
	}  
  
  ftp_close ($conexionFTP);
  echo ("CONEXIÓN CERRADA.")
?>
