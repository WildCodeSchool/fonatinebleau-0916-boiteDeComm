<div id="<?php echo sanitize_title($menu_item->title);?>" class="section1">

    <!-- Image + Titre section produits -->
    <div class="row image_section">
        <span class="ancres"></span>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="image_couple"><?php the_content(); ?></div>
            <h2><?php the_title(); ?></h2>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- LES BOITES -->
    <div class="container-fluid">

        <!-- Premier boite -->
        <div class="row container_boite">

            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 12
                );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                        if ($loop->current_post %2 == 0){
                            ?>
                            <div class="col-md-offset-1 col-md-4 col-sm-7 col-xs-12">
                                <a class="hvr-grow" data-toggle="modal" data-target="#myModal<?php echo $loop->current_post ?>">
                                    <div class="img_boite">
                                        <?php echo $product->get_image(); ?>
                                    </div>
                                </a>
                            </div>
                            <!-- Descriptif Premier boite -->
                            <div class="col-md-offset-1 col-md-4 col-sm-5 col-xs-12 comment_boite_right">
                                <?php echo get_post_meta(get_the_ID(), 'encart1', true); ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-md-offset-2 col-md-4 col-sm-5 col-xs-12 comment_boite_left">
                                <?php echo get_post_meta(get_the_ID(), 'encart1', true); ?>
                            </div>

                            <div class="col-md-offset-1 col-sm-7 col-md-4 col-xs-12">
                                <a class="hvr-grow" data-toggle="modal" data-target="#myModal<?php echo $loop->current_post ?>">
                                    <div class="img_boite">
                                        <?php echo $product->get_image(); ?>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        <div class="row comment_entre_boite">
                            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12">
                                <?php echo get_post_meta(get_the_ID(), 'encart2', true); ?>
                            </div>
                        </div>

                        <!-- PARTIE MODALE -->
                        <div  class="modal fade" id="myModal<?php echo $loop->current_post ?>" role="dialog" aria-labelledby="myModalLabel_<?php echo $loop->current_post ?>">
                            <div class="modal-dialog modal_produit" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel_<?php echo $loop->current_post ?>"><?php echo $product->get_title() ?></h4>
                                    </div>
                                    <div class="modal-body modal_boite">
                                        <!-- TEXT INTERIEUR + LIEN REFERENCE + ICONE AMAZON -->
                                        <div class="img_boite_ouvert">
                                            <div class="boite">
                                                <?php echo '<img src="'.wp_get_attachment_url($product->get_gallery_attachment_ids()[0]).'" alt="product image">'; ?>
                                            </div>
                                        </div>
                                        <div class="text_modal">
                                            <?php echo wpautop($product->post->post_content); ?>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <div class="btn btn-default bouton_modal">
                                            <?php echo get_post_meta(get_the_ID(), 'amazon-button', true); ?>
                                        </div>
                                        <div class="btn btn-default bouton_modal">
                                            <?php echo get_post_meta(get_the_ID(), 'wp-button', true); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
                ?>

            </div><!--/.products-->

        </div>
    </div>

    <!-- Image pour section video -->
    <div class="row image_section">
        <div class="image_famille"><?php echo get_post_meta($post->ID, 'num_1', true); ?></div>
    </div>
    <div class="videofond">
        <!-- PARTIE VIDEO YOUTUBE + CADRE -->
        <div class="container-fluid">
            <div class="row youtube">
                <?php
                // 1. on défini ce que l'on veut
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'video'
                );
                // 2. on exécute la query
                $my_query = new WP_Query($args);
                // 3. on lance la boucle !
                if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
                    ?>
                    <div class="col-sm-4 col-xs-12">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
                endif;
                // 4. On réinitialise à la requête principale (important)
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <!--AVIS -->
        <div class="row bloc_avis">
            <ul id="lightSlider">
                <?php
                // 1. on défini ce que l'on veut
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'commentaire amazon'
                );
                // 2. on exécute la query
                $my_query = new WP_Query($args);
                // 3. on lance la boucle !
                if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
                    ?>
                    <li>
                        <p><?php echo get_post_meta($post->ID, 'num_1', true); ?></p>
                        <h4><?php the_title(); ?></h4>
                    </li>
                    <?php
                endwhile;
                endif;
                // 4. On réinitialise à la requête principale (important)
                wp_reset_postdata();
                ?>
            </ul>
        </div>
        <p class="commentaireamazon"><?php echo get_post_meta($post->ID, 'num_2', true); ?></p>
    </div>
</div>