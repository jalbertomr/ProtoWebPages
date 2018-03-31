<?php
/* Se inicia la sesión. Como no hay ninguna sesión activa, se
crea en este momento, asignándole, como session_id, una cadena
alfanumérica formada por guarismos aleatorios. El nombre del
fichero de sesión en el servidor sera sess_, seguido de dicha
cadena. */
	session_start ();
/* Se indica que variables van a formar parte del archivo de la
sesión, aunque, de momento, no tienen valor alguno asignado.*/
	//session_register ($nombreDeUsuario, $colorElegido);  a partir de php 5.4 no se usa
	//SESSION["nombreDeUsuario"]=$nombreDeUsuario;         en php 5.4 usar así
	//SESSION["colorElegido"]=$colorElegido;
?>
<html>
  <head>
  <title>Uso de sesiones</title>
  </head>
  <body>
<!-- Se crea un formulario donde se van a grabar dos datos: el nombre del usuario y
el color que elige de una lista. Los campos que recogen estos datos tienen los
mismos nombres que las variables de sesión. Este formulario se envía al script que tiene
la mision de almacenar los valores de estos campos en las variables de sesión. Este script
es transparente al usuario.-->
    <form name="fPrincipal" id="fPrincipal" method="post" action="paginaCeroDeSesiones.php">
      Nombre de usuario:
      <input type="text" name="nombreDeUsuario" id="nombreDeUsuario" value="">
      <br>
      Color:
      <select name="colorElegido" id="colorElegido">
        <option value="#FF0000">Rojo</option>
        <option value="#00FF00">Verde</option>
        <option value="#0000FF">Azul</option>
      </select>
      <br>
<!-- Además, hay un campo oculto que se usará para enviar la constante de session id -->
      <input type="hidden" name="<?php echo (session_name()); ?>" value="<?php echo (session_id()); ?>">
      <input type="submit" name="mandar" value="ACCEDER">
    </form>
  </body>
</html>
