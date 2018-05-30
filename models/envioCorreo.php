<?php
require ('class.phpmailer.php');
include("class.smtp.php");




function sendmail($correo,$nombre) {
    
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug  = 0;
	$mail->Host       = 'smtp.gmail.com';
	$mail->Port       = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth   = true;
	$mail->Username   = "reportes@sycti.net";
	$mail->Password   = "TeCa1137";
	$mail->SetFrom('reportes@sycti.net', 'Mi nombre');
	$mail->AddCC("reportes@sycti.net","Equipo Sycti");
	$mail->AddAddress($correo, $nombre);
	$mail->Subject = 'Esto es un correo de prueba';
	//$mail->MsgHTML('<h1>asd</h1>');
	$mail->Body = file_get_contents("../login.php");
	$mail->AltBody = 'This is a plain-text message body';
	if(!$mail->Send()) {
	  return 0;
	} else {
	  return 1;
	}
}


echo sendmail('papapitufo10@gmail.com','Charly');


?>