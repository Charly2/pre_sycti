<?php
session_start();
function validasession(){
	if (isset($_SESSION['user'])==0) {
	header("location:login.php");
	}else{
		return $_SESSION['user'];

	}
}
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