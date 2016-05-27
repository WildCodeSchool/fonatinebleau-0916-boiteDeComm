<?php
/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */

add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

function my_remove_post_type_support()
{
	remove_post_type_support('post', 'editor');
}
add_action('init', 'my_remove_post_type_support', 10);

/* Suppression de la balise <p> lors de l'ajout d'un content */
remove_filter( 'the_content', 'wpautop' );

/* Suppression de width et height lors de l'ajout d'image */
function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
add_filter('wp_get_attachment_link', 'remove_width_attribute', 10, 4);

/* Suppresion de la class ajouté automatiquement sur les images */
add_filter( 'get_image_tag_class', '__return_empty_string' );

/* Déclaration du menu */
function register_my_menu() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' ),
		)
	);
}
add_action( 'init', 'register_my_menu' );

// Add custom li
function my_nav_wrap() {
  // checks if there is an item in the cart
  // returns default items + cart link if there is
  // returns default items if the cart is empty
  if (sizeof(WC()->cart->get_cart()) != 0) {
    $wrap  = '<ul id="%1$s" class="%2$s">';
    $wrap .= '%3$s';
    $wrap .= '<li class="cart">';
    $wrap .= '<a href="' . WC()->cart->get_cart_url() . '" class="panier_responsive"> PANIER';
    $wrap .= WC()->cart->get_cart_total();
    $wrap .= '</a>';
    $wrap .= '</li>';
    $wrap .= '</ul>';
  } else {
    $wrap  = '<ul id="%1$s" class="%2$s">';
    $wrap .= '%3$s';
    $wrap .= '<li class="cart">';
    $wrap .= '<a href="' . WC()->cart->get_cart_url() . '" class="panier_responsive"> PANIER';
    $wrap .= '</a>';
    $wrap .= '</li>';
    $wrap .= '</ul>';
  }
  return $wrap;
}


class mono_walker extends Walker_Nav_Menu{
	function start_el(&$output, $item, $depth = 0, $args = Array(), $id = 0){
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

		//Récupère l'URL DE l'item
		$parsedURL = parse_url( esc_attr( $item->url ));
		//Supprime le dernier '/' de l'url
		$cleanURL = substr_replace($parsedURL['path'],'',-1);
		//On split la chaine sur les '/'
		$pathTab = explode('/',$cleanURL);
		//On modifie la chaine derrière le dernier '/'
		$pathTab[sizeof($pathTab)-1] = '#'.$pathTab[sizeof($pathTab)-1];
		//On reconstitue l'URL complète modifiée
		$path = implode('/',$pathTab );
		//On injecte la nouvelle URL dans le href de l'item
		$attributes .= !empty( $item->url ) ? ' href="'.$path.'"' : '';

		$attributes .= ! empty( $item->url )        ? ' data-title=""' : '';
		$description  = ! empty( $item->description ) ? '<span></span>' : '';

		if($depth != 0) $description = "";

		$item_output = $args->before;
		$item_output .= '<a class="nav_list_left" '. $attributes .'>';
		$item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
		$item_output .= $description.$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

function get_post_by_title($page_title, $output = OBJECT) {

	global $wpdb;
	$post = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE post_title = %s AND post_type='post'", $page_title ), $output);

	if ( $post )
		return $post;

	return null;
}

function customGalleryOutput($output = "", $attr) {
	// This part is globally copied from the WordPress gallery function
	$return = $output; // fallback
	$post = get_post();

	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) )
			$attr['orderby'] = 'post__in';
		$attr['include'] = $attr['ids'];
	}

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}

	extract(shortcode_atts(array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post ? $post->ID : 0,
		//'itemtag'    => $html5 ? 'figure'     : 'dl',
		//'icontag'    => $html5 ? 'div'        : 'dt',
		//'captiontag' => $html5 ? 'figcaption' : 'dd',
		//'columns'    => 3,
		'size'       => 'thumbnail',
		'include'    => '',
		'exclude'    => '',
		//'link'       => '',
		// This parameter is added to keep the default behaviour:
		'usedefault' => 0
	), $attr, 'gallery'));

	if ($usedefault) return $output;

	$id = intval($id);
	if ( 'RAND' == $order )
		$orderby = 'none';

	if ( !empty($include) ) {
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	}
	elseif ( !empty($exclude) ) {
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}
	else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if (empty($attachments))
		return '';

	$return = '<div class="col-sm-offset-1 col-sm-10 col-xs-12">';

	foreach ($attachments as $attachment) {
		$return .= '<div class="col-sm-2 col-xs-3">';
		$return .= wp_get_attachment_image($attachment->ID, $size);

		if ( !empty($attachment->post_excerpt) ) {
			$return .= '';
			$return .= $attachment->post_excerpt;
			$return .= '';
		}
		$return .= '</div>';
	}

	$return .= '</div>';

	return $return;
}

add_filter("post_gallery", "customGalleryOutput", 10, 4);


add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
function woo_add_custom_general_fields() {

	global $woocommerce, $post;

	echo '<div class="options_group">';

	woocommerce_wp_textarea_input(
		array(
			'id'          => 'encart1',
			'label'       => __( 'Homepage encart 1', 'woocommerce' ),
			'desc_tip'    => 'true',
			'description' => __( 'Enter the custom value here.', 'woocommerce' )
		)
	);

	woocommerce_wp_textarea_input(
		array(
			'id'          => 'encart2',
			'label'       => __( 'Homepage encart 2', 'woocommerce' ),
			'desc_tip'    => 'true',
			'description' => __( 'Enter the custom value here.', 'woocommerce' )
		)
	);

	woocommerce_wp_text_input(
		array(
			'id'          => 'amazon-button',
			'label'       => __( 'Bouton Amazon', 'woocommerce' ),
			'desc_tip'    => 'true',
			'description' => __( 'Enter the custom value here.', 'woocommerce' )
		)
	);

	woocommerce_wp_text_input(
		array(
			'id'          => 'wp-button',
			'label'       => __( 'Bouton Wordpress', 'woocommerce' ),
			'desc_tip'    => 'true',
			'description' => __( 'Enter the custom value here.', 'woocommerce' )
		)
	);

	echo '</div>';

}

// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );
function woo_add_custom_general_fields_save( $post_id ){

	$woocommerce_text_field = $_POST['amazon-button'];
	if( !empty( $woocommerce_text_field ) )
		update_post_meta( $post_id, 'amazon-button', $woocommerce_text_field );

	$woocommerce_text_field = $_POST['wp-button'];
	if( !empty( $woocommerce_text_field ) )
		update_post_meta( $post_id, 'wp-button', $woocommerce_text_field );

	$woocommerce_textarea = $_POST['encart1'];
	if( !empty( $woocommerce_textarea ) )
		update_post_meta( $post_id, 'encart1', $woocommerce_textarea);

	$woocommerce_textarea = $_POST['encart2'];
	if( !empty( $woocommerce_textarea ) )
		update_post_meta( $post_id, 'encart2', $woocommerce_textarea );

}

/**
 * Remove shipping name from the label in Cart and Checkout pages
 */
add_filter( 'woocommerce_cart_shipping_method_full_label', 'wc_custom_shipping_labels', 10, 2 );
function wc_custom_shipping_labels( $label, $method ) {
    if ( $method->cost > 0 ) {
        if ( WC()->cart->tax_display_cart == 'excl' ) {
            $label = wc_price( $method->cost );
            if ( $method->get_shipping_tax() > 0 && WC()->cart->prices_include_tax ) {
                $label .= ' <small>' . WC()->countries->ex_tax_or_vat() . '</small>';
            }
        } else {
            $label = wc_price( $method->cost + $method->get_shipping_tax() );
            if ( $method->get_shipping_tax() > 0 && ! WC()->cart->prices_include_tax ) {
                $label = ' <small>' . WC()->countries->inc_tax_or_vat() . '</small>';
            }
        }
    }

    return $label;
}

?>