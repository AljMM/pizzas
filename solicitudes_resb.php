<?php
 require("sesionbd.php");
 session_start();
 $traba=$_GET['id'];
 $rol=$_SESSION['tipo_usuario']
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>BIENVENIDO</title>
        <link rel="icon" href="img/icon.jpeg">
        <link href="styles/style_l.css" rel="stylesheet" type="text/css">
    </head>
    <body style ="background-image:url('img/a.png')" ;
     style="background-repeat: no-repeat";>
        <header role="banner">
        <div class='header'>
                <div class='back'>
                <h1 class='texto'>Solicitudes recibidas</h1>
                </div>
            </div>
            <nav>
            <?php 
            include("nav.php");
            ?>
            </nav>
        </header>

        <div class="content container" role="main">
        <?php
            $consulta = "SELECT idsolicitud, estado, idusuario_f, nombre, correo, telefono, direccion 
            FROM solicitud INNER JOIN trabajo_actual ON idtrabajo_f = trabajos_idtrabajo 
            JOIN usuarios ON idusuario=idusuario_f WHERE idtrabajo_f=$traba AND estado<>'en espera'";

            $resultado = mysqli_query($conexion,$consulta) or die ('no se pudo procesar los datos');
            echo "<center><table FRAME ='void' RULES ='rows'  class='n'>";
            echo "<tr>";
            echo "<th>Estado</th>";
            echo "<th>Enviado por</th>";
            echo "<th>correo</th>";
            echo "<th>telefono</th>";
            echo "<th>direccion</th>";
            echo "<th colspan='2'>Opciones</th>";
            echo "</tr>";
            while ($columna = mysqli_fetch_array ( $resultado ))
                {
                 echo "<tr align=center>";
                 echo "<td>" . 
                 $columna['estado'] ."</td><td>". 
                 $columna['nombre']."</td><td>".
                 $columna['correo']."</td><td>".
                 $columna['telefono']."</td><td>".
                 $columna['direccion']."</td>";
                 echo "<td><a href='acept_solic.php?
                 ids=$columna[idsolicitud]&
                 idt=$traba&
                 idu=$columna[idusuario_f]'><input class='redond' type='button'value='aceptar'></a></td>";
                 echo "<td><a href='rech_solic.php?ids=
                 $columna[idsolicitud]&idt=
                 $traba&idu=
                 $columna[idusuario_f]'><input class='redond' type='button'value='rechazar'></a></td>";
                 echo "</tr>";
                }
                echo "</table></center>";

            mysqli_close( $conexion );
            ?>
        </div>
 
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