<style type="text/css" id="background-color">
    <?php $color = esc_attr( '#' . get_theme_mod( 'background_color', 'ffffff' ) ); ?>

    body div.tempo-website-wrapper{
        background-color: <?php echo esc_attr( $color ); ?>;
    }
</style>

<style type="text/css" id="background-image">
    body div.tempo-website-wrapper{

        <?php $image = esc_url( get_theme_mod( 'background_image' ) ); ?>

        <?php if( !empty( $image ) ) : ?>

            background-image: url(<?php echo esc_url( $image ); ?>);
            background-repeat: <?php echo esc_attr( get_theme_mod( 'background_repeat' , 'repeat' ) ); ?>;
            background-position: <?php echo esc_attr( get_theme_mod( 'background_position_x' , 'center' ) ); ?>;
            background-attachment: <?php echo esc_attr( get_theme_mod( 'background_attachment' , 'scroll' ) ); ?>;

        <?php endif; ?>
    }
</style>

<?php // HEADER MENU ?>
<style type="text/css" id="gardener-menu-bkg">
<?php if( tempo_options::is_set( 'menu-bkg' ) ) : ?>

    <?php $color = tempo_options::get( 'menu-bkg' ); ?>

    header.tempo-header div.tempo-topper div.tempo-navigation-wrapper div.gardener-menu-wrapper,
    header.tempo-header div.tempo-topper div.tempo-navigation-wrapper div.tempo-menu-wrapper ul.tempo-menu-list > li ul,
    body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children>span,
    body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children.collapse-children>span:hover{
        background-color: <?php echo esc_attr( $color ); ?>;
    }

<?php endif; ?>
</style>

<style type="text/css" id="gardener-menu-link-color">
<?php if( tempo_options::is_set( 'menu-link-color' ) || tempo_options::is_set( 'menu-link-transp' ) ) : ?>

    <?php
        $hex    = tempo_options::get( 'menu-link-color' );
        $transp = tempo_options::get( 'menu-link-transp' );
        $rgba 	= 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp / 100 ), 2 ) . ' )';
    ?>

    header.tempo-header nav ul li.current-menu-ancestor > a,
    header.tempo-header nav ul li.current-menu-item > a,
    header.tempo-header nav ul li:hover > a{
        color: <?php echo esc_attr( $hex ); ?>;
    }

    header.tempo-header nav ul li a{
        color: <?php echo esc_attr( $rgba ); ?>;
    }

<?php endif; ?>
</style>

<?php // TOPPER MENU ?>
<style type="text/css" id="gardener-topper-menu-bkg">
<?php if( tempo_options::is_set( 'topper-menu-bkg' ) ) : ?>

    <?php $color = tempo_options::get( 'topper-menu-bkg' ); ?>

    div.tempo-topper-nav{
        background-color: <?php echo esc_attr( $color ); ?>;
    }

<?php endif; ?>
</style>

<style type="text/css" id="gardener-topper-menu-link-color">
<?php if( tempo_options::is_set( 'topper-menu-link-color' ) || tempo_options::is_set( 'topper-menu-link-transp' ) ) : ?>

    <?php
        $hex    = tempo_options::get( 'topper-menu-link-color' );
        $transp = tempo_options::get( 'topper-menu-link-transp' );
        $rgba 	= 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp / 100 ), 2 ) . ' )';
    ?>

    div.tempo-topper-nav nav ul li.current-menu-ancestor > a,
    div.tempo-topper-nav nav ul li.current-menu-item > a,
    div.tempo-topper-nav nav ul li:hover > a{
        color: <?php echo esc_attr( $hex ); ?>;
    }

    div.tempo-topper-nav nav ul li a{
        color: <?php echo esc_attr( $rgba ); ?>;
    }

<?php endif; ?>
</style>

<?php // TOPPER SUB MENU ?>
<style type="text/css" id="gardener-topper-sub-menu-bkg">
<?php if( tempo_options::is_set( 'topper-sub-menu-bkg' ) ) : ?>

    <?php $color = tempo_options::get( 'topper-sub-menu-bkg' ); ?>

    div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li ul{
        background-color: <?php echo esc_attr( $color ); ?>;
    }

    div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list > li > ul:before{
        border-bottom-color: <?php echo esc_attr( $color ); ?>;
    }

<?php endif; ?>
</style>

<style type="text/css" id="gardener-topper-sub-menu-link-color">
<?php if( tempo_options::is_set( 'topper-sub-menu-link-color' ) || tempo_options::is_set( 'topper-sub-menu-link-transp' ) ) : ?>

    <?php
        $hex    = tempo_options::get( 'topper-sub-menu-link-color' );
        $transp = tempo_options::get( 'topper-sub-menu-link-transp' );
        $rgba 	= 'rgba( ' . tempo_hex2rgb( $hex ) . ', ' . number_format( floatval( $transp / 100 ), 2 ) . ' )';
    ?>

    div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li.current-menu-ancestor > a,
    div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li.current-menu-item > a,
    div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li:hover > a{
        color: <?php echo esc_attr( $hex ); ?>;
    }

    div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li a{
        color: <?php echo esc_attr( $rgba ); ?>;
    }

<?php endif; ?>
</style>

<?php // HEADLINE MAX WIDTH ?>
<style type="text/css" id="header-headline-max-width">
    <?php if( tempo_options::is_set( 'header-headline-max-width' ) ) :  ?>

        header.tempo-header div.tempo-header-partial .tempo-header-headline{
            max-width: <?php echo absint( tempo_options::get( 'header-headline-max-width' ) ); ?>;
        }

    <?php endif; ?>
</style>
