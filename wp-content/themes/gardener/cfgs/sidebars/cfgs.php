<?php

    /**
     *  Sidebars - config file
     */

    $cfgs = (array)tempo_cfgs::get( 'sidebars' );

    if( !empty( $cfgs ) )
        return;

    $cfgs = array(

        /**
         *  Header Sidebars
         */

         /*
         if( !isset( $cfgs[ 'header' ] ) )
             $cfgs[ 'header' ] = array();

         if( !isset( $cfgs[ 'header' ][ 'front-page-header' ] ) ){
             $cfgs[ 'header' ][ 'front-page-header' ] = array(
                 'id'            => 'front-page-header',
                 'name'          => __( 'Front Page Header' , 'gardener' ),
                 'description'   => __( 'Inside of the Sidebar the widgets will be arranged in 4 columns.' , 'gardener' ),
                 'before_widget' => '<div id="%1$s" class="widget %2$s col-xs-6 col-sm-6 col-md-3 col-lg-3">',
                 'after_widget'  => '</div>',
                 'before_title'  => '<h3 class="widget-title">',
                 'after_title'   => '</h3>'
             );
         }


         if( !isset( $cfgs[ 'footer' ] ) )
             $cfgs[ 'footer' ] = array();

         if( !isset( $cfgs[ 'footer' ][ 'footer-light' ] ) ){
             $cfgs[ 'footer' ][ 'footer-light' ] = array(
                 'id'            => 'footer-light',
                 'name'          => __( 'Footer Light Side' , 'gardener' ),
                 'description'   => __( 'Inside of the Sidebar the widgets will be arranged in 4 columns.' , 'gardener' ),
                 'before_widget' => '<div id="%1$s" class="widget %2$s col-xs-6 col-sm-6 col-md-3 col-lg-3">',
                 'after_widget'  => '</div>',
                 'before_title'  => '<h5 class="widget-title">',
                 'after_title'   => '</h5>'
             );
         }

         return $cfgs;

         */

        'header'    => array(
            'front-page-header' => array(
                'id'            => 'front-page-header',
                'name'          => __( 'Front Page Header' , 'gardener' ),
                'description'   => __( 'Inside of the Sidebar the widgets will be arranged in 4 columns.' , 'gardener' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>'
            )
        ),


        /**
         *
         *  Content Sidebars
         *  Main Sidebar        - is used by default for next templates: Blog, Archives, Author, Categories, Tags and Search Results.
         *  Front Page Sidebar  - is used by default for Front Page template.
         *  Single Sidebar      - is used by default for single post template.
         *  Page Sidebar        - is used by default for page template.
         */

        'content' => array(
            'main' => array(
                'id'            => 'main',
                'name'          => __( 'Main Sidebar' , 'gardener' ),
                'description'   => __( 'Main Sidebar - is used by default for next templates: Blog, Archives, Author, Categories, Tags and Search Results.' , 'gardener' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            ),
            'front-page' => array(
                'id'            => 'front-page',
                'name'          => __( 'Front Page - Default Sidebar' , 'gardener' ),
                'description'   => __( 'Front Page Sidebar - is used by default for Front Page template.' , 'gardener' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            ),
            'post' => array(
                'id'            => 'post',
                'name'          => __( 'Single Post - Default Sidebar' , 'gardener' ),
                'description'   => __( 'Default Single Post Sidebar - is used by default for single post template.' , 'gardener' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            ),
            'page' => array(
                'id'            => 'page',
                'name'          => __( 'Page - Default Sidebar' , 'gardener' ),
                'description'   => __( 'Page Sidebar - is used by default for page template.' , 'gardener' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        ),


        /**
         *
         *  Footer Sidebars
         */

        'footer' => array(
            'footer-light' => array(
                'id'            => 'footer-light',
                'name'          => __( 'Footer Light Side' , 'gardener' ),
                'description'   => __( 'Inside of the Sidebar the widgets will be arranged in 4 columns.' , 'gardener' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="widget-title">',
                'after_title'   => '</h5>'
            )
        )
    );

    tempo_cfgs::set( 'sidebars', $cfgs );
?>
