<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Les boites de comm'</title>
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/logo.png" />

        <!-- CSS BOOSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- CSS Slider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.5/css/lightslider.min.css" />

        <!-- CSS Perso -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>

        <!-- Librairie TYPED JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/typed.js"></script>

        <!-- Librairie JS Slider -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.5/js/lightslider.min.js"></script>

        <!-- JS BOOSTRAP -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <?php wp_head(); ?>
    </head>
    <body id="section0" class='<?php if (is_front_page()){ ?> home_page <?php }; ?>'>
    <div id="loading">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div id="extracontrols" class="cacher">
    <header>
        <div class="row">
            <img class="photoheader" src="<?php echo get_template_directory_uri(); ?>/images/bandeau.jpg" alt="photo_header"/>
            <img id="logo_header" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo_boite_de_comm"/>
            <div class="texte_header"></div>
        </div>
    </header>
    <nav class="mynav navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <div class="title_responsive">
                
                    <a class="nav_list_left" href="<?php if (is_front_page()){ ?> #section0 <?php } else echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" class="logo"/></a>
                    <h1>LES BOITES DE COMM'</h1>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
                wp_nav_menu( array(
                    'theme_location' => 'main-menu',
                    'walker' => new mono_walker(),
                    'container_class' => "", //
                    'container_id' => "bs-example-navbar-collapse-1",
                    'menu_class' => 'nav navbar-nav navbar-left',
                    'items_wrap' => my_nav_wrap()
                     ) );
        ?>
                <ul class="nav_bar_rigth">
                    <li>
                        <a class="btn btn-lg panier" href="<?php echo get_site_url(); ?>/cart" title="<?php _e( 'View your shopping cart' ); ?>"><span>PANIER</span>
                            <i class="cart-contents fa fa-shopping-cart" aria-hidden="true"></i>
                            <?php
                                if (WC()->cart->get_cart_contents_count() != 0){
                                    echo sprintf (_n( '%d produits', '%d produits', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total();
                                }
                            ?>
                        </a>
                    </li>
                </ul>                
            </div>
        </div>
    </nav>
    <script>
      $(document).ready(function(){
        $(window).bind('scroll', function() {
          var navHeight = $('.photoheader').height();
          // Si le scroll est > à la hauteur du nav - taille de la nav
          if ($(window).scrollTop() > navHeight) {
            $('.mynav').addClass('navbar-fixed-top');
          }
          else if ($(window).scrollTop() > 0) {
            $('.mynav').removeClass('navbar-fixed-bottom');
          }
          else {
            $('.mynav').removeClass('navbar-fixed-top');
            $('.mynav').removeClass('navbar-fixed-bottom');
          }
        });
      });
    </script>