<?php 

include '../config/config.php'; 




	$query = "DELETE FROM reporte  WHERE idreporte ='".$_POST['reporte']."'";
	
	$result = $conn->query($query);
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}

	exit(1);



?>