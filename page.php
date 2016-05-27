<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Les boites de comm'</title>
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" />

        <!-- CSS BOOSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- CSS Perso -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>

        <!-- JS BOOSTRAP -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <?php wp_head(); ?>
    </head>
    <body id="section0">

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
                        <a class="btn btn-lg panier" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><span>PANIER</span>
                            <i class="cart-contents fa fa-shopping-cart" aria-hidden="true"></i>
                            <?php
                                if (WC()->cart->get_cart_contents_count() != 0){
                                    echo sprintf (_n( '%d produit', '%d produits', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total();
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

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        // End the loop.
        endwhile;
        ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->
<?php include('home-footer.php'); ?>

</body>
</html>


<!--  -->