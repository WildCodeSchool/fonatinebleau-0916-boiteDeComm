<?php 
/* Template Name: Page principale // ONE Page */ 
?>

<?php 
	get_header();
?>
<body>
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
					<a class="nav_list_left" href="#section0"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" class="logo"/></a>
					<h1>LES BOITES DE COMM'</h1>
				</div>
			</div>
<?php
		wp_nav_menu( array(
			'theme_location' => 'main-menu',
			'walker' => new mono_walker(),
			'container_class' => "collapse navbar-collapse",
			'container_id' => "bs-example-navbar-collapse-1",
			'menu_class' => 'nav navbar-nav navbar-left'
			 ) );
?>
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

<?php

	$menu_items = wp_get_nav_menu_items('main-menu');
	if( $menu_items ) {
		foreach ($menu_items as $menu_item ) {
			$args = array('p' => $menu_item->object_id,'post_type' => 'any');
		 
			global $wp_query;
			$wp_query = new WP_Query($args);
			if ($menu_item->title == 'PRODUITS')
				$templatePart = 'produits';		
			if ($menu_item->title == 'DEVENIR PARTENAIRE')
				$templatePart = 'partenaire';		
			if ($menu_item->title == 'EQUIPE')
				$templatePart = 'equipe';	
			if ($menu_item->title == 'OÙ NOUS TROUVER ?')
				$templatePart = 'nous_trouver';
			if ($menu_item->title == 'BLOG')
				$templatePart = 'blog';		
			if ($menu_item->title == 'CONTACT')
				$templatePart = 'contact';
			if ($menu_item->title == 'FOOTER')
				$templatePart = 'footer';			
			else
				$menu_item->object;
	?>
		 
			<section <?php post_class('sep'); ?>>
	<?php
			if ( have_posts() ){
		   		include(locate_template('home-'.$templatePart.'.php'));
			} 
	?>
			</section>

	<?php 
		}
	};
	get_footer();
?>

