<html lang="en">

<head>
  <title>Contact V17</title>
  <meta charset="UTF-8">
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
  <link rel="stylesheet" type="text/css" href="public/css/util_n.css">
  <link rel="stylesheet" type="text/css" href="public/css/main_n.css">
  <!-- ===============================================================================================-->
</head>

<body>
  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="models/nuevo_reporte_empresa_ext.php" method="POST">
        <span class="contact100-form-title">Levanta tu reporte</span>
        <label for="first-name" class="label-input100">Datos de la Empresa</label>
        <div data-validate=""
          class="wrap-input100 rs1-wrap-input100 validate-input">
          <select id="first-name" type="text" name="empresa" placeholder="First name" style="height: 55px;border: 0;" class="input100">
           <?php foreach ($empresas as $cat) {  ?>
                          <option value="<?php echo $cat; ?>"><?php echo $cat; ?> </option>
                        <?php } ?>

          </select>
          <span
            class="focus-input100"></span>
        </div>
        <div data-validate="" class="wrap-input100 rs2-wrap-input100 validate-input">
          <input type="text" name="token" placeholder="Tu Token" class="input100" >
          <span class="focus-input100"></span></div><label for="email" class="label-input100">Datos de Contacto</label>
        <div
          data-validate="Valid email is required: ex@abc.xyz" class="wrap-input100 validate-input">
          <input id="email" type="text" name="correo" placeholder="Ingresa tu Coreo" class="input100"><span class="focus-input100"></span><input id=""
            type="text" name="telefono" placeholder="Ingresa tu Telefono" style="margin-top: 5px;border-top: 1px solid #e6e6e6;" class="input100"><span class="focus-input100"></span></div>
    <label
      for="phone" class="label-input100">Seleciona la Categoria</label>
      <div class="wrap-input100">
        <select id="first-name" type="text" name="categoria" placeholder="First name" style="height: 55px;border: 0;" class="input100 has-val">
          <?php foreach ($cats as $cat) {  ?>
                          <option value="<?php echo $cat; ?>"><?php echo $cat; ?> </option>
                        <?php } ?>
        </select>
        <span
          class="focus-input100"></span>
      </div><label for="message" class="label-input100">Datos del Problema </label>
      <div data-validate="Message is required" class="wrap-input100 validate-input"><textarea id="message" name="problema" placeholder="Describe tu problema detalladamente" class="input100"></textarea><span class="focus-input100"></span></div>
      <div
        class="container-contact100-form-btn"><button class="contact100-form-btn">Levantar Reporte</button></div>
  </form>
  <div style="background-image: url('public/images/bg-01.jpg');" class="contact100-more flex-col-c-m"><img src="public/images/logo.png" alt="" style="" class="logo">
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
  
  <script src="public/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/animsition/js/animsition.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/bootstrap/js/popper.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
    minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect1')
    });
  </script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/daterangepicker/moment.min.js"></script>
  <script src="public/vendor/daterangepicker/daterangepicker.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/vendor/countdowntime/countdowntime.js"></script>
  <!-- ===============================================================================================-->
  <script src="public/js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics-->
  
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');
  </script>
</body>

</html>