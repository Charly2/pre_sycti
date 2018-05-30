<?php
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}

include 'config/config.php';

$idreporte = $_GET['reporte'];




$result = $conn->query("SELECT * FROM reporte where idreporte = '$idreporte' ");
$reporte = $result->fetch_assoc();

if($result->num_rows != 0){
$result = $conn->query("SELECT estado FROM estados ");
$estados =[];
while($estado = $result->fetch_assoc()){
	$estados[] = $estado['estado'];
}

$result = $conn->query("SELECT nombre FROM usuario ");
$users =[];
while($estado = $result->fetch_assoc()){
	$users[] = $estado['nombre'];
}

$result = $conn->query("SELECT idarchivo, nombre,ext  FROM archivo where tipo = 1 and reporte = $idreporte ");
$files =[];
while($file = $result->fetch_assoc()){
	$files[] = $file;
}

$result = $conn->query("SELECT nombre FROM categoria ");
$cats =[];
while($cat = $result->fetch_assoc()){
	$cats[] = $cat['nombre'];
}


if($reporte['tipo']==2){
	$result = $conn->query("SELECT * FROM empresa where nombre_empresa = '".$reporte['empresa']."'");
	$empresa = $result->fetch_assoc();
}


if($reporte['firma']==1){
	$id = $reporte['idreporte'];
	$myfile = fopen('models/_data/'.$id.'.txt', "r") or die("Unable to open file!");
	while(!feof($myfile)) {
	  $img_data= fgets($myfile);
	}
	fclose($myfile);
}



$result = $conn->query("SELECT comentario.*,usuario.nombre FROM comentario INNER JOIN usuario on comentario.usuario= usuario.idusuario where reporte = '".$idreporte."'");
$comentarios =[];
while($com = $result->fetch_assoc()){
	$com['f'] = explode('-', $com['fecha']);
	$comentarios[] = $com;
}







$vis = "reporte_view";

}else {
	header("Location: index.php");
	exit(1);
}



include 'views/layaut.php';


?>