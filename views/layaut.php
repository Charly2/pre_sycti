<!DOCTYPE html>
<html lang="es">
<?php include 'template/head.php'?>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a class="site_title" href="index.html">
              <!--i.fa.fa-paw-->
              <img src="public/images/logo.png" style="max-height: 90%;filter: brightness(1);">
            </a>
          </div>
          <div class="clearfix">
            <?php include 'template/profile.php' ?>
            <?php include 'template/sidebar_menu.php' ?>
          <?php include 'template/footer_controls.php' ?>
          </div>
          
          <br> 
          
         
        </div>
      </div>
      <?php include 'template/top_nav.php' ?>

      <div class="right_col" role="main">
        <!--h1 Usuario: #{user}-->
        <?php  include $vis.".php"; ?>
      </div>
      
    </div>
  </div>

  <?php include 'template/footer.php' ?>
</body>

</html>
<script src="/js/fecha.js"></script>
