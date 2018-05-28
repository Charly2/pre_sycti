<?php 
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}

include 'config/config.php';

$result = $conn->query("SELECT estado FROM estados ");
$estados =[];
while($estado = $result->fetch_assoc()){
	$estados[] = $estado['estado'];
}

$result = $conn->query("SELECT nombre FROM usuario ");
$users =[];
while($estado = $result->fetch_assoc()){
	$users[] = $estado['nombre'];
}


$result = $conn->query("SELECT nombre FROM categoria ");
$cats =[];
while($cat = $result->fetch_assoc()){
	$cats[] = $cat['nombre'];
}

$result = $conn->query("SELECT nombre_dips FROM dispositivos ");
$disps =[];
while($dis = $result->fetch_assoc()){
	$disps[] = $dis['nombre_dips'];
}


$vis = "reporte_local_nuevo";

include 'views/layaut.php';


?>