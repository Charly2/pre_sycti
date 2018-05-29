<?php
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}


	if (!isset($_GET['s'])) {
		$s=0;
	}else{
		$s=$_GET['s'];
	}

include 'config/config.php';
$result = $conn->query("SELECT * FROM empresa ");
$cats =[];
while($cat = $result->fetch_assoc()){
	$cats[] = $cat;
}


$vis = 'usuario_view';

include 'views/layaut.php';

?>