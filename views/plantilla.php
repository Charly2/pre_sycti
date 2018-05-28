<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reporte</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/index.css" rel="stylesheet">

  </head>

  <body>



    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="row header"> 
              <div class="col-md-2 header_logo">
                <img class="img-responsive"  src="public/img/logo.png" alt="">
              </div>
              <div class="col-md-8 header_text">
                <h1>SERVICIO TECNICO MAC</h1>
                <p>Av. Revolución 553-B, San Pedro de los Pinos, C.P. 09800, Benito Juárez, CDMX </p>
                <p><strong>Telefonos:</strong> 75917735 y 75917736 <strong>Whatsapp:</strong> 5571469096</p>
                <p>Lunes a Viernes de <strong>09:00 a 19:00 hrs</strong> y Sabados de <strong> 09:00  a 14:00 hrs</strong></p>
              </div>
              <div class="col-md-2 header_mac">
                <img class="img-responsive" src="public/img/mac.png" alt="">
              </div>
          </div>
        </div>
        

        <div class="col-lg-12">
          <div class="card mt-4">
            <div class="card-header">
              <div class="row">
                <div class="col-md-2">
                  <p class="noMargin"><strong>N. de Orden</strong></p>
                </div>
                <div class="col-md-3">
                  <p class="noMargin"><strong><?php echo "Rep_Loc_".$idreporte;?></strong></p>
                </div>
                <div class="col-md-3 ">
                  <p class="noMargin"><strong>Fecha inicio: <?php echo $reporte['inicio']; ?></strong></p>
                </div>
                <div class="col-md-3 ">
                  <p class="noMargin"><strong>Fecha entrega: <?php echo $reporte['entrega']; ?></strong></p>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary marTop">
            <div class="card-header">
              <strong>CLIENTE</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-7">

                  <div class="row">
                      <div class="col-md-4">
                        <strong>Nombre: </strong>
                      </div>
                      <div class="col-md-6">
                        <?php echo $reporte['nombre_cli']; ?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                        <strong>Telefonos: </strong>
                      </div>
                      <div class="col-md-3">
                        <?php echo $reporte['telefono']; ?>
                      </div>
                      <div class="col-md-3">
                       <?php echo $reporte['telefono2']; ?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                        <strong>Correo: </strong>
                      </div>
                      <div class="col-md-6">
                        <?php echo $reporte['correo']; ?>
                      </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="row">
                      <div class="col-md-6">
                        <strong>Cotizacion: </strong>
                      </div>
                      <div class="col-md-6">
                        $ <?php echo $reporte['cotizacion']; ?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <strong>Pago: </strong>
                      </div>
                      <div class="col-md-6">
                        $ <?php echo $reporte['pago']; ?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <strong>Tipo de Pago: </strong>
                      </div>
                      <div class="col-md-6">
                         <?php echo $reporte['tipopago']; ?>
                      </div>
                  </div>
                  
                 
                </div>


                </div>
                
              </div>

              
          </div>

          <div class="card card-outline-secondary marTop">
            <div class="card-header">
              <strong>EQUIPO</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <strong>Tipo de Equipo: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['tipodisp']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Num. de Serie: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['numserie']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Respando: </strong>
                </div>
                <div class="col-md-2">
                   <?php echo $reporte['respaldo']==1?"Si":"No"; ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <strong>Marca: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['marca']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Modelo: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['modelo']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Color: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['color']; ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <strong>Accesorios: </strong>
                </div>
                <div class="col-md-6">
                  <?php echo $reporte['acces']; ?>
                </div>
             
                <div class="col-md-2">
                  <strong>Pantalla: </strong>
                </div>
                <div class="col-md-2">
                  Negra
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-2">
                  <strong>Password: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['pass']; ?>
                </div>
                
                <div class="col-md-2">
                  <strong>Memoria Ram: </strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['ram']; ?>
                </div>
                <div class="col-md-2">
                  <strong>Almacenamiento</strong>
                </div>
                <div class="col-md-2">
                  <?php echo $reporte['almacenamiento']; ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <strong>Falla:</strong>
                </div>
                <div class="col-md-12">
                  <p><?php echo $reporte['problema']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <strong>Solución:</strong>
                </div>
                <div class="col-md-12">
                  <p><?php echo $reporte['solucion']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <strong>Observaciones:</strong>
                </div>
                <div class="col-md-12">
                  <p><?php echo $reporte['observaciones']; ?></p>
                </div>
              </div>
             
            </div>
          </div>
          
          

           <div class="card card-outline-secondary marTop">
            <div class="card-header text-center">
              <strong>Detalles en equipo</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 text-center">
                  <ul class="atributos">
                    <li>
                      <input type="checkbox">
                      Boton del Home
                    </li>
                    <li>
                      <input type="checkbox">
                      Boton del Home
                    </li>
                    <li>
                      <input type="checkbox">
                      Boton del Home
                    </li>
                    <li>
                      <input type="checkbox">
                      Boton del Home
                    </li>
                    <li>
                      <input type="checkbox">
                      Boton del Home
                    </li>
                    <li>
                      <input type="checkbox">
                      Boton del Home
                    </li>
                    <li>
                      <input type="checkbox">
                      Boton del Home
                    </li>
                    <li>
                      <input type="checkbox">
                      Boton del Home
                    </li>
                    
                  </ul>
                </div>
                <div class="col-md-6 text-center">
                  <img class="disp" src="public/img/iphone.jpg" alt="">
                </div>
                <div class="col-md-3 text-center">
                  <strong>Garantia:</strong>
                  <p> <?php echo $reporte['garantia']; ?> dias</p>
                  
                </div>
              </div>
            </div>
          </div>
          
          
          
          <div class="marTop">
            <div class="row">
              <div class="col-md-1 text-center">
                <img class="terminos" src="public/img/terminos.png" alt="">
              </div>
              <div class="col-md-10">
                <ul class="condiciones">
                  <li> EN CASO DE NO SER ACEPTADA LA REPARACIÓN, EL COSTO DEL DIAGNOSTICO ES DE $250.00 M/N.</li>
                  <li>LOS TRABAJOS DE MICROELECTRONICA PUEDEN TARDAR DE 15 A 45 DÍAS.</li>
                  <li> DESPUÉS DE SER NOTIFICADA LA REPARACIÓN DE SU EQUIPO, SE DARÁ UN LAPSO DE 30 DÍAS PARA RECOGERLO, EXCEDIDO ESTE TIEMPO EL EQUIPO SE PONDRÁ A DISPOSICIÓN DE SERVICIO TECNICO MAC SIN NINGUNA ACLARACIÓN.</li>
                  <li>SERVICIO TECNICO MAC <strong>NO</strong> SE HACER RESPOSABLE POR FALLA EN SOFTWARE O PERDIDA DE INFORMACIÓN NO RESPALDADA.</li>
                  <li>EN EQUIPOS MOJADOS LA GARANTIA SOLO CUBRE LA PIEZA REEMPLAZADA, EN CASO DE REPARACIÓN DE TARJETA LOGICA (MOJADA) NO APLICA YA QUE SON COMPONENTES ELECTRONICOS Y PUEDEN PRESENTAR FALLAS POSTERIORES POR LA HUMEDAD.</li>
                  <li>
                    DIAGNOSTICO DE LABORATORIO 3 DIAS COMO MINIMO
                  </li>
                  <li>
                    LA GARANTIA SOLO ES AICADA EN LA PIEZA REPARADA 
                  </li>
                </ul>
                
              </div>
            
            </div>
            <small class="text-muted declaro" style="font-size: 10px;">Declaró estar de acuerdo con los términos y condiciones estipulados en esta orden de servicio. Así mismo declaro que los datos contenidos en ellos son reales del estado actual de mi(s) equipo(s).</small> 
          </div>
           <div class="">
             <p style="margin: 0"><strong>Nombre y Firma: _______________________________________________________________</strong></p>
             <p class="text-muted"style="margin: 0;font-size: .9em;">Estatus final del equipo</p>
             <p style="height: 3em;"></p>
           </div> 
            
          <small class="text-muted">Declaro estar conforme con el servicio recibido por parte de SERVICIO TECNICO MAC, y con el estatus final en que recibio mi equipo.</small>

          <div class="row fecha ">
            <div class="col-md-6 text-center" style="    padding-top: 50px;">
              <strong>Fecha: </strong> ______________________________
            </div>
            <div class="col-md-6 text-center">
              <strong>Firma: </strong> 
              <?php if($reporte['firma']==0){ ?>
                  ______________________________
              <?php }else{ ?>
                  <img class="firma" src="<?php echo $img_data; ?>" alt="">
              <?php } ?>
              

            </div>
          </div>

        </div>
        

      </div>

    </div>

    <div class="imprimir">Imprimir</div>
    <!-- /.container -->

    <!-- Footer -->
    <!--footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      
    </footer-->

    <!-- Bootstrap core JavaScript -->
    <style>
      .imprimir{
        display: none;
        position: fixed;
        width: 80px;
        height: 40px;
        background: #169F85;
        top: 2%;
        z-index: 100000;
        text-align: center;
        color: white;
        right: 2%;
        line-height: 40px;
        border-radius: 5px;
      }
      ul{
        margin: 0;
      }
      .imprimir:hover{
        cursor: pointer;
      }
    </style>
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script>
      $( document ).ready(function() {
       // window.print();
      });

      $('.imprimir').on('click',function(){
        $('.imprimir').hide();
        window.print();
        $('.imprimir').show();
      });
    </script>
  </body>

</html>
