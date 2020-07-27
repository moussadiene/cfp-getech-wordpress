<?php
    if( !has_nav_menu( 'gardener-topper' ) )
        return;
?>

<div class="gardener-navigation-wrapper">

    <!-- TOPPER MENU -->
    <nav class="gardener-navigation nav-collapse">

        <div class="gardener-menu-content">

            <!-- COLLAPSE BUTTON -->
            <button type="button" class="gardener-btn-collapse">
                <i class="tempo-icon-menu-1"></i>
            </button>

            <?php
                $args = array(
                    'theme_location'    => 'gardener-topper',
                    'container_class'   => 'gardener-menu-wrapper',
                    'menu_class'        => 'gardener-menu-list'
                );

                wp_nav_menu( $args );
            ?>

        </div>
        <div class="tempo-visible-navigation"></div>
    </nav>

</div>
