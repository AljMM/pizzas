<?php
require("sesionbd.php");

$rol=$_POST['rol'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direc'];
$telefono=$_POST['tel'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];

$comprobar = mysqli_num_rows(mysqli_query($conexion ,"SELECT * FROM usuarios WHERE correo = '$correo'"));
if ($comprobar == 0) 
{	
 $consulta = "INSERT INTO usuarios(correo, password, nombre, direccion, telefono, tipo_usuario) VALUES('$correo', '$pass', '$nombre', '$direccion', '$telefono', '$rol')";
 $resultado=mysqli_query($conexion, $consulta) or die ("error en el insert");
 header('location:index.php');
}
else 
{
 echo "<script type='text/javascript'>
        alert('correo ya utilizado, favor de utilizar otro');
        window.location.href='login.php';
        </script>";
 
}


?>
