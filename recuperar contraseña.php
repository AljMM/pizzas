<?php
 error_reporting(0);
 require("sesionbd.php");
?>
<!DOCTYPE html>
 <html>
  <head>
   <meta charset= "utf-8">
   <link rel="icon" href="img/icon.png">
   <link href="styles/style_recuperar contraseña.css" rel="stylesheet" type="text/css">
   <title> recuperar contraseña </title>
  </head>
  <body style ="background-image:url('img/a.png')">
   <header class="header" role="banner">
     <div class='back'>
      <h1> recuperar contreña </h1>
     </div>    
   </header>
   <nav>
   </nav>
   <section>
     <article>
      <br></br>
      <form action="recuperar contraseña email.php" method="POST">
       <label> para recuperar su contraseña favor de escribir su correo con el que se registro </label>
      <center>
       <br></br>
       <input type="email" name="txtcorreo" placeholder="tu correo electronico" required>
       <br></br>
       <button class='redond' type= "submit" name="recuperar contrasena">recuperar contraseña</button>
      </center>
      </form>
     </article>
   </section>
   <aside>
   </aside>
   <footer>
   </footer>
  </body>
 </html>