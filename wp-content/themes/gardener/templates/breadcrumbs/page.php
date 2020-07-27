<?php
    global $post;

	if( !apply_filters( 'tempo_page_breadcrumbs', tempo_options::get( 'breadcrumbs' ), $post -> ID ) )
        return;
?>

    <!-- breadcrumbs wrapper -->
    <div class="tempo-breadcrumbs">



    	<?php tempo_get_template_part( 'templates/breadcrumbs/prepend', 'page' ); ?>


        <!-- main container -->
        <div <?php echo tempo_container_class( 'main' ); ?>>
            <div <?php echo tempo_row_class(); ?>>

                <!-- content -->
                <div <?php echo tempo_content_class(); ?>>
                    <div <?php echo tempo_row_class(); ?>>

                    	<?php tempo_get_template_part( 'templates/breadcrumbs/before-content', 'page' ); ?>


                        <!-- navigation and headline -->
                        <div <?php echo tempo_full_class(); ?>>

                        	<?php tempo_get_template_part( 'templates/breadcrumbs/prepend-content', 'page' ); ?>


                            <!-- navigation -->
                            <nav class="tempo-navigation">

                                <?php tempo_get_template_part( 'templates/breadcrumbs/prepend-nav', 'page' ); ?>

                                <ul class="tempo-menu-list">

                                	<?php tempo_get_template_part( 'templates/breadcrumbs/prepend-list', 'page' ); ?>

                                    <?php echo tempo_breadcrumbs::home(); ?>

                                    <?php tempo_get_template_part( 'templates/breadcrumbs/after-home', 'page' ); ?>

                                    <?php echo tempo_breadcrumbs::pages( $post ); ?>

                                    <?php tempo_get_template_part( 'templates/breadcrumbs/append-list', 'page' ); ?>

                                </ul>

                                <?php tempo_get_template_part( 'templates/breadcrumbs/append-nav', 'page' ); ?>

                            </nav><!-- end navigation -->


                            <?php tempo_get_template_part( 'templates/breadcrumbs/after-nav', 'page' ); ?>


                            <?php if( !apply_filters( 'gardener_has_head', tempo_has_header(), $post ) ): ?>

                                <!-- headline / end -->
                                <h1 id="tempo-headline-page" class="tempo-headline"><?php the_title(); ?></h1>

                            <?php endif; ?>

                            <?php tempo_get_template_part( 'templates/breadcrumbs/append-content', 'page' ); ?>

                        </div><!-- end navigation and headline -->


                        <?php tempo_get_template_part( 'templates/breadcrumbs/after-content', 'page' ); ?>

                    </div>
                </div><!-- end content -->

            </div>
        </div><!-- end main container -->


        <?php tempo_get_template_part( 'templates/breadcrumbs/append', 'page' ); ?>

    </div><!-- end breadcrumbs wrapper -->
