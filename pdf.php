<?php 
session_start();
include 'config/config.php'; 
$usuario=validasession();

$idreporte = $_GET['reporte'];

$result = $conn->query("SELECT * FROM reporte where idreporte = '$idreporte'");
$reporte = $result->fetch_assoc();



if($reporte['firma']==1){
	$id = $reporte['idreporte'];
	$myfile = fopen('models/_data/'.$id.'.txt', "r") or die("Unable to open file!");
	while(!feof($myfile)) {
	  $img_data= fgets($myfile);
	}
	fclose($myfile);
}

 include 'views/plantilla.php'; 





?>

