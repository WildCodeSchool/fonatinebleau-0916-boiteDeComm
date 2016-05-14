<div class="section4">

  <!-- Image et titre equipe -->
  <div class="row image_section">
    <span class="ancres" id="<?php echo sanitize_title($menu_item->title); ?>"></span>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <h2><?php the_title(); ?></h2>
          <?php endwhile; ?>
      <?php endif; ?>
  </div>
  <div class="container-fluid">
    <div class="row">
        <?php
          // 1. on défini ce que l'on veut
          $args = array(
              'post_type' => 'post',
              'category_name' => 'equipe',
              'order' => 'ASC'
          );
          // 2. on exécute la query
          $my_query = new WP_Query($args);
          // 3. on lance la boucle !
          if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        ?> 
            <div class="col-xs-6 col-md-3">
              <div class="feature">
                <div class="bloc_photo"> 
                  <div class="photo_equipe">
                    <?php echo get_post_meta($post->ID, 'num_1', true); ?>
                  </div>
                  <div class="text_createur">
                    <h3><?php the_title(); ?></h3>
                    <h6><?php echo get_post_meta($post->ID, 'num_2', true); ?></h6>
                    <p><?php echo get_post_meta($post->ID, 'num_3', true); ?></p>
                  </div>  
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