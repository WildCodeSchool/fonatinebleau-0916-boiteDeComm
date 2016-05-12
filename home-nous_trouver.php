<div id="<?php echo sanitize_title($menu_item->title); ?>" class="section3">
    <span class="ancres" id="localisation" ></span>
    <!-- Image + titre section localisation -->
    <div class="row image_section">
        <span class="ancres"></span>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="internet"><?php the_content(); ?></div>
            <h2><?php the_title(); ?></h2>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- Liste des points de vente -->
    <div class="container-fluid point_de_vente">
        <div class="row">
            <?php
                // 1. on défini ce que l'on veut
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'nous_trouver'
                );
                // 2. on exécute la query
                $my_query = new WP_Query($args);
                // 3. on lance la boucle !
                if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
                    $image_ids = get_post_meta($post->ID, 'num_1'); 
            
                $gallery_shortcode = '[gallery id="' . join('', $image_ids) . '"]';
                print apply_filters( 'the_content', $gallery_shortcode );
                endwhile;
                endif;
                // 4. On réinitialise à la requête principale (important)
                wp_reset_postdata();
            ?> 
        </div>
    </div>

    <div class="map_google">
        <div class="row image_section">
            <div class="magasin">
                <?php echo get_post_meta($post->ID, 'num_1', true); ?>
            </div>
            <h2><?php echo get_post_meta($post->ID, 'titre', true); ?></h2>
        </div>

        <div class="container-fluid maps">
            <div id="plop" class="row">
                <p><?php echo get_post_meta($post->ID, 'num_2', true); ?></p>
            </div>
        </div>
        <div class="responsive_maps">
            <p><?php echo get_post_meta($post->ID, 'num_2', true); ?></p>
        </div>
    </div>
</div>