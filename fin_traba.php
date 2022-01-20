<?php
 require("sesionbd.php");
 session_start();
 $traba=$_GET['idt'];
 $idusu = $_GET['idu'];


 //finaliza en trabajo
 $consulta = "UPDATE trabajo_actual SET estatus=2 WHERE usuarios_idusuario='$idusu' and trabajos_idtrabajo='$traba'";
 $resultado=mysqli_query($conexion, $consulta) or die ("error en el insert");

 header("Location: ../det_trabajo.php?id=$traba");
?>