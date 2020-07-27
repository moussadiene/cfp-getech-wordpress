<?php
	if( !apply_filters( 'tempo_blog_categories', tempo_options::get( 'blog-categories' ) ) )
		return;

	global $post;

	if( has_category( null, $post ) ){
?>
		<div class="tempo-categories article">

			<?php
				$categories = tempo_post_categories( $post -> ID );



				if( count( $categories ) > 1 ){
					echo '<span>' . __( 'Categories', 'gardener' ) . '</span><i class="tempo-icon-down-open-mini garden-higlight-bkg"></i>';

					echo '<ul>';

					foreach( $categories as $c ){
		                $category_link = get_category_link( $c[ 'term_id' ] );

		                if( is_wp_error( $category_link ) )
		                    continue;

		                echo '<li><a href="' . esc_url( $category_link ) . '" class="category tempo-category-' . absint( $c[ 'term_id' ] ) . '" title="' . sprintf( __( 'See articles from category - %1s' , 'gardener' ), esc_attr( $c[ 'name' ] ) ) . '">' . esc_html( $c[ 'name' ] ) . '</a></li>';
		            }

					echo '</ul>';
				}

				else{
					$c = $categories[ 0 ];
					$category_link = get_category_link( $c[ 'term_id' ] );

					if( !is_wp_error( $category_link ) ){
						echo '<a href="' . esc_url( $category_link ) . '" class="category tempo-category-' . absint( $c[ 'term_id' ] ) . '" title="' . sprintf( __( 'See articles from category - %1s' , 'gardener' ), esc_attr( $c[ 'name' ] ) ) . '">' . esc_html( $c[ 'name' ] ) . '</a>';
					}
				}
			?>
			<?php //tempo_the_post_categories( $post -> ID ); ?>

		</div>
<?php
	}
?>
