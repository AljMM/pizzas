<?php
error_reporting(0);
  session_start();
  $rol=$_SESSION['tipo_usuario'];
 ?>
<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <link href="styles/style_registro de trabajo.css" rel="stylesheet" type="text/css">
   <title> informacioSubida </title>
  </head>
  <body style ="background-image:url('img/a.png')" ; style="background-repeat: no-repeat";>
     <header class="header" role="banner">
      <div class='back'>
        <h1> Registro de trabajo </h1>
      </div>
     </header>
     <nav>
       <?php 
       include("nav.php");
       ?>
      </nav>
     <section>
        <article>
         <?php
             $idusuario = $_SESSION['idusuario'];
             $usuario = "root";
             $password = "GloverSantos1@";
             $servidor = "localhost";  
             $basededatos ="albanileria";
             $titulo = $_POST['titulo'];
             $desc = $_POST['descripcion'];
             $imagen = $_FILES['imagen']['name'];
             $tipo_imagen = $_FILES['imagen']['type'];
             $tamagno_imagen = $_FILES['imagen']['size'];
             $carpeta_Destino = $_SERVER['DOCUMENT_ROOT'].'/proyecto albanil/imagenes/';
             $nalbaniles = $_POST['n_albaniles'];
             $nombreimagen =$idusuario.'_'.$imagen;
             
            if($tamagno_imagen <= 8000000)
            {
             if($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png")
              {
              $conexion = mysqli_connect ( $servidor, $usuario, "GloverSantos1@" ) or die ('no se pudo conectar al servidor de la base de datos');
              $db = mysqli_select_db( $conexion, $basededatos) or die ('no se puede conectar a la base de datos');
              $consulta3 = "INSERT INTO trabajos (cabecera,desc_trabajo,img_refe,n_albaniles) VALUES ('$titulo','$desc','$nombreimagen','$nalbaniles')";
              move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_Destino.$nombreimagen);
              $consulta2 = "SELECT * FROM trabajos";
              mysqli_query($conexion, $consulta3) or die('no se pudo insertar los datos en dat_trabajo');
              $idtrabajo = mysqli_insert_id($conexion);
              $consulta4 = "INSERT INTO trabajo_actual (usuarios_idusuario,trabajos_idtrabajo) VALUES ('$idusuario','$idtrabajo')";
              mysqli_query($conexion, $consulta4) or die ('no se pudieron insertar los datos'); 
              $resultado = mysqli_query( $conexion, $consulta2 ) or die ('error en consulta a la base de datos');
              echo "<br></br>";
              echo "<form>";
              echo 'su trabajo a sido postulado marravillosamente';
              echo "</form>";
              mysqli_close( $conexion );
              }
              else
              {
               echo "<br>";
               echo "<form>";
               echo "el tipo de archivo no es aceptado, los unicos aceptados son jpeg o png";
               echo "</form>";
              }
            }
            else
            {
            echo "<br>";
            echo "<form>";
            echo "la imagen es demasiado pesada, intenta con otra";
            echo "</form>";
            }
           ?>   
        </article>
     <section>
     <aside>
     </aside>
     <footer>
     </footer>
   </body>
</html>