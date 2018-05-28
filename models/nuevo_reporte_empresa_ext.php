<?php 

include '../config/config.php'; 
include '../config/funciones.php'; 

$d = new DateTime();


$result = $conn->query("SELECT nombre FROM usuario ");
$users =[];
while($estado = $result->fetch_assoc()){
	$users[] = $estado['nombre'];
}

$u = rand(0, sizeof($users)-1);



$reporte['tipo'] = 2;
$reporte['empresa'] = $_POST['empresa'];
$reporte['estado'] = 'Abierto';
$reporte['operador'] = $users[$u];
$reporte['problema'] = $_POST['problema'];
$reporte['correo'] = $_POST['correo'];
$reporte['inicio'] = $d->format('Y-m-d');
$reporte['telefono'] = $_POST['telefono'];
$reporte['categoria'] = $_POST['categoria'];
$reporte['entrega'] = $d->format('Y-m-d');






$dato = guardar($reporte,'reporte',$conn);


$_id = $d->format('dmy')."-".$dato;


if ($dato) {
	
	include "../views/externo_ok.php";

}else{
	header("Location: ../index.php");
}


?> 