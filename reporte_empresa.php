<?php
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}

include 'config/config.php';



if ($usuario['rol'] == 1) {
	$result = $conn->query("SELECT idreporte,estado,empresa,correo,modelo,tipodisp FROM reporte WHERE tipo = 2");
}else{
	$result = $conn->query("SELECT idreporte,estado,empresa,correo,modelo,tipodisp FROM reporte WHERE tipo = 2 and operador = '".$usuario['nombre']."'");
}





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