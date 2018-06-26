<div>
    <div class="clearfix"></div>
    <div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="x_panel">
	          <div class="x_title">
	            <h2>Dispositivos<small></small></h2>
	            <div class="clearfix"></div>
	          </div>
	          <div class="x_content">
	          	<div class="col-md-4 col-md-offset-1" >
	          		<form action="models/nuevo_disp.php" method="POST" id="nuevo_disp" enctype="multipart/form-data">
	          		<h3>Nuevo Dispositivo:</h3>
	          		<div style="margin-bottom:0;padding-top: .5em;" class="col-md-12  col-xs-12 form-group has-feedback " >
	                  <label style="text-align:left" class="control-label">Nombre del Dispositivo: </label>
	                  <input name="nombre" type="text" placeholder="Nombre" aria-describedby="inputSuccess2Status4" class="form-control ">
	                </div>

	                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-12  col-xs-12 form-group has-feedback " >
	                  <label style="text-align:left" class="control-label">Imagen del Dispositivo: </label>
	                  <input id="file_up" name="file" type="file" placeholder="Encargado" aria-describedby="inputSuccess2Status4" class="form-control hidden">
	                  <p id="filename"></p>
	                  <div id="file_input" class="btn btn-info" style="display: block;width: 100%;" onclick="openInput();">Abrir archivo</div>
	                </div>

	                <div class="form-group" >
                        <div class="col-md-12 text-center" style="padding-top: 2em;">
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
	          	</form>
	          	</div>
	          	<div class="col-md-4 col-md-offset-1">
	          		<h3>Todas los Dispositivos</h3>

	          		<ul class="to_do">
	          			<?php foreach ($cats as $cat) {  ?>
                          <li onclick="editar(this,'<?php echo $cat['nombre_dips'];?>')"><?php echo $cat['nombre_dips']; ?> </li>
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
            class="modal-title">Dispositivo</h4>
        </div>
        <div style="" class="modal-body">
        	<h3 id="valid" class="text-center"></h3>
        	<img id="valid_img"  alt="" class="img-responsive" style="width: 200px; height: 200px;margin:2em auto" >
        </div>
      </div>
    </div>
  </div>


<script>
	
	function openInput(argument) {
		$('#file_up').click();

	}


	$('#file_up').on('change',function (argument) {
		var x = $('#file_up').val().split("\\")[2];
		
		$('#filename').html(x);

	});

	


	function editar(th,t) {
		
		$('#valid').html(t);
		console.dir(document.getElementById('valid_img').src="public/img/"+t+".jpg")

		

		
		
		$('#textarea').val(th.innerText);
	
		
		
		$('#modal').modal('show');
	}

	$('#nuevo_disp').on('submit',function (argument) {
		
	});

	
</script>	    