<?php 

include '../config/config.php'; 
include '../config/funciones.php';
require ('class.phpmailer.php');
include("class.smtp.php"); 

function sendmail($correo,$nombre,$data) {
    
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug  = 0;
	$mail->Host       = 'smtp.gmail.com';
	$mail->Port       = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth   = true;
	$mail->Username   = "reportes@sycti.net";
	$mail->Password   = "TeCa1137";
	$mail->SetFrom('reportes@sycti.net', $nombre);
	$mail->AddAddress($correo, $nombre);
	$mail->AddCC("reportes@sycti.net","Equipo Sycti");
	$mail->Subject = 'Tu reprote se realizo correctamente';
	$mail->MsgHTML($data);
	$mail->CharSet = 'UTF-8';
	
	$mail->AltBody = 'Tu reprote se realizo correctamente';
	if(!$mail->Send()) {
	  return 0;
	} else {
	  return 1;
	}
}



function guardar($data,$table,$conn)
{
	$keys = array_keys($data);
	$query = "INSERT INTO $table (";
	$keysmap = "";$i=0;$valuesmap ="";
	foreach ($keys as $key) {
		$i++;
		$keysmap .= $key;
		$valuesmap .= "'".$data[$key]."'";
		if ( $i< sizeof($keys)) {
			$keysmap .= ',';
			$valuesmap .= ',';
		}	
	}
	$query.=$keysmap;
	$query.=') VALUES (';
	$query.=$valuesmap;
	$query.=')';
	/*echo $query;
	print_r($reporte);*/

	$result = $conn->query($query);

	if ($result) {
		return $conn->insert_id;
	}else{
		return  0;
	}
}

$d = new DateTime();
$reporte['tipo'] = 1;
$reporte['nombre_cli'] = $_POST['nombre_cli'];
$reporte['estado'] = 'Generado';
$reporte['operador'] = $_POST['operador'];
$reporte['priodidad'] = $_POST['priodidad'];
$reporte['correo'] = $_POST['correo'];
$reporte['inicio'] = $d->format('Y-m-d');
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



$_id = $d->format('dmy')."-".$dato;

include 'tmp.php';

if ($dato) {
	echo "se guardo con el id $dato";

	//echo $data;

	echo sendmail($reporte['correo'],$reporte['nombre_cli'],$data);


	header("Location: ../reporte.php?reporte=".$dato);
	die();

}else{
	header("Location: ../index.php");
}


?>