<?php
 require("sesionbd.php");
 session_start();
 $solic=$_GET['ids'];
 $traba=$_GET['idt'];
 $idusu = $_GET['idu'];

 //pone en espera de nuevo solicitudes
 $consulta = "UPDATE solicitud SET estado=1 WHERE idusuario_f=$idusu";
 $resultado=mysqli_query($conexion, $consulta) or die ("error en el insert");

 $consulta = "UPDATE solicitud SET estado=3 WHERE idsolicitud=$solic";
 $resultado=mysqli_query($conexion, $consulta) or die ("error en el insert");
 
 header("Location: solicitudes_resb.php?id=$traba");
?>