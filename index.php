<?php
error_reporting(0);
session_start();
$rol = $_SESSION['tipo_usuario'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenido</title>
	<link rel="icon" href="img/logo1.jfif">
	<link rel="stylesheet" type="text/css" href="styles/Casa.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body style ="background-image:url('img/a.png')">
	<header>
		<img class="a" src="img/logo.png">
		<nav>
			<ul>
			 <?php
			 if (isset($_SESSION['idusuario'])) 
			 {
                 include("nav.php");
			 }
			 else 
			 {
			 echo "<li><a href='registro.php'>Registrarse</a></li>";
			 echo "<li><a href='login.php'>Iniciar sesión</a></li>";
			 }
			 ?>
			</ul>
		</nav>
	</header>
	<div class="slider">
	<ul>
		<li>
			<img src="img/slider.jpg">
		</li>
		<li>
			<img src="img/slider1.jpg">
		</li>
		<li>
			<img src="img/slider2.jpg">
		</li>
		<li>
			<img src="img/slider3.jpg">
		</li>
	</ul>
</div>		 
	 <h1>Bienvenido</h1>
	<div class="textA">
	   <p>Somos una página web con la misión de facilitar el contacto y la busqueda entre trabajadores albañiles y sus posibles clientes, mediante la facilitación de contacto entre ambos, y mostrando un perfil de parte de los trabajadores donde se muestren los datos necesarios para que el cliente pueda tener un contacto directo con el trabajador. </p>
    </div>
	<p id="a">A continuación se muestra un mapa con la ubicacion de las ferreterias disponibles</p>
	<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29769.80400871829!2d-86.88246407106513!3d21.14342235646395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sferreterias%20en%20Canc%C3%BAn%2C%20Q.R.!5e0!3m2!1ses!2smx!4v1637692119241!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

	<footer>
        <div class="bloque1">
        <div class="box">
            <figure>
            <img class="c" src="img/logon.png">
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

