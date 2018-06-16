<?php
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}

include 'config/config.php';





$result = $conn->query("SELECT * FROM reporte where estado = 'Finalizado' ");

$reportes =[];
while($reporte = $result->fetch_assoc()){
	$reportes[] = $reporte;
}


$result = $conn->query("SELECT * FROM estados ");
$_estado=[];
while($cat = $result->fetch_assoc()){
	$_estado[$cat['estado']] = $cat['color'];
}




$vis = "bitacora_view";



include 'views/layaut.php';




?>