<?php
session_start();
$rol=$_SESSION['tipo_usuario'];

require("sesionbd.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar perfil</title>
        <link rel="icon" href="img/icon.jpeg">
        <link rel="stylesheet" href="styles/styleeditarperfil.css" type="text/css">
    </head>
    <body style ="background-image:url('img/a.png')">
        <header>
          <center><h1> Editar perfil </h1></center>   
        </header>
        <nav>
      <?php
      include("nav.php");
       ?>
        </nav>
        <section>
           <article>
             <center><form action="" method="POST">
              <?php
               $usuario=$_SESSION['idusuario'];
               $consulta= "SELECT * FROM usuarios WHERE idusuario='$usuario'";
               $resultado=mysqli_query($conexion, $consulta);
               $datos= mysqli_fetch_array($resultado);
               echo "<br><label> Nombre: </label><br>";
               echo "<input type='text' name='nombre' placeholder='Tu nombre' value='$datos[nombre]'>";
               echo "<br>";
               echo "<label> Correo Electronico: </label><br>";
               echo "<input type='text' name='correo' placeholder='ejemplo@gmail.com' value='$datos[correo]'>";
               echo "<br>";
               echo "<label> Domicilio: </label><br>";
               echo "<input type='text' name='direccion' placeholder='Tu domicilio' value='$datos[direccion]'>";
               echo "<br>";
               echo "<label> Telefono: </label><br>";
               echo "<input type='number' name='telefono' placeholder='Numero de telefono' value='$datos[telefono]'>";
               echo "<button type='submit' name='actualizar' id='boton'>Actualizar datos </button>"; 
              ?>
             </form></center>
              <?php
               if(isset($_POST['actualizar']))
               {
                 $nombre = $_POST['nombre'];
                 $correo = $_POST['correo'];
                 $direccion = $_POST['direccion'];
                 $telefono = $_POST['telefono'];
                 
                 $comprobar = mysqli_num_rows(mysqli_query($conexion ,"SELECT * FROM usuarios WHERE correo = '$correo' AND idusuario != '$usuario'"));
                 if ($comprobar == 0)
                 {
                  $sql = mysqli_query( $conexion ,"UPDATE usuarios SET nombre = '$nombre',correo = '$correo', direccion = '$direccion', telefono = '$telefono' WHERE idusuario = '$usuario'");
                  if ($sql)
                  { 
                    
                    echo header("Location: perfil.php");
                  }
                  else 
                  {
                    echo "los datos no pudieron ser actualizados correctamente";
                  }
                 } 
                 else
                 {
                  echo "el correo introduccido ya esta en uso, favor de ingresar otro";
                 }
                 
               }
              ?>
           </article> 
        </section>
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
