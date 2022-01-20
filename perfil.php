<?php
 error_reporting(0);
 require("sesionbd.php");
 session_start();
 $rol=$_SESSION['tipo_usuario'];
 ?>
<!DOCTYPE html>
 <html>
   <head>
      <meta charset= "utf-8">
      <title>Mi Perfil</title>
      <link rel="icon" href="img/logo1.jfif">
      <link href="styles/style.css" rel="stylesheet" type="text/css">
   </head>
     <body style ="background-image:url('img/a.png')" >
     <header class="header" role="banner" >
      </header>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
      <nav>
        <?php
        include("nav.php");
        ?>
      </nav>

<div class="content container">
       <section>
        <article>
          <?php
            $idusuario = $_SESSION['idusuario'];
            $consulta = "SELECT * FROM usuarios WHERE idusuario = '$idusuario'";

            $resultado = mysqli_query($conexion,$consulta) or die ('no se pudo procesar los datos');
            while ($columna = mysqli_fetch_array ( $resultado ))
                {
                  if ($rol == "empleador") 
                  {
                   echo "<div class='header'>
                         <div class='back'>
                         <img src='img/profile.png' class='avatar' /></div>";
                  }
                  else 
                  {
                   echo "<div class='header'>
                           <div class='back'>
                           <img src='img/profile2.png' class='avatar' /></div>";
                  }
         echo "<br></br>";
         echo "<form>";
         echo "<center>";
         echo "<h1 class='h1'>".$columna['nombre']."</h1>";
         echo "</center>";
         echo "</form>";
         echo "<link href='styles/style.css' rel='stylesheet' type='text/css'>";
               echo "<br></br>";
               echo "<form>";
               echo "<fieldset>";
               echo "<center><h1> Datos Perfil </h1></center>";
                 echo "<h2>Identificador: ". $columna['idusuario']. "</h2>"; 
                 echo "<br></br>";
                 echo "<h2>Correo: <a href='mailto:" . $columna['correo'] . "'>" . $columna['correo']."</a></h2>"; 
                 echo "<br></br>";
                 echo "<h2>Nombre: " . $columna['nombre'] ."</h2>";
                 echo "<br></br>";
                 echo "<h2>Direccion: ". $columna['direccion']."</h2>"; 
                 echo "<br></br>";
                 echo "<h2>Telefono: <a href='tel:+52".$columna['telefono']. "'>" . $columna['telefono']."</a></h2>";
                 echo "<br></br>";
                 echo "<h2>Tipo de cuenta: ".$columna['tipo_usuario']."</h2>";
                 echo "<br></br>";
               echo "</fieldset>";
               echo "</form>";
                }
            mysqli_close( $conexion );
          ?>
          </center>
          <br></br>
          <a href="editar_perfil.php" class="button">Editar Perfil</a>
          <a href="cerrarSesion.php" class="button">cerrar sesion</a>

          </div>
         </article>
       </section>
       <aside>
       </aside>
       <footer >
         <div class="bloque1">
           <div class="box">
             <figure>
               <img class="c" src="img/logo.png">
              </figure>
            </div>
            <div class="bo">
              <h2>Siguenos</h2>
              <div class="redes">
                <img class="d" src="img/f.png">
                <img class="e" src="img/i.png">
                <img class="f" src="img/t.png">
              </div>
            </div>
          </div>
       </footer>
      </body>
  </html>