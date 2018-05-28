<?php

include '../config/config.php'; 

$reporte['nombre'] = $_POST['nombre'];

$dato = guardar($reporte,'categoria',$conn);

if ($dato) {
	echo "se guardo con el id $dato";
	header("Location: ../categorias.php");
	die();

}else{
	header("Location: ../categorias.php");
}


?>