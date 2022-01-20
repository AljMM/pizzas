<?php
    $correo = "";
	$password = "";
	$servidor = "localhost";
   	$basededatos = "albanileria";
    //conexion con la bd
    $conexion = mysqli_connect( $servidor, $correo, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "No se ha podido conectar a la base de datos" );
?>