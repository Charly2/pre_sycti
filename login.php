

<?php
session_start();
   include 'config/config.php';
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

	$user=$_POST['username'];
	$pass = $_POST['pass'];

      
      
    $sql = "SELECT id FROM admin WHERE username = '$user' and passcode = '$pass'";
	$result = $conn->query("SELECT idusuario,correo,nombre,rol FROM usuario where correo = '$user' AND pass = '$pass'");
	$usuario = $result->fetch_assoc();


      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['user'] = $usuario;
         print_r($_SESSION);
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<html lang="en">

<head>
  <title>Login V15</title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Language" content="es">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ===============================================================================================-->
  <link rel="icon" type="image/png" href="public/images/icons/favicon.ico">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/animate/animate.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/css-hamburgers/hamburgers.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/animsition/css/animsition.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/select2/select2.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/vendor/daterangepicker/daterangepicker.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/css/util.css">
  <link rel="stylesheet" type="text/css" href="public/css/main.css">
  <!-- ===============================================================================================-->
</head>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div style="background-image: url(https://i.ytimg.com/vi/JgrMQ9rcM9U/maxresdefault.jpg);" class="login100-form-title"><img src="public/images/logo.png" class="logo"><span class="login100-form-title-1">Login</span></div>
        <form method="POST" action="" class="login100-form validate-form">
          <div data-validate="<?php echo isset($error)==0?'Usuario es requerido':'Usuario Incorrecto';?>" class="wrap-input100 validate-input m-b-26 <?php echo isset($error)==0?'':'alert-validate';?>" >
          	<span class="label-input100">Usuario</span>
          	<input  type="text" name="username" placeholder="Ingresa tu Usuario" class="input100" value="<?php echo isset($error)?$user:''; ?>">
          	<span class="focus-input100"></span>
          </div>
          <div
            data-validate="Password es requerido" class="wrap-input100 validate-input m-b-18" >
            <span class="label-input100">Password</span>
            <input type="password" name="pass" placeholder="Ingresa tu password" class="input100" value="<?php echo isset($error)?$pass:''; ?>">
            <span class="focus-input100"></span>
            <p></p>
        </div>
      <div
        class="flex-sb-m w-full p-b-30">
        <div class="contact100-form-checkbox"><input id="ckb1" type="checkbox" name="remember-me" class="input-checkbox100"><label for="ckb1" class="label-checkbox100">Recordar datos</label></div>
        <div><a href="#" class="txt1">Olvidaste tu Password?</a></div>
    </div>
    <div class="container-login100-form-btn"><button class="login100-form-btn">Login</button></div>
    </form>
  </div>
  </div>
  </div>
  <!-- ===============================================================================================-->
  <script src="public/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/animsition/js/animsition.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/bootstrap/js/popper.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/select2/select2.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/daterangepicker/moment.min.js"></script>
  <script src="public/vendor/daterangepicker/daterangepicker.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/countdowntime/countdowntime.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/js/main.js"></script>
</body>

</html>