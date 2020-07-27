<?php
	if( !apply_filters( 'tempo_post_author_box', tempo_options::get( 'post-author-box' ) ) )
		return;

	global $post;

	echo '<div class="tempo-author">';
	echo 	'<div class="tempo-author-wrapper">';
	echo 		'<div class="tempo-author-avatar">';
	echo 			get_avatar( $post -> post_author, 60, get_template_directory_uri() . '/media/img/default-avatar.png' );
	echo 		'</div>';

    echo 		'<div class="author-details">';

					$website = esc_html( get_the_author_meta( 'url' , $post -> post_author ) );

					if( !empty( $website ) ){
						echo '<a class="author-website-url" href="' . esc_url( $website ) . '" target="_blank">' . esc_url( $website ) . '</a>';
					}
					else{
						echo '<a class="author-website-url" href="' . esc_url( get_author_posts_url( $post -> post_author ) ) . '">' . esc_url( get_author_posts_url( $post -> post_author ) ) . '</a>';
					}

	echo 			'<h4 class="tempo-author-name">' . esc_html( get_the_author_meta( 'display_name' , $post -> post_author ) ) . '</h4>';

	echo 		'</div>';
    echo 	'</div>';

    $description = get_the_author_meta( 'description' , $post -> post_author );

    if( !empty( $description ) ){
		echo 	'<hr class="author-delimiter"/>';

    	echo 	'<p class="tempo-author-info">';
    	echo 	esc_html( $description );
    	echo 	'</p>';
    }

	echo 	'<div class="clear clearfix"></div>';
	echo '</div>';
?>
