<?php

    /**
     *  Footer Widgets numbers of Columns
     */

    $asides = (array)tempo_cfgs::get( 'asides' );
    $nr     = apply_filters( 'gardeber_footer_light_sidebar_columns', absint( $asides[ 'footer-light' ] ) );

    /**
     *  check if is active Sidebar
     */

    if( !is_active_sidebar( 'footer-light' ) )
        return;
?>

    <!-- aside -->
    <aside class="content tempo-footer light-sidebars">

        <!-- container -->
        <div <?php echo tempo_container_class(); ?>>
            <div <?php echo tempo_row_class(); ?>>

                <!-- content -->
                <div <?php echo tempo_content_class(); ?>>
                    <div <?php echo tempo_row_class( 'widgets-row cols-' . absint( $nr ) ); ?>>

                        <?php dynamic_sidebar( 'footer-light' ); ?>

                    </div>
                </div><!-- end content -->

            </div>
        </div><!-- end container -->

    </aside><!-- end aside -->
