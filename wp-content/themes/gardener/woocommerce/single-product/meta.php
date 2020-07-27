<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

	if ( !(defined( 'ABSPATH' ) && class_exists( 'WooCommerce' )) ) {
		exit;
	}

	global $product;
?>

<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php
		$has_sku	= wc_product_sku_enabled() && ( $product -> get_sku() || $product -> is_type( 'variable' ) );
		$has_terms	= has_term( null, 'product_cat', $product -> get_id() );
	?>

	<?php if( $has_sku || $has_terms ) : ?>

		<div class="product-meta-wrapper">
			<?php if ( $has_sku ) : ?>

				<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'gardener' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'gardener' ); ?></span></span>

			<?php endif; ?>

			<?php
				if( has_term( null, 'product_cat', $product -> get_id() ) ){
					$terms = (array)get_the_terms( $product -> get_id(), 'product_cat' );

					echo '<div class="tempo-categories product">';

					if( count( $terms ) > 1 ){
						echo '<span>' . esc_html__( 'Categories', 'gardener' ) . '</span><i class="tempo-icon-down-open-mini garden-higlight-bkg"></i>';

						echo '<ul>';

						foreach( $terms as $t ){

							$term_link = get_term_link( $t -> term_id );

							if( is_wp_error( $term_link ) )
								continue;

							echo '<li><a href="' . esc_url( $term_link ) . '" class="category tempo-category-' . absint( $t -> term_id ) . '" title="' . sprintf( __( 'See articles from category - %1s' , 'gardener' ), esc_attr( $t -> name ) ) . '">' . esc_html( $t -> name ) . '</a></li>';
						}

						echo '</ul>';
					}

					else{
						$t = $terms[ 0 ];

						$term_link = get_term_link( $t -> term_id );

						if( !is_wp_error( $term_link ) ){
							echo '<a href="' . esc_url( $term_link ) . '" class="category tempo-category-' . absint( $t -> term_id ) . '" title="' . sprintf( __( 'See articles from category - %1s' , 'gardener' ), esc_attr( $t -> name ) ) . '">' . esc_html( $t -> name ) . '</a>';
						}
					}

					echo '</div>';
				}
			?>
		</div>

	<?php endif; ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'gardener' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>
</div>
