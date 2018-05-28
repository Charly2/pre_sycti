<div>
    <div class="clearfix"></div>
    <div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Empresas<small></small></h2>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content">
	          	<div class="col-md-4 col-md-offset-1" >
	          		<form action="models/empresa.php" method="POST">
	          		<h3>Nueva Empresas:</h3>
	          		<div style="margin-bottom:0;padding-top: .5em;" class="col-md-12  col-xs-12 form-group has-feedback " >
	                  <label style="text-align:left" class="control-label">Nombre de la empresa: </label>
	                  <input name="nombre" type="text" placeholder="Nombre" aria-describedby="inputSuccess2Status4" class="form-control ">
	                </div>

	                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-12  col-xs-12 form-group has-feedback " >
	                  <label style="text-align:left" class="control-label">Correo del encargado: </label>
	                  <input name="encargado" type="text" placeholder="Encargado" aria-describedby="inputSuccess2Status4" class="form-control ">
	                </div>

	                <div class="form-group" >
                        <div class="col-md-12 text-center" style="padding-top: 2em;">
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
	          	</form>
	          	</div>
	          	<div class="col-md-4 col-md-offset-1">
	          		<h3>Todas las Categorias</h3>

	          		<ul class="to_do">
	          			<?php foreach ($cats as $cat) {  ?>
                          <li onclick="editar(this,<?php echo $cat['idempresa'];?>,'<?php echo $cat['token'];?>','<?php echo $cat['encargado'];?>')"><?php echo $cat['nombre_empresa']; ?> </li>
                        <?php } ?>
	          			
	          		</ul>

	          	</div>

	          </div>
	        </div>
	    </div>  
	</div>
</div>	


<div tabindex="-1" role="dialog" aria-hidden="true"  class="modal fade bs-example-modal-sm  " id="modal" >
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header"><button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          <h4 id="myModalLabel2" style="text-align: center;font-weight:bold"
            class="modal-title">Editar Categoria</h4>
        </div>
        <div style="" class="modal-body">
          <form id="comentarioForm" action="models/actualiza_empresa.php" method="POST">
			<div class="form-group has-feedback">
				<strong id="catacti">Ingresa el nuevo nombre para la categoria: </strong>
          		<input id="textarea"  name="nombre" class="form-control col-md-7 col-xs-12">
			</div>  
          	
			<div class="form-group ">
				<strong id="catacti">Ingresa el nuevo correo del encargado: </strong>
          		<input id="encargado"  name="encargado" class="form-control col-md-7 col-xs-12">
			</div>
              <input type="hidden" name="id" id="valid">
              <p class="text-center" style="margin-top:2em;padding-top: 1em;font-size: 1.5em;">Token : <strong id="tok"></strong></p>
           
              <div style="padding-top:1em;margin-top:2rem;" class="message_wrapper">
                
                <div style="text-align: center;" class="col-md-12"><button id="guardar" type="submit" class="btn btn-success">Guardar Cambios</button></div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>


<script>
	function editar(th,t,to,e) {
		
		$('#valid').val(t);
		$('#encargado').val(e);
		
		$('#textarea').val(th.innerText);
		$('#tok').html(to);
		
		
		$('#modal').modal('show');
	}

	
</script>	    