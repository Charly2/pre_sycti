<?php


$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "sycti";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");





$mes = array('',"Ene","Feb","Mar","Abri","May","Jun","Jul","Agos","Sep","Oct","Nov","Dic");
















?>
