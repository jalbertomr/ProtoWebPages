<html>
  <head>
  <title>Navegar por los directorios</title>
  <script language="javascript" type="text/javascript">
/*La siguiente funci�n es invocada cada vez que se hace click en
un de los enlaces que se crean din�micamente m�s adelante. Como
argumento recibe la ruta del disco a la que debemos ir a leer.
Este valor lo pasa a un campo oculto de un formulario y env�a
dicho formulario. Como es un autoprocesado (no tiene valor alguno
en el atributo action) se recarga esta misma p�gina.*/
  function recargar(direccion){
    document.getElementById("rutaParaLeer").value = direccion;
    document.fRutas.submit();
  }
  </script>
  </head>
  <body>
    <h3>Listado de ficheros y directorios</h3>
    <form name="fRutas" id="fRutas" method="post" action="">
      <input type="hidden" value="" name="rutaParaLeer" id="rutaParaLeer">
    </form>
    <table width="300" border="0" cellpadding="4" cellspacing="0">
    <?php
// Se define el salto de l�nea
    define ("salto","\n");
/* Se comprueba si la variable de POST llamada "rutaParaLeer" tiene contenido.
Si no lo tiene, es que se acaba de cargar el script en el navegador y se le
asigna la ruta ra�z de la partici�n activa (v�lido solo para entornos Windows).
Si se ha recargado el script por haber pulsado uno de los enlaces esta variable
tiene el contenido que se haya asignado al campo oculto del formulario. Dicho
campo tien, como es l�gico, el mismo nombre que esta variable.*/
echo( "Ruta para leer:".$_POST["rutaParaLeer"]."<br>");
    if ($_POST["rutaParaLeer"] == ""){
      //$_POST["rutaParaLeer"] = "C:/";
      $_POST["rutaParaLeer"] = ".";
    }
// Se abre el directorio especificado.
    $manejador = opendir($_POST["rutaParaLeer"]);
// Se "rebobina" el directorio para asegurarnos de posicionarnos al principio.
    rewinddir($manejador);
// Mientras haya elementos (directorios o ficheros) para leer.
    while ($contenido = readdir($manejador)){
      echo ("<tr>".salto);
      echo ("<td>");
/* Cuando se lee cada elemento se establece como nombre completo de dicho
elemento el mismo, precedido por la ruta actual, y se almacena en la
variable $nuevaRuta. */
        $nuevaRuta = $_POST["rutaParaLeer"].$contenido."/";
/* Se comprueba si el nombre completo de la ruta corresponde a un directorio.
Si no es as�, asumiremos que, genericamente, es un fichero. En un entorno
Windows, esto nos vale. En un entorno Linux quedar�a un poco pobre y
tendr�amos que "afinar" m�s comprobando, por ejemplo, si el elemento
es un enlace simb�lico.*/
		if (is_dir($nuevaRuta)){
/* Si es un directorio mostramos el icono correspondiente, creando, adem�s,
un enlace para poder acceder a dicho directorio mediante el formulario
y la funci�n JavaScript que hemos visto anteriormente en el c�digo.*/
          echo ("<a href='javascript:recargar(\"".$nuevaRuta."\")'>");
          echo ("<img src='iconos/directorio.gif' alt='Directorio' border=0>");
          echo ("</a>");
        } else {
/* Si no es un directorio mostramos el icono que hemos puesto para ficheros
(elemento gen�rico) y no creamos enlace alguno.*/
          echo ("<img src='iconos/fichero.gif' alt='Fichero'>");
        }
        echo ("</td>".salto."<td>");
/* Mostramos el nombre del elemento.*/
        echo ("<b>$contenido</b>");
        echo ("</td>".salto."</tr>".salto);
    }
// Se cierra el directorio.
      closedir($manejador);
    ?>
    </table>
  </body>
</html>
