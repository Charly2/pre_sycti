<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sycti";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");





$mes = array('',"Ene","Feb","Mar","Abri","May","Jun","Jul","Agos","Sep","Oct","Nov","Dic");












function validasession(){
	if (isset($_SESSION['user'])==0) {
	header("location:login.php");
	}else{
		return $_SESSION['user'];

	}
}



?>