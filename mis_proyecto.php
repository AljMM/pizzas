<?php
 error_reporting(0);
 require("sesionbd.php");
 session_start();
 $idusuario = $_SESSION['idusuario'];
 $rol=$_SESSION['tipo_usuario']
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>BIENVENIDO</title>
        <link rel="icon" href="img/logo1.jfif">
        <link href="styles/style_l.css" rel="stylesheet" type="text/css">
    </head>
    <body style ="background-image:url('img/a.png')" ;
     style="background-repeat: no-repeat";> 
     <header role="banner" >
        </header>
         <nav>
           <?php 
             include("nav.php");
            ?>
         </nav>
         <section>
          <div class='back'>
           <h1 class='texto'>Mis Proyectos</h1>
         </div>
         <br></br>
          <article>
        <div class="content container" role="main">
            <?php
                $consulta = "SELECT * from trabajo_actual JOIN trabajos ON trabajos_idtrabajo=idtrabajo WHERE usuarios_idusuario='$idusuario';";
                $resultado = mysqli_query($conexion,$consulta);
                echo "<center><table FRAME ='void' RULES ='rows'  class='n'>";
                echo "<th >cabecera</th>";
                //echo "<th>descripcion</th>";
                echo "<th>#albaniles</th>";
                echo "<th>estatus</th>";
                echo "<th colspan='2'>Opciones</th>";
                echo "</tr>";
                while ($columna = mysqli_fetch_array ( $resultado ))
                {
                 echo "<tr align=center>";
                 echo "<td>" . 
                 $columna['cabecera'] ."</td><td>" . 
                 //$columna['desc_trabajo'] . "</td><td>" . 
                 $columna['n_albaniles'] . "</td><td>" .
                 $columna['estatus'] . "</td>";
                 //echo "<td><a href='det_trabajo.php?id=$columna[idtrabajo]'>ver mas</a></td>";
                 echo "<td><a href='det_trabajo.php?id=$columna[idtrabajo]'><input class='redond' type='button'value='mas info'></a></td>";
                 echo "<td><a href='solicitudes_resb.php?id=$columna[idtrabajo]'><input class='redond' type='button'value='ver solicitudes'></a></td>";
                 echo "</tr>";
                }
                echo "</table></center>";
                mysqli_close( $conexion );
            ?>
        </div>
        </article>
       </section>
        <footer>
        <div class="bloque1">
		<div class="box">
			<figure>
			<img class="c" src="img/logo.png">
			</figure>
		</div>
		<div class="bo">
			<h2>S�guenos</h2>
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