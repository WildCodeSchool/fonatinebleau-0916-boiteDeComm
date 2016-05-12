<div id="<?php echo sanitize_title($menu_item->title); ?>" class="section6">

  <!-- Titre section contact -->
  <div class="row image_section">
    <span class="ancres"></span>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="image_couple"><?php echo get_post_meta($post->ID, 'num_1', true); ?></div>
        <h2 class="titrecontact"><?php the_title(); ?></h2>
        <p><?php echo get_post_meta($post->ID, 'num_2', true); ?></p>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-horizontal">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>