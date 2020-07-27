<?php

    /**
     *  Footer Widgets numbers of Columns
     */

    $asides = (array)tempo_cfgs::get( 'asides' );
    $nr     = apply_filters( 'gardener_header_front_page_sidebar_columns', absint( $asides[ 'header-front-page' ] ) );

    /**
     *  check if is active Sidebar
     */

    if( !is_active_sidebar( 'front-page-header' ) )
        return;
?>

    <!-- aside -->
    <aside class="content tempo-front-page header-sidebar">

        <!-- container -->
        <div <?php echo tempo_container_class(); ?>>
            <div <?php echo tempo_row_class(); ?>>

                <!-- content -->
                <div <?php echo tempo_content_class(); ?>>
                    <div <?php echo tempo_row_class( 'widgets-row  cols-' . absint( $nr ) ); ?>>

                        <?php dynamic_sidebar( 'front-page-header' ); ?>

                    </div>
                </div><!-- end content -->

            </div>
        </div><!-- end container -->

    </aside><!-- end aside -->
