<?php
 error_reporting(0);
 session_start();
 $idusuario = $_SESSION['idusuario'];
?>
<html>
    <head>
    <meta charset="utf-8">
        <title>LOGIN</title>
        <link rel="icon" href="img/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <link rel="stylesheet" type="text/css" href="styles/estilo8.css">
    <body style ="background-image:url('img/a.png')">
     <?php
     if (isset($_SESSION['idusuario'])) {
	 header("location:perfil.php");
    }
    else 
    {
      echo "<div class='cont'>";
      echo  "<fieldset >";
      echo  "<img id='a' src='img/usr1.png'>";
      echo  "<img id='b' src='img/lok.png'>";
      echo  "<legend><img src='img/usr.png'></legend>";
      echo    " <form  action='iniciarSesion.php' method='POST'>";
      echo    "<br>";
      echo    " <center><p class='a'>Iniciar sesion</p></center>";
      echo    "    <br>";
      echo    "  <center><input id='a' type='email' name='usuario' placeholder='correo de usuario' required></center>";
      echo    "  <br>";
      echo    "   <center><input id='b' type='password' name='contraseña' placeholder='Contraseña'  required></center>";
      echo    "    <br>";
      echo    "   <center><input class='c' type='submit' value='iniciar sesion'></center>";        
      echo    "   <a href='recuperar contraseña.php'>¿Olvidate tu contraseña?</a>";
      echo    " <br>";
      echo      " <a href='registro.php'>¿no tienes una cuenta? registrate</a>";
      echo    "  </form>";
      echo  "</fieldset>";
      echo  "</div> ";
    }
      ?>
      <footer>
       </footer>
    </body>
</html>