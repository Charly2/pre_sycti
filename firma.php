<?php
session_start();
include 'config/config.php';
$usuario=validasession();


$id_reporte = $_GET['reporte'];



include "views/firma_view.php";






?>