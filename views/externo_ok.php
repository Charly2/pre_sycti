<html lang="en">

<head>
  <title>Contact V17</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ===============================================================================================-->
  <link rel="icon" type="image/png" href="../public/images/icons/favicon.ico">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../public/vendor/bootstrap/css/bootstrap.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../public/vendor/animate/animate.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../public/vendor/css-hamburgers/hamburgers.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../public/vendor/animsition/css/animsition.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../public/vendor/select2/select2.min.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../public/vendor/daterangepicker/daterangepicker.css">
  <!-- ===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../public/css/util_n.css">
  <link rel="stylesheet" type="text/css" href="../public/css/main_n.css">
  <!-- ===============================================================================================-->
</head>

<body>
  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="models/nuevo_reporte_empresa_ext.php" method="POST">
        <span class="contact100-form-title"><?php echo $e; ?></span>
        
        
        
      <label for="message" class="label-input100">Datos del Reporte </label>
      <div data-validate="Message is required" class="wrap-input100 validate-input">
        <div class="input100">
          <?php echo $m; ?>
        </div>
        <span class="focus-input100"></span>
      </div>
      <div
        class="container-contact100-form-btn"><a href="http://sae.dyndns.org/" class="contact100-form-btn">Regresa al inicio</a></div>
  </form>
  <div style="background-image: url('../public/images/bg-01.jpg');" class="contact100-more flex-col-c-m"><img src="../public/images/logo.png" alt="" style="" class="logo">
    <div class="flex-w size1 p-b-47">
      <div class="txt1 p-r-25"><span class="lnr lnr-map-marker"></span></div>
      <div class="flex-col size2"><span class="txt1 p-b-20">Direccion</span><span class="txt2">Av. Revolución 553-B San Pedro los Pinos 03800 Benito Juarez, CDMX.</span></div>
    </div>
    <div class="dis-flex size1 p-b-47">
      <div class="txt1 p-r-25"><span class="lnr lnr-phone-handset"></span></div>
      <div class="flex-col size2"><span class="txt1 p-b-20">Telefonos</span><span class="txt3"> (55) 7596 7735 </span><span class="txt3">(55) 7596 7736 </span></div>
    </div>
    <div class="dis-flex size1 p-b-47">
      <div class="txt1 p-r-25"><span class="lnr lnr-envelope"></span></div>
      <div class="flex-col size2"><span class="txt1 p-b-20">General Support</span><span class="txt3">contacto@sycti.com</span></div>
    </div>
  </div>
  </div>
  </div>
  <div id="dropDownSelect1"></div>
  <!-- ===============================================================================================-->
  
  <script src="../public/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="../public/vendor/animsition/js/animsition.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="../public/vendor/bootstrap/js/popper.js"></script>
  <script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="../public/vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
    minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect1')
    });
  </script>
  <!-- ===============================================================================================-->
  <script src="../public/vendor/daterangepicker/moment.min.js"></script>
  <script src="../public/vendor/daterangepicker/daterangepicker.js"></script>
  <!-- ===============================================================================================-->
  <script src="../public/vendor/countdowntime/countdowntime.js"></script>
  <!-- ===============================================================================================-->
  <script src="../public/js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics-->
  
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');
  </script>
</body>

</html>