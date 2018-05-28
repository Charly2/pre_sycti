<div class="main">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<?php $i=0; foreach ($r as $tipo) { ?>
					<div class="col-md-6">
				        <div class="x_panel">
				          <div class="x_title">
				            <h3>Reportes <strong><?php echo $estados[$i];?></strong></h3>
				            <div class="clearfix"></div>
				          </div>
				          <div class="x_content">
							<?php if (sizeof($tipo)==0) { ?>
								No hay reportes en esta categoria.
							<?php }else{ foreach ($tipo as $reporte) { ?>
								<a href="reporte.php?reporte=<?php echo $reporte['idreporte']; ?>" >
					            	<article class="media event" style="padding-top: .5em;">
						              <div class="pull-left date" style="background: <?php echo $_estado[$reporte['estado']]; ?>">
						                <p class="month"><?php echo $mes[intval($reporte['fecha_sep'][1])]; ?></p>
						                <p class="day"><?php echo $reporte['fecha_sep'][2] ; ?></p>
						              </div>

						              <div class="media-body">
						                <p class="title" ><strong><?php echo $reporte['tipo']==1?$reporte['nombre_cli']:$reporte['empresa']; ?></strong></p>
						                <p><?php echo substr($reporte['problema'], 0, 78);  ?>...</p>
						              </div>
						            </article>
					            </a>
									
							<?php }} ?>
				          </div>
				        </div>
				    </div>
				<?php $i++;} ?>
				
			</div>
			
		</div>
		<div class="col-md-4">

			<div class="row">
				
				<div class="col-md-12">
				        <div class="x_panel">
				          <div class="x_title">
				            <h3>Reportes por <strong>Iniciar</strong></h3>
				            <div class="clearfix"></div>
				          </div>
				          <div class="x_content">
							<?php if (sizeof($reportesA)==0) { ?>
								No hay reportes en esta categoria.
							<?php }else{ foreach ($reportesA as $reporte) { ?>
								<a href="reporte.php?reporte=<?php echo $reporte['idreporte']; ?>" >
					            	<article class="media event" style="padding-top: .5em;">
						              <div class="pull-left date" style="background: <?php echo $_estado[$reporte['estado']]; ?>">
						                <p class="month"><?php echo $mes[intval($reporte['fecha_sep'][1])]; ?></p>
						                <p class="day"><?php echo $reporte['fecha_sep'][2] ; ?></p>
						              </div>

						              <div class="media-body">
						                <p class="title" ><strong><?php echo $reporte['tipo']==1?$reporte['nombre_cli']:$reporte['empresa']; ?></strong></p>
						                <p><?php echo substr($reporte['problema'], 0, 78);  ?>...</p>
						              </div>
						            </article>
					            </a>
									
							<?php }} ?>
				          </div>
				        </div>
				    </div>
			</div>

			
		</div>


	



	</div>
</div>