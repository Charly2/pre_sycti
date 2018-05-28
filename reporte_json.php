<?php
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}

include 'config/config.php';

$idreporte = $_GET['reporte'];




$result = $conn->query("SELECT * FROM reporte where idreporte = '$idreporte'");
$reporte = $result->fetch_assoc();

if($result->num_rows != 0){
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

$result = $conn->query("SELECT idarchivo, nombre,ext  FROM archivo where tipo = 1 and reporte = $idreporte ");
$files =[];
while($file = $result->fetch_assoc()){
	$files[] = $file;
}

header('Content-Type: application/json');
echo json_encode($reporte);


$vis = "reporte_local";

}else {
	$vis = "dashboard";
}



//include 'views/layaut.php';


?>