<?php 

include '../config/config.php'; 




	$query = "UPDATE reporte SET cotizacion =' ".$_POST['cotizacion']." ', pago = ' ".$_POST['pago']." ' , entrega = ' ".$_POST['entrega']." ' , tipopago = ' ".$_POST['tipopago']." ' , problema = ' ".$_POST['problema']." ' , solucion = ' ".$_POST['solucion']." ', observaciones = ' ".$_POST['observaciones']." ' WHERE idreporte ='".$_POST['id']."'";
	echo $query;
	$result = $conn->query($query);
	echo $result;
	if ($result) {
		header("Location: ../reporte.php?reporte=".$_POST['id']);
	}else{
		header("Location: ../reporte.php?reporte=".$_POST['id']);
	}


?>
