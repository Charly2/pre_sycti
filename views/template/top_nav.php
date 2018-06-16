<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle"><a id="menu_toggle"><i class="fa fa-bars"></i></a></div>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a class="user-profile dropdown-toggle" href="javascript:;" data-toggle="dropdown" aria-expanded="false">
            <img src="files/perfil/<?php echo $usuario['idusuario'];?>.jpg" alt="" >
            <?php echo $usuario['nombre'];?><span class="fa fa-angle-down" style="margin-left:.5em"></span></a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="javascript:;"> Perfil</a></li>
            <li><a href="javascript:;"><span class="badge bg-red pull-right">50%</span><span>Configuracion</span></a></li>
            <li><a href="javascript:;">Ayuda</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
          </ul>
        </li>
        <li class="dropdown" role="presentation"><a class="dropdown-toggle info-number" href="javascript:;" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i><span class="badge bg-green" id="appnot">6</span></a>
          <ul
            class="dropdown-menu list-unstyled msg_list" id="menu1" role="menu">
            <li><a><span class="image"><img src="images/img.jpg" alt="Profile Image"/></span><span><span>John Smith</span><span class="time">3 mins ago</span></span><span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span></a></li>
            <li><a><span class="image"><img src="images/img.jpg" alt="Profile Image"/></span><span><span>John Smith</span><span class="time">3 mins ago</span></span><span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span></a></li>
            <li><a><span class="image"><img src="images/img.jpg" alt="Profile Image"/></span><span><span>John Smith</span><span class="time">3 mins ago</span></span><span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span></a></li>
            <li><a><span class="image"><img src="images/img.jpg" alt="Profile Image"/></span><span><span></span><span class="time">3 mins ago</span></span><span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span></a></li>
            <li>
              <div class="text-center"><a><strong>See All Alerts</strong><i class="fa fa-angle-right"></i></a></div>
            </li>
      </ul>
      </li>
      </ul>
    </nav>
  </div>
</div>