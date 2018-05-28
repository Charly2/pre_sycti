<?php 

include '../config/config.php'; 
echo $_POST['item'];
if ($_POST['item']=='estado') {

	$query = "UPDATE reporte SET estado ='".$_POST['estado']."' WHERE idreporte ='".$_POST['id']."'";
	echo $query;
	$result = $conn->query($query);
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}

	exit(1);
} 

if ($_POST['item']=='prio') {

	$query = "UPDATE reporte SET priodidad ='".$_POST['prio']."' WHERE idreporte ='".$_POST['id']."'";
	echo $query;
	$result = $conn->query($query);
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}

	exit(1);
}


if ($_POST['item']=='oper') {

	$query = "UPDATE reporte SET operador ='".$_POST['oper']."' WHERE idreporte ='".$_POST['id']."'";
	echo $query;
	$result = $conn->query($query);
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}

	exit(1);
}

if ($_POST['item']=='cat') {

	$query = "UPDATE reporte SET categoria ='".$_POST['cat']."' WHERE idreporte ='".$_POST['id']."'";
	echo $query;
	$result = $conn->query($query);
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}

	exit(1);
}


?>



