<?php

	/**
	 *	Appearance / Customize / Site Identity - config settings
	 */

	if( apply_filters( 'gardener_overwrite_cfgs', false ) )
		return;

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'customize' ), array(
		'title_tagline' => array(
			'fields'		=> array(
				'site-title-color' 		=> false,
				'site-title-transp' 	=> false,
				'site-title-h-transp' 	=> false,
				'tagline-color' 		=> false,
				'tagline-transp' 		=> false,
				'tagline-h-transp' 		=> false
			),
		)
	));

	tempo_cfgs::set( 'customize', $cfgs );
?>
