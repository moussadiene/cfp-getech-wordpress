<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
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
 * @version 3.0.0
 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	global $product, $order;

	$price_classes	= '';
	$id				= $product -> get_id();
	$nr 			= absint( get_post_meta( $id, '_set_units', true ) );
	$is_set 		= absint( get_post_meta( $id, '_is_set_product', true ) );
	$currency		= get_woocommerce_currency_symbol();

	// Default Product
	$sale_price 	= $product -> get_sale_price();
	$regular_price	= $final_price = $product -> get_regular_price();
	$sku 			= $product -> get_sku();
	$price			= wc_price( $regular_price  );
	$final_price 	= $regular_price;

	if( $sale_price ){
		$price			= wc_format_sale_price( wc_price( $regular_price ), wc_price( $sale_price ) );
		$final_price 	= $sale_price;
	}

	// Variable Product
	if( $product -> is_type( 'variable' ) ){

		$variable 	= new WC_Product_Variable( $product );

		$default 	= array();
		$attributes = $variable -> get_variation_attributes();

		foreach( $attributes as $attr => $values ){
			$default[ 'attribute_' . sanitize_title( $attr ) ] = $variable -> get_variation_default_attribute( $attr );
		}

		foreach( $product -> get_children() as $index ){
			$variation 	= new WC_Product_Variation( $index );

			//deb::e( array( $default, $variation ) );
			if( $default === $variation -> get_variation_attributes() ){
				//deb::e( $i );

				$sale_price		= $variation -> get_sale_price();
				$regular_price	= $final_price = $variation -> get_regular_price();

				//echo $variation -> get_price_html(); echo "<br>";
				//echo $variation -> get_sku(); echo "<br>";
				//echo $variation -> get_sale_price(); echo "<br>";
				//echo $variation -> get_regular_price(); echo "<br>";
				//echo $variation -> get_price(); echo "<br>";
				//echo $variation -> get_price_suffix();

				if( $sale_price ){
					//$price = wc_format_sale_price( wc_price( $variation -> get_regular_price()/6 ), wc_price( $variation -> get_sale_price()/6 ) );
					$price			= wc_format_sale_price( wc_price( $regular_price ), wc_price( $sale_price ) );
					$final_price 	= $sale_price;
				}

				if ( wc_product_sku_enabled() && ( $variation -> get_sku() || $product -> is_type( 'variable' ) ) ){
					$sku = $variation -> get_sku();
				}
			}
		}
	}

	// Price per Unit
	if( $is_set && $nr > 0 ){
		$unit_sale_price	= number_format( $sale_price/$nr, 2 );
		$unit_regular_price	= $unit_final_price = number_format( $regular_price/$nr, 2 );

		if( $unit_sale_price && $unit_sale_price > 0 ){
			$unit_price			= wc_format_sale_price( wc_price( $unit_regular_price ), wc_price( $unit_sale_price  ) );
			$unit_final_price 	= $unit_sale_price;
		}

		echo '<div class="price-unit" data-units="' . absint( $nr ) . '">';

		echo '<span class="unit-text">';
		echo esc_html( get_post_meta( $id, '_set_unit_text', true ) );
		echo '</span>';

		echo '<div class="price-wrapper">';

		$unit_price = apply_filters( 'woocommerce_variable_price_html', $unit_price . $product -> get_price_suffix(), $product );

		echo apply_filters( 'woocommerce_get_price_html', $unit_price, $product );

		echo '</div>';

		// SKU
		if ( wc_product_sku_enabled() && ( $sku || $product -> is_type( 'variable' ) ) ) : ?>
			<div class="product_meta">
				<span class="sku_wrapper">
					<?php esc_html_e( 'SKU:', 'gardener' ); ?>
					<span class="sku"><?php echo $sku ? $sku : esc_html__( 'N/A', 'gardener' ); ?></span>
				</span>
			</div>
		<?php endif;

		echo '</div>';

		$price_classes = 'units';
	}

	// Price
	echo '<div class="price ' . esc_attr( $price_classes ) . '">';

	if( $is_set && $nr > 0 ){
		echo '<span class="total-text">';
		echo esc_html( get_post_meta( $id, '_set_total_text', true ) );
		echo '</span>';
	}

	echo '<div class="price-wrapper">';

	$price = apply_filters( 'woocommerce_variable_price_html', $price . $product -> get_price_suffix(), $product );

	echo apply_filters( 'woocommerce_get_price_html', $price, $product );

	echo '</div>';

	// SKU
	if( !$is_set || $nr == 0 ){
		if ( wc_product_sku_enabled() && ( $sku || $product -> is_type( 'variable' ) ) ) : ?>
			<div class="product_meta">
				<span class="sku_wrapper">
					<?php esc_html_e( 'SKU:', 'gardener' ); ?>
					<span class="sku"><?php echo $sku ? $sku : esc_html__( 'N/A', 'gardener' ); ?></span>
				</span>
			</div>
		<?php endif;
	}

	echo '</div>';

	// Dynamic Prices
	if( class_exists( 'WC_Dynamic_Pricing_Compatibility' ) ){
		$sets	= WC_Dynamic_Pricing_Compatibility::get_product_meta( $product, '_pricing_rules' );
		$uqr	= false;

		if( is_array( $sets ) && !empty( $sets ) ){
			echo '<div class="price-quantity-wrapper" data-price="' . number_format( (float)$sale_price, 2 ) . '" data-r-price="' . number_format( (float)$regular_price, 2 ) . '">';
			echo '<div class="price-quantity">';

			foreach( $sets as $i => $s ){
				if( isset( $s[ 'collector' ] ) && isset( $s[ 'collector' ][ 'type' ] ) && $s[ 'collector' ][ 'type' ] == 'product' ){
					if( isset( $s[ 'rules' ] ) && is_array( $s[ 'rules' ] ) && !empty( $s[ 'rules' ] ) ){
						foreach( $s[ 'rules' ] as $j => $r ){
							echo '<a href="javascript:void(null);" data-min-qty="' . absint( $r[ 'from' ] ) . '">';

							printf( esc_html__( 'buy %1$s', 'gardener' ), absint( $r[ 'from' ] ) );

							$p = number_format( (float)$final_price - (float)$r['amount'], 2 );

							if( $r[ 'type' ] == 'percentage_discount' ){
								$p = number_format( (float)$final_price * (1 - ((float)$r['amount']/100)), 2 );
							}

							if( $r[ 'type' ] == 'fixed_price' ){
								$p = number_format( (float)$r['amount'], 2 );
							}

							echo '<span class="amount-wrapper" style="display: block;" data-type="' . esc_attr( $r[ 'type' ] ) . '" data-amount="' . number_format( (float)$r['amount'], 2 ) . '">';
							printf( esc_html__( '%1$s Each', 'gardener' ), wc_price( $p ) );
							echo '</span>';

							echo '</a>';
						}
					}
				}
			}

			echo '</div>';
			echo '</div>';
		}
	}
?>
