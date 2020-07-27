<?php
	//remove_theme_mods();

    //deb::e( get_post( 35 ) ); die();
	/**
     *  Load Widgets classes
     */

    function gardener_autoload_widgets( $class_name )
    {
        if( preg_match( "/^gardener_widget_/", $class_name ) ){

            $class_file  = str_replace( '_', '-', str_replace( 'gardener_widget_', '', $class_name ) );
            $class_path  = get_stylesheet_directory() . '/widgets/gardener.' . $class_file . '.class.php';

            if( is_file( $class_path ) ){
                include_once  $class_path;
            }
        }
    }

    spl_autoload_register( 'gardener_autoload_widgets' );


    /**
	 *	Register Widgets
	 */

    function gardener_register_widgets()
	{
		register_widget( 'gardener_widget_post_categories' );
		register_widget( 'gardener_widget_post_tags' );
		register_widget( 'gardener_widget_post_meta' );
	}

	add_action( 'widgets_init', 'gardener_register_widgets' );


    /**
     *	Overwrite Parent Themes Configs
     */

	function gardener_preload_configs()
	{
		include_once get_stylesheet_directory() . '/cfgs/main.php';
	}

	add_action( 'tempo_preload_cfgs', 'gardener_preload_configs' );

	/**
     *	Extends parent Theme Settings
     */

    function gardener_load_configs()
    {
		include_once get_stylesheet_directory() . '/cfgs/pages/appearance/faq.php';

	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/site-identity.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/colors.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.menu.php';
		include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.header-tools.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.header.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.breadcrumbs.php';
	    include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.layout.php';
		include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.blog.php';
		include_once get_stylesheet_directory() . '/cfgs/pages/customize/tempo.post.php';

	    include_once get_stylesheet_directory() . '/cfgs/sidebars/cfgs.php';
	}

    add_action( 'tempo_load_cfgs', 'gardener_load_configs' );

	// Hooks
	include_once get_stylesheet_directory() . '/hooks/picture.php';


    function gardener_setup_theme()
    {
        /**
         *  Internationalizations and Localization
         */

        load_child_theme_textdomain( 'gardener', get_stylesheet_directory() . '/languages' );
    }

    add_action( 'after_setup_theme', 'gardener_setup_theme', 1 );


    /**
     *	Include child Styles and Scripts
     */

    function gardener_enqueue_styles()
	{
		$ver = tempo_core::theme( 'Version' );

		// disable parent fontS AND SETTINGS
		wp_deregister_style( 'tempo-google-font-1' );
		wp_dequeue_style( 'tempo-google-font-1' );

		wp_deregister_style( 'tempo-settings-google-font-1' );
		wp_dequeue_style( 'tempo-settings-google-font-1' );

		wp_deregister_style( 'tempo-google-font-2' );
		wp_dequeue_style( 'tempo-google-font-2' );

		wp_deregister_style( 'tempo-settings-google-font-2' );
		wp_dequeue_style( 'tempo-settings-google-font-2' );


		$font1 = 'Roboto+Slab:400,700';
		$font2 = 'Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese';


		wp_register_style( 'tempo-google-font-1',           	'//fonts.googleapis.com/css?family=' . esc_attr( $font1 ), null, $ver );
		wp_register_style( 'tempo-google-font-2',           	'//fonts.googleapis.com/css?family=' . esc_attr( $font2 ), null, $ver );

		wp_register_style( 'gardener-settings',					get_stylesheet_directory_uri() . '/media/css/settings.min.css', null, $ver );

		wp_register_style( 'gardener-typography',				get_stylesheet_directory_uri() . '/media/css/typography.min.css', null, $ver );
		wp_register_style( 'gardener-menu',						get_stylesheet_directory_uri() . '/media/css/menu.min.css', null, $ver );
		wp_register_style( 'gardener-header',					get_stylesheet_directory_uri() . '/media/css/header.min.css', null, $ver );
		wp_register_style( 'gardener-blog',						get_stylesheet_directory_uri() . '/media/css/blog.min.css', null, $ver );
		wp_register_style( 'gardener-articles',					get_stylesheet_directory_uri() . '/media/css/articles.min.css', null, $ver );
		wp_register_style( 'gardener-gallery',					get_stylesheet_directory_uri() . '/media/css/gallery.min.css', null, $ver );
        wp_register_style( 'gardener-shortcodes',				get_stylesheet_directory_uri() . '/media/css/shortcodes.min.css', null, $ver );
		wp_register_style( 'gardener-forms',					get_stylesheet_directory_uri() . '/media/css/forms.min.css', null, $ver );
		wp_register_style( 'gardener-single',					get_stylesheet_directory_uri() . '/media/css/single.min.css', null, $ver );
        wp_register_style( 'gardener-woocommerce',				get_stylesheet_directory_uri() . '/media/css/woocommerce.min.css', null, $ver );
		wp_register_style( 'gardener-comments',					get_stylesheet_directory_uri() . '/media/css/comments.min.css', null, $ver );
        wp_register_style( 'gardener-asides-columns',			get_stylesheet_directory_uri() . '/media/css/asides-columns.min.css', null, $ver );
		wp_register_style( 'gardener-widgets',					get_stylesheet_directory_uri() . '/media/css/widgets.min.css', null, $ver );

		wp_register_style( 'gardener-footer',					get_stylesheet_directory_uri() . '/media/css/footer.min.css', null, $ver );
		wp_register_style( 'gardener-jetpack',					get_stylesheet_directory_uri() . '/media/css/jetpack.min.css', null, $ver );

		// include child font settings
		wp_register_style( 'tempo-settings-google-font-1', 		get_stylesheet_directory_uri() . '/media/css/settings-google-font-1.min.css', null, $ver );
		wp_register_style( 'tempo-settings-google-font-2', 		get_stylesheet_directory_uri() . '/media/css/settings-google-font-2.min.css', null, $ver );


		$dependency = array(
			'tempo-google-font-1',
			'tempo-google-font-2',

			'gardener-settings',
			'gardener-typography',
			'gardener-menu',
			'gardener-header',
			'gardener-blog',
			'gardener-articles',
			'gardener-gallery',
            'gardener-shortcodes',
			'gardener-forms',
			'gardener-single',
            'gardener-woocommerce',
			'gardener-comments',
            'gardener-asides-columns',
			'gardener-widgets',

			'gardener-footer',
			'gardener-jetpack',

			'tempo-settings-google-font-1',
			'tempo-settings-google-font-2'
		);

		wp_enqueue_style( 'gardener-style',						get_stylesheet_uri(), $dependency, $ver );


		// Load the Internet Explorer specific stylesheet.
        wp_enqueue_style( 'gardener-ie',						get_stylesheet_directory_uri() . '/media/css/ie.css', null, $ver );
        wp_style_add_data( 'gardener-ie', 'conditional', 'IE' );


		wp_register_script( 'gardener-functions', 				get_stylesheet_directory_uri() . '/media/js/functions.js', array( 'jquery' ), $ver, true );

        $locl = array(
            'price_format' => esc_attr( get_option( 'woocommerce_currency_pos' ) )
        );

        if( function_exists( 'get_woocommerce_currency_symbol' ) )
            $locl[ 'currency' ] = get_woocommerce_currency_symbol();

        if( !empty( $locl ) )
            wp_localize_script( 'gardener-functions', 'gardener', $locl );

        wp_enqueue_script( 'gardener-functions' );
	}

	add_action( 'wp_enqueue_scripts', 'gardener_enqueue_styles' );

	// HOOKS
    include_once get_stylesheet_directory() . '/hooks/style.php';
	include_once get_stylesheet_directory() . '/hooks/images.php';
	include_once get_stylesheet_directory() . '/hooks/picture.php';
    include_once get_stylesheet_directory() . '/hooks/woocommerce.php';


	{	////	LAYOUT


		/**
		 *	Define website Content width
		 */

		function gardener_content_width( $width )
		{
    		return 1600;
    	}

    	add_filter( 'tempo_content_width', 'gardener_content_width' );

		/**
		 *	Content full length
		 */

		function gardener_full_length( $length )
 		{
			$layout = new tempo_layout();

			if( is_singular() ){
				global $post;

				$layout = new tempo_layout( $post -> post_type, $post -> ID );

				if( tempo_is_front_page( $post -> ID ) )
					$layout = new tempo_layout( 'front-page' );
			}

			return 'col-lg-12 gardener-layout-' . $layout -> layout;
		}

		add_filter( 'tempo_full_length', 'gardener_full_length' );

		/**
		 *	Content Length
		 */

		function gardener_content_length( $length )
		{
			return 'col-lg-12';
		}

		add_filter( 'tempo_content_length', 'gardener_content_length' );


	    /**
	     *	Front Page Section Length
	     */

	    function gardener_front_page_section_length( $length )
	    {
	        $layout = new tempo_layout( 'front-page' );
	        return $layout -> classes();
	    }

	    add_filter( 'tempo_front_page_section_length', 'gardener_front_page_section_length' );


	    /**
	     *	Singular Post / Page Section Length
	     */

	    function gardener_singular_section_length( $length, $post_id )
	    {
	    	if( empty( $post_id ) )
	    		return;

	    	$post = get_post( $post_id );

	        $layout = new tempo_layout( $post -> post_type );
	        return $layout -> classes();
	    }

	    add_filter( 'tempo_page_section_length', 'gardener_singular_section_length', 10, 2 );
	    add_filter( 'tempo_single_section_length', 'gardener_singular_section_length', 10, 2 );

	    /**
	     *	Loop Section Length + Blog View Class
	     */

	    function gardener_loop_section_length( $layout )
	    {
	        $layout = new tempo_layout();
	        return esc_attr( $layout -> classes() . ' tempo-blog-classic' );
	    }

	    add_filter( 'tempo_loop_section_length', 'gardener_loop_section_length' );



	    ///// SIDEBARS ACTIONS /////

	    /**
	     *	Left Sidebars
	     */

	    function gardener_left_sidebar( $slug, $name )
	    {
			global $tempo_layout;

	    	if( is_404() )
	    		return;

		    /**
		     *	get sidebar
		     */

	    	$tempo_layout = new tempo_layout( $name );

	    	if( is_singular() && !( is_front_page() || is_home() ) ){
	    		global $post;

	    		$tempo_layout = new tempo_layout( $name );
	    	}

            $tempo_layout = apply_filters( 'tempo__custom_layout', $tempo_layout, $slug, $name );

			// left sidebar
	        $tempo_layout -> sidebar( 'left' );
	    }

	    add_action( 'get_template_part_templates/section/before', 'gardener_left_sidebar', 10, 2 );

	    /**
	     *	Right Sidebars
	     */

	    function gardener_right_sidebar( $slug, $name )
	    {
			global $tempo_layout;

	    	if( is_404() )
	    		return;

		    /**
		     *	get sidebar
		     */

	    	$tempo_layout = new tempo_layout( $name );

	    	if( is_singular() && !( is_front_page() || is_home() ) ){
	    		global $post;

	    		$tempo_layout = new tempo_layout( $name );
	    	}

            $tempo_layout = apply_filters( 'tempo__custom_layout', $tempo_layout, $slug, $name );

	    	// right sidebar
	        $tempo_layout -> sidebar( 'right' );
	    }

	    add_action( 'get_template_part_templates/section/after', 'gardener_right_sidebar', 10, 2 );
	}


	{	////	HEADER


		/**
    	 *	Disable default parent custom style
    	 */

    	function gardener_has_header( $has_header )
	    {
			if( is_front_page() ){
				global $post;

				if( !$has_header ){
					$thumbnail 	= get_post( get_post_thumbnail_id( $post ) );
			        $has_header = has_post_thumbnail( $post ) && isset( $thumbnail -> ID ) && wp_attachment_is( 'image', $thumbnail );
				}

				return $has_header;
			}

			if( is_singular() ){
				global $post;

				if( !$has_header ){
					$thumbnail 	= get_post( get_post_thumbnail_id( $post ) );
			        $has_header = has_post_thumbnail( $post ) && isset( $thumbnail -> ID ) && wp_attachment_is( 'image', $thumbnail );
				}
			}

			if( is_404() ){
				$has_header = false;
			}

	    	return $has_header;
	    }

		add_filter( 'tempo_has_header', 'gardener_has_header' );

		function gardener_header_partial( $partial )
		{
		    if( is_singular() ){
		        global $post;

				if( empty( $partial ) || $partial == 'template-' || $partial == 'default' || $partial == 'template-hero-image' )
		        	$partial = 'template-portfolio';

		        // just if has thumbnail
		        $thumbnail          = get_post( get_post_thumbnail_id( $post ) );
		        $has_post_thumbnail = has_post_thumbnail( $post ) && isset( $thumbnail -> ID ) && wp_attachment_is( 'image', $thumbnail );

		        if( !(tempo_has_header() || $has_post_thumbnail) )
		            $partial = null;

		        if( tempo_is_front_page( $post -> ID ) )
		            $partial = null;
		    }

			return $partial;
		}

		add_filter( 'tempo_header_partial' , 'gardener_header_partial', 20, 1 );


		function gardener_blog_categories( $rett )
		{
			return true;
		}

		add_filter( 'tempo_blog_categories', 'gardener_blog_categories' );



		function gardener_blog_author( $rett )
		{
			return true;
		}

		add_filter( 'tempo_blog_author', 'gardener_blog_author' );
		add_filter( 'gardener_blog_author', 'gardener_blog_author' );



		function gardener_blog_time( $rett )
		{
			return true;
		}

		add_filter( 'tempo_blog_time', 'gardener_blog_time' );
		add_filter( 'gardener_blog_time', 'gardener_blog_time' );

		function gardener_blog_comments( $rett )
		{
			return true;
		}

		add_filter( 'gardener_blog_comments', 'gardener_blog_comments' );


		function gardener_blog_views( $rett )
		{
			return true;
		}

		add_filter( 'gardener_blog_views', 'gardener_blog_views' );


		function gardener_meta_post_time( $rett )
		{
			return true;
		}

		add_filter( 'tempo_meta_post_time', 'gardener_meta_post_time' );
		add_filter( 'gardener_meta_post_time', 'gardener_meta_post_time' );
		add_filter( 'gardener_meta_page_time', 'gardener_meta_post_time' );


		function gardener_meta_post_author( $rett )
		{
			return true;
		}

		add_filter( 'tempo_meta_post_author', 'gardener_meta_post_author' );
		add_filter( 'gardener_meta_post_author', 'gardener_meta_post_author' );
		add_filter( 'gardener_meta_page_author', 'gardener_meta_post_author' );


		function gardener_meta_post_comments( $rett )
		{
			return true;
		}

		add_filter( 'gardener_meta_post_comments', 'gardener_meta_post_comments' );
		add_filter( 'gardener_meta_page_comments', 'gardener_meta_post_comments' );


		function gardener_meta_post_views( $rett )
		{
			return true;
		}

		add_filter( 'gardener_meta_post_views', 'gardener_meta_post_views' );
		add_filter( 'gardener_meta_page_views', 'gardener_meta_post_views' );


		function gardener_post_categories( $rett )
		{
			return true;
		}

		add_filter( 'tempo_post_categories', 'gardener_post_categories' );


		function gardener_post_tags( $rett, $post_id )
		{
			return true;
		}

		add_filter( 'tempo_post_tags', 'gardener_post_tags', 10, 2 );


		function gardener_post_author_box( $rett )
		{
			return true;
		}

		add_filter( 'tempo_post_author_box', 'gardener_post_author_box' );
		add_filter( 'gardener_post_author_box', 'gardener_post_author_box' );


    	function gardener_customize_js_files( $files )
	    {
	    	$files[ 'gardener-customize' ] = get_stylesheet_directory_uri() . '/media/admin/js/customize.js';

	    	return $files;
	    }

    	add_filter( 'tempo_customize_js_files', 'gardener_customize_js_files' );


		function gardener_single_thumbnail( $display, $post_id )
		{
			return false;
		}

		add_filter( 'tempo_page_thumbnail', 'gardener_single_thumbnail', 10, 2 );
		add_filter( 'tempo_post_thumbnail', 'gardener_single_thumbnail', 10, 2 );
	}

	function gardener_read_more_visible_icon( $icon )
	{
		return '<i class="tempo-icon-right-open-1"></i>';
	}

	add_filter( 'tempo_read_more_visible_icon', 'gardener_read_more_visible_icon' );

	function gardener_read_more_hidden_icon( $icon )
	{
		return __( 'Read more', 'gardener' ) . '<i class="tempo-icon-right-open-1"></i>';
	}

	add_filter( 'tempo_read_more_hidden_icon', 'gardener_read_more_hidden_icon' );


	/**
	 *	Comments Submit button Classes
	 */

	function gardener_submi_comment_class( $classes )
	{
		return 'tempo-btn btn-hover-empty icon-left';
	}

	add_filter( 'tempo_submi_comment_class', 'gardener_submi_comment_class' );

	/**
	 *	Footer Social
	 */

	function gardener_footer_social( $slug, $name )
    {
    	tempo_get_template_part( 'templates/footer/prepend-social' );
    }

    add_action( 'get_template_part_templates/footer/prepend', 'gardener_footer_social', 10, 2 );
?>
