<?php

include '../config/config.php'; 

$reporte['nombre_empresa'] = $_POST['nombre'];
$reporte['encargado'] = $_POST['encargado'];
$reporte['token']=getRandomCode();

$dato = guardar($reporte,'empresa',$conn);


if ($dato) {
	echo "se guardo con el id $dato";
	header("Location: ../empresas.php");
	die();

}else{
	header("Location: ../empresas.php");
}


?>