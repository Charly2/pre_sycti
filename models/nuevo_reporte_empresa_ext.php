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




$result = $conn->query("SELECT token FROM empresa WHERE nombre_empresa = '".$_POST['empresa']."'");
$token = $result->fetch_assoc();


if ($token['token']!=$_POST['token']) {
	$e = "Tu reporte <strong>NO</strong> se pudo generar";
	$m = '<p>No se pudo generar tu reporte, verifica tu token sea correcto. </p>';
	include "../views/externo_ok.php";
	exit(1);
}














$reporte['tipo'] = 2;
$reporte['empresa'] = $_POST['empresa'];
$reporte['estado'] = 'Generado';
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
	$e = "Tu reporte se genero correctamente";
	$m = '<p>Tu reporte se genero con el ID <strong>'.$_id.'</strong></p><p>Recibiras un correo electronico con la infromación adicional.</p><p>Recuerda que en <strong>Sycti</strong> estamos a tus servicios.</p>';
	include "../views/externo_ok.php";

}else{

	header("Location: http://sae.dyndns.org/");
}


?> 