<?php
session_start();


if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}

include 'config/config.php';
$reporte = $_POST["reporte"]; 


$ext = explode('.', $_FILES['file']['name']);


//$result = $conn->query("INSERT INTO archivo (nombre, tipo, reporte) VALUES ('".$_FILES['file']['name']."', '1', '".$reporte."')");

$result = $conn->query("INSERT INTO archivo (nombre, tipo, reporte,ext) VALUES ('".$_FILES['file']['name']."', '1', '".$reporte."','".$ext[1]."')");




$dir_subida = 'files/app/';



$fichero_subido = $dir_subida . basename($conn->insert_id.".".$ext[1]);
$m =move_uploaded_file($_FILES['file']['tmp_name'], $fichero_subido);
if ($m) {
    echo $conn->insert_id;
} else {
    echo "no";
}






?>