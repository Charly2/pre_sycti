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
            <form id="reporte" action="/reporte_local" method="post" class="form-horizontal form-label-left input_mask">
              <div style="display:none" class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <input id="ma" type="text" placeholder="Propiedades" name="prop" class="form-control has-feedback-left">
                  <span aria-hidden="true" class="fa fa-user form-control-feedback left"></span>
               </div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin-10"><input id="inputSuccess2" type="text" placeholder="Nombre del Cliente" name="nombre" class="form-control has-feedback-left">
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
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Tipo de Pago</label>
                <select name="tipopago" class="form-control">
                  <option value="Pago Efectivo">Pago Efectivo</option>
                  <option value="Pago Electronico">Pago Electronico</option>
                </select></div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Tipo de Dispositivo</label>
                <select name="tipoDis" class="form-control">
                  <option value="Computadora">Computadora </option>
                  <option value="Tableta">Tableta</option>
                  <option value="SmartPhone">SmartPhone</option>
                  <option value="Otro Dispositvo">Otro Dispositvo</option>
                </select>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Categoria</label>
                <select name="categoria" class="form-control">
                    <option value="1">Hardware</option>
                    <option value="2">Software</option>
                    <option value="3">Soporte Tecnico</option>
                    <option value="5">Redes 2</option>
                  </select>
              </div>
              <div style="margin-bottom:0" class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Fecha de Entrega</label>
                <input id="single_cal4" name="fechaentrega" type="text" placeholder="First Name" aria-describedby="inputSuccess2Status4" class="form-control has-feedback-right">
                <span aria-hidden="true" class="fa fa-calendar form-control-feedback right"></span>
              </div>
              <div style="margin-bottom:0" class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Cotización</label>
                <input name="coti" type="text" placeholder="Cotización" aria-describedby="inputSuccess2Status4" class="form-control has-feedback-left"><span aria-hidden="true" class="fa fa-dollar form-control-feedback left"></span>
              </div>
              <div style="margin-bottom:0" class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Garantia</label>
                <input name="garantia" type="text" placeholder="Garantia" aria-describedby="inputSuccess2Status4" class="form-control has-feedback-right">
                <span aria-hidden="true" class="fa fa- form-control-feedback right"> días</span>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback no-padding">
                <label style="text-align:left" class="control-label col-md-12 col-sm-12 col-xs-12">Descipción</label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <textarea rows="3" placeholder="Descipción Completa del Problema" name="descripcion" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback no-padding"><label style="text-align:left" class="control-label col-md-12 col-sm-12 col-xs-12">Solución Propuesta</label>
                <div class="col-md-12 col-sm-12 col-xs-12"><textarea rows="3" placeholder="Descipción Completa de la Solucioón Problema" name="solucion" class="form-control"></textarea></div>
              </div>
              <div style="margin-bottom:0" class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Número de Serie </label>
                <input name="numserie" type="text" placeholder="Número de Serie" aria-describedby="inputSuccess2Status4" class="form-control ">
              </div>
              <div style="margin-bottom:0" class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Marca </label>
                <input name="numserie" type="text" placeholder="Marca" aria-describedby="inputSuccess2Status4" class="form-control ">
              </div>
              <div style="margin-bottom:0" class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Modelo </label>
                <input name="numserie" type="text" placeholder="Modelo" aria-describedby="inputSuccess2Status4" class="form-control ">
              </div>
              <div style="margin-bottom:0" class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Color </label>
                <input name="numserie" type="text" placeholder="Color" aria-describedby="inputSuccess2Status4" class="form-control ">
              </div>
              <div style="margin-bottom:0" class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback no-margin">
                <label style="text-align:left" class="control-label">Marca </label>
                <input name="numserie" type="text" placeholder="Marca" aria-describedby="inputSuccess2Status4" class="form-control ">
              </div>
            </form>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div style="text-align: center;" class="col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-success enviar">Guardar</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  var props = "";
  
  setTimeout(function(){
      document.querySelector(".btn.btn-success.enviar").addEventListener('click', function () {
          //$('#pro').val(props);
          $('#reporte').submit();
          
      });
  },500);
  
  
  setTimeout(function () {
      document.querySelector("#addProp").addEventListener('click', function () {
          add($('#clave'), $('#valor'));
      });
  }, 500);
  
  
  function add(c,v){
      let aux ="";
      if (props==""){ aux = c.val() +' : '+ v.val();}
      else{  aux = ','+c.val() +' : '+ v.val();}
      props += aux;
      print(aux);
      $('#ma').val(props);
      c.val('');
      v.val('');
  }
  
  function print(x){
      var li = document.createElement('li')
      li.innerHTML = x.replace(',', '');
      document.getElementById('listProp').appendChild(li)
  }
</script>
</div>
