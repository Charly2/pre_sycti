<?php

include '../config/config.php'; 
include '../config/funciones.php'; 


$d = new DateTime();

$reporte['reporte'] = $_POST['reporte'];
$reporte['fecha'] = $d->format('Y-m-d');

$reporte['contenido'] = $_POST['contenido'];
$reporte['tipo'] = 1;
$reporte['publico'] = $_POST['publico'];
$reporte['usuario'] = $_POST['usuario'];


print_r($reporte);

$dato = guardar($reporte,'comentario',$conn);


if ($dato) {
	echo "se guardo con el id $dato";
	//header("Location: ../reporte.php?reporte=".$reporte['reporte']);
	die();

}else{
	//header("Location: ../reporte.php?reporte=".$reporte['reporte']);
}


?>