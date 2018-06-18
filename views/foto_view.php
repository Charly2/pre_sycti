<div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Foto de Perfil<small></small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          	<div class="row">
				
				<div class="col-md-12 foto_app text-center" >
					<img class="foto_perfil" src="files/perfil/<?php echo $usuario['idusuario'];?>.jpg" alt="">
					<form action="models/foto_perfil.php" method="post" class="foto_perfil_app" enctype="multipart/form-data">
					    <label class="btn btn-success" for="fileToUpload">Cambiar foto</label>
					    <input type="file" name="file" id="fileToUpload">
					    <!--input type="submit" value="Upload Image" name="submit"-->
					</form>
				</div>
          		


          	</div>
          </div>
        </div>  
    </div>    
</div>

<script>
	$('#fileToUpload').on('change',function (argument) {
		$('.foto_perfil_app').submit();
	});


	function findGetParameter(parameterName) {
	    var result = null,
	        tmp = [];
	    var items = location.search.substr(1).split("&");
	    for (var index = 0; index < items.length; index++) {
	        tmp = items[index].split("=");
	        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
	    }
	    return result;
	}



	$('.foto_perfil').height($('.foto_perfil').width());
	
	if(findGetParameter('err')){
		setTimeout(function(){

		new PNotify({
	          title: 'Error',
	          text: 'Tu archivo NO se subio correctamente',
	          type: 'error',
	          styling: 'bootstrap3',
	          delay: 1000
	      });

		 }, 500);
		
	}
</script>

<style>
	.foto_perfil{
		display: block;
		width: 80%;
		max-width: 250px;
		max-height: 250px;

		margin:auto;
		border-radius: 50%;
		border: 5px solid #EDEDED ;
	}
	#fileToUpload{
		display: none;
	}
	.foto_perfil_app{
		margin-top: 1em;
	}
</style>