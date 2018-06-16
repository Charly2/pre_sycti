
<div class="">
  <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Todos los Reportes <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th class="text-center">ID</th>
                          <th>Empresa/Cliente</th>
                          <th>Fecha</th>
                          <th>Categoria</th>
                          <th>Dispositivo</th>
                          <th>Cotización</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php foreach ($reportes as $reporte) {  ?>

                          <tr onclick="verreporte(<?php echo $reporte['idreporte'] ?>)">
                            <td style="text-align: center; color:white;background:<?php echo $_estado[$reporte['estado']];?> "><?php echo $reporte['idreporte'] ?></td>
                            <td><?php echo $reporte['tipo']==1?$reporte['nombre_cli']:$reporte['empresa'] ?></td>
                            <td><?php echo $reporte['inicio'] ?></td>
                            <td><?php echo $reporte['categoria'] ?></td>
                            <td><?php echo $reporte['tipodisp'] ?></td>
                            <td><?php echo $reporte['cotizacion'] ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




</div>

<script>
  function verreporte(r) {
    window.location.href = "reporte.php?reporte="+r
  }
</script>