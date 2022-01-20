<?php
 require("sesionbd.php");
 error_reporting(0);
?>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="icon" href="img/icon.png">
      <link href="styles/style_recuperar contraseña.css" rel="stylesheet" type="text/css">
      <title>recuperar contraseña PHP</title>
   </head>
   <body style ="background-image:url('img/a.png')">
    <header class="header" role="banner">
     <div class='back'>
      <h1> recuperar contreña </h1>
     </div>          
    </header>
     <br></br>
     <form>
      <?php
         $correo = $_POST['txtcorreo'];
         $resultado = mysqli_query($conexion, "SELECT * FROM usuarios where correo = '$correo'");
         $verificador = mysqli_num_rows($resultado);
         if ($verificador == 1) 
         {
           $datos = mysqli_fetch_array($resultado);
           $conrecuperada = $datos['password'];
         }

         $to = $correo;
         $subject = "recuperacion de contraseña";
         $message = "<b>mensaje automatico de sistema</b>";
         $message .= "<h3> se ha logrado exitosamente recuperar tu contraseña usuario la cual es: ".$conrecuperada." </h3>";
         $header = "From:albanileria2312@gmail.com \r\n";
         $header .= "Cc:albanileria2312@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $res = mail ($to,$subject,$message,$header);
         if( $res == true ) {
            echo "<center>";
            echo "<br></br>";
            echo "<center><h3>la contraseña ha sido enviada a su correo</h3></center>";
            echo "<br></br>";
            echo "<a href='login.php'><input class='redond' type ='button' value='Regresar'></a>";
            echo "</center>";
         }else {
            echo "<br></br>";
            echo "<center><h3>no se ha podido completar el envio, favor de verificar si el correo es correcto</h3></center> ";
            echo "<br></br>";
         }
      ?>
     </form>
    </body>
</html>