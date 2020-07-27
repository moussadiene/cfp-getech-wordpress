<?php

	/**
	 *	Appearance / Customize / Menu Appearance - config settings
	 */

	if( apply_filters( 'gardener_overwrite_cfgs', false ) )
		return;

	$cfgs = tempo_cfgs::get( 'customize' );

	$cfgs[ 'tempo-menu' ] = array(
		'title' 		=> __( 'Menu Appearance', 'gardener' ),
		'description'	=> tempo_free_vs_premium(),
		'priority'      => 25,
		'fields'		=> array(
			'collapse-submenu' => array(
				'title'			=> __( 'Collapse Submenu', 'gardener' ),
				'description'	=> __( 'enable / disable submenu collapsing for mobile devices', 'gardener' ),
				'priority' 		=> 8,
				'input'		=> array(
					'type'		=> 'checkbox',
					'default'	=> false
				)
			),
		)
	);

	tempo_cfgs::set( 'customize', $cfgs );
?>
