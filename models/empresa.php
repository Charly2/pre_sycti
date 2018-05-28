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


function getRandomCode(){
    $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $su = strlen($an) - 1;
    return substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1);
}

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