<?php

include '../config/config.php'; 
include '../config/funciones.php'; 
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
	header("Location: ../reporte.php?reporte=".$reporte['reporte']);
	die();

}else{
	header("Location: ../reporte.php?reporte=".$reporte['reporte']);
}


?>
