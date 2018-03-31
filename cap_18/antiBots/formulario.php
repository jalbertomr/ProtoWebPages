<html>
  <head>
    <title>Formulario AntiBots</title>
  </head>
  <body>
    <p>TECLEE SUS DATOS PARA REGISTRARSE COMO NUEVO USUARIO.</p>
    <form action="comprobarResultado.php?<?php echo(SID); ?>" method="post" name="formularioRegistro" id="formularioRegistro">
      <table width="500" height="281" border="0" cellpadding="4" cellspacing="0">
        <tr>
          <td align="right">Nombre de usuario:&nbsp;</td>
          <td><input name="login" type="text" id="login"></td>
        </tr>
        <tr>
          <td align="right">Contrase&ntilde;a elegida:&nbsp;</td>
          <td><input name="password" type="text" id="password"></td>
        </tr>
        <tr>
          <td align="right">Repita la contrase&ntilde;a:&nbsp;</td>
          <td><input name="passwordAgain" type="text" id="passwordAgain"></td>
        </tr>
        <tr align="center" valign="middle">
          <td height="120" colspan="2"><img src="crearImagen.php?<?php echo(SID); ?>" width="250" height="100"></td>
        </tr>
        <tr>
          <td height="27" colspan="2">Teclee el texto de la imagen en la casilla que hay a continuaci&oacute;n. </td>
        </tr>
        <tr>
          <td height="27" colspan="2"><input name="textoDeImagen" type="text" id="textoDeImagen"></td>
        </tr>
        <tr align="center">
          <td colspan="2"><input name="envio" type="submit" id="envio" value="Registrarme"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
