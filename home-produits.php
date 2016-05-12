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

            <?php
                // 1. on défini ce que l'on veut
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'boite',
                    'order' => 'ASC'
                );
                // 2. on exécute la query
                $my_query = new WP_Query($args);
                // 3. on lance la boucle !
                $i = 0;
                if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
            ?> 
                <div class="row">
                    <!-- Lien de l'image BOITE DE COUPLE -->
                    <?php if($i % 2 == 0) : ?>

                        <div class="col-md-offset-1 col-md-4 col-sm-7 col-xs-12">
                            <a class="hvr-grow" data-toggle="modal" data-target="#myModal">
                                <div class="img_boite">
                                    <?php echo get_post_meta($post->ID, 'num_1', true); ?>
                                </div>
                            </a>
                        </div>
                        <!-- Descriptif Premier boite -->
                        <div class="col-md-offset-1 col-md-4 col-sm-5 col-xs-12 comment_boite_right">
                            <?php echo wpautop(get_post_meta($post->ID, 'num_7', true)); ?>
                        </div>

                    <?php endif; ?>

                    <?php if($i % 2 != 0) : ?>

                        <div class="col-md-offset-2 col-md-4 col-sm-5 col-xs-12 comment_boite_left">
                            <?php echo wpautop(get_post_meta($post->ID, 'num_7', true)); ?>
                        </div>

                        <div class="col-md-offset-1 col-sm-7 col-md-4 col-xs-12">
                            <a class="hvr-grow" data-toggle="modal" data-target="#myModal1">
                                <div class="img_boite">
                                    <?php echo get_post_meta($post->ID, 'num_1', true); ?>
                                </div>
                            </a>
                        </div>

                    <?php endif; ?>

                    <div class="row comment_entre_boite">
                        <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12">
                            <?php echo wpautop(get_post_meta($post->ID, 'num_8', true)); ?>
                        </div>
                    </div>

                    <!-- PARTIE MODALE -->
                    <div  class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel_1">
                        <div class="modal-dialog modal_produit" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel_1"><?php echo get_post_meta($post->ID, 'num_2', true); ?></h4>
                                </div>
                                <div class="modal-body modal_boite">
                                    <!-- TEXT INTERIEUR + LIEN REFERENCE + ICONE AMAZON -->
                                    <div class="img_boite_ouvert">
                                        <div class="boite">
                                            <?php echo get_post_meta($post->ID, 'num_3', true); ?> 
                                        </div>
                                    </div> 
                                    <div class="text_modal">
                                        <?php echo wpautop(get_post_meta($post->ID, 'num_4', true)); ?>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <div class="btn btn-default bouton_modal">
                                        <?php echo get_post_meta($post->ID, 'num_5', true); ?> 
                                    </div>
                                    <div class="btn btn-default bouton_modal">
                                        <?php echo get_post_meta($post->ID, 'num_6', true); ?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            $i++;
            endwhile;
            endif;
                // 4. On réinitialise à la requête principale (important)
                wp_reset_postdata();
            ?> 

<!--             <div class="row">
                <div class="col-md-offset-2 col-md-4 col-sm-5 col-xs-12 comment_boite_left_responsive">
                    <p>Un programme très simple : des défis à relever avec des récompenses et des gages à la clef, des questions et un temps d’échange fort.</p>
                </div>
            </div> -->

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