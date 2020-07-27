<?php

	/**
	 *	Appearance / Customize / Colors - config settings
	 */


	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'customize' ), array(
		'colors' => array(
			'title' 		=> __( 'Colors', 'gardener' ),
			'priority'      => 11,
			'fields'		=> array(
				'first-color' => array(
					'title'			=> __( 'First Color', 'gardener' ),
					'priority' 		=> 10,
					'input'			=> array(
						'type'			=> 'color',
						'default' 		=> '#26ad60'
					)
				)
			)
		)
	));

	tempo_cfgs::set( 'customize', $cfgs );
?>
