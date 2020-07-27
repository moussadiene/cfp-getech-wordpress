<?php

	/**
	 *	All functions, actions and filters custom style
	 */

	function gardener_style_child()
	{
		tempo_get_template_part( 'templates/head/style-before' );
	}

	add_action( 'tempo_style_child', 'gardener_style_child' );
?>
