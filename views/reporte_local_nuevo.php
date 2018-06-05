<style>
  .buttonFinish, .buttonNext ,.buttonPrevious  {
    margin-top: 3em!important;

  }
</style>

<div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Reporte de Local<small></small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form id="newLocal" action="models/nuevo_reporte_local.php" method="POST">
            <div id="wizard_verticle" class="form_wizard wizard_verticle">
              <ul class="list-unstyled wizard_steps">
                <li>
                  <a href="#step-11">
                    <span class="step_no">1</span>
                  </a>
                </li>
                <li>
                  <a href="#step-22">
                    <span class="step_no">2</span>
                  </a>
                </li>
                <li>
                  <a href="#step-33">
                    <span class="step_no">3</span>
                  </a>
                </li>
                <li>
                  <a href="#step-44">
                    <span class="step_no">4</span>
                  </a>
                </li>
              </ul>

              <div id="step-11" style="margin-bottom: 1em">
                <h2 class="StepTitle">Datos de Contacto de Cliente</h2>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin-10"><input id="inputSuccess2" type="text" placeholder="Nombre del Cliente" name="nombre_cli" class="form-control has-feedback-left">
                    <span aria-hidden="true" class="fa fa-user form-control-feedback left"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin-10">
                    <input id="inputSuccess4" type="email" placeholder="Correo del Cliente" name="correo" class="form-control has-feedback-right">
                    <span aria-hidden="true" class="fa fa-envelope form-control-feedback right"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin-7">
                    <input id="inputSuccess6" data-inputmask="'mask' : '(99) 9999-9999'" type="text" placeholder="Telefono del Cliente" name="telefono" class="form-control has-feedback-left">
                    <span aria-hidden="true" class="fa fa-phone form-control-feedback left"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin-7">
                    <input id="inputSuccess9" data-inputmask="'mask' : '(99) 9999-9999'" type="text" placeholder="Otro Telefono" name="telefono2" class="form-control">
                    <span aria-hidden="true" class="fa fa-phone form-control-feedback right"> </span>
                  </div> 
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin" style="padding-top: .5em;">
                    <label style="text-align:left" class="control-label">Tipo de Dispositivo</label>
                    <select name="tipodisp" class="form-control">
                      <?php foreach ($disps as $disp) {  ?>
                          <option value="<?php echo $disp; ?>"><?php echo $disp; ?> </option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin" style="padding-top: .5em;">
                    <label style="text-align:left" class="control-label">Categoria</label>
                    <select name="categoria" class="form-control">
                        <?php foreach ($cats as $cat) {  ?>
                          <option value="<?php echo $cat; ?>"><?php echo $cat; ?> </option>
                        <?php } ?>
                      </select>
                  </div>
                  <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback " >
                    <label style="text-align:left" class="control-label">Marca </label>
                    <input name="marca" type="text" placeholder="Marca" aria-describedby="inputSuccess2Status4" class="form-control ">
                  </div>
                  <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback " >
                      <label style="text-align:left" class="control-label">Modelo </label>
                      <input name="modelo" type="text" placeholder="Modelo" aria-describedby="inputSuccess2Status4" class="form-control ">
                  </div>
              </div>
              <div id="step-22">
                <h2 class="StepTitle">Información del Dispositivo</h2>

                
                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback " >
                  <label style="text-align:left" class="control-label">Número de Serie </label>
                  <input name="numserie" type="text" placeholder="Número de Serie" aria-describedby="inputSuccess2Status4" class="form-control ">
                </div>
                
              
                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback " >
                  <label style="text-align:left" class="control-label">Color </label>
                  <input name="color" type="text" placeholder="Color" aria-describedby="inputSuccess2Status4" class="form-control ">
                </div>

                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback " >
                  <label style="text-align:left" class="control-label">Almacenamiento: </label>
                  <input name="almacenamiento" type="text" placeholder="Almacenamiento" aria-describedby="inputSuccess2Status4" class="form-control ">
                </div>
                

                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback " >
                  <label style="text-align:left" class="control-label">Memoria Ram: </label>
                  <input name="ram" type="text" placeholder="Memoria Ram" aria-describedby="inputSuccess2Status4" class="form-control ">
                </div>


                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback " >
                  <label style="text-align:left" class="control-label">Password: </label>
                  <input name="pass" type="text" placeholder="Password" aria-describedby="inputSuccess2Status4" class="form-control ">
                </div>
                  

                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback " >
                  <label style="text-align:left" class="control-label">Pantalla: </label>
                  <input name="pantalla" type="text" placeholder="Pantalla" aria-describedby="inputSuccess2Status4" class="form-control ">
                </div>  

                <div style="padding:.5em 0" class="col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                  <label style="text-align:left" class="control-label col-md-12 col-sm-12 col-xs-12">Accesorios</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <textarea rows="3" placeholder="Accesorios con los que cuenta" name="acces" class="form-control"></textarea>
                  </div>
                </div>

                <div style="padding:.5em 0" class="col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                  <label style="text-align:left" class="control-label col-md-12 col-sm-12 col-xs-12">Observaciones</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <textarea rows="3" placeholder="Observaciones generales del Dispositivo ejemplo: tapa con un mancha de te pintura" name="observaciones" class="form-control"></textarea>
                  </div>
                </div>

                
              </div>
              <div id="step-33">
                <h2 class="StepTitle">Información sobre el problema</h2>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback no-padding">
                  <label style="text-align:left" class="control-label col-md-12 col-sm-12 col-xs-12">Descipción</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <textarea rows="3" placeholder="Descipción Completa del Problema" name="problema" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback no-padding"><label style="text-align:left" class="control-label col-md-12 col-sm-12 col-xs-12">Solución Propuesta</label>
                  <div class="col-md-12 col-sm-12 col-xs-12"><textarea rows="3" placeholder="Descipción Completa de la Solucioón Problema" name="solucion" class="form-control"></textarea></div>
                </div>

                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                  <label style="text-align:left" class="control-label">Técnico Asignado</label>
                  <select name="operador" class="form-control">
                    <?php foreach ($users as $user) {  ?>
                      <option value="<?php echo $user; ?>"><?php echo $user; ?> </option>
                    <?php } ?>
                    
                    

                  </select>
                </div>

                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                  <label style="text-align:left" class="control-label">Prioridad</label>
                  <select name="priodidad" class="form-control">
                    <?php foreach ([1,2,3,4,5] as $user) {  ?>
                      <option value="<?php echo $user; ?>"><?php echo $user; ?> </option>
                    <?php } ?>
                  </select>
                </div>

                
                
              </div>
              <div id="step-44">
                <h2 class="StepTitle">Información de pago</h2>

                <div style="margin-bottom:0" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                  <label style="text-align:left" class="control-label">Fecha de Entrega</label>
                  <input id="single_cal4" name="entrega" type="text" placeholder="First Name" aria-describedby="inputSuccess2Status4" class="form-control has-feedback-right">
                  <span aria-hidden="true" class="fa fa-calendar form-control-feedback right"></span>
                </div>
                <div style="margin-bottom:0" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                  <label style="text-align:left" class="control-label">Garantia</label>
                  <input name="garantia" type="text" placeholder="Garantia" aria-describedby="inputSuccess2Status4" class="form-control has-feedback-right">
                  <span aria-hidden="true" class="fa fa- form-control-feedback right"> días</span>
                </div>
                
                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                  <label style="text-align:left" class="control-label">Cotización</label>
                  <input name="cotizacion" type="text" placeholder="Cotización" aria-describedby="inputSuccess2Status4" class="form-control has-feedback-left"><span aria-hidden="true" class="fa fa-dollar form-control-feedback left"></span>
                </div>
 
                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                  <label style="text-align:left" class="control-label">Tipo de Pago</label>
                  <select name="tipopago" class="form-control">
                    <option value="Pago Efectivo">Pago Efectivo</option>
                    <option value="Pago Electronico">Pago Electronico</option>
                  </select>
                </div>


                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                  <label style="text-align:left" class="control-label">Pago a Cuenta</label>
                  <input name="pago" type="text" placeholder="Pago a Cuenta" aria-describedby="inputSuccess2Status4" class="form-control has-feedback-left"><span aria-hidden="true" class="fa fa-dollar form-control-feedback left"></span>
                </div>


              </div>
            </div>            
            

            </form>

          </div>
        </div>
      </div>
    </div>
</div>
<style>
  .buttonFinish,.buttonFinish:hover,.buttonFinish:focus,.buttonFinish:active{
    background:#26B99A; 
    border-color: #26B99A;
    color: white;
  }
  .buttonNext,.buttonNext:hover,.buttonNext:focus,.buttonNext:active {
    background: #34495E !important;
    border-color: #34495E !important;
  }
</style>

<script>
  var formLocal = $('#newLocal');
  formLocal.on('submit',function (argument) {
    $('.buttonFinish').addClass('buttonDisabled ');

  });
</script>