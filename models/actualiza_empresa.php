
<?php 

include '../config/config.php'; 




	$query = "UPDATE empresa SET nombre_empresa ='".$_POST['nombre']."', encargado = '".$_POST['encargado']."'  WHERE idempresa ='".$_POST['id']."'";
	echo $query;
	$result = $conn->query($query);
	echo $result;
	if ($result) {
		header("Location: ../empresas.php");
	}else{
		header("Location: ../empresas.php");
	}

	exit(1);


?>