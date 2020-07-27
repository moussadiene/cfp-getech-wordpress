<?php
    $address1   = tempo_options::get( 'address-1' );
    $address2   = tempo_options::get( 'address-2' );

    $program1   = tempo_options::get( 'program-1' );
    $program2   = tempo_options::get( 'program-2' );

    $address    = tempo_options::get( 'address' );
    $program    = tempo_options::get( 'program' );

    if( apply_filters( 'gardener_header_tools', $address || $program ) ){

        echo '<div class="' . esc_attr( apply_filters( 'gardener_header_tools_class', 'gardener-header-tools' ) ) . '">';
        echo '<div class="gardener-header-tools-wrapper">';

        if( $address ){
            echo '<div class="gardener-address tools-item">';
            echo '<div class="tools-item-wrapper">';
            echo '<i class="tempo-icon-location-2"></i>';
            echo '<span class="info-wrapper">';

            echo '<span class="info-stressed">' . esc_html( $address1 ) . ' </span>';
            echo '<span class="info-unstressed">' . esc_html( $address2 ) . ' </span>';

            echo '</span>';
            echo '</div>';
            echo '</div>';
        }

        if( $program ){
            echo '<div class="gardener-program tools-item">';
            echo '<div class="tools-item-wrapper">';
            echo '<i class="tempo-icon-clock-1"></i>';
            echo '<span class="info-wrapper">';

            echo '<span class="info-stressed">' . esc_html( $program1 ) . ' </span>';
            echo '<span class="info-unstressed">' . esc_html( $program2 ) . ' </span>';

            echo '</span>';
            echo '</div>';
            echo '</div>';
        }

        tempo_get_template_part( 'templates/header/topper/contact' );

        echo '</div>';
        echo '</div>';

    }

    tempo_get_template_part( 'templates/header/topper/woocommerce' );

?>
