<?php
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}

include 'config/config.php';










$result = $conn->query("SELECT idreporte,estado,nombre_cli,correo,modelo,tipodisp FROM reporte WHERE tipo = 1");
$reportes =[];
while($reporte = $result->fetch_assoc()){
	$reportes[] = $reporte;
}

$result = $conn->query("SELECT * FROM estados ");
$_estado=[];
while($cat = $result->fetch_assoc()){
	$_estado[$cat['estado']] = $cat['color'];
}








$vis = "reportes_locales_view";





include 'views/layaut.php';




?>