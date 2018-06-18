<?php
session_start();

$usuario= $_SESSION['user'];

include '../config/config.php'; 

$targetdir = "../files/perfil/";
$na = explode('.', $_FILES['file']['name']);

if (($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg")) {
	//echo "<script> localStorage.clear(); </script>";
	$targetfile = $targetdir.$usuario['idusuario'].".".$na[1];

  if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfile)) {
    // file uploaded succeeded
    	header("Location: ../foto_perfil.php");
  	
  } else { 
    // file upload failed
    
    header("Location: ../foto_perfil.php?err=1");
    
  }
  exit(1);
}else{
	
	header("Location: ../foto_perfil.php?err=1");
}


    
  

?>