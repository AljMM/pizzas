<?php
  require("sesionbd.php");
  session_start();

  $correo = $_POST['correo'];
  $password = $_POST['password'];
  
  $inicio = "SELECT COUNT(*) as contar from usuarios where correo = '$correo' and password = '$password'";
  $consulta = mysqli_query($conexion,$inicio);
  $consulta2 = "SELECT * FROM usuarios where correo = '$correo' and password = '$password'";
  $obtenerdatos = mysqli_query($conexion,$consulta2);
  $datos = mysqli_fetch_array($consulta);
  $datos2 = mysqli_fetch_array($obtenerdatos);
  if($datos['contar']>0) 
  {
       $_SESSION['tipo_usuario'] = $datos2['tipo_usuario']; 
       $_SESSION['idusuario'] = $datos2['idusuario'];
       $_SESSION['username']= $correo;
       if($rol = $datos2['tipo_usuario'] == 'admin')
       {
              header("location:crud.php");
       }
       else 
       {
        header("location:index.php");
       }
  }
  else
  {
     echo "<script type='text/javascript'>
        alert('correo o contraseña incorrecta, favor de revisar los datos ingresados');
        window.location.href='login.php';
        </script>";
  }
 ?>