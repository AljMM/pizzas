<?php
$idalbanil=$_GET['idusua'];
$idtrabajo=$_GET['idtraba'];

require("sesionbd.php");
$consulta= "INSERT INTO solicitud(idtrabajo_f, idusuario_f) VALUES('$idtrabajo','$idalbanil')";
$resultado=mysqli_query($conexion, $consulta) or die ("error en el insert");
header("Location: buscador.php");
?>