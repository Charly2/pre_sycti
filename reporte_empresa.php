<?php
session_start();
function validasession(){
	if (isset($_SESSION['user'])==0) {
	header("location:login.php");
	}else{
		return $_SESSION['user'];

	}
}
include 'config/config.php';
$usuario=validasession();








$result = $conn->query("SELECT idreporte,estado,empresa,correo,modelo,tipodisp FROM reporte WHERE tipo = 2");
$reportes =[];
while($reporte = $result->fetch_assoc()){
	$reportes[] = $reporte;
}



$result = $conn->query("SELECT * FROM estados ");
$_estado=[];
while($cat = $result->fetch_assoc()){
	$_estado[$cat['estado']] = $cat['color'];
}







$vis = "reportes_empresa_view";





include 'views/layaut.php';




?>