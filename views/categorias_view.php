<div>
    <div class="clearfix"></div>
    <div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Categorias<small></small></h2>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content">
	          	<div class="col-md-4 col-md-offset-1" >
	          		<form action="models/categoria.php" method="POST">
	          		<h3>Nueva Categoria:</h3>
	          		<div style="margin-bottom:0;padding-top: .5em;" class="col-md-12  col-xs-12 form-group has-feedback " >
	                  <label style="text-align:left" class="control-label">Nombre de la categoria: </label>
	                  <input name="nombre" type="text" placeholder="Almacenamiento" aria-describedby="inputSuccess2Status4" class="form-control ">
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
                          <li onclick="editar(this,<?php echo $cat['idcategoria'];?>)"><?php echo $cat['nombre']; ?> </li>
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
          <form id="comentarioForm" action="models/actualiza_categoria.php" method="POST">
          	<strong id="catacti">Ingresa el nuevo nombre para la categoria: </strong>
          	<input id="textarea"  name="nombre" 
              class="form-control col-md-7 col-xs-12">
              <input type="hidden" name="id" id="valid">
           
              <div style="padding-top:4em;margin-top:2rem;" class="message_wrapper">
                
                <div style="text-align: center;" class="col-md-12"><button id="guardar" type="submit" class="btn btn-success">Guardar Cambios</button></div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>


<script>
	function editar(th,t) {

		$('#textarea').val(th.innerText);
		$('#valid').val(t);
		$('#modal').modal('show');
	}

	
</script>	    