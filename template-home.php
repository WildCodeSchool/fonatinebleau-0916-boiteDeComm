<?php 
/* Template Name: Page principale // ONE Page */ 
?>

<?php 
	get_header();
?>

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

