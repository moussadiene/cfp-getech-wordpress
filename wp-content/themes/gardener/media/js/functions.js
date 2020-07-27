/* PARALLAX */
;(function($){
    $.fn.parallax = function () {
        var window_width = $(window).width();
        // Parallax Scripts
        return this.each(function(i) {
            var $this = $(this);
            $this.addClass('wp-custom-header');

            function updateParallax(initial) {
                var container_height;
                if (window_width < 601) {
                    container_height = ($this.height() > 0) ? $this.height() : $this.children("img").height();
                }
                else {
                    container_height = ($this.height() > 0) ? $this.height() : 500;
                }

                var $img = $this.children("img").first();
                var img_height = $img.height();
                var parallax_dist = img_height - container_height;

                var bottom = $this.offset().top + container_height;
                var top = $this.offset().top;
                var scrollTop = $(window).scrollTop();
                var windowHeight = window.innerHeight;
                var windowBottom = scrollTop + windowHeight;
                var percentScrolled = (windowBottom - top) / (container_height + windowHeight);
                var parallax = Math.round((parallax_dist * percentScrolled));

                if (initial) {
                    $img.css('display', 'block');
                }

                if ((bottom > scrollTop) && (top < (scrollTop + windowHeight))) {
                    $img.css('transform', "translate3D(-50%," + parallax + "px, 0)");

                    if( $img.hasClass( 'not-transform' ) ){
                        $img.css( 'transform', 'initial' );
                    }
                }
            }

            //- Wait for image load -//
            $this.children("img").one("load", function() {
                updateParallax(true);
            }).each(function() {
                if(this.complete) $(this).load();
            });

            $(window).scroll(function() {
                window_width = $(window).width();
                updateParallax(false);
            });

            $(window).resize(function() {
                window_width = $(window).width();
                updateParallax(false);
            });
        });
    };
}(jQuery));

(function($){
    jQuery(document).ready(function(){
        tempo_images.loaded( '.wp-custom-header', function(){
            jQuery('.wp-custom-header').parallax();
        });
    });
})(jQuery);

jQuery(function(){

    function gardener_rm_srcset(){
        var product_image = jQuery( '.woocommerce div.product div.images img' );

        if( jQuery( product_image ).length )
            jQuery( product_image ).attr( 'srcset', '' );
    }



    // WooCommerce
    var

    currency            = null,
    price_format        = 'left';

    if( typeof gardener.currency === 'string' )
        currency = gardener.currency;

    if( typeof gardener.price_format === 'string' )
        price_format = gardener.price_format;

    function gardener_price_html( price ){
        var rett = '<span class="woocommerce-Price-currencySymbol">' + currency + '</span>' + parseFloat(price).toFixed(2);

        if( price_format == 'right' )
            rett = parseFloat(price).toFixed(2) + '<span class="woocommerce-Price-currencySymbol">' + currency + '</span>';

        if( price_format == 'left_space' )
            rett = parseFloat(price).toFixed(2) + '&nbsp;<span class="woocommerce-Price-currencySymbol">&nbsp;' + currency + '</span>';

        if( price_format == 'right_space' )
            rett = parseFloat(price).toFixed(2) + '&nbsp;<span class="woocommerce-Price-currencySymbol">' + currency + '</span>';

        return rett;
    };

    function gardener_gros_price( qty, price ){
        var final = price;

        jQuery( 'div.summary.entry-summary div.price-quantity-wrapper a' ).each(function(){
            var

            //el      = jQuery( 'p.price' ),
            next    = jQuery( this  ).next(),
            type    = jQuery( this ).find( 'span.amount-wrapper' ).attr( 'data-type' ),
            amount  = parseFloat( jQuery( this ).find( 'span.amount-wrapper' ).attr( 'data-amount' ) ),
            min     = parseInt( jQuery( this ).attr( 'data-min-qty') ),
            max     = 0;

            if( jQuery( next ).length )
                max = parseInt( jQuery( next ).attr( 'data-min-qty' ) ) - 1;

            if( qty >= min ){
                final = price - amount;

                if( type == 'percentage_discount' )
                    final = price * ( 1 - amount/100 );

                if( type == 'percentage_discount' )
                    final = amount;
            }
        });

        return final;
    };



    if( jQuery( 'div.summary.entry-summary div.price-quantity-wrapper' ).length ){

        var gardener_min_qty = function( min ){
            var

            el          = jQuery( 'div.summary.entry-summary .price' ),

            del_price   = parseFloat( jQuery( 'div.summary.entry-summary div.price-quantity-wrapper' ).attr( 'data-r-price' ) ),
            ins_price   = parseFloat( jQuery( 'div.summary.entry-summary div.price-quantity-wrapper' ).attr( 'data-price' ) );

            if( jQuery( el ).find( 'del' ).length ){
                var

                del = gardener_gros_price( min, del_price ),
                ins = gardener_gros_price( min, ins_price );

                if( del )
                    jQuery( el ).find( 'del span.amount' ).html( gardener_price_html( del ) );

                if( ins )
                    jQuery( el ).find( 'ins span.amount' ).html( gardener_price_html( ins ) );

                if( jQuery( 'div.summary.entry-summary div.price-unit' ).length ){
                    var units = parseInt( jQuery( 'div.summary.entry-summary div.price-unit' ).attr( 'data-units' ) );

                    if( del )
                        jQuery( 'div.summary.entry-summary div.price-unit' ).find( 'del span.amount' ).html( gardener_price_html( del/units ) );

                    if( ins )
                        jQuery( 'div.summary.entry-summary div.price-unit' ).find( 'ins span.amount' ).html( gardener_price_html( ins/units ) );
                }
            }

            else{
                var ins = gardener_gros_price( min, del_price );

                if( ins )
                    jQuery( el ).find( 'span.amount' ).html( gardener_price_html( ins ) );

                if( jQuery( 'div.summary.entry-summary div.price-unit' ).length ){
                    var units = parseInt( jQuery( 'p.price-unit' ).attr( 'data-units' ) );

                    if( ins )
                        jQuery( 'div.summary.entry-summary div.price-unit' ).find( 'ins span.amount' ).html( gardener_price_html( ins/units ) );
                }
            }
        };

        jQuery( 'div.summary.entry-summary div.price-quantity-wrapper a' ).click(function(){
            var min = parseInt( jQuery( this ).attr( 'data-min-qty') );

            jQuery( 'div.summary.entry-summary div.price-quantity-wrapper a' ).removeClass( 'current' );

            if( !jQuery( this ).hasClass( 'current' ) )
                jQuery( this ).addClass( 'current' );

            new gardener_min_qty( min );

            jQuery( 'div.summary.entry-summary form.cart div.quantity input[type="number"]' ).val( min );
        });

        jQuery( 'div.summary.entry-summary form.cart div.quantity input[type="number"]' ).on( 'change', function( e ){
            e.preventDefault();

            var

            min     = parseInt( jQuery( this ).val() ),
            current = null;

            jQuery( 'div.summary.entry-summary div.price-quantity-wrapper a' ).each(function(){
                var m = parseInt( jQuery( this ).attr( 'data-min-qty') );

                if( m <= min )
                    current = jQuery( this );
            });

            if( jQuery( current ).length ){
                jQuery( 'div.summary.entry-summary div.price-quantity-wrapper a' ).removeClass( 'current' );

                if( !jQuery( current ).hasClass( 'current' ) )
                    jQuery( current ).addClass( 'current' );
            }

            new gardener_min_qty( min );
        });
    }

    // Variations
    jQuery( 'div.summary.entry-summary .variations_form' ).each(function(){
        jQuery( this ).on( 'found_variation', function( event, variation ){

			var qty = parseInt( jQuery( 'div.summary.entry-summary form.cart div.quantity input[type="number"]' ).val() );

			if( variation.display_regular_price === variation.display_price ){
                var ins = gardener_gros_price( qty, variation.display_price );

                if( ins )
                    jQuery( 'div.summary.entry-summary .price span.amount' ).html( gardener_price_html( ins ) );

                if( jQuery( 'div.summary.entry-summary div.price-unit' ).length ){
                    var units = parseInt( jQuery( 'div.summary.entry-summary div.price-unit' ).attr( 'data-units' ) );

                    if( ins )
                        jQuery( 'div.summary.entry-summary div.price-unit' ).find( 'ins span.amount' ).html( gardener_price_html( ins/units ) );
                }
            }

            else{
                var

                del = gardener_gros_price( qty, variation.display_regular_price ),
                ins = gardener_gros_price( qty, variation.display_price );

                if( del )
                    jQuery( 'div.summary.entry-summary .price del span.amount' ).html( gardener_price_html( del ) );

                if( ins )
                    jQuery( 'div.summary.entry-summary .price ins span.amount' ).html( gardener_price_html( ins ) );

                if( jQuery( 'div.summary.entry-summary div.price-unit' ).length ){
                    var units = parseInt( jQuery( 'div.summary.entry-summary div.price-unit' ).attr( 'data-units' ) );

                    if( del )
                        jQuery( 'div.summary.entry-summary div.price-unit' ).find( 'del span.amount' ).html( gardener_price_html( del/units ) );

                    if( ins )
                        jQuery( 'div.summary.entry-summary div.price-unit' ).find( 'ins span.amount' ).html( gardener_price_html( ins/units ) );
                }
            }

            if( jQuery( 'div.summary.entry-summary div.price-quantity-wrapper' ).length ){
                jQuery( 'div.summary.entry-summary div.price-quantity-wrapper' ).attr( 'data-price', variation.display_price );
                jQuery( 'div.summary.entry-summary div.price-quantity-wrapper' ).attr( 'data-r-price', variation.display_regular_price );

                jQuery( 'div.summary.entry-summary div.price-quantity-wrapper a' ).each(function(){
                    var

                    qty     = parseInt( jQuery( this ).attr( 'data-min-qty' ) ),
                    price   = gardener_gros_price( qty, variation.display_price );

                    if( price )
                        jQuery( this ).find( 'span.amount' ).html( gardener_price_html( price ) );
                });
            }

            setTimeout(function(){
                gardener_rm_srcset();
            }, 1000 );
        });
    });

    if( jQuery( 'div.summary.entry-summary div.price-quantity-wrapper' ).length ){
        var price = jQuery( 'div.summary.entry-summary div.price' ).clone();
        jQuery( 'div.summary.entry-summary div.woocommerce-variation-add-to-cart' ).prepend( price );
    }

    setTimeout(function(){
        gardener_rm_srcset();
    }, 1000 );
});
