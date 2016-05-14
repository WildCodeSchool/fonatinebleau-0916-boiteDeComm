<div class="section5 ">
    <!-- Image + Titre section produits -->
    <div class="row image_section">
    <span class="ancres" id="<?php echo sanitize_title($menu_item->title); ?>" ></span>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="imgblog"><?php the_content(); ?></div>
            <h2><?php the_title(); ?></h2>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>


    <div class="container-fluid actualite">

        <div class="row">
            <div class="txt_intro_blog">
                <p><?php echo get_post_meta($post->ID, 'num_1', true); ?></p>
            </div>
            <!-- Facebook -->
            <div id="fb-root"></div>
            <div class="fb-page" data-href="https://www.facebook.com/boitesdecomm" data-tabs="timeline" data-width="800" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/boitesdecomm">
                        <a href="https://www.facebook.com/boitesdecomm">Les Boîtes de Comm</a>
                    </blockquote>
                </div>
            </div>
            <div class="responsive_blog">
                <a href="https://www.facebook.com/boitesdecomm"><?php echo get_post_meta($post->ID, 'num_2', true); ?></a>
            </div>
            
        </div><!-- Fin row actuallité -->
    </div><!--/.container-->
</div>
