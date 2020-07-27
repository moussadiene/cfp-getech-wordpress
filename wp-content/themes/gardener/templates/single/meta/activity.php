<?php
    global $post;

    $show_comments  = apply_filters( 'gardener_meta_post_comments',   tempo_options::get( 'post-comments' ) );
    $show_views     = apply_filters( 'gardener_meta_post_views',      tempo_options::get( 'post-views' ) );

    if( !( $show_comments || $show_views ) )
        return;

    if( !( $post -> comment_status == 'open' || function_exists( 'stats_get_csv' ) ) )
        return;

    echo '<div class="tempo-meta-activity single">';

        // comments
        if( $post -> comment_status == 'open' && $show_comments ) {
            $nr = get_comments_number( $post -> ID );

            echo '<a class="activity-item" href="' . esc_url( get_comments_link( $post -> ID ) ) . '">';
            echo '<i class="tempo-icon-chat-5"></i> ' . apply_filters( 'gardener_nr_comments', '<span>' . number_format_i18n( absint( $nr ) ) . '</span>', $post );
            echo '</a>';
        }

        // number of views ( support with jetpack plugin )
        if( function_exists( 'stats_get_csv' ) && $show_views ) {

            $args = array(
                'days'      => -1,
                'post_id'   => $post -> ID,
            );

            $result = stats_get_csv( 'postviews' , $args );
            $views  = $result[ 0 ][ 'views' ];

            echo '<span class="activity-item">';
            echo '<i class="tempo-icon-eye-2"></i> ' . number_format_i18n( absint( $views ) );
            echo '</span>';
        }

    echo '</div>';
?>
