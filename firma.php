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


$id_reporte = $_GET['reporte'];



include "views/firma_view.php";






?>