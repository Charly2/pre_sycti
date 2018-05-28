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