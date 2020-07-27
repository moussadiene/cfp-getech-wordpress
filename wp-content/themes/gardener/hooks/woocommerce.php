<?php
	/**
	 *	All functions, actions and filters for WooCommerce Side
	 */

	function gardener_current_variation_price( $product )
	{
		$price = $product -> get_price();

		if( $product -> is_type( 'variable' ) ){
			$vp = gardener_current_variation( $product );

			$r_price 	= $vp -> regular_price;
			$s_price 	= $vp -> sale_price;

			$price = $r_price;

			if( $s_price )
				$price = $s_price;
		}

		return $price;
	}

	function gardener_current_variation( $product )
	{
		$data_store = new WC_Product_Data_Store_CPT();

		$vp = null;

		if( $product -> is_type( 'variable' ) ){
			$variations	= $product -> get_available_variations();
			$default	= $product -> get_default_attributes();
			$current	= $data_store -> find_matching_product_variation( $product, $default );
			$id 		= $variations[ $current ][ 'variation_id' ];
			$vp 		= new WC_Product_Variation( $id );
		}

		return $vp;
	}

	function gardener_pricing_rules( $product )
	{
		$rett = array();

		if( class_exists( 'WC_Dynamic_Pricing_Compatibility' ) )
			$rett = WC_Dynamic_Pricing_Compatibility::get_product_meta( $product, '_pricing_rules' );

		return $rett;
	}
?>
