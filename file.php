<?php

include 'config/config.php';
$usuario=validasession();
$reporte = $_POST["reporte"]; 


$ext = explode('.', $_FILES['file']['name']);


//$result = $conn->query("INSERT INTO archivo (nombre, tipo, reporte) VALUES ('".$_FILES['file']['name']."', '1', '".$reporte."')");

$result = $conn->query("INSERT INTO archivo (nombre, tipo, reporte,ext) VALUES ('".$_FILES['file']['name']."', '1', '".$reporte."','".$ext[1]."')");




$dir_subida = 'files/app/';



$fichero_subido = $dir_subida . basename($conn->insert_id.".".$ext[1]);

if (move_uploaded_file($_FILES['file']['tmp_name'], $fichero_subido)) {
    echo $conn->insert_id;
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}






?>