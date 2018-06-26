<?php

include '../config/config.php'; 

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


$reporte['nombre_dips'] = $_POST['nombre'];
$ext = explode('.', $_FILES['file']['name']);



$dato = guardar($reporte,'dispositivos',$conn);

$dir_subida = '../public/img/'.$_POST["nombre"].".".$ext[1]; 
print_r($dir_subida);
	$m =move_uploaded_file($_FILES['file']['tmp_name'], $dir_subida);
	print_r($m);
	if ($m) {
	    echo "si";
	} else {
	    echo "no";
	}

if ($dato && $m) {
	echo "se guardo con el id $dato";
	
	
	

	

	header("Location: ../nuevo_disp.php");
	die();

}else{
	header("Location: ../nuevo_disp.php");
}













?>