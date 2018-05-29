
<?php 

include '../config/config.php'; 
	
	$result = $conn->query("SELECT pass FROM usuario WHERE idusuario = '".$_POST['id']."'");
	$token = $result->fetch_assoc();

	if ($_POST['pass']==$token['pass']) {

		if($_POST['_pass']==""){
			$query = "UPDATE usuario SET correo ='".$_POST['correo']."'  WHERE idusuario ='".$_POST['id']."'";
		}else{
			$query = "UPDATE usuario SET correo ='".$_POST['correo']."', pass = '".$_POST['_pass']."'  WHERE idusuario ='".$_POST['id']."'";
		}

		
		echo $query;
		$result = $conn->query($query);
		echo $result;
		
		if ($result) {
			header("Location: ../logout.php");
		}else{
			header("Location: ../usuario.php?e=no&s=0");
		}
	}else{
		header("Location: ../usuario.php?e=no&s=0");
	}

	

	exit(1);


?>