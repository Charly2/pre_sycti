<?php

include 'config/config.php';



$result = $conn->query("SELECT nombre FROM categoria ");
$cats =[];
while($cat = $result->fetch_assoc()){
	$cats[] = $cat['nombre'];
}


$result = $conn->query("SELECT nombre_empresa FROM empresa ");
$empresas =[];
while($emp = $result->fetch_assoc()){
	$empresas[] = $emp['nombre_empresa'];
}









include 'views/externo.php';



?>