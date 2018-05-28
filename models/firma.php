<?php

include '../config/config.php'; 


$imagedata = $_POST['imagedata'];

$id = $_POST['id'];
$query = "UPDATE reporte SET firma ='1' WHERE idreporte ='".$_POST['id']."'";

$result = $conn->query($query);






$archivo="_data/$id.txt";
 
     $file=fopen($archivo,"w");
     fwrite($file,$imagedata);


	if ($result) {
		echo "ok";

	}else{
		echo "NO se guardo ";
	}






?>