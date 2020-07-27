<?php
    global $post;

    $cols       = 1;
    $col_class  = esc_attr( apply_filters( 'zeon_columns_size_class', null ) );

    if( $col_class == 'col-lg-4' )
        $cols = 3;

    if( $col_class == 'col-lg-6' )
        $cols = 2;

	$thumbnail          = get_post( get_post_thumbnail_id( $post ) );
    $has_post_thumbnail = has_post_thumbnail( $post ) && isset( $thumbnail -> ID ) && wp_attachment_is( 'image', $thumbnail );

    if( !$has_post_thumbnail )
        return;


    echo '<div class="tempo-thumbnail-wrapper">';


    /**
     *  Image Thumbnail Image
     */

    echo '<div class="tempo-image-wrapper overflow-wrapper">';

    echo apply_filters( 'tempo_article_picture', null, $post, $cols, array() );

    /**
     *  Thumbnail Permalink ( go to single post )
     */

    echo '<a href="' . esc_url( get_permalink( $post ) ) . '" class="tempo-flex-container tempo-valign-bottom" title="' . esc_attr( strip_tags( get_the_title( $post ) ) ) . '">';

    /**
     *  Thumbnail Caption
     */

    $caption = isset( $thumbnail -> post_excerpt ) ? strip_tags( $thumbnail -> post_excerpt ) : null;

    if( !empty( $caption ) ){
        echo '<span class="tempo-caption-wrapper tempo-flex-item left">' . $caption . '</span>';
    }

    echo '</a>';

    echo '</div>';


    echo '</div>';
?>
