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
	          	<div class="col-md-6 col-md-offset-3 text-center" >
	          		<div class="col-md-12 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ">
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>
                                    <i class="fa fa-facebook"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="files/perfil/<?php echo $usuario['idusuario'];?>.jpg" alt="..." class="img-circle profile_img">
                                </li>
                                <li>
                                  <a>
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>

                            <h3 class="name"><?php echo $usuario['nombre'];?></h3>

							<form action="models/actualiza_usuario.php" method="POST">
				          		<h3></h3>
				          		<div style="margin-bottom:0;padding-top: .5em;" class="col-md-12  col-xs-12 form-group has-feedback " >
				                  <label style="text-align:left" class="control-label">Correo del usuario: </label>
				                  <input name="correo" type="text" placeholder="Correo" aria-describedby="inputSuccess2Status4" class="form-control " value="<?php echo $s==1?$_GET['c']:$usuario['correo']; ?>">
				                </div>
				                <input name="id" type="hidden" placeholder="Correo" aria-describedby="inputSuccess2Status4" class="form-control " value="<?php echo $usuario['idusuario'];?>">
				                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-12  col-xs-12 form-group has-feedback " >
				                  <label style="text-align:left" class="control-label">Nueva Contraseña del usuario: </label>
				                  <input name="_pass" type="password" placeholder="**************" aria-describedby="inputSuccess2Status4" class="form-control "  >
				                  
				                </div>

				                <div style="margin-bottom:0;padding-top: .5em;" class="col-md-12  col-xs-12 form-group has-feedback " >
				                  <label style="text-align:left" class="control-label">Contraseña del usuario: </label>
				                  <input name="pass" type="password" placeholder="**************" aria-describedby="inputSuccess2Status4" class="form-control "  >
				                  <p style="margin-top: 1em;"class="btn btn-<?php echo $_GET['s']==1?'success':'danger'?> btn-xs <?php echo !isset($_GET['s'])?'hide':''?>"><?php echo isset($_GET['e'])=="si"?'Actualizado correctamente':'Error en la contraseña'?></p>
				                </div>


				                <div class="form-group" >
			                        <div class="col-md-12 text-center" style="padding-top: 2em;">
			                          <button type="submit" class="btn btn-success">Actualizar</button>
			                        </div>
			                      </div>


				          	</form>
                            
                          </div>
                        </div>
                      </div>
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