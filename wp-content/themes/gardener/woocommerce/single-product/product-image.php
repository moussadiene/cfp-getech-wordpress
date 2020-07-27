<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.3.2
 */

	defined( 'ABSPATH' ) || exit;

	// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
	if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
		return;
	}

	global $product, $post;

	$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
	$post_thumbnail_id = $product -> get_image_id();
	$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( has_post_thumbnail() ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	));
?>

<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper">
		<?php
			if ( has_post_thumbnail() ) {
				$media = wp_get_attachment_image_src( $post_thumbnail_id, 'woocommerce-thumbnail' );
			    //$html  = '<img src="' . esc_url( $media[ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="wp-post-image"/>';
				//$html  = wc_get_gallery_image_html( $post_thumbnail_id, true );
				$html  = '<div data-thumb="' . esc_url( $media[0] ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $media[0] ) . '">';
				$html .= '<img src="' . esc_url( $media[ 0 ] ) . '" alt="' . esc_attr( get_the_title( $post ) ) . '" class="wp-post-image"/>';
				$html .= '</a></div>';

			} else {
				$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
				$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'gardener' ) );
				$html .= '</div>';
			}

			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );

			do_action( 'woocommerce_product_thumbnails' );
		?>

		<?php
			$shipping	= tempo_options::get( 'shipping' );
			$return 	= tempo_options::get( 'return' );
			$warranty	= tempo_options::get( 'warranty' );

			$advice 	= tempo_options::get( 'advice' );
		?>
	</figure>

	<?php if( $shipping || $return || $warranty || $advice ) : ?>

		<div class="gardener-product-details">

			<?php if( $shipping || $return || $warranty ) : ?>

				<div class="sq-wrapper">

					<?php if( $shipping ) : ?>
						<div class="sq-item shipping">
							<p>
								<span><?php echo esc_html( tempo_options::get( 'shipping-text' ) ); ?></span>
							</p>
						</div>
					<?php endif; ?>

					<?php if( $return ) : ?>
						<div class="sq-item return">
							<p>
								<span><?php echo esc_html( tempo_options::get( 'return-text' ) ); ?></span>
							</p>
						</div>
					<?php endif; ?>

					<?php if( $warranty ) : ?>
						<div class="sq-item warranty">
							<p>
								<span><?php echo esc_html( tempo_options::get( 'warranty-text' ) ); ?></span>
							</p>
						</div>
					<?php endif; ?>

				</div>

			<?php endif; ?>

			<?php if( $advice ) : ?>

				<div class="sq-advice">
					<div class="sq-item text">
						<p><?php echo esc_html( tempo_options::get( 'advice-text' ) ); ?></p>
					</div>
					<div class="sq-item number">
						<p><?php echo esc_html( tempo_options::get( 'advice-number' ) ); ?></p>
					</div>
				</div>

			<?php endif; ?>

		</div>

	<?php endif; ?>
</div>
