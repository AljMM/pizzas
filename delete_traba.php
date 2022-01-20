<?php 
if (isset($_GET['id'])){
	include('database.php');
	$cliente = new Database_tra();
	$id=intval($_GET['id']);
	$res = $cliente->delete($id);
	echo $id;
	if($res){
		header('location: crud_traba.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>