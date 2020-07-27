<?php

	/**
	 *	General config settings
	 */


	/**
	 *	Custom Logo
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'custom-logo' ), array(
        'height'      	=> 78,
        'width'       	=> 518,
        'flex-height' 	=> true,
		'flex-width'  	=> true,
		'header-text'	=> array( 'tempo-site-title', 'tempo-site-description' )
    ));

    tempo_cfgs::set( 'custom-logo', $cfgs );


    /**
     *	Custom Background
     */

    $cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'custom-background' ), array(
        'default-color'         => '#ffffff',
        'default-image'         => null,
        'default-attachment'    => 'scroll'
	));

	tempo_cfgs::set( 'custom-background', $cfgs );


	/**
     *	Custom Header
     */

    $cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'custom-header' ), array(
        'default-image' => get_stylesheet_directory_uri() . '/media/img/wordpress-theme-gardener-header-image.jpg',
		'width'         => 2560,
		'height'        => 1440
    ));

    tempo_cfgs::set( 'custom-header', $cfgs );


	/**
	 *	Images Size
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'images-size' ), array(
		'tempo-header' => array(
			'width' 	=> 2560,
			'height'	=> 1440,
			'crop' 		=> true
		),
		'tempo-full' 	=> array(
			'width' 	=> 1600,
			'height'	=> 905,
			'crop' 		=> true
		),
		'tempo-classic' => array(
			'width' 	=> 1050,
			'height'	=> 595,
			'crop' 		=> true
		),
		'tempo-991'		=> array(
			'width' 	=> 991,
			'height'	=> 560,
			'crop' 		=> true
		),
		// grid picture sources
		'tempo-tablet' => array(
			'width' 	=> 691,
			'height'	=> 390,
			'crop' 		=> true
		),
		'tempo-grid' => array(
			'width' 	=> 785,
			'height'	=> 450,
			'crop' 		=> true
		),

		'post-thumbnail' => array(
			'width' 	=> 504,
			'height'	=> 504,
			'crop' 		=> true
		),

		'tempo-gallery' => array(
			'width' 	=> 515,
			'height'	=> 295,
			'crop' 		=> true
		),
		'tempo-480' 	=> array(
			'width' 	=> 480,
			'height'	=> 270,
			'crop' 		=> true
		),
		'tempo-small' => array(
			'width' 	=> 420,
			'height'	=> 240,
			'crop' 		=> true
		),
		'tempo-315' => array(
			'width' 	=> 315,
			'height'	=> 180,
			'crop' 		=> true
		),

		// portfolio
		'tempo-portfolio' => array(
			'width' 	=> 785,
			'height'	=> 890,
			'crop' 		=> true
		),
		'tempo-portfolio-tablet' => array(
			'width' 	=> 691,
			'height'	=> 780,
			'crop' 		=> true
		),
		'tempo-portfolio-480' 	=> array(
			'width' 	=> 480,
			'height'	=> 538,
			'crop' 		=> true
		)
	));

	tempo_cfgs::set( 'images-size', $cfgs );

	/* CUSTOM HEADERS */
	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'headers' ), array(
		'width'			=> 1600,
		'min' 			=> 60,
		'mask-color'	=> '#000000',
		'mask-transp'	=> 40,
	));

	tempo_cfgs::set( 'headers', $cfgs );


	/**
	 *	Asides Columns
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'asides' ), array(
	   'header-front-page' 	=> 4,
	   'header-blog' 		=> 4,
	   'footer-light' 		=> 4,
	   'footer-dark' 		=> 5
	));

	tempo_cfgs::set( 'asides', $cfgs );
?>
