<?php
ini_set('display_erros', 'On');
error_reporting(E_ALL | E_STRICT);
// Se define el salto de l�nea.
	define ("salto","<br>\n");
/* Se contabiliza el n�mero total de elementos de la matriz
"archivos", cuyo nombre se corresponde con los campos enviados
desde el formulario. Dado que, dicho formulario tiene cuatro
campos de archivo pertenecientes a la misma matriz, ese es el
n�mero de elementos que esta contiene. Eso es independiente de
que en los campos se haya introducido un valor o no. Los campos
existen, aunque no tengan contenido.*/
echo("Variables \$GLOBALS<br>");
echo("gettype".gettype($GLOBALS[0])."<br>");
echo("gettype".gettype($GLOBALS["_POST"])."<br>");
echo("gettype".gettype($_POST["archivos"])."<br>");
echo("gettype".gettype($GLOBALS[3])."<br>");
foreach( $GLOBALS as $cve => $valor){
	  echo("$cve ---> '$valor' DUMP: ".var_dump($valor)." <br>");
}
echo("foreach \$_POST... <br>");
foreach( $_POST as $cve => $valor){
	echo("$cve ---> '$valor' DUMP: ".var_dump($valor)." <br>");
}
echo("/var_dump".var_dump($GLOBALS[0])."<br>");
	$totalDeArchivos = count($HTTP_POST_VARS["archivos"]["tmp_name"]);
	echo ("El total de campos de archivo es de: ".$totalDeArchivos.salto);
	echo ("Sin embargo, puede que no todos contengan un archivo.".salto);
	echo (salto.salto);
/* Se recorren los cuatro campos, comprobando su propiedad
name. Si no existe quiere decir que el campo no tiene
contenido, es decir, que no se ha subido ning�n archivo
en ese campo.*/
	echo ("A continuaci�n se muestra la propiedad \"name\" (nombre)".salto);
	echo ("de cada uno de los archivos subidos.".salto);
	echo( var_dump($_POST["archivos"]).salto);
/*  Desplegado de la variable 
	array(5) { ["name"]=> array(4) { [0]=> string(0) "" 
	                                 [1]=> string(18) "MARA701202HDFRDL04" 
	                                 [2]=> string(0) "" 
	                                 [3]=> string(0) "" 
	                               } 
	           ["type"]=> array(4) { [0]=> string(0) "" 
	                                 [1]=> string(24) "application/octet-stream" 
	                                 [2]=> string(0) "" 
	                                 [3]=> string(0) "" 
	                               } 
	           ["tmp_name"]=> array(4) { [0]=> string(0) "" 
	                                     [1]=> string(14) "/tmp/phpgv3ZNz" 
	                                     [2]=> string(0) "" 
	                                     [3]=> string(0) "" 
	                                   } 
	           ["error"]=> array(4) { [0]=> int(4) 
	                                  [1]=> int(0) 
	                                  [2]=> int(4) 
	                                  [3]=> int(4) 
	                                } 
	           ["size"]=> array(4) { [0]=> int(0) 
	                                 [1]=> int(46125) 
	                                 [2]=> int(0) 
	                                 [3]=> int(0) 
	                               } 
	         }
*/	          
	for ($contador = 0; $contador < $totalDeArchivos; $contador++) {
		echo ("<b>ARCHIVO $contador:</b> ");
		if ($_POST["archivos"]["name"][$contador]==""){
			echo ("NO EXISTE".salto);
		} else {
			echo ("\"".$_POST["archivos"]["name"][$contador]."\"".salto);
		}
	}
?>
