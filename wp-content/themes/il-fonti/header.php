<!DOCTYPE>
<html>
<head>
  <title><?php bloginfo ('IL FONTI DI MODENA'); ?></title>
  <!-- Custom Theme files -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <?php wp_head() ?>
</head>
<body>

  <!--banner-->
  <div class="banner">
    <div class="banner-info">
      <div class="container">
        <div class="logo">
          <img id="logo" src="<?php echo get_theme_file_uri() ?>/assets/images/logo.png" >
        </div>
      </div>      
      <!--navigation-->
      <div class="top-nav">

        <!--banner-->
        <div class="banner">
          <div class="banner-info">
            <div class="container">
             
            </div>      
            <!--navigation-->
            <div class="top-nav">

              <!-- Collect the nav links, forms, and other content for toggling -->
                    
            <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
            <?php wp_nav_menu( array( 
              'theme_location'  => 'header-menu',
              'container_class'   => 'collapse navbar-collapse',
              'menu_class'      => 'nav navbar-nav navbar-center cl-effect-14'
              )
            ); ?>
          <?php } ?>

            </nav>    
          </div>  



          <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-center cl-effect-14">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="#quienes somos" class="scroll">Nosotros</a></li>
                    <li><a href="#menú" class="scroll">Menú</a></li>
                    <li><a href="#como-llegar" class="scroll">Reservas</a></li>
                  </ul> 
                  <div class="clearfix"> </div>
                </div> -->
        </div>
      </div>
    </div>
    <!--//banner-->
    <!-- //Navigation -->

