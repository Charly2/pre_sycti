<?php
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}

include 'config/config.php';
$result = $conn->query("SELECT * FROM categoria ");
$cats =[];
while($cat = $result->fetch_assoc()){
	$cats[] = $cat;
}


$vis = 'categorias_view';

include 'views/layaut.php';

?>