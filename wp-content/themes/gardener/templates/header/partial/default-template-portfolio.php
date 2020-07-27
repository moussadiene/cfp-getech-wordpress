<?php
	global $post;

	// header image
	$thumbnail 		= get_post( get_post_thumbnail_id( $post -> ID ) );
	$image 			= has_post_thumbnail( $post -> ID ) && isset( $thumbnail -> ID ) && wp_attachment_is( 'image', $thumbnail );
?>
	<div class="tempo-header-partial tempo-portfolio">

		<!-- featured image or default header image -->
		<?php
			// featured image
			if( $image ){
				echo '<div id="wp-custom-header" class="wp-custom-header">';
				echo get_the_post_thumbnail( $post, apply_filters( 'gardener_header_thumbnail_size', 'tempo-header' ), array(
					'alt' => esc_attr( get_the_title( $post ) ),
					'class' => null
				));
				echo '</div>';
			}

			// default header media
			else{
		        the_custom_header_markup();
			}
		?>

		<!-- mask - a transparent foil over the header image -->
		<div class="tempo-header-mask"></div>

		<!-- header content -->
		<div class="tempo-header-content">

    		<!-- main container -->
    		<div <?php echo tempo_container_class( 'main' ); ?>>
        		<div <?php echo tempo_row_class(); ?>>

					<!-- content -->
            		<div <?php echo tempo_content_class(); ?>>
            			<div <?php echo tempo_row_class(); ?>>

				    		<?php tempo_get_template_part( "templates/header/partial/portfolio/{$post->post_type}" ); ?>

						</div>
					</div><!-- end content -->

    			</div>
    		</div><!-- end main container -->

	    </div><!-- end header content -->

	</div>
