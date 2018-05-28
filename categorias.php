<?php
session_start();
include 'config/config.php';
$usuario=validasession();
$result = $conn->query("SELECT * FROM categoria ");
$cats =[];
while($cat = $result->fetch_assoc()){
	$cats[] = $cat;
}


$vis = 'categorias_view';

include 'views/layaut.php';

?>