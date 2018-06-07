<?php 

include '../config/config.php'; 




	$query = "UPDATE reporte SET  pago = ' ".$_POST['pago']." ' WHERE idreporte ='".$_POST['id']."'";
	//echo $query;
	$result = $conn->query($query);
	
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}


?>