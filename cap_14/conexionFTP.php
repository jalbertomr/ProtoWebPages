<?php
  define ("salto","<br>\n"); 
// Se intenta establecer una conexi�n FTP.
//  $conexionFTP=ftp_connect("localhost");
  $conexionFTP=ftp_connect("www.vickus.com");

/* Se comprueba si se ha podido establecer la conexi�n. Si no se ha logrado, se interrumpe la ejecuci�n.*/
  if ($conexionFTP){
    echo ("CONEXI�N ESTABLECIDA.".salto);
  } else {
    die ("NO HAY CONEXI�N.");
  }
// Se intenta la autenticaci�n del usuario.
  $acceso=ftp_login($conexionFTP,"vickuscom","\$Thx1138");
/* Se comprueba si se ha logrado el acceso. Si no, se interrumpe la ejecuci�n.*/
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
  echo ("CONEXI�N CERRADA.")
?>
