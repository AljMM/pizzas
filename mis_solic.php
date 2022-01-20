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
            <div class='header'>
                <div class='back'>
                <h1 class='texto'>Mis solicitudes</h1>
                </div>
            </div>
            <br></br>
          <article>
        <div class="content container" role="main">
         <?php
            $consulta = "SELECT * from solicitud JOIN trabajos ON idtrabajo_f=idtrabajo WHERE idusuario_f='$idusuario';";
                $resultado = mysqli_query($conexion,$consulta);
                echo "<center><table FRAME ='void' RULES ='rows'  class='n'>";
                echo "<th>Estado</th>";
                echo "<th>cabecera</th>";
                echo "<th>descripcion</th>";
                echo "<th>opciones</th>";
                echo "</tr>";
                while ($columna = mysqli_fetch_array ( $resultado ))
                {
                 echo "<tr align=center>";
                 echo "<td>" . 
                 $columna['estado'] ."</td><td>" . 
                 $columna['cabecera'] . "</td><td>" . 
                 $columna['desc_trabajo'] . "</td>";
                 echo "<td><a href='det_trabajo.php?id=$columna[idtrabajo]'><input class='redond' type='button'value='ver mas'></a></td>";
                 //echo "<td><a href='solicitudes_resb.php?id=$columna[idtrabajo]'>ver solicitudes</a></td>";
                 echo "</tr>";
                }
                echo "</table><center>";
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