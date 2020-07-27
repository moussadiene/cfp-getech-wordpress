<?php

	/**
	 *	Appearance / Customize / Header Settings - config settings
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'customize' ), array(
		'tempo-header' => array(
			'sections'		=> array(
				'tempo-header-general' => array(
					'fields' 	=> array(
						'header-blog-page' => array(
				            'input' => array(
				                'type'		=> 'checkbox',
								'default'	=> false
				            )
				        ),
				        'header-templates' => array(
				            'input' => array(
				                'type'		=> 'checkbox',
								'default'	=> false
				            )
				        ),
				        'header-single-page' => array(
				            'input' => array(
				                'type'		=> 'checkbox',
								'default'	=> false
				            )
				        ),
					)
				),
				'tempo-header-headline' => array(
					'fields' 	=> array(
						'header-headline-text' => array(
							'input'			=> array(
				                'default'		=> __( 'We Provide landscaping Services Since 1947', 'gardener' ),
								'type'			=> 'text'
							)
						),

						'header-headline-max-width' => array(
							'title'			=> __( 'Headline Max Width', 'gardener' ),
							'priority'		=> 11,
							'input'			=> array(
								'type'			=> 'range',
								'default'		=> 1200,
								'unit'			=> 'px',
								'min'			=> 780,
								'max'			=> 1540
							)
						),
					)
				),
				'tempo-header-description' => array(
					'fields' 	=> array(
						'header-description-text' => array(
							'input'			=> array(
				                'default'       => __( 'Landscape design is much more than simply planting a few trees and shrubs around your property', 'gardener' ),
								'type'			=> 'text'
							)
						)
					)
				),
				'tempo-header-btn-1' => array(
					'title'			=> __( 'First Button', 'gardener' ),
					'description'	=> tempo_free_vs_premium(),
					'priority'		=> 30,
					'fields'		=> array(
						'header-btn-1' => array(
							'title'			=> __( 'Display First Button', 'gardener' ),
							'description'	=> __( 'enable / disable first Button', 'gardener' ),
							'priority'		=> 5,
							'input'			=> array(
								'type'			=> 'checkbox',
								'default'		=> true
							)
						),
						'header-btn-1-text' => array(
							'title'			=> __( 'Text', 'gardener' ),
							'priority'		=> 10,
							'input'			=> array(
								'type'			=> 'text',
								'default'		=> __( 'Free Estimate', 'gardener' )
							)
						),
						'header-btn-1-description' => array(
							'title'			=> __( 'Description', 'gardener' ),
							'priority'		=> 15,
							'input'			=> array(
								'type'			=> 'text',
								'default'		=> __( 'Contact us for a free quote', 'gardener' )
							)
						),
						'header-btn-1-url' => array(
							'title'			=> __( 'URL', 'gardener' ),
							'transport'		=> 'postMessage',
							'priority'		=> 20,
							'input'			=> array(
								'type'			=> 'url',
								'default'		=> esc_url( home_url() )
							)
						),
						'header-btn-1-target' => array(
							'title'			=> __( 'Open url in new window', 'gardener' ),
							'description'	=> __( 'enable / disable link attribut target="_blank"', 'gardener' ),
							'transport'		=> 'postMessage',
							'priority'		=> 25,
							'input'			=> array(
								'type'			=> 'checkbox',
								'default'		=> true
							)
						)
					)
				),
				'tempo-header-btn-2' => array(
					'title'			=> __( 'Second Button', 'gardener' ),
					'description'	=> tempo_free_vs_premium(),
					'priority'		=> 35,
					'fields'		=> array(
						'header-btn-2' => array(
							'title'			=> __( 'Display Second Button', 'gardener' ),
							'description'	=> __( 'enable / disable second Button', 'gardener' ),
							'priority'		=> 5,
							'input'			=> array(
								'type'			=> 'checkbox',
								'default'		=> true
							)
						),
						'header-btn-2-text' => array(
							'title'			=> __( 'Text', 'gardener' ),
							'priority'		=> 10,
							'input'			=> array(
								'type'			=> 'text',
								'default'		=> __( 'Contact Us', 'gardener' )
							)
						),
						'header-btn-2-description' => array(
							'title'			=> __( 'Description', 'gardener' ),
							'priority'		=> 15,
							'input'			=> array(
								'type'			=> 'text',
								'default'		=> __( 'Contact us for a custom work', 'gardener' )
							)
						),
						'header-btn-2-url' => array(
							'title'			=> __( 'URL', 'gardener' ),
							'priority'		=> 20,
							'input'			=> array(
								'type'			=> 'url',
								'default'		=> esc_url( home_url() )
							)
						),
						'header-btn-2-target' => array(
							'title'			=> __( 'Open url in new window', 'gardener' ),
							'description'	=> __( 'enable / disable link attribut target="_blank"', 'gardener' ),
							'priority'		=> 25,
							'input'			=> array(
								'type'			=> 'checkbox',
								'default'		=> true
							)
						)
					)
				)
			)
		)
	));

	if( !apply_filters( 'gardener_overwrite_cfgs', false ) ){

		if( isset( $cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-appearance' ] ) )
 			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-appearance' ] 											= false;

		if( isset( $cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-headline' ] ) )
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-headline' ]['fields'][ 'header-headline-color' ] 		= false;

		if( isset( $cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-description' ] ) )
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-description' ]['fields'][ 'header-description-color' ]	= false;

		if( isset( $cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-1' ] ) ){
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-1' ][ 'header-btn-1-text-color' ] 			= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-1' ][ 'header-btn-1-text-transp' ] 		= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-1' ][ 'header-btn-1-text-h-color' ] 		= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-1' ][ 'header-btn-1-text-h-transp' ] 		= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-1' ][ 'header-btn-1-bkg-color' ] 			= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-1' ][ 'header-btn-1-bkg-transp' ] 			= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-1' ][ 'header-btn-1-bkg-h-color' ] 		= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-1' ][ 'header-btn-1-bkg-h-transp' ] 		= false;
		}

		if( isset( $cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-2' ] ) ){
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-2' ][ 'header-btn-2-text-color' ] 			= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-2' ][ 'header-btn-2-text-transp' ] 		= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-2' ][ 'header-btn-2-text-h-color' ] 		= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-2' ][ 'header-btn-2-text-h-transp' ] 		= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-2' ][ 'header-btn-2-bkg-color' ] 			= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-2' ][ 'header-btn-2-bkg-transp' ] 			= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-2' ][ 'header-btn-2-bkg-h-color' ] 		= false;
			$cfgs[ 'tempo-header' ][ 'sections' ][ 'tempo-header-btn-2' ][ 'header-btn-2-bkg-h-transp' ] 		= false;
		}
	}

	tempo_cfgs::set( 'customize', $cfgs );
?>
