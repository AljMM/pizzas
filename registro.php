<?php 
error_reporting(0);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>REGISTRO</title>
        <link rel="icon" href="img/logo1.jfif">
        <link rel="stylesheet" type="text/css" href="styles/estilo7.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body style ="background-image:url('img/a.png')">  
        <div class="cont1">
        <fieldset>
        <h3>
            <center><h1>REGISTRO</h1><hr></center>
        </h3>
        <center><h2>Ingrese sus datos.</h2><hr></center>
        <form action="insert.php" method="post" require>
            
            <input id="a" type="text" placeholder="Nombre" name="nombre" required><br>
            <br>
            <input id="b" type="text" placeholder="Dirección" name="direc" required><br>
            <br>
            <input id="c" type="number" placeholder="Teléfono" name="tel" required><br>
            <br>
             <input id="d" type="email" placeholder="Correo" name="correo" required><br>
            <br>
             <input id="e" type="password" placeholder="Contraseña" name="pass" required><br>
            <br>
            <center>
             Darme de alta como:
             <div class="caja">
            <select name="rol">
                <option value="1">Empleador</option>
                <option value="2">albañil</option>
            </select><br>
            </div>
            </center>
            <center><input class="f" type="submit" name="enviar" value="Registrar"></center>
            <fieldset class="a">
            <a href="login.php">¿Ya tienes una cuenta?</a>               
            </fieldset>
        </form>
        </fieldset>
        <footer>
       </footer>
    </body>
</html>