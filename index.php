<?php
session_start();
include 'config/config.php';
$usuario=validasession();


$id_reporte = 1;

$r = [];

$result = $conn->query("SELECT estado FROM estados ");
$estados=[];
while($cat = $result->fetch_assoc()){
	if($cat['estado']!="Generado"){
		$estados[] = $cat['estado'];
	}
	
}


$result = $conn->query("SELECT * FROM estados ");
$_estado=[];
while($cat = $result->fetch_assoc()){
	$_estado[$cat['estado']] = $cat['color'];
}





foreach ($estados as $estado) {

	$result = $conn->query("SELECT idreporte,tipo,nombre_cli,empresa,estado,entrega,problema FROM reporte WHERE estado = '".$estado."' ORDER BY entrega ASC");
	$reportes =[];
	while($reporte = $result->fetch_assoc()){
		$reporte['fecha_sep'] = explode('-', $reporte['entrega']);
		$reportes[] = $reporte;
	}


	$r[$estado] = $reportes;
	
}




$d = new DateTime();



	$result = $conn->query("SELECT idreporte,tipo,nombre_cli,empresa,estado,entrega,problema FROM reporte WHERE estado = 'Generado' ORDER BY entrega ASC");
	$reportesA =[];
	while($reporter = $result->fetch_assoc()){
		$reporter['fecha_sep'] = explode('-', $reporter['entrega']);
		$reportesA[] = $reporter;
	}








$vis = "dashboard";


include 'views/layaut.php';



?>