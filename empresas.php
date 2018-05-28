<?php
session_start();
include 'config/config.php';
$usuario=validasession();
$result = $conn->query("SELECT * FROM empresa ");
$cats =[];
while($cat = $result->fetch_assoc()){
	$cats[] = $cat;
}


$vis = 'empresas_view';

include 'views/layaut.php';

?>