<?php 

include '../config/config.php'; 




	$query = "UPDATE categoria SET nombre ='".$_POST['nombre']."' WHERE idcategoria ='".$_POST['id']."'";
	echo $query;
	$result = $conn->query($query);
	if ($result) {
		header("Location: ../categorias.php");
	}else{
		header("Location: ../categorias.php");
	}

	exit(1);


?>