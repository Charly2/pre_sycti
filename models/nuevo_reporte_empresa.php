<?php 

include '../config/config.php'; 
include '../config/funciones.php'; 



$reporte['tipo'] = 2;
$reporte['empresa'] = $_POST['empresa'];
$reporte['estado'] = 'Generado';
$reporte['operador'] = $_POST['operador'];
$reporte['priodidad'] = $_POST['priodidad'];
$reporte['correo'] = $_POST['correo'];
$reporte['inicio'] =$_POST['inicio'];
$reporte['telefono'] = $_POST['telefono'];
$reporte['telefono2'] = $_POST['telefono2'];
$reporte['tipodisp'] = $_POST['tipodisp'];
$reporte['categoria'] = $_POST['categoria'];
$reporte['marca'] = $_POST['marca'];
$reporte['modelo'] = $_POST['modelo'];
$reporte['numserie'] = $_POST['numserie'];
$reporte['color'] = $_POST['color'];
$reporte['almacenamiento'] = $_POST['almacenamiento'];
$reporte['ram'] = $_POST['ram'];
$reporte['pass'] = $_POST['pass'];
$reporte['pantalla'] = $_POST['pantalla'];
$reporte['acces'] = $_POST['acces'];
$reporte['observaciones'] = $_POST['observaciones'];
$reporte['problema'] = $_POST['problema'];
$reporte['solucion'] = $_POST['solucion'];
$reporte['entrega'] = $_POST['entrega'];
$reporte['garantia'] = $_POST['garantia'];
$reporte['cotizacion'] = $_POST['cotizacion'];
$reporte['tipopago'] = $_POST['tipopago'];
$reporte['pago'] = $_POST['pago'];





$dato = guardar($reporte,'reporte',$conn);

if ($dato) {
	echo "se guardo con el id $dato";
	header("Location: ../reporte.php?reporte=".$dato);
	die();

}else{
	header("Location: ../index.php");
}


?>