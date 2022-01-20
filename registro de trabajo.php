<?php
 error_reporting(0);
 session_start();
 $rol=$_SESSION['tipo_usuario'];
 ?>
<!DOCTYPE html>
   <html lang="es">
   <head>
     <meta charset="utf-8"/>
     <link rel="icon" href="img/logo1.jfif">
     <link href="styles/style_registro de trabajo.css" rel="stylesheet" type="text/css">
     <title> Registro de trabajo </title>
   </head>
   <body style ="background-image:url('img/a.png')">
      <header class="header" role="banner">
      </header>
      <nav>
      <?php
      include("nav.php");
       ?>
      </nav>
      <section>
       <div class='back'>
        <h1> Registro de trabajo </h1>
       </div>
         <article>
            <br></br>
            <form action="subirRegistro.php" method="POST" enctype="multipart/form-data">
           <?php
           if(isset($_SESSION['tipo_usuario']))
           {
             if ($_SESSION['tipo_usuario'] == 'empleador') 
              {
            echo "<center>";
            echo "<label> nombre del trabajo </label>";
            echo "<br></br>";
            echo "<input type='text' name='titulo' id='titulo' placeholder='ejemplo: reparacion de piso' required>";
            echo "<br></br>";
            echo "<label> descripcion del trabajo </label>";
            echo "<br></br>";
            echo "<textarea name='descripcion' id='descripcion' cols='20' rows='20' placeholder='descripcion del trabajo o reaparacion que quiera realizar' required></textarea>";
            echo "<br></br>";
            echo "<label> imagen de referencia </label>";
            echo "<br></br>";
            echo "</center>";
            echo "<div id='a'>";
            echo "<input type='file' name='imagen' id='imagen'>";
            echo "</div>";
            echo "<br></br>";
            echo "<center>";
            echo "<label> numero de albañiles necesarios </label>";
            echo "<br></br>";
            echo "<input type='number' name='n_albaniles' id='n_albaniles' placeholder='1' required>";
            echo "<br></br>";
            echo "<input class='redond' type='submit' value='publicar'>";
            echo "</center>";
              }
              else
              {
               echo 'no tiene permitido estar aqui';
              }
            }
             else
             {
              echo 'no tiene permiso para acceder esta parte';
             }
             ?>
             </center>
            </form>
         </article>
      </section>
      <aside>
      </aside>
      <footer>
		<div class="bloque1">
		<div class="box">
			<figure>
			<img class="c" src="img/logo.png">
			</figure>
		</div>

		<div class="bo">
			<h2>Síguenos</h2>
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