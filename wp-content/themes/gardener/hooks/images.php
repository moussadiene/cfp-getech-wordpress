<?php

	/**
	 *	All functions, actions and filters to customize the header image srcset
	 */

	function gardener_header_sizes( $sizes )
	{
		$sizes = array(
			'tempo-header',
			'tempo-full',
			'tempo-classic',
			'tempo-991',
			'tempo-grid',
			'tempo-tablet',
			'tempo-gallery',
			'tempo-480'
		);

		return $sizes;
	}

	add_filter( 'tempo_header_sizes', 'gardener_header_sizes' );
?>
