<div class="section2">

    <div class="row image_section">
        <span class="ancres" id="<?php echo sanitize_title($menu_item->title); ?>"></span>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="image_couple"><?php the_content(); ?></div>
            <h2><?php the_title(); ?></h2>
            <?php endwhile; ?>
        <?php endif; ?>
        <p><?php echo get_post_meta($post->ID, 'num_1', true); ?></p>
        <p><?php echo get_post_meta($post->ID, 'num_2', true); ?></p>
    </div>        
    <!-- Image et titre section partenaire -->

    <div class="container-fluid">
        <div class="row les_partenaires">

            <?php
                // 1. on défini ce que l'on veut
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'Partenaire',
                    'order' => 'ASC'
                );
                // 2. on exécute la query
                $my_query = new WP_Query($args);

                // 3. on lance la boucle !
                if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
            ?> 
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="img_partenaire">
                                <?php echo get_post_meta($post->ID, 'num_1', true); ?>
                            </div>
                            <div class="text_partenaire">
                                <?php echo wpautop(get_post_meta($post->ID, 'num_2', true)); ?>
                            </div>
                            <div class="logo_partenaire">
                                <?php echo get_post_meta($post->ID, 'num_3', true); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="img_partenaire">
                                <?php echo get_post_meta($post->ID, 'num_4', true); ?>
                            </div>
                            <div class="text_partenaire">
                                <?php echo wpautop(get_post_meta($post->ID, 'num_5', true)); ?>
                            </div>
                            <div class="logo_partenaire">
                                <?php echo get_post_meta($post->ID, 'num_6', true); ?>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                endif;
                // 4. On réinitialise à la requête principale (important)
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>