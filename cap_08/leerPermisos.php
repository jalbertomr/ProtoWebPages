<?php
/* Se eliminan las barras sobrantes que se han producido durante la transmisi�n del nombre del fichero (ver cap�tulo 7).*/
   echo($_GET["fichero"]." ");
	$_GET["fichero"] = ereg_replace("\\\\\\\\", "/", $_GET["fichero"]);
/* Se obtienen los permisos del archio especificado. El nombre es pasado mediante GET, pero no aparece en
la barra de direcciones porque esta p�gina se carga en un marco de la p�gina principal. Ademas, el nombre del
fichero no se transmite desde un formulario enviado con GET, sino que es transmitido como una variable desde
una l�nea de JavaScript (ver el c�digo de la p�gina prncipal).*/
	$permisosActuales=substr(sprintf('%o', fileperms($_GET["fichero"])), -4);
	echo ($_GET["fichero"]." ");
	echo ($permisosActuales);
?>
<html>
<body>
	<script language="javascript" type="text/javascript">
	   debugger
/* Se obtienen los permisos del fichero especificado, que se han recuperado con PHP, en una variable de JavaScript.*/
		permisos="<?php echo ($permisosActuales);?>";
/* Se muestran los permisos en un nodo de texto de la p�gina principal.*/
		this.parent.document.getElementById ("permisoVigente").firstChild.nodeValue = permisos;
		this.parent.document.getElementById ("nuevoPermiso").firstChild.nodeValue = permisos;
/* Se obtienen los permisos de los tres niveles de usuarios como variables num�ricas.*/
		permisosPropietario = parseInt(permisos.substr(1,1));
		permisosGrupo       = parseInt(permisos.substr(2,1));
		permisosOtros       = parseInt(permisos.substr(3));
/* Se marcan o desmarcan las casillas correspondientes a los permisos del propietario en la p�gina pincipal,
evaluando los tres posibles niveles de pemisos, de forma que queden marcadas las casillas que corresponden
a los permisos actuales.*/
		this.parent.document.getElementById ("lProp").checked = eval(permisosPropietario & 4);
		this.parent.document.getElementById ("eProp").checked = eval(permisosPropietario & 2);
		this.parent.document.getElementById ("xProp").checked = eval(permisosPropietario & 1);
/* Se marcan o desmarcan las casillas correspondientes a los permisos del grupo en la p�gina pincipal,
evaluando los tres posibles niveles de pemisos, de forma que queden marcadas las casillas que corresponden
a los permisos actuales.*/
		this.parent.document.getElementById ("lGrupo").checked = eval(permisosGrupo & 4);
		this.parent.document.getElementById ("eGrupo").checked = eval(permisosGrupo & 2);
		this.parent.document.getElementById ("xGrupo").checked = eval(permisosGrupo & 1);
/* Se marcan o desmarcan las casillas correspondientes a los permisos del nivel "Otros" en la p�gina pincipal,
evaluando los tres posibles niveles de pemisos, de forma que queden marcadas las casillas que corresponden
a los permisos actuales.*/
		this.parent.document.getElementById ("lOtros").checked = eval(permisosOtros & 4);
		this.parent.document.getElementById ("eOtros").checked = eval(permisosOtros & 2);
		this.parent.document.getElementById ("xOtros").checked = eval(permisosOtros & 1);
	</script>
</body>
</html>
