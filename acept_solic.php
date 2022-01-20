<?php
 require("sesionbd.php");
 session_start();
 $solic=$_GET['ids'];
 $traba=$_GET['idt'];
 $idusu = $_GET['idu'];
 //pausa las demas solicitudes
 $consulta = "UPDATE solicitud SET estado=4 WHERE idusuario_f=$idusu";
 $resultado=mysqli_query($conexion, $consulta) or die ("error en el insertjcjugj");
 //acepta la solicitud
 $consulta = "UPDATE solicitud SET estado=2 WHERE idsolicitud=$solic";
 $resultado=mysqli_query($conexion, $consulta) or die ("error en el insert");

 header("Location: solicitudes_resb.php?id=$traba");
?>