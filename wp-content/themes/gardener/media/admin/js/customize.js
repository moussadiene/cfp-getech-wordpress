 (function($){

    {   //- BACKGROUND IMAGE -//

        wp.customize( 'background_image' , function( value ){
            value.bind(function( newval ){
                if( newval ){

                    var image       = newval;
                    var repeat      = wp.customize.instance( 'background_repeat' ).get();
                    var position    = wp.customize.instance( 'background_position_x' ).get();
                    var attchment   = wp.customize.instance( 'background_attachment' ).get();

                    jQuery( 'style#background-image').html(
                        'body div.tempo-website-wrapper{' +
                        'background-image: url(' + image + ');' +
                        'background-repeat: ' + repeat + ';' +
                        'background-position: ' + position + ';' +
                        'background-attachment: ' + attchment + ';' +
                        '}'
                    );
                }
            });
        });

        wp.customize( 'background_repeat' , function( value ){
            value.bind(function( newval ){
                if( newval ){

                    var image       = wp.customize.instance( 'background_image' ).get();
                    var repeat      = newval;
                    var position    = wp.customize.instance( 'background_position_x' ).get();
                    var attchment   = wp.customize.instance( 'background_attachment' ).get();

                    jQuery( 'style#background-image').html(
                        'body div.tempo-website-wrapper{' +
                        'background-image: url(' + image + ');' +
                        'background-repeat: ' + repeat + ';' +
                        'background-position: ' + position + ';' +
                        'background-attachment: ' + attchment + ';' +
                        '}'
                    );
                }
            });
        });

        wp.customize( 'background_position_x' , function( value ){
            value.bind(function( newval ){
                if( newval ){

                    var image       = wp.customize.instance( 'background_image' ).get();
                    var repeat      = wp.customize.instance( 'background_repeat' ).get();
                    var position    = newval;
                    var attchment   = wp.customize.instance( 'background_attachment' ).get();

                    jQuery( 'style#background-image').html(
                        'body div.tempo-website-wrapper{' +
                        'background-image: url(' + image + ');' +
                        'background-repeat: ' + repeat + ';' +
                        'background-position: ' + position + ';' +
                        'background-attachment: ' + attchment + ';' +
                        '}'
                    );
                }
            });
        });

        wp.customize( 'background_attachment' , function( value ){
            value.bind(function( newval ){
                if( newval ){

                    var image       = wp.customize.instance( 'background_image' ).get();
                    var repeat      = wp.customize.instance( 'background_repeat' ).get();
                    var position    = wp.customize.instance( 'background_position_x' ).get();
                    var attchment   = newval;

                    jQuery( 'style#background-image').html(
                        'body div.tempo-website-wrapper{' +
                        'background-image: url(' + image + ');' +
                        'background-repeat: ' + repeat + ';' +
                        'background-position: ' + position + ';' +
                        'background-attachment: ' + attchment + ';' +
                        '}'
                    );
                }
            });
        });
    }

    {   //- COLORS -//

        // background color
        wp.customize( 'background_color' , function( value ){
            value.bind(function( newval ){
                if( newval ){
                    jQuery( 'style#background-color').html(
                        'body div.tempo-website-wrapper{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );
                }
            });
        });
    }

    {   // MENU APPEARANCE

        {   // TOPPER MENU

        }

        {   // HEADER MENU

            wp.customize( 'menu-bkg', function( value ){
                value.bind(function( newval ){
                    jQuery( 'style#gardener-menu-bkg' ).html(
                        'header.tempo-header div.tempo-topper div.tempo-navigation-wrapper div.gardener-menu-wrapper,' +
                        'header.tempo-header div.tempo-topper div.tempo-navigation-wrapper div.tempo-menu-wrapper ul.tempo-menu-list > li ul,' +
                        'body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children>span,' +
                        'body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children.collapse-children>span:hover{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );
                });
            });

            wp.customize( 'menu-link-color', function( value ){
                value.bind(function( newval ){
                    var hex     = newval;
                    var transp  = parseInt( wp.customize.instance( 'menu-link-transp' ).get() ) / 100;
                    var rgba    = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                    jQuery( 'style#gardener-menu-link-color' ).html(
                        'header.tempo-header nav ul li.current-menu-ancestor > a,' +
                        'header.tempo-header nav ul li.current-menu-item > a,' +
                        'header.tempo-header nav ul li:hover > a{' +
                        'color: ' + hex + ';' +
                        '}' +

                        'header.tempo-header nav ul li a{' +
                        'color: ' + rgba + ';' +
                        '}'
                    );
                });
            });

            wp.customize( 'menu-link-transp', function( value ){
                value.bind(function( newval ){
                    var hex     = wp.customize.instance( 'menu-link-color' ).get();
                    var transp  = parseInt( newval ) / 100;
                    var rgba    = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                    jQuery( 'style#gardener-menu-link-color' ).html(
                        'header.tempo-header nav ul li.current-menu-ancestor > a,' +
                        'header.tempo-header nav ul li.current-menu-item > a,' +
                        'header.tempo-header nav ul li:hover > a{' +
                        'color: ' + hex + ';' +
                        '}' +

                        'header.tempo-header nav ul li a{' +
                        'color: ' + rgba + ';' +
                        '}'
                    );
                });
            });

        }

        {   // TOPPER MENU

            wp.customize( 'topper-menu-bkg', function( value ){
                value.bind(function( newval ){
                    jQuery( 'style#gardener-topper-menu-bkg' ).html(
                        'div.tempo-topper-nav{' +
                        'background-color: ' + newval + ';' +
                        '}'
                    );
                });
            });

            wp.customize( 'topper-menu-link-color', function( value ){
                value.bind(function( newval ){
                    var hex     = newval;
                    var transp  = parseInt( wp.customize.instance( 'topper-menu-link-transp' ).get() ) / 100;
                    var rgba    = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                    jQuery( 'style#gardener-topper-menu-link-color' ).html(
                        'header.tempo-topper-nav nav ul li.current-menu-ancestor > a,' +
                        'header.tempo-topper-nav nav ul li.current-menu-item > a,' +
                        'header.tempo-topper-nav nav ul li:hover > a{' +
                        'color: ' + hex + ';' +
                        '}' +

                        'header.tempo-topper-nav nav ul li a{' +
                        'color: ' + rgba + ';' +
                        '}'
                    );
                });
            });

            wp.customize( 'topper-menu-link-transp', function( value ){
                value.bind(function( newval ){
                    var hex     = wp.customize.instance( 'topper-menu-link-color' ).get();
                    var transp  = parseInt( newval ) / 100;
                    var rgba    = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                    jQuery( 'style#gardener-topper-menu-link-color' ).html(
                        'header.tempo-topper-nav nav ul li.current-menu-ancestor > a,' +
                        'header.tempo-topper-nav nav ul li.current-menu-item > a,' +
                        'header.tempo-topper-nav nav ul li:hover > a{' +
                        'color: ' + hex + ';' +
                        '}' +

                        'header.tempo-topper-nav nav ul li a{' +
                        'color: ' + rgba + ';' +
                        '}'
                    );
                });
            });
        }

        {   // TOPPER SUB MENU

            wp.customize( 'topper-sub-menu-bkg', function( value ){
                value.bind(function( newval ){
                    jQuery( 'style#gardener-topper-sub-menu-bkg' ).html(
                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li ul{' +
                        'background-color: ' + newval + ';' +
                        '}' +

                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list > li > ul:before{' +
                        'border-bottom-color: ' + newval + ';' +
                        '}'
                    );
                });
            });

            wp.customize( 'topper-sub-menu-link-color', function( value ){
                value.bind(function( newval ){
                    var hex     = newval;
                    var transp  = parseInt( wp.customize.instance( 'topper-sub-menu-link-transp' ).get() ) / 100;
                    var rgba    = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                    jQuery( 'style#gardener-topper-sub-menu-link-color' ).html(
                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li.current-menu-ancestor > a,' +
                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li.current-menu-item > a,' +
                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li:hover > a{' +
                        'color: ' + hex + ';' +
                        '}' +

                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li a{' +
                        'color: ' + rgba + ';' +
                        '}'
                    );
                });
            });

            wp.customize( 'topper-sub-menu-link-transp', function( value ){
                value.bind(function( newval ){
                    var hex     = wp.customize.instance( 'topper-sub-menu-link-color' ).get();
                    var transp  = parseInt( newval ) / 100;
                    var rgba    = 'rgba( ' + tempo_hex2rgb( hex ) + ', ' + transp + ' )';

                    jQuery( 'style#gardener-topper-sub-menu-link-color' ).html(
                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li.current-menu-ancestor > a,' +
                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li.current-menu-item > a,' +
                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li:hover > a{' +
                        'color: ' + hex + ';' +
                        '}' +

                        'div.tempo-topper-nav div.tempo-navigation-wrapper.tempo-topper div.tempo-menu-wrapper ul.tempo-menu-list li li a{' +
                        'color: ' + rgba + ';' +
                        '}'
                    );
                });
            });
        }
    }

    {   /// HEADER TOOLS

        // Address
        wp.customize( 'address-1', function( value ){
            value.bind(function( newval ){
                var span = jQuery( 'div.tools-item.gardener-address span.info-stressed' );

                if( span.length )
                    span.text( newval );
            });
        });

        wp.customize( 'address-2', function( value ){
            value.bind(function( newval ){
                var span = jQuery( 'div.tools-item.gardener-address span.info-unstressed' );

                if( span.length )
                    span.text( newval );
            });
        });

        // Program
        wp.customize( 'program-1', function( value ){
            value.bind(function( newval ){
                var span = jQuery( 'div.tools-item.gardener-program span.info-stressed' );

                if( span.length )
                    span.text( newval );
            });
        });

        wp.customize( 'program-2', function( value ){
            value.bind(function( newval ){
                var span = jQuery( 'div.tools-item.gardener-program span.info-unstressed' );

                if( span.length )
                    span.text( newval );
            });
        });
    }


    {   //- HEADER -//

        {   // custom colors ( first color )

            wp.customize( 'first-color', function( value ){
                value.bind(function( newval ){
                    jQuery( 'style#first-color' ).html(
                        'div.tempo-breadcrumbs nav.tempo-navigation ul.tempo-menu-list li a:hover,' +
                        'article.tempo-article.classic h2.tempo-title a:hover,' +
                        'article.tempo-article.classic div.tempo-meta.top a:not(.more-link):not(.tempo-btn):not(.btn):not(.button):hover,' +
                        'article.tempo-article.classic a.more-link:hover,' +
                        'div.tempo-comments-wrapper p.must-log-in a,' +
                        'input[type="submit"].btn-empty,' +
                        'input[type="button"].btn-empty,' +
                        'input[type="reset"].btn-empty,' +
                        'button.btn-empty,' +
                        '.button.btn-empty,' +
                        '.tempo-btn.btn-empty,' +
                        '.btn.btn-empty,' +
                        'input[type="submit"].btn-search.btn-empty,' +
                        'input[type="button"].btn-search.btn-empty,' +
                        'input[type="reset"].btn-search.btn-empty,' +
                        'button.btn-search.btn-empty,' +
                        '.button.btn-search.btn-empty,' +
                        '.tempo-btn.btn-search.btn-empty,' +
                        '.btn.btn-search.btn-empty,' +
                        'input[type="submit"].btn-header.btn-empty,' +
                        'input[type="button"].btn-header.btn-empty,' +
                        'input[type="reset"].btn-header.btn-empty,' +
                        'button.btn-header.btn-empty,' +
                        '.button.btn-header.btn-empty,' +
                        '.tempo-btn.btn-header.btn-empty,' +
                        '.btn.btn-header.btn-empty,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover,' +
                        'button.btn-newsletter.btn-hover-empty:hover,' +
                        '.button.btn-newsletter.btn-hover-empty:hover,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:focus,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:focus,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:focus,' +
                        'button.btn-newsletter.btn-hover-empty:focus,' +
                        '.button.btn-newsletter.btn-hover-empty:focus,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:focus,' +
                        '.btn.btn-newsletter.btn-hover-empty:focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:focus,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:focus,' +
                        'button.btn-header.btn-2.btn-hover-empty:focus,' +
                        '.button.btn-header.btn-2.btn-hover-empty:focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:focus,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:focus,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty.focus,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty.focus,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty.focus,' +
                        'button.btn-newsletter.btn-hover-empty.focus,' +
                        '.button.btn-newsletter.btn-hover-empty.focus,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty.focus,' +
                        '.btn.btn-newsletter.btn-hover-empty.focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty.focus,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty.focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty.focus,' +
                        'button.btn-header.btn-2.btn-hover-empty.focus,' +
                        '.button.btn-header.btn-2.btn-hover-empty.focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty.focus,' +
                        '.btn.btn-header.btn-2.btn-hover-empty.focus,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:active,' +
                        'button.btn-newsletter.btn-hover-empty:active,' +
                        '.button.btn-newsletter.btn-hover-empty:active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:active,' +
                        '.btn.btn-newsletter.btn-hover-empty:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:active,' +
                        'button.btn-header.btn-2.btn-hover-empty:active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty.active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty.active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty.active,' +
                        'button.btn-newsletter.btn-hover-empty.active,' +
                        '.button.btn-newsletter.btn-hover-empty.active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty.active,' +
                        '.btn.btn-newsletter.btn-hover-empty.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty.active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty.active,' +
                        'button.btn-header.btn-2.btn-hover-empty.active,' +
                        '.button.btn-header.btn-2.btn-hover-empty.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty.active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty.active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover:focus,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover:focus,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover:focus,' +
                        'button.btn-newsletter.btn-hover-empty:hover:focus,' +
                        '.button.btn-newsletter.btn-hover-empty:hover:focus,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover:focus,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover:focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover.focus,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover.focus,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover.focus,' +
                        'button.btn-newsletter.btn-hover-empty:hover.focus,' +
                        '.button.btn-newsletter.btn-hover-empty:hover.focus,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover.focus,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover.focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover:active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover:active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover:active,' +
                        'button.btn-newsletter.btn-hover-empty:hover:active,' +
                        '.button.btn-newsletter.btn-hover-empty:hover:active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover:active,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover:active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover:active,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover:active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover:active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover:active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover.active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover.active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover.active,' +
                        'button.btn-newsletter.btn-hover-empty:hover.active,' +
                        '.button.btn-newsletter.btn-hover-empty:hover.active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover.active,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover.active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover.active,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover.active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover.active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover.active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:focus:active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:focus:active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:focus:active,' +
                        'button.btn-newsletter.btn-hover-empty:focus:active,' +
                        '.button.btn-newsletter.btn-hover-empty:focus:active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:focus:active,' +
                        '.btn.btn-newsletter.btn-hover-empty:focus:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:focus:active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:focus:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:focus:active,' +
                        'button.btn-header.btn-2.btn-hover-empty:focus:active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:focus:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:focus:active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:focus:active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:focus.active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:focus.active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:focus.active,' +
                        'button.btn-newsletter.btn-hover-empty:focus.active,' +
                        '.button.btn-newsletter.btn-hover-empty:focus.active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:focus.active,' +
                        '.btn.btn-newsletter.btn-hover-empty:focus.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:focus.active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:focus.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:focus.active,' +
                        'button.btn-header.btn-2.btn-hover-empty:focus.active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:focus.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:focus.active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:focus.active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty.focus.active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty.focus.active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty.focus.active,' +
                        'button.btn-newsletter.btn-hover-empty.focus.active,' +
                        '.button.btn-newsletter.btn-hover-empty.focus.active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty.focus.active,' +
                        '.btn.btn-newsletter.btn-hover-empty.focus.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty.focus.active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty.focus.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty.focus.active,' +
                        'button.btn-header.btn-2.btn-hover-empty.focus.active,' +
                        '.button.btn-header.btn-2.btn-hover-empty.focus.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty.focus.active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty.focus.active,' +
                        'div.gardener-header-tools div.tools-item div.tools-item-wrapper i,' +
                        'header.tempo-header div.tempo-topper div.tempo-site-identity a.tempo-site-title,' +
                        'article.tempo-article.classic div.tempo-meta-activity a:hover,' +
                        'article.tempo-article.classic div.tempo-meta-activity a:hover span,' +
                        'article.tempo-article.classic div.tempo-author a.author-website-url,' +
                        'article.tempo-article.grid div.tempo-content h3.tempo-title:hover a,' +
                        'div.tempo-gallery.services .tempo-gallery-item .tempo-gallery-content .tempo-gallery-title a:hover,' +
                        'div.tempo-gallery.features figure.tempo-gallery-item figcaption.tempo-gallery-content h3.tempo-gallery-title a:hover,' +
                        'div.tempo-gallery.story figure.tempo-gallery-item figcaption.tempo-gallery-content h3.tempo-gallery-title a:hover,' +
                        'aside:not(.dark-sidebars) div.widget a,' +
                        'aside:not(.dark-sidebars) div.widget.widget_pages li:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_meta li:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_categories li:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_archive li:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_nav_menu li:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_categories li:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.tempo_widget_categories li:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_recent_comments ul li a:hover,' +
                        'aside:not(.dark-sidebars) div.widget.widget_calendar div.calendar_wrap table td a,' +
                        'aside.header-sidebar div.widget.widget_pages ul li:hover:before,' +
                        'aside.header-sidebar div.widget.widget_nav_menu ul li:hover:before,' +
                        'aside.header-sidebar div.widget.widget_pages ul li a:hover,' +
                        'aside.header-sidebar div.widget.widget_nav_menu ul li a:hover,' +
                        'aside.sidebar-content-wrapper div.widget.zeon_widget_categories ul li a:hover,' +
                        'aside.sidebar-content-wrapper div.widget.tempo_widget_categories ul li a:hover,' +
                        'aside.tempo-footer.light-sidebars div.widget.widget_pages ul li:hover:before,' +
                        'aside.tempo-footer.light-sidebars div.widget.widget_nav_menu ul li:hover:before,' +
                        'aside.tempo-footer.light-sidebars div.widget.widget_pages ul li a:hover,' +
                        'aside.tempo-footer.light-sidebars div.widget.widget_nav_menu ul li a:hover,' +
                        'aside.tempo-footer.dark-sidebars div.widget a,' +
                        'h1 .gardener-highlight,' +
                        'h2 .gardener-highlight,' +
                        'h3 .gardener-highlight,' +
                        'h4 .gardener-highlight,' +
                        'h5 .gardener-highlight,' +
                        'h6 .gardener-highlight,' +
                        '.hentry .tempo-hentry table a:hover:not(.more-link):not(.tempo-btn):not(.btn):not(.button),' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_infobox .widget-title i,' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_infobox a.read-more:hover,' +
                        'body .tempo-shortcode.testimonials h3.headline small,' +
                        'body .tempo-shortcode.testimonials div.testimonials-wrapper footer cite span,' +
                        'body .tempo-shortcode.testimonials i.tempo-icon-quote-left,' +
                        'body .tempo-shortcode.testimonials div.testimonials-wrapper.tempo-slideshow button.slick-prev:not(.btn-empty):not(.btn-hover-empty):hover,' +
                        'body .tempo-shortcode.testimonials div.testimonials-wrapper.tempo-slideshow button.slick-next:not(.btn-empty):not(.btn-hover-empty):hover,' +
                        'body .tempo-shortcode.testimonials div.testimonials-wrapper.tempo-slideshow button.slick-prev:not(.btn-empty):not(.btn-hover-empty):hover:before,' +
                        'body .tempo-shortcode.testimonials div.testimonials-wrapper.tempo-slideshow button.slick-next:not(.btn-empty):not(.btn-hover-empty):hover:before,' +
                        'body .tempo-shortcode.testimonials div.testimonials-wrapper.tempo-slideshow button.slick-prev:not(.btn-empty):not(.btn-hover-empty):hover::before,' +
                        'body .tempo-shortcode.testimonials div.testimonials-wrapper.tempo-slideshow button.slick-next:not(.btn-empty):not(.btn-hover-empty):hover::before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_pages ul li:hover:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_meta ul li:hover:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_categories ul li:hover:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_archive ul li:hover:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_nav_menu ul li:hover:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_categories ul li:hover:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.tempo_widget_categories ul li:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_comments ul li h5 a:hover,' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_posts ul li h5 a:hover,' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_posts_list ul li h5 a:hover,' +

                        'aside:not(.dark-sidebars) div.widget.widget_product_categories li:hover:before,' +
                        '.woocommerce aside:not(.dark-sidebars) div.widget.widget_rating_filter ul li a:hover,' +
                        '.woocommerce aside div.widget.woocommerce ul li div.star-rating,' +
                        '.woocommerce div.product div.woocommerce-tabs.wc-tabs-wrapper ul.tabs.wc-tabs li.active a,' +
                        '.woocommerce div.product div.woocommerce-tabs.wc-tabs-wrapper ul.tabs.wc-tabs li.active:hover a,' +
                        '.woocommerce div.product div.woocommerce-tabs.wc-tabs-wrapper ul.tabs.wc-tabs li.active a:hover,' +
                        '.woocommerce div.product div.woocommerce-tabs.wc-tabs-wrapper ul.tabs.wc-tabs li.active:hover a:hover,' +
                        '.woocommerce div.product div.woocommerce-product-rating div.star-rating span,' +
                        '.woocommerce div.product div.woocommerce-product-rating div.star-rating span:before,' +
                        '.woocommerce div.product div.yith-wcwl-add-to-wishlist div.yith-wcwl-wishlistexistsbrowse a,' +
                        '.woocommerce div.product div.woocommerce-tabs.wc-tabs-wrapper ul.tabs.wc-tabs li a:hover,' +
                        '.woocommerce #reviews #comments ol.commentlist li div.comment-text div.star-rating span,' +
                        '.woocommerce p.stars:hover a,' +
                        '.hentry .tempo-hentry nav.woocommerce-MyAccount-navigation ul li a:hover,' +
                        'header.tempo-header div.gardener-woocommerce-wrapper nav ul.gardener-woocommerce-user-menu li a:hover,' +
                        
                        'div.price-quantity-wrapper .price-quantity a:hover,' +
                        'div.price-quantity-wrapper .price-quantity a.current{' +
                        'color: ' + newval + ';' +
                        '}' +

                        'aside.tempo-footer.dark-sidebars div.widget a,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_infobox h5.widget-title i,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_comments ul li h5 a:hover,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_posts ul li h5 a:hover,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_posts_list ul li h5 a:hover,' +

                        'div.tempo-topper-nav a.gardener-quote{' +
                        'color: ' + tempo_brightness( newval, 50 ) + ';' +
                        '}' +

                        'article.tempo-article.classic div.tempo-categories a:not(.more-link):not(.tempo-btn):not(.btn):not(.button),' +
                        'article.tempo-article.grid div.tempo-categories a,' +
                        'article.tempo-article.portfolio div.tempo-categories a,' +
                        'article.tempo-article.grid div.tempo-categories a:not(.more-link):not(.tempo-btn):not(.btn):not(.button),' +
                        'article.tempo-article.portfolio div.tempo-categories a:not(.more-link):not(.tempo-btn):not(.btn):not(.button),' +

                        'div.tempo-comments-wrapper div.comment-respond form.comment-form div.textarea p.comment-form-comment textarea:focus,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form div.textarea p.comment-form-comment textarea:active,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form div.textarea p.comment-form-comment textarea.focus,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form div.textarea p.comment-form-comment textarea.active' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.input input:focus,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.input input:active,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.input input.focus,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.input input.active,' +
                        'input[type="submit"],' +
                        'input[type="button"],' +
                        'input[type="reset"],' +
                        'button,' +
                        '.button,' +
                        '.tempo-btn,' +
                        '.btn,' +
                        'input[type="submit"].btn-search,' +
                        'input[type="button"].btn-search,' +
                        'input[type="reset"].btn-search,' +
                        'button.btn-search,' +
                        '.button.btn-search,' +
                        '.tempo-btn.btn-search,' +
                        '.btn.btn-search,' +
                        'input[type="submit"].btn-header,' +
                        'input[type="button"].btn-header,' +
                        'input[type="reset"].btn-header,' +
                        'button.btn-header,' +
                        '.button.btn-header,' +
                        '.tempo-btn.btn-header,' +
                        '.btn.btn-header,' +
                        'input[type="submit"].btn-newsletter:hover,' +
                        'input[type="button"].btn-newsletter:hover,' +
                        'input[type="reset"].btn-newsletter:hover,' +
                        'button.btn-newsletter:hover,' +
                        '.button.btn-newsletter:hover,' +
                        '.tempo-btn.btn-newsletter:hover,' +
                        '.btn.btn-newsletter:hover,' +
                        'input[type="submit"].btn-header.btn-2:hover,' +
                        'input[type="button"].btn-header.btn-2:hover,' +
                        'input[type="reset"].btn-header.btn-2:hover,' +
                        'button.btn-header.btn-2:hover,' +
                        '.button.btn-header.btn-2:hover,' +
                        '.tempo-btn.btn-header.btn-2:hover,' +
                        '.btn.btn-header.btn-2:hover,' +
                        'input[type="submit"].btn-newsletter:focus,' +
                        'input[type="button"].btn-newsletter:focus,' +
                        'input[type="reset"].btn-newsletter:focus,' +
                        'button.btn-newsletter:focus,' +
                        '.button.btn-newsletter:focus,' +
                        '.tempo-btn.btn-newsletter:focus,' +
                        '.btn.btn-newsletter:focus,' +
                        'input[type="submit"].btn-header.btn-2:focus,' +
                        'input[type="button"].btn-header.btn-2:focus,' +
                        'input[type="reset"].btn-header.btn-2:focus,' +
                        'button.btn-header.btn-2:focus,' +
                        '.button.btn-header.btn-2:focus,' +
                        '.tempo-btn.btn-header.btn-2:focus,' +
                        '.btn.btn-header.btn-2:focus,' +
                        'input[type="submit"].btn-newsletter.focus,' +
                        'input[type="button"].btn-newsletter.focus,' +
                        'input[type="reset"].btn-newsletter.focus,' +
                        'button.btn-newsletter.focus,' +
                        '.button.btn-newsletter.focus,' +
                        '.tempo-btn.btn-newsletter.focus,' +
                        '.btn.btn-newsletter.focus,' +
                        'input[type="submit"].btn-header.btn-2.focus,' +
                        'input[type="button"].btn-header.btn-2.focus,' +
                        'input[type="reset"].btn-header.btn-2.focus,' +
                        'button.btn-header.btn-2.focus,' +
                        '.button.btn-header.btn-2.focus,' +
                        '.tempo-btn.btn-header.btn-2.focus,' +
                        '.btn.btn-header.btn-2.focus,' +
                        'input[type="submit"].btn-newsletter:active,' +
                        'input[type="button"].btn-newsletter:active,' +
                        'input[type="reset"].btn-newsletter:active,' +
                        'button.btn-newsletter:active,' +
                        '.button.btn-newsletter:active,' +
                        '.tempo-btn.btn-newsletter:active,' +
                        '.btn.btn-newsletter:active,' +
                        'input[type="submit"].btn-header.btn-2:active,' +
                        'input[type="button"].btn-header.btn-2:active,' +
                        'input[type="reset"].btn-header.btn-2:active,' +
                        'button.btn-header.btn-2:active,' +
                        '.button.btn-header.btn-2:active,' +
                        '.tempo-btn.btn-header.btn-2:active,' +
                        '.btn.btn-header.btn-2:active,' +
                        'input[type="submit"].btn-newsletter.active,' +
                        'input[type="button"].btn-newsletter.active,' +
                        'input[type="reset"].btn-newsletter.active,' +
                        'button.btn-newsletter.active,' +
                        '.button.btn-newsletter.active,' +
                        '.tempo-btn.btn-newsletter.active,' +
                        '.btn.btn-newsletter.active,' +
                        'input[type="submit"].btn-header.btn-2.active,' +
                        'input[type="button"].btn-header.btn-2.active,' +
                        'input[type="reset"].btn-header.btn-2.active,' +
                        'button.btn-header.btn-2.active,' +
                        '.button.btn-header.btn-2.active,' +
                        '.tempo-btn.btn-header.btn-2.active,' +
                        '.btn.btn-header.btn-2.active,' +
                        'input[type="submit"].btn-newsletter:hover:focus,' +
                        'input[type="button"].btn-newsletter:hover:focus,' +
                        'input[type="reset"].btn-newsletter:hover:focus,' +
                        'button.btn-newsletter:hover:focus,' +
                        '.button.btn-newsletter:hover:focus,' +
                        '.tempo-btn.btn-newsletter:hover:focus,' +
                        '.btn.btn-newsletter:hover:focus,' +
                        'input[type="submit"].btn-header.btn-2:hover:focus,' +
                        'input[type="button"].btn-header.btn-2:hover:focus,' +
                        'input[type="reset"].btn-header.btn-2:hover:focus,' +
                        'button.btn-header.btn-2:hover:focus,' +
                        '.button.btn-header.btn-2:hover:focus,' +
                        '.tempo-btn.btn-header.btn-2:hover:focus,' +
                        '.btn.btn-header.btn-2:hover:focus,' +
                        'input[type="submit"].btn-newsletter:hover.focus,' +
                        'input[type="button"].btn-newsletter:hover.focus,' +
                        'input[type="reset"].btn-newsletter:hover.focus,' +
                        'button.btn-newsletter:hover.focus,' +
                        '.button.btn-newsletter:hover.focus,' +
                        '.tempo-btn.btn-newsletter:hover.focus,' +
                        '.btn.btn-newsletter:hover.focus,' +
                        'input[type="submit"].btn-header.btn-2:hover.focus,' +
                        'input[type="button"].btn-header.btn-2:hover.focus,' +
                        'input[type="reset"].btn-header.btn-2:hover.focus,' +
                        'button.btn-header.btn-2:hover.focus,' +
                        '.button.btn-header.btn-2:hover.focus,' +
                        '.tempo-btn.btn-header.btn-2:hover.focus,' +
                        '.btn.btn-header.btn-2:hover.focus,' +
                        'input[type="submit"].btn-newsletter:hover:active,' +
                        'input[type="button"].btn-newsletter:hover:active,' +
                        'input[type="reset"].btn-newsletter:hover:active,' +
                        'button.btn-newsletter:hover:active,' +
                        '.button.btn-newsletter:hover:active,' +
                        '.tempo-btn.btn-newsletter:hover:active,' +
                        '.btn.btn-newsletter:hover:active,' +
                        'input[type="submit"].btn-header.btn-2:hover:active,' +
                        'input[type="button"].btn-header.btn-2:hover:active,' +
                        'input[type="reset"].btn-header.btn-2:hover:active,' +
                        'button.btn-header.btn-2:hover:active,' +
                        '.button.btn-header.btn-2:hover:active,' +
                        '.tempo-btn.btn-header.btn-2:hover:active,' +
                        '.btn.btn-header.btn-2:hover:active,' +
                        'input[type="submit"].btn-newsletter:hover.active,' +
                        'input[type="button"].btn-newsletter:hover.active,' +
                        'input[type="reset"].btn-newsletter:hover.active,' +
                        'button.btn-newsletter:hover.active,' +
                        '.button.btn-newsletter:hover.active,' +
                        '.tempo-btn.btn-newsletter:hover.active,' +
                        '.btn.btn-newsletter:hover.active,' +
                        'input[type="submit"].btn-header.btn-2:hover.active,' +
                        'input[type="button"].btn-header.btn-2:hover.active,' +
                        'input[type="reset"].btn-header.btn-2:hover.active,' +
                        'button.btn-header.btn-2:hover.active,' +
                        '.button.btn-header.btn-2:hover.active,' +
                        '.tempo-btn.btn-header.btn-2:hover.active,' +
                        '.btn.btn-header.btn-2:hover.active,' +
                        'input[type="submit"].btn-newsletter:focus:active,' +
                        'input[type="button"].btn-newsletter:focus:active,' +
                        'input[type="reset"].btn-newsletter:focus:active,' +
                        'button.btn-newsletter:focus:active,' +
                        '.button.btn-newsletter:focus:active,' +
                        '.tempo-btn.btn-newsletter:focus:active,' +
                        '.btn.btn-newsletter:focus:active,' +
                        'input[type="submit"].btn-header.btn-2:focus:active,' +
                        'input[type="button"].btn-header.btn-2:focus:active,' +
                        'input[type="reset"].btn-header.btn-2:focus:active,' +
                        'button.btn-header.btn-2:focus:active,' +
                        '.button.btn-header.btn-2:focus:active,' +
                        '.tempo-btn.btn-header.btn-2:focus:active,' +
                        '.btn.btn-header.btn-2:focus:active,' +
                        'input[type="submit"].btn-newsletter:focus.active,' +
                        'input[type="button"].btn-newsletter:focus.active,' +
                        'input[type="reset"].btn-newsletter:focus.active,' +
                        'button.btn-newsletter:focus.active,' +
                        '.button.btn-newsletter:focus.active,' +
                        '.tempo-btn.btn-newsletter:focus.active,' +
                        '.btn.btn-newsletter:focus.active,' +
                        'input[type="submit"].btn-header.btn-2:focus.active,' +
                        'input[type="button"].btn-header.btn-2:focus.active,' +
                        'input[type="reset"].btn-header.btn-2:focus.active,' +
                        'button.btn-header.btn-2:focus.active,' +
                        '.button.btn-header.btn-2:focus.active,' +
                        '.tempo-btn.btn-header.btn-2:focus.active,' +
                        '.btn.btn-header.btn-2:focus.active,' +
                        'input[type="submit"].btn-newsletter.focus.active,' +
                        'input[type="button"].btn-newsletter.focus.active,' +
                        'input[type="reset"].btn-newsletter.focus.active,' +
                        'button.btn-newsletter.focus.active,' +
                        '.button.btn-newsletter.focus.active,' +
                        '.tempo-btn.btn-newsletter.focus.active,' +
                        '.btn.btn-newsletter.focus.active,' +
                        'input[type="submit"].btn-header.btn-2.focus.active,' +
                        'input[type="button"].btn-header.btn-2.focus.active,' +
                        'input[type="reset"].btn-header.btn-2.focus.active,' +
                        'button.btn-header.btn-2.focus.active,' +
                        '.button.btn-header.btn-2.focus.active,' +
                        '.tempo-btn.btn-header.btn-2.focus.active,' +
                        '.btn.btn-header.btn-2.focus.active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover,' +
                        'button.btn-newsletter.btn-empty:hover,' +
                        '.button.btn-newsletter.btn-empty:hover,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover,' +
                        '.btn.btn-newsletter.btn-empty:hover,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover,' +
                        'button.btn-header.btn-2.btn-empty:hover,' +
                        '.button.btn-header.btn-2.btn-empty:hover,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover,' +
                        '.btn.btn-header.btn-2.btn-empty:hover,' +
                        'input[type="submit"].btn-newsletter.btn-empty:focus,' +
                        'input[type="button"].btn-newsletter.btn-empty:focus,' +
                        'input[type="reset"].btn-newsletter.btn-empty:focus,' +
                        'button.btn-newsletter.btn-empty:focus,' +
                        '.button.btn-newsletter.btn-empty:focus,' +
                        '.tempo-btn.btn-newsletter.btn-empty:focus,' +
                        '.btn.btn-newsletter.btn-empty:focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:focus,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:focus,' +
                        'button.btn-header.btn-2.btn-empty:focus,' +
                        '.button.btn-header.btn-2.btn-empty:focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:focus,' +
                        '.btn.btn-header.btn-2.btn-empty:focus,' +
                        'input[type="submit"].btn-newsletter.btn-empty.focus,' +
                        'input[type="button"].btn-newsletter.btn-empty.focus,' +
                        'input[type="reset"].btn-newsletter.btn-empty.focus,' +
                        'button.btn-newsletter.btn-empty.focus,' +
                        '.button.btn-newsletter.btn-empty.focus,' +
                        '.tempo-btn.btn-newsletter.btn-empty.focus,' +
                        '.btn.btn-newsletter.btn-empty.focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty.focus,' +
                        'input[type="button"].btn-header.btn-2.btn-empty.focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty.focus,' +
                        'button.btn-header.btn-2.btn-empty.focus,' +
                        '.button.btn-header.btn-2.btn-empty.focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty.focus,' +
                        '.btn.btn-header.btn-2.btn-empty.focus,' +
                        'input[type="submit"].btn-newsletter.btn-empty:active,' +
                        'input[type="button"].btn-newsletter.btn-empty:active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:active,' +
                        'button.btn-newsletter.btn-empty:active,' +
                        '.button.btn-newsletter.btn-empty:active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:active,' +
                        '.btn.btn-newsletter.btn-empty:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:active,' +
                        'button.btn-header.btn-2.btn-empty:active,' +
                        '.button.btn-header.btn-2.btn-empty:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:active,' +
                        '.btn.btn-header.btn-2.btn-empty:active,' +
                        'input[type="submit"].btn-newsletter.btn-empty.active,' +
                        'input[type="button"].btn-newsletter.btn-empty.active,' +
                        'input[type="reset"].btn-newsletter.btn-empty.active,' +
                        'button.btn-newsletter.btn-empty.active,' +
                        '.button.btn-newsletter.btn-empty.active,' +
                        '.tempo-btn.btn-newsletter.btn-empty.active,' +
                        '.btn.btn-newsletter.btn-empty.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty.active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty.active,' +
                        'button.btn-header.btn-2.btn-empty.active,' +
                        '.button.btn-header.btn-2.btn-empty.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty.active,' +
                        '.btn.btn-header.btn-2.btn-empty.active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover:focus,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover:focus,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover:focus,' +
                        'button.btn-newsletter.btn-empty:hover:focus,' +
                        '.button.btn-newsletter.btn-empty:hover:focus,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover:focus,' +
                        '.btn.btn-newsletter.btn-empty:hover:focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover:focus,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover:focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover:focus,' +
                        'button.btn-header.btn-2.btn-empty:hover:focus,' +
                        '.button.btn-header.btn-2.btn-empty:hover:focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover:focus,' +
                        '.btn.btn-header.btn-2.btn-empty:hover:focus,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover.focus,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover.focus,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover.focus,' +
                        'button.btn-newsletter.btn-empty:hover.focus,' +
                        '.button.btn-newsletter.btn-empty:hover.focus,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover.focus,' +
                        '.btn.btn-newsletter.btn-empty:hover.focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover.focus,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover.focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover.focus,' +
                        'button.btn-header.btn-2.btn-empty:hover.focus,' +
                        '.button.btn-header.btn-2.btn-empty:hover.focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover.focus,' +
                        '.btn.btn-header.btn-2.btn-empty:hover.focus,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover:active,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover:active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover:active,' +
                        'button.btn-newsletter.btn-empty:hover:active,' +
                        '.button.btn-newsletter.btn-empty:hover:active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover:active,' +
                        '.btn.btn-newsletter.btn-empty:hover:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover:active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover:active,' +
                        'button.btn-header.btn-2.btn-empty:hover:active,' +
                        '.button.btn-header.btn-2.btn-empty:hover:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover:active,' +
                        '.btn.btn-header.btn-2.btn-empty:hover:active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover.active,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover.active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover.active,' +
                        'button.btn-newsletter.btn-empty:hover.active,' +
                        '.button.btn-newsletter.btn-empty:hover.active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover.active,' +
                        '.btn.btn-newsletter.btn-empty:hover.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover.active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover.active,' +
                        'button.btn-header.btn-2.btn-empty:hover.active,' +
                        '.button.btn-header.btn-2.btn-empty:hover.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover.active,' +
                        '.btn.btn-header.btn-2.btn-empty:hover.active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:focus:active,' +
                        'input[type="button"].btn-newsletter.btn-empty:focus:active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:focus:active,' +
                        'button.btn-newsletter.btn-empty:focus:active,' +
                        '.button.btn-newsletter.btn-empty:focus:active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:focus:active,' +
                        '.btn.btn-newsletter.btn-empty:focus:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:focus:active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:focus:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:focus:active,' +
                        'button.btn-header.btn-2.btn-empty:focus:active,' +
                        '.button.btn-header.btn-2.btn-empty:focus:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:focus:active,' +
                        '.btn.btn-header.btn-2.btn-empty:focus:active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:focus.active,' +
                        'input[type="button"].btn-newsletter.btn-empty:focus.active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:focus.active,' +
                        'button.btn-newsletter.btn-empty:focus.active,' +
                        '.button.btn-newsletter.btn-empty:focus.active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:focus.active,' +
                        '.btn.btn-newsletter.btn-empty:focus.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:focus.active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:focus.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:focus.active,' +
                        'button.btn-header.btn-2.btn-empty:focus.active,' +
                        '.button.btn-header.btn-2.btn-empty:focus.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:focus.active,' +
                        '.btn.btn-header.btn-2.btn-empty:focus.active,' +
                        'input[type="submit"].btn-newsletter.btn-empty.focus.active,' +
                        'input[type="button"].btn-newsletter.btn-empty.focus.active,' +
                        'input[type="reset"].btn-newsletter.btn-empty.focus.active,' +
                        'button.btn-newsletter.btn-empty.focus.active,' +
                        '.button.btn-newsletter.btn-empty.focus.active,' +
                        '.tempo-btn.btn-newsletter.btn-empty.focus.active,' +
                        '.btn.btn-newsletter.btn-empty.focus.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty.focus.active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty.focus.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty.focus.active,' +
                        'button.btn-header.btn-2.btn-empty.focus.active,' +
                        '.button.btn-header.btn-2.btn-empty.focus.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty.focus.active,' +
                        '.btn.btn-header.btn-2.btn-empty.focus.active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover,' +
                        'button.btn-newsletter.btn-hover-empty:hover,' +
                        '.button.btn-newsletter.btn-hover-empty:hover,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:focus,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:focus,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:focus,' +
                        'button.btn-newsletter.btn-hover-empty:focus,' +
                        '.button.btn-newsletter.btn-hover-empty:focus,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:focus,' +
                        '.btn.btn-newsletter.btn-hover-empty:focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:focus,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:focus,' +
                        'button.btn-header.btn-2.btn-hover-empty:focus,' +
                        '.button.btn-header.btn-2.btn-hover-empty:focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:focus,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:focus,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty.focus,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty.focus,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty.focus,' +
                        'button.btn-newsletter.btn-hover-empty.focus,' +
                        '.button.btn-newsletter.btn-hover-empty.focus,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty.focus,' +
                        '.btn.btn-newsletter.btn-hover-empty.focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty.focus,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty.focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty.focus,' +
                        'button.btn-header.btn-2.btn-hover-empty.focus,' +
                        '.button.btn-header.btn-2.btn-hover-empty.focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty.focus,' +
                        '.btn.btn-header.btn-2.btn-hover-empty.focus,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:active,' +
                        'button.btn-newsletter.btn-hover-empty:active,' +
                        '.button.btn-newsletter.btn-hover-empty:active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:active,' +
                        '.btn.btn-newsletter.btn-hover-empty:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:active,' +
                        'button.btn-header.btn-2.btn-hover-empty:active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty.active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty.active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty.active,' +
                        'button.btn-newsletter.btn-hover-empty.active,' +
                        '.button.btn-newsletter.btn-hover-empty.active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty.active,' +
                        '.btn.btn-newsletter.btn-hover-empty.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty.active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty.active,' +
                        'button.btn-header.btn-2.btn-hover-empty.active,' +
                        '.button.btn-header.btn-2.btn-hover-empty.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty.active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty.active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover:focus,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover:focus,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover:focus,' +
                        'button.btn-newsletter.btn-hover-empty:hover:focus,' +
                        '.button.btn-newsletter.btn-hover-empty:hover:focus,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover:focus,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover:focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover:focus,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover.focus,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover.focus,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover.focus,' +
                        'button.btn-newsletter.btn-hover-empty:hover.focus,' +
                        '.button.btn-newsletter.btn-hover-empty:hover.focus,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover.focus,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover.focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover.focus,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover:active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover:active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover:active,' +
                        'button.btn-newsletter.btn-hover-empty:hover:active,' +
                        '.button.btn-newsletter.btn-hover-empty:hover:active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover:active,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover:active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover:active,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover:active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover:active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover:active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:hover.active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:hover.active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:hover.active,' +
                        'button.btn-newsletter.btn-hover-empty:hover.active,' +
                        '.button.btn-newsletter.btn-hover-empty:hover.active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:hover.active,' +
                        '.btn.btn-newsletter.btn-hover-empty:hover.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:hover.active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:hover.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:hover.active,' +
                        'button.btn-header.btn-2.btn-hover-empty:hover.active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:hover.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:hover.active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:hover.active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:focus:active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:focus:active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:focus:active,' +
                        'button.btn-newsletter.btn-hover-empty:focus:active,' +
                        '.button.btn-newsletter.btn-hover-empty:focus:active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:focus:active,' +
                        '.btn.btn-newsletter.btn-hover-empty:focus:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:focus:active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:focus:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:focus:active,' +
                        'button.btn-header.btn-2.btn-hover-empty:focus:active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:focus:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:focus:active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:focus:active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty:focus.active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty:focus.active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty:focus.active,' +
                        'button.btn-newsletter.btn-hover-empty:focus.active,' +
                        '.button.btn-newsletter.btn-hover-empty:focus.active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty:focus.active,' +
                        '.btn.btn-newsletter.btn-hover-empty:focus.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty:focus.active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty:focus.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty:focus.active,' +
                        'button.btn-header.btn-2.btn-hover-empty:focus.active,' +
                        '.button.btn-header.btn-2.btn-hover-empty:focus.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty:focus.active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty:focus.active,' +
                        'input[type="submit"].btn-newsletter.btn-hover-empty.focus.active,' +
                        'input[type="button"].btn-newsletter.btn-hover-empty.focus.active,' +
                        'input[type="reset"].btn-newsletter.btn-hover-empty.focus.active,' +
                        'button.btn-newsletter.btn-hover-empty.focus.active,' +
                        '.button.btn-newsletter.btn-hover-empty.focus.active,' +
                        '.tempo-btn.btn-newsletter.btn-hover-empty.focus.active,' +
                        '.btn.btn-newsletter.btn-hover-empty.focus.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-hover-empty.focus.active,' +
                        'input[type="button"].btn-header.btn-2.btn-hover-empty.focus.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-hover-empty.focus.active,' +
                        'button.btn-header.btn-2.btn-hover-empty.focus.active,' +
                        '.button.btn-header.btn-2.btn-hover-empty.focus.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-hover-empty.focus.active,' +
                        '.btn.btn-header.btn-2.btn-hover-empty.focus.active,' +
                        'select:focus,' +
                        'textarea:focus,' +
                        'input:not([type=submit]):not([type=file]):not([type=button]):not([type=reset]):not([type="image"]):focus,' +
                        'input[type="tel"]:focus,' +
                        'input[type="url"]:focus,' +
                        'input[type="text"]:focus,' +
                        'input[type="email"]:focus,' +
                        'input[type="phone"]:focus,' +
                        'input[type="number"]:focus,' +
                        'input[type="password"]:focus,' +
                        'select:active,' +
                        'textarea:active,' +
                        'input:not([type=submit]):not([type=file]):not([type=button]):not([type=reset]):not([type="image"]):active,' +
                        'input[type="tel"]:active,' +
                        'input[type="url"]:active,' +
                        'input[type="text"]:active,' +
                        'input[type="email"]:active,' +
                        'input[type="phone"]:active,' +
                        'input[type="number"]:active,' +
                        'input[type="password"]:active,' +
                        'header.tempo-header div.tempo-header-partial.tempo-portfolio div.tempo-categories.single span.category-wrapper a,' +
                        'aside:not(.dark-sidebars) div.widget.widget_tag_cloud div.tagcloud a:hover,' +
                        'aside:not(.dark-sidebars) div.widget.tempo_widget_post_tags div.tagcloud a:hover,' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_infobox a.read-more:hover,' +

                        '.woocommerce div.product div.tempo-categories a:not(.more-link):not(.tempo-btn):not(.btn):not(.button),' +
                        '.woocommerce div.product div.woocommerce-tabs.wc-tabs-wrapper ul.tabs.wc-tabs li.active a:after,' +
                        '.woocommerce div.product div.woocommerce-tabs.wc-tabs-wrapper ul.tabs.wc-tabs li a:hover:after,' +

                        'div.tempo-topper-nav a.gardener-quote:hover{' +
                        'border-color: ' + newval + ';' +
                        '}' +

                        'aside.tempo-footer.dark-sidebars div.widget select:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget textarea:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input:not([type=submit]):not([type=file]):not([type=button]):not([type=reset]):focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="tel"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="url"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="text"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="email"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="phone"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="number"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="password"]:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget select:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget textarea:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input:not([type=submit]):not([type=file]):not([type=button]):not([type=reset]):active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="tel"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="url"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="text"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="email"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="phone"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="number"]:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget input[type="password"]:active,' +

                        'div.tempo-topper-nav a.gardener-quote{' +
                        'border-color: ' + tempo_brightness( newval, 50 ) + ';' +
                        '}' +

                        'article.tempo-article.classic div.tempo-categories i,' +
                        'article.tempo-article.classic div.tempo-categories ul li a:not(.more-link):not(.tempo-btn):not(.btn):not(.button),' +
                        'article.tempo-article.grid div.tempo-categories i,' +
                        'article.tempo-article.grid div.tempo-categories ul li a:not(.more-link):not(.tempo-btn):not(.btn):not(.button),' +
                        'article.tempo-article.portfolio div.tempo-categories i,' +
                        'article.tempo-article.portfolio div.tempo-categories ul li a:not(.more-link):not(.tempo-btn):not(.btn):not(.button),' +
                        'article.tempo-article.portfolio div.tempo-content h3.tempo-title:hover:before,' +
                        '.pagination span,' +
                        '.pagination-wrapper span,' +
                        '.pagination a:hover,' +
                        '.pagination-wrapper a:hover,' +
                        '.tempo-shortcode.posts.grid .pagination-wrapper span,' +
                        '.tempo-shortcode.posts.portfolio .pagination-wrapper span,' +
                        '.tempo-shortcode.posts.grid .pagination-wrapper a:hover,' +
                        '.tempo-shortcode.posts.portfolio .pagination-wrapper a:hover,' +
                        'div.tempo-comments-wrapper ol.tempo-comments-list li.comment header span.tempo-comment-meta cite span.tempo-author-tag,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]:hover,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]:focus,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"]:active,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"].focus,' +
                        'div.tempo-comments-wrapper div.comment-respond form.comment-form p.form-submit input[type="submit"].active,' +
                        'input[type="submit"],' +
                        'input[type="button"],' +
                        'input[type="reset"],' +
                        'button,' +
                        '.button,' +
                        '.tempo-btn,' +
                        '.btn,' +
                        'input[type="submit"].btn-search,' +
                        'input[type="button"].btn-search,' +
                        'input[type="reset"].btn-search,' +
                        'button.btn-search,' +
                        '.button.btn-search,' +
                        '.tempo-btn.btn-search,' +
                        '.btn.btn-search,' +
                        'input[type="submit"].btn-header,' +
                        'input[type="button"].btn-header,' +
                        'input[type="reset"].btn-header,' +
                        'button.btn-header,' +
                        '.button.btn-header,' +
                        '.tempo-btn.btn-header,' +
                        '.btn.btn-header,' +
                        'input[type="submit"].btn-newsletter:hover,' +
                        'input[type="button"].btn-newsletter:hover,' +
                        'input[type="reset"].btn-newsletter:hover,' +
                        'button.btn-newsletter:hover,' +
                        '.button.btn-newsletter:hover,' +
                        '.tempo-btn.btn-newsletter:hover,' +
                        '.btn.btn-newsletter:hover,' +
                        'input[type="submit"].btn-header.btn-2:hover,' +
                        'input[type="button"].btn-header.btn-2:hover,' +
                        'input[type="reset"].btn-header.btn-2:hover,' +
                        'button.btn-header.btn-2:hover,' +
                        '.button.btn-header.btn-2:hover,' +
                        '.tempo-btn.btn-header.btn-2:hover,' +
                        '.btn.btn-header.btn-2:hover,' +
                        'input[type="submit"].btn-newsletter:focus,' +
                        'input[type="button"].btn-newsletter:focus,' +
                        'input[type="reset"].btn-newsletter:focus,' +
                        'button.btn-newsletter:focus,' +
                        '.button.btn-newsletter:focus,' +
                        '.tempo-btn.btn-newsletter:focus,' +
                        '.btn.btn-newsletter:focus,' +
                        'input[type="submit"].btn-header.btn-2:focus,' +
                        'input[type="button"].btn-header.btn-2:focus,' +
                        'input[type="reset"].btn-header.btn-2:focus,' +
                        'button.btn-header.btn-2:focus,' +
                        '.button.btn-header.btn-2:focus,' +
                        '.tempo-btn.btn-header.btn-2:focus,' +
                        '.btn.btn-header.btn-2:focus,' +
                        'input[type="submit"].btn-newsletter.focus,' +
                        'input[type="button"].btn-newsletter.focus,' +
                        'input[type="reset"].btn-newsletter.focus,' +
                        'button.btn-newsletter.focus,' +
                        '.button.btn-newsletter.focus,' +
                        '.tempo-btn.btn-newsletter.focus,' +
                        '.btn.btn-newsletter.focus,' +
                        'input[type="submit"].btn-header.btn-2.focus,' +
                        'input[type="button"].btn-header.btn-2.focus,' +
                        'input[type="reset"].btn-header.btn-2.focus,' +
                        'button.btn-header.btn-2.focus,' +
                        '.button.btn-header.btn-2.focus,' +
                        '.tempo-btn.btn-header.btn-2.focus,' +
                        '.btn.btn-header.btn-2.focus,' +
                        'input[type="submit"].btn-newsletter:active,' +
                        'input[type="button"].btn-newsletter:active,' +
                        'input[type="reset"].btn-newsletter:active,' +
                        'button.btn-newsletter:active,' +
                        '.button.btn-newsletter:active,' +
                        '.tempo-btn.btn-newsletter:active,' +
                        '.btn.btn-newsletter:active,' +
                        'input[type="submit"].btn-header.btn-2:active,' +
                        'input[type="button"].btn-header.btn-2:active,' +
                        'input[type="reset"].btn-header.btn-2:active,' +
                        'button.btn-header.btn-2:active,' +
                        '.button.btn-header.btn-2:active,' +
                        '.tempo-btn.btn-header.btn-2:active,' +
                        '.btn.btn-header.btn-2:active,' +
                        'input[type="submit"].btn-newsletter.active,' +
                        'input[type="button"].btn-newsletter.active,' +
                        'input[type="reset"].btn-newsletter.active,' +
                        'button.btn-newsletter.active,' +
                        '.button.btn-newsletter.active,' +
                        '.tempo-btn.btn-newsletter.active,' +
                        '.btn.btn-newsletter.active,' +
                        'input[type="submit"].btn-header.btn-2.active,' +
                        'input[type="button"].btn-header.btn-2.active,' +
                        'input[type="reset"].btn-header.btn-2.active,' +
                        'button.btn-header.btn-2.active,' +
                        '.button.btn-header.btn-2.active,' +
                        '.tempo-btn.btn-header.btn-2.active,' +
                        '.btn.btn-header.btn-2.active,' +
                        'input[type="submit"].btn-newsletter:hover:focus,' +
                        'input[type="button"].btn-newsletter:hover:focus,' +
                        'input[type="reset"].btn-newsletter:hover:focus,' +
                        'button.btn-newsletter:hover:focus,' +
                        '.button.btn-newsletter:hover:focus,' +
                        '.tempo-btn.btn-newsletter:hover:focus,' +
                        '.btn.btn-newsletter:hover:focus,' +
                        'input[type="submit"].btn-header.btn-2:hover:focus,' +
                        'input[type="button"].btn-header.btn-2:hover:focus,' +
                        'input[type="reset"].btn-header.btn-2:hover:focus,' +
                        'button.btn-header.btn-2:hover:focus,' +
                        '.button.btn-header.btn-2:hover:focus,' +
                        '.tempo-btn.btn-header.btn-2:hover:focus,' +
                        '.btn.btn-header.btn-2:hover:focus,' +
                        'input[type="submit"].btn-newsletter:hover.focus,' +
                        'input[type="button"].btn-newsletter:hover.focus,' +
                        'input[type="reset"].btn-newsletter:hover.focus,' +
                        'button.btn-newsletter:hover.focus,' +
                        '.button.btn-newsletter:hover.focus,' +
                        '.tempo-btn.btn-newsletter:hover.focus,' +
                        '.btn.btn-newsletter:hover.focus,' +
                        'input[type="submit"].btn-header.btn-2:hover.focus,' +
                        'input[type="button"].btn-header.btn-2:hover.focus,' +
                        'input[type="reset"].btn-header.btn-2:hover.focus,' +
                        'button.btn-header.btn-2:hover.focus,' +
                        '.button.btn-header.btn-2:hover.focus,' +
                        '.tempo-btn.btn-header.btn-2:hover.focus,' +
                        '.btn.btn-header.btn-2:hover.focus,' +
                        'input[type="submit"].btn-newsletter:hover:active,' +
                        'input[type="button"].btn-newsletter:hover:active,' +
                        'input[type="reset"].btn-newsletter:hover:active,' +
                        'button.btn-newsletter:hover:active,' +
                        '.button.btn-newsletter:hover:active,' +
                        '.tempo-btn.btn-newsletter:hover:active,' +
                        '.btn.btn-newsletter:hover:active,' +
                        'input[type="submit"].btn-header.btn-2:hover:active,' +
                        'input[type="button"].btn-header.btn-2:hover:active,' +
                        'input[type="reset"].btn-header.btn-2:hover:active,' +
                        'button.btn-header.btn-2:hover:active,' +
                        '.button.btn-header.btn-2:hover:active,' +
                        '.tempo-btn.btn-header.btn-2:hover:active,' +
                        '.btn.btn-header.btn-2:hover:active,' +
                        'input[type="submit"].btn-newsletter:hover.active,' +
                        'input[type="button"].btn-newsletter:hover.active,' +
                        'input[type="reset"].btn-newsletter:hover.active,' +
                        'button.btn-newsletter:hover.active,' +
                        '.button.btn-newsletter:hover.active,' +
                        '.tempo-btn.btn-newsletter:hover.active,' +
                        '.btn.btn-newsletter:hover.active,' +
                        'input[type="submit"].btn-header.btn-2:hover.active,' +
                        'input[type="button"].btn-header.btn-2:hover.active,' +
                        'input[type="reset"].btn-header.btn-2:hover.active,' +
                        'button.btn-header.btn-2:hover.active,' +
                        '.button.btn-header.btn-2:hover.active,' +
                        '.tempo-btn.btn-header.btn-2:hover.active,' +
                        '.btn.btn-header.btn-2:hover.active,' +
                        'input[type="submit"].btn-newsletter:focus:active,' +
                        'input[type="button"].btn-newsletter:focus:active,' +
                        'input[type="reset"].btn-newsletter:focus:active,' +
                        'button.btn-newsletter:focus:active,' +
                        '.button.btn-newsletter:focus:active,' +
                        '.tempo-btn.btn-newsletter:focus:active,' +
                        '.btn.btn-newsletter:focus:active,' +
                        'input[type="submit"].btn-header.btn-2:focus:active,' +
                        'input[type="button"].btn-header.btn-2:focus:active,' +
                        'input[type="reset"].btn-header.btn-2:focus:active,' +
                        'button.btn-header.btn-2:focus:active,' +
                        '.button.btn-header.btn-2:focus:active,' +
                        '.tempo-btn.btn-header.btn-2:focus:active,' +
                        '.btn.btn-header.btn-2:focus:active,' +
                        'input[type="submit"].btn-newsletter:focus.active,' +
                        'input[type="button"].btn-newsletter:focus.active,' +
                        'input[type="reset"].btn-newsletter:focus.active,' +
                        'button.btn-newsletter:focus.active,' +
                        '.button.btn-newsletter:focus.active,' +
                        '.tempo-btn.btn-newsletter:focus.active,' +
                        '.btn.btn-newsletter:focus.active,' +
                        'input[type="submit"].btn-header.btn-2:focus.active,' +
                        'input[type="button"].btn-header.btn-2:focus.active,' +
                        'input[type="reset"].btn-header.btn-2:focus.active,' +
                        'button.btn-header.btn-2:focus.active,' +
                        '.button.btn-header.btn-2:focus.active,' +
                        '.tempo-btn.btn-header.btn-2:focus.active,' +
                        '.btn.btn-header.btn-2:focus.active,' +
                        'input[type="submit"].btn-newsletter.focus.active,' +
                        'input[type="button"].btn-newsletter.focus.active,' +
                        'input[type="reset"].btn-newsletter.focus.active,' +
                        'button.btn-newsletter.focus.active,' +
                        '.button.btn-newsletter.focus.active,' +
                        '.tempo-btn.btn-newsletter.focus.active,' +
                        '.btn.btn-newsletter.focus.active,' +
                        'input[type="submit"].btn-header.btn-2.focus.active,' +
                        'input[type="button"].btn-header.btn-2.focus.active,' +
                        'input[type="reset"].btn-header.btn-2.focus.active,' +
                        'button.btn-header.btn-2.focus.active,' +
                        '.button.btn-header.btn-2.focus.active,' +
                        '.tempo-btn.btn-header.btn-2.focus.active,' +
                        '.btn.btn-header.btn-2.focus.active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover,' +
                        'button.btn-newsletter.btn-empty:hover,' +
                        '.button.btn-newsletter.btn-empty:hover,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover,' +
                        '.btn.btn-newsletter.btn-empty:hover,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover,' +
                        'button.btn-header.btn-2.btn-empty:hover,' +
                        '.button.btn-header.btn-2.btn-empty:hover,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover,' +
                        '.btn.btn-header.btn-2.btn-empty:hover,' +
                        'input[type="submit"].btn-newsletter.btn-empty:focus,' +
                        'input[type="button"].btn-newsletter.btn-empty:focus,' +
                        'input[type="reset"].btn-newsletter.btn-empty:focus,' +
                        'button.btn-newsletter.btn-empty:focus,' +
                        '.button.btn-newsletter.btn-empty:focus,' +
                        '.tempo-btn.btn-newsletter.btn-empty:focus,' +
                        '.btn.btn-newsletter.btn-empty:focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:focus,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:focus,' +
                        'button.btn-header.btn-2.btn-empty:focus,' +
                        '.button.btn-header.btn-2.btn-empty:focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:focus,' +
                        '.btn.btn-header.btn-2.btn-empty:focus,' +
                        'input[type="submit"].btn-newsletter.btn-empty.focus,' +
                        'input[type="button"].btn-newsletter.btn-empty.focus,' +
                        'input[type="reset"].btn-newsletter.btn-empty.focus,' +
                        'button.btn-newsletter.btn-empty.focus,' +
                        '.button.btn-newsletter.btn-empty.focus,' +
                        '.tempo-btn.btn-newsletter.btn-empty.focus,' +
                        '.btn.btn-newsletter.btn-empty.focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty.focus,' +
                        'input[type="button"].btn-header.btn-2.btn-empty.focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty.focus,' +
                        'button.btn-header.btn-2.btn-empty.focus,' +
                        '.button.btn-header.btn-2.btn-empty.focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty.focus,' +
                        '.btn.btn-header.btn-2.btn-empty.focus,' +
                        'input[type="submit"].btn-newsletter.btn-empty:active,' +
                        'input[type="button"].btn-newsletter.btn-empty:active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:active,' +
                        'button.btn-newsletter.btn-empty:active,' +
                        '.button.btn-newsletter.btn-empty:active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:active,' +
                        '.btn.btn-newsletter.btn-empty:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:active,' +
                        'button.btn-header.btn-2.btn-empty:active,' +
                        '.button.btn-header.btn-2.btn-empty:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:active,' +
                        '.btn.btn-header.btn-2.btn-empty:active,' +
                        'input[type="submit"].btn-newsletter.btn-empty.active,' +
                        'input[type="button"].btn-newsletter.btn-empty.active,' +
                        'input[type="reset"].btn-newsletter.btn-empty.active,' +
                        'button.btn-newsletter.btn-empty.active,' +
                        '.button.btn-newsletter.btn-empty.active,' +
                        '.tempo-btn.btn-newsletter.btn-empty.active,' +
                        '.btn.btn-newsletter.btn-empty.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty.active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty.active,' +
                        'button.btn-header.btn-2.btn-empty.active,' +
                        '.button.btn-header.btn-2.btn-empty.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty.active,' +
                        '.btn.btn-header.btn-2.btn-empty.active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover:focus,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover:focus,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover:focus,' +
                        'button.btn-newsletter.btn-empty:hover:focus,' +
                        '.button.btn-newsletter.btn-empty:hover:focus,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover:focus,' +
                        '.btn.btn-newsletter.btn-empty:hover:focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover:focus,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover:focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover:focus,' +
                        'button.btn-header.btn-2.btn-empty:hover:focus,' +
                        '.button.btn-header.btn-2.btn-empty:hover:focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover:focus,' +
                        '.btn.btn-header.btn-2.btn-empty:hover:focus,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover.focus,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover.focus,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover.focus,' +
                        'button.btn-newsletter.btn-empty:hover.focus,' +
                        '.button.btn-newsletter.btn-empty:hover.focus,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover.focus,' +
                        '.btn.btn-newsletter.btn-empty:hover.focus,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover.focus,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover.focus,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover.focus,' +
                        'button.btn-header.btn-2.btn-empty:hover.focus,' +
                        '.button.btn-header.btn-2.btn-empty:hover.focus,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover.focus,' +
                        '.btn.btn-header.btn-2.btn-empty:hover.focus,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover:active,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover:active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover:active,' +
                        'button.btn-newsletter.btn-empty:hover:active,' +
                        '.button.btn-newsletter.btn-empty:hover:active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover:active,' +
                        '.btn.btn-newsletter.btn-empty:hover:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover:active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover:active,' +
                        'button.btn-header.btn-2.btn-empty:hover:active,' +
                        '.button.btn-header.btn-2.btn-empty:hover:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover:active,' +
                        '.btn.btn-header.btn-2.btn-empty:hover:active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:hover.active,' +
                        'input[type="button"].btn-newsletter.btn-empty:hover.active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:hover.active,' +
                        'button.btn-newsletter.btn-empty:hover.active,' +
                        '.button.btn-newsletter.btn-empty:hover.active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:hover.active,' +
                        '.btn.btn-newsletter.btn-empty:hover.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:hover.active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:hover.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:hover.active,' +
                        'button.btn-header.btn-2.btn-empty:hover.active,' +
                        '.button.btn-header.btn-2.btn-empty:hover.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:hover.active,' +
                        '.btn.btn-header.btn-2.btn-empty:hover.active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:focus:active,' +
                        'input[type="button"].btn-newsletter.btn-empty:focus:active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:focus:active,' +
                        'button.btn-newsletter.btn-empty:focus:active,' +
                        '.button.btn-newsletter.btn-empty:focus:active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:focus:active,' +
                        '.btn.btn-newsletter.btn-empty:focus:active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:focus:active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:focus:active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:focus:active,' +
                        'button.btn-header.btn-2.btn-empty:focus:active,' +
                        '.button.btn-header.btn-2.btn-empty:focus:active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:focus:active,' +
                        '.btn.btn-header.btn-2.btn-empty:focus:active,' +
                        'input[type="submit"].btn-newsletter.btn-empty:focus.active,' +
                        'input[type="button"].btn-newsletter.btn-empty:focus.active,' +
                        'input[type="reset"].btn-newsletter.btn-empty:focus.active,' +
                        'button.btn-newsletter.btn-empty:focus.active,' +
                        '.button.btn-newsletter.btn-empty:focus.active,' +
                        '.tempo-btn.btn-newsletter.btn-empty:focus.active,' +
                        '.btn.btn-newsletter.btn-empty:focus.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty:focus.active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty:focus.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty:focus.active,' +
                        'button.btn-header.btn-2.btn-empty:focus.active,' +
                        '.button.btn-header.btn-2.btn-empty:focus.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty:focus.active,' +
                        '.btn.btn-header.btn-2.btn-empty:focus.active,' +
                        'input[type="submit"].btn-newsletter.btn-empty.focus.active,' +
                        'input[type="button"].btn-newsletter.btn-empty.focus.active,' +
                        'input[type="reset"].btn-newsletter.btn-empty.focus.active,' +
                        'button.btn-newsletter.btn-empty.focus.active,' +
                        '.button.btn-newsletter.btn-empty.focus.active,' +
                        '.tempo-btn.btn-newsletter.btn-empty.focus.active,' +
                        '.btn.btn-newsletter.btn-empty.focus.active,' +
                        'input[type="submit"].btn-header.btn-2.btn-empty.focus.active,' +
                        'input[type="button"].btn-header.btn-2.btn-empty.focus.active,' +
                        'input[type="reset"].btn-header.btn-2.btn-empty.focus.active,' +
                        'button.btn-header.btn-2.btn-empty.focus.active,' +
                        '.button.btn-header.btn-2.btn-empty.focus.active,' +
                        '.tempo-btn.btn-header.btn-2.btn-empty.focus.active,' +
                        '.btn.btn-header.btn-2.btn-empty.focus.active,' +
                        'header.tempo-header div.tempo-topper div.tempo-navigation-wrapper div.gardener-menu-wrapper,' +
                        'header.tempo-header div.tempo-header-partial .tempo-header-buttons .tempo-btn.btn-1,' +
                        'header.tempo-header div.tempo-header-partial .tempo-header-buttons .tempo-btn.btn-2:hover,' +
                        'header.tempo-header div.tempo-topper div.tempo-navigation-wrapper div.tempo-menu-wrapper ul.tempo-menu-list > li ul,' +
                        'header.tempo-header div.tempo-header-partial.tempo-portfolio div.tempo-categories.single span.categories-wrapper i,' +
                        'header.tempo-header div.tempo-header-partial.tempo-portfolio div.tempo-categories.single ul li a,' +
                        'header.tempo-header div.tempo-header-partial.tempo-portfolio div.tempo-categories.single ul li a:hover,' +
                        'article.tempo-article.classic div.tempo-author hr.author-delimiter,' +
                        'aside:not(.dark-sidebars) div.widget.widget_search form fieldset button,' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_newsletter form fieldset button,' +
                        'aside:not(.dark-sidebars) div.widget.widget_tag_cloud div.tagcloud a:hover,' +
                        'aside:not(.dark-sidebars) div.widget.tempo_widget_post_tags div.tagcloud a:hover,' +
                        'aside.sidebar-content-wrapper div.widget h4.widget-title:before,' +
                        'aside.sidebar-content-wrapper div.widget:hover h4.widget-title:before,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_search form fieldset button,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_newsletter form fieldset button,' +
                        'header.tempo-header div.tempo-header-partial.tempo-audio:hover hr,' +

                        '.woocommerce span.onsale,' +
                        '.woocommerce #respond input#submit,' +
                        '.woocommerce a.button,' +
                        '.woocommerce button.button,' +
                        '.woocommerce input.button,' +
                        '.woocommerce #respond input#submit.alt,' +
                        '.woocommerce a.button.alt,' +
                        '.woocommerce button.button.alt,' +
                        '.woocommerce input.button.alt,' +
                        'aside:not(.dark-sidebars) div.widget.widget_product_tag_cloud div.tagcloud a:hover,' +
                        'header.tempo-header div.gardener-woocommerce-wrapper nav ul.gardener-woocommerce-tools-menu a span,' +
                        '.woocommerce aside:not(.dark-sidebars) div.widget.widget_price_filter .ui-slider .ui-slider-range,' +
                        '.woocommerce aside:not(.dark-sidebars) div.widget.widget_price_filter .ui-slider .ui-slider-handle,' +
                        'aside:not(.dark-sidebars) div.widget.widget_product_search form fieldset button,' +
                        '.woocommerce div.product div.tempo-categories i,' +
                        '.woocommerce div.product div.tempo-categories ul li a:not(.more-link):not(.tempo-btn):not(.btn):not(.button),' +
                        '.yith-wcwl-add-button a.add_to_wishlist:hover,' +
                        'a.added_to_cart.wc-forward:hover,' +
                        '.yith-wcwl-add-button a.add_to_wishlist:focus,' +
                        'a.added_to_cart.wc-forward:focus,' +
                        '.yith-wcwl-add-button a.add_to_wishlist.focus,' +
                        'a.added_to_cart.wc-forward.focus,' +
                        '.yith-wcwl-add-button a.add_to_wishlist:active,' +
                        'a.added_to_cart.wc-forward:active,' +
                        '.yith-wcwl-add-button a.add_to_wishlist.active,' +
                        'a.added_to_cart.wc-forward.active,' +
                        '#review_form #respond p.form-submit input[type="submit"],' +

                        '.yith-wcwl-add-button a.add_to_wishlist:hover:focus,' +
                        'a.added_to_cart.wc-forward:hover:focus,' +
                        '.yith-wcwl-add-button a.add_to_wishlist:hover.focus,' +
                        'a.added_to_cart.wc-forward:hover.focus,' +
                        '.yith-wcwl-add-button a.add_to_wishlist:hover:active,' +
                        'a.added_to_cart.wc-forward:hover:active,' +
                        '.yith-wcwl-add-button a.add_to_wishlist:hover.active,' +
                        'a.added_to_cart.wc-forward:hover.active,' +
                        '.yith-wcwl-add-button a.add_to_wishlist:focus:active,' +
                        'a.added_to_cart.wc-forward:focus:active,' +
                        '.yith-wcwl-add-button a.add_to_wishlist:focus.active,' +
                        'a.added_to_cart.wc-forward:focus.active,' +
                        '.yith-wcwl-add-button a.add_to_wishlist.focus.active,' +
                        'a.added_to_cart.wc-forward.focus.active,' +

                        'div.tempo-topper-nav a.gardener-quote:hover,' +

                        '.woocommerce nav.woocommerce-pagination ul li span,' +
                        '.woocommerce nav.woocommerce-pagination ul li span.current,' +
                        '.woocommerce nav.woocommerce-pagination ul li a:hover,' +
                        '.woocommerce nav.woocommerce-pagination ul li a:hover:hover,' +
                        '.woocommerce nav.woocommerce-pagination ul li a.focus:hover,' +
                        '.woocommerce nav.woocommerce-pagination ul li a:focus:hover,' +
                        '.woocommerce nav.woocommerce-pagination ul li a.active:hover,' +
                        '.woocommerce nav.woocommerce-pagination ul li a:active:hover,' +
                        '.woocommerce nav.woocommerce-pagination ul li a.visited:hover,' +
                        '.woocommerce nav.woocommerce-pagination ul li a:visited:hover,' +

                        'body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children>span,' +
                        'body div.nav-collapse.tempo-navigation-wrapper.collapse-submenu nav.tempo-navigation ul li.menu-item-has-children.collapse-children>span:hover{' +
                        'background-color: ' + newval + ';' +
                        '}' +

                        'aside.tempo-footer.dark-sidebars div.widget.widget_search form fieldset button:hover,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_search form fieldset button:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget.widget_search form fieldset button:active,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_newsletter form fieldset button:hover,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_newsletter form fieldset button:focus,' +
                        'aside.tempo-footer.dark-sidebars div.widget.zeon_widget_newsletter form fieldset button:active{' +
                        'background-color: ' + tempo_brightness( newval, 50 ) + ';' +
                        '}' +

                        'aside:not(.dark-sidebars) div.widget.widget_pages a:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_meta a:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_categories a:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_archive a:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_nav_menu a:before,' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_categories a:before,' +
                        'aside:not(.dark-sidebars) div.widget.tempo_widget_categories a:before{' +
                        'background-color: rgba(' + tempo_hex2rgb( newval ) + ', 0 );' +
                        '}' +

                        'aside:not(.dark-sidebars) div.widget.widget_pages a:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_meta a:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_categories a:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_archive a:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_nav_menu a:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.zeon_widget_categories a:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.tempo_widget_categories a:hover:before,' +
                        'aside:not(.dark-sidebars) div.widget.widget_product_categories a:hover:before,' +
                        '.tempo-scroll-up a{' +
                        'background-color: rgba(' + tempo_hex2rgb( newval ) + ', 0.5 );' +
                        '}' +

                        '.tempo-scroll-up a:hover{' +
                        'background-color: rgba(' + tempo_hex2rgb( newval ) + ', 1 );' +
                        '}'
                    );
                });
            });
        }

        {   // HEADER IMAGE

            //header_image
            wp.customize( 'header_image' , function( value ){
                value.bind(function( newval ){
                    if( newval ){
                        setTimeout(function(){
                            tempo_images.loaded( '.wp-custom-header', function(){
                                jQuery('.wp-custom-header').parallax();
                            });
                        }, 1000 );
                    }
                });
            });
        }

        {   // headline max width

            wp.customize( 'header-headline-max-width', function( value ){
                value.bind(function( newval ){
                    jQuery( 'style#header-headline-max-width' ).html(
                        'header.tempo-header div.tempo-header-partial .tempo-header-headline{' +
                        'max-width:' + parseInt( newval ) + 'px;' +
                        '}'
                    );
                });
            });

        }

        {   ////    BUTTON 1

            // Text
            wp.customize( 'header-btn-1-text', function( value ){
                value.bind(function( newval ){
                    var button = jQuery( 'header.tempo-header div.tempo-header-partial .tempo-header-btns-wrapper .tempo-btn.btn-1' );

                    if( button.length )
                        button.html( newval );
                });
            });

            // Description
            wp.customize( 'header-btn-1-description', function( value ){
                value.bind(function( newval ){
                    var button = jQuery( 'header.tempo-header div.tempo-header-partial .tempo-header-btns-wrapper .tempo-btn.btn-1' );

                    if( button.length )
                        button.attr( 'title', newval );
                });
            });

            // Url
            wp.customize( 'header-btn-1-url', function( value ){
                value.bind(function( newval ){
                    var button = jQuery( 'header.tempo-header div.tempo-header-partial .tempo-header-btns-wrapper .tempo-btn.btn-1' );

                    if( button.length )
                        button.attr( 'href', newval );
                });
            });

            // Target
            wp.customize( 'header-btn-1-target', function( value ){
                value.bind(function( newval ){
                    var button = jQuery( 'header.tempo-header div.tempo-header-partial .tempo-header-btns-wrapper .tempo-btn.btn-1' );

                    if( !button.length )
                        return;

                    if( newval ){
                        button.attr( 'target', "_blank" );
                    }

                    else{
                        button.removeAttr( 'target' );
                    }
                });
            });
        }

        {   ////    BUTTON 2

            // Text
            wp.customize( 'header-btn-2-text', function( value ){
                value.bind(function( newval ){
                    var button = jQuery( 'header.tempo-header div.tempo-header-partial .tempo-header-btns-wrapper .tempo-btn.btn-2' );

                    if( button.length )
                        button.html( newval );
                });
            });

            // Description
            wp.customize( 'header-btn-2-description', function( value ){
                value.bind(function( newval ){
                    var button = jQuery( 'header.tempo-header div.tempo-header-partial .tempo-header-btns-wrapper .tempo-btn.btn-2' );

                    if( button.length )
                        button.attr( 'title', newval );
                });
            });

            // Url
            wp.customize( 'header-btn-2-url', function( value ){
                value.bind(function( newval ){
                    var button = jQuery( 'header.tempo-header div.tempo-header-partial .tempo-header-btns-wrapper .tempo-btn.btn-2' );

                    if( button.length )
                        button.attr( 'href', newval );
                });
            });

            // Target
            wp.customize( 'header-btn-2-target', function( value ){
                value.bind(function( newval ){
                    var button = jQuery( 'header.tempo-header div.tempo-header-partial .tempo-header-btns-wrapper .tempo-btn.btn-2' );

                    if( !button.length )
                        return;

                    if( newval ){
                        button.attr( 'target', "_blank" );
                    }

                    else{
                        button.removeAttr( 'target' );
                    }
                });
            });
        }
    }

})(jQuery);
