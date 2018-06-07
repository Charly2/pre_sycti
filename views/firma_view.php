<!DOCTYPE html>
<html lang="es">

<head>
  <title>Firma de Sycti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <script src="public/vendor/jquery/dist/jquery.min.js"></script>
  <script src="public/vendor/firma/jquery.jqscribble.js" type="text/javascript"></script>
  <script src="public/vendor/firma/jqscribble.extrabrushes.js" type="text/javascript"></script>
  <link href="public/build/css/custom.css" rel="stylesheet">
</head>


<body class="firma">
  <div class="hf"><img src="public/images/logo.png" class="logo">
    <h1 id="titulo">Ingresa Aquí tu Firma</h1>
  </div><canvas id="test" style=""></canvas><img id="img">
  <div id="gen" style="margin-top: 5px;" class="links">
    <a class="azul" href="reporte.php?reporte=<?php echo $id_reporte;?>" >Atras </a>
    <a href="#" class="rojo" onclick='$("#test").data("jqScribble").clear();'>Borrar	</a>

    <a href="#" onclick='save()'>Guardar</a></div>
  <div id="save"
    style="margin-top: 10px;" class="links"><a href="#" onclick="window.location.reload();">Cancelar 	</a><a href="#" onclick="savePost()">Firmar</a></div>
  <p>En Sycti nos tomamos muy enserio la seguridad de tus datos.Consulta nuestro <a href="#">Aviso de Privacidad</a></p>
  <script type="text/javascript">
    var imgData="";
    function save(){
      $("#test").data("jqScribble").save(function(imageData){
    
          var img = document.getElementById('img');
          img.src = imageData;
          imgData =  imageData;
          $("#img").show(500);
          $("#save").show(500).css({'display':'flex'});
          
          $("#test").hide(500);
          $("#gen").hide(500);
          $("#titulo").html("Tu firma es correcta? ");      
      });
    }
    
    $(document).ready(function(){
      $("#test").jqScribble();
      $("#test").data("jqScribble").update({brushColor: "rgb(0,0,0)"});
    });
    
    function savePost(){
          
          $.post('models/firma.php', {imagedata: imgData,'id':<?php echo $id_reporte; ?>}, function(response){
              console.log(response);

              if (response == 'ok'){
                  window.location.href = 'reporte.php?reporte=<?php echo $id_reporte; ?>'
              }else{
                 window.location.reload();
              }
              
           
             
          });
    }
  </script>
</body>

</html>