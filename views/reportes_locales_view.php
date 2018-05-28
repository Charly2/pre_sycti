<div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Reportes de Local<small></small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          	<div class="row">
				<?php
					foreach ($reportes as $reporte) {
				?>
				<a href="reporte.php?reporte=<?php echo $reporte['idreporte']; ?>">
					<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
		                <div class="tile-stats" style="border-color: <?php echo $_estado[$reporte['estado']]; ?>">
		                  <div class="icon" style="top: 30px!important;right: 30px!important">
		                  	<i class="fa fa-check-square-o" style="font-size: 3em;color: <?php echo $_estado[$reporte['estado']]; ?>"></i>
		                  </div>
		                  <div class="count" style="color: <?php echo $_estado[$reporte['estado']]; ?>"><?php echo $reporte['idreporte']; ?></div>

		                  <h3 style="font-size: 1.2em;color: #23527c;"><?php echo $reporte['nombre_cli']; ?></h3>
		                  <h3 style="font-size: 1.2em;"><?php echo $reporte['correo']; ?></h3>
		                  
		                  <p style="margin: 0 0 0 10px;"><?php echo $reporte['tipodisp']."- "; ?> <?php echo $reporte['modelo']; ?></p>  
		                </div>
		            </div>
				</a>

					

				<?php 		
					}
				?>

          		


          	</div>
          </div>
        </div>  
    </div>    
</div>


<style>
	.tile-stats:hover{
		background: rgba(237,237,237,.3	);
	}
</style>