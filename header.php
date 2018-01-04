<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Uključi se</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
    
        <div class="container"> 
            <div class="row">
                <div class="col-xs-12">
                
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Uključi se</a>
    </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav navbar-right'
                        )
                    ); 
                ?>
      </div>
  
  </div><!-- /.container-fluid -->
</nav> 
                   <!-- /LINK: https://getbootstrap.com/docs/3.3/components/#navbar -->
                  
            </div>
                </div>
  
   <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />