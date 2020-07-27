<?php

	/**
	 *	Appearance / Tempo FAQ - config settings
	 */
	$link = '<a href="' . esc_url( tempo_core::theme( 'premium-link' ) ) . '" title="' . esc_attr( sprintf( __( '%1s - Upgrade %2s to Premium', 'gardener' ), tempo_core::author( 'name' ), tempo_core::theme( 'Name' ) ) )  . '" target="_blank">' . __( 'Gardener Premium Solution', 'gardener' ) . '</a>';

	$settings = tempo_cfgs::merge( (array)tempo_cfgs::get( 'settings' ), array(
		'appearance' => array(
			'tempo-faq' => array(
			    'sections' 	=> array(
					'zeon' => array(
						'title' 		=> __( 'Gardener Premium', 'gardener' ),
						'description'	=> sprintf( __( 'Activate premium features and get extended core functionality without the risk of loosing any data or settings %1s with our %2s that upgrades our Gardener WordPress theme.', 'gardener' ) , '<br/>', $link ),
						//'template'  	=> 'templates/admin/appearance/faq/premium'
					)
				)
			)
		)
	));

	if( tempo_core::is_active_premium() )
		unset( $settings['appearance']['tempo-faq']['sections']['zeon'] );

	tempo_cfgs::set( 'settings', $settings );
?>
