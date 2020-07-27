<?php
	if( !apply_filters( 'tempo_post_categories', tempo_options::get( 'post-categories' ) ) )
		return;

	global $post;

	if( has_category( null, $post ) ){
?>
		<div class="tempo-categories single">

			<?php
				$categories = tempo_post_categories( $post -> ID );

				if( count( $categories ) > 1 ){
					echo '<span class="categories-wrapper">';
					echo '<i class="tempo-icon-down-open-mini garden-higlight-bkg"></i>';
					echo '<span>' . __( 'Categories', 'gardener' );
					echo '</span>';
					echo '</span>';
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
						echo '<span class="category-wrapper">';
						echo '<a href="' . esc_url( $category_link ) . '" class="category tempo-category-' . absint( $c[ 'term_id' ] ) . '" title="' . sprintf( __( 'See articles from category - %1s' , 'gardener' ), esc_attr( $c[ 'name' ] ) ) . '">' . esc_html( $c[ 'name' ] ) . '</a>';
						echo '</span>';
					}
				}
			?>
			<?php //tempo_the_post_categories( $post -> ID ); ?>

		</div>
<?php
	}
?>
