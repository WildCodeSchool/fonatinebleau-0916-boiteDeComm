        <div id="<?php echo sanitize_title($menu_item->title); ?>" class="section7 <?php if (is_page('cart')){ ?> section7_cart <?php }; ?>">

        <?php $footer_id = get_page_by_path('footer');?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="foot-header">
                            <div class="container-fluid">
                                <!-- Trigger the modal with a button -->
                                <a href="#myModalfooter" style="#" data-toggle="modal" data-target="#myModalfooter">

                                      <?php echo wpautop(get_post_meta($footer_id->ID, 'num_1', true)); ?>

                                </a>

                                <!-- Modal -->
                                <div id="myModalfooter" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"><?php echo wpautop(get_post_meta($footer_id->ID, 'num_1', true)); ?></h4>
                                            </div>
                                            <div class="modal-body" style="text-align: justify;">
                                                <?php echo wpautop(get_post_meta($footer_id->ID, 'num_2', true)); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="foot-header">
                            <div class="container-fluid">
                                <!-- Trigger the modal with a button -->
                                <a href="#myModalfooter1" style="#" data-toggle="modal" data-target="#myModalfooter1">
                                        <?php echo wpautop(get_post_meta($footer_id->ID, 'num_3', true)); ?>
                                </a>

                                <!-- Modal -->
                                <div id="myModalfooter1" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><?php echo wpautop(get_post_meta($footer_id->ID, 'num_3', true)); ?></h4>
                                            </div>
                                            <div class="modal-body" style="text-align: justify;">
                                                <?php echo wpautop(get_post_meta($footer_id->ID, 'num_4', true)); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                    </div>

                    <div class="col-md-4">
                        <div class="foot-header">
                            <div class="container-fluid">

                                <!-- Trigger the modal with a button -->
                                <a href="#myModalfooter2" style="#" data-toggle="modal" data-target="#myModalfooter2">
                                        <?php echo wpautop(get_post_meta($footer_id->ID, 'num_5', true)); ?>
                                </a>

                                <!-- Modal -->
                                <div id="myModalfooter2" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><?php echo wpautop(get_post_meta($footer_id->ID, 'num_5', true)); ?></h4>
                                            </div>
                                            <div class="modal-body" style="text-align: justify;">
                                                <?php echo wpautop(get_post_meta($footer_id->ID, 'num_6', true)); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row_2_footer_2">
                    <div class="col-md-4">
                        <p><?php echo get_post_meta($footer_id->ID, 'num_7', true); ?></p>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.facebook.com/boitesdecomm" target="blank">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle text-primary fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="https://plus.google.com/+Lesboitesdecomm/posts/Z8n6Uz7PDMy" target="blank">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle text-danger fa-stack-2x"></i>
                                <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="https://www.youtube.com/channel/UCvlzYRQWxjhsrL6crS0W86g" target="blank">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle text-danger fa-stack-2x"></i>
                                <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="https://twitter.com/lesboitesdecomm" target="blank">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle text-info fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <p><?php echo get_post_meta($footer_id->ID, 'num_8', true); ?></p>
                    </div>
                </div>
            </div>
        </div>