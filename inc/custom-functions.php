<?php 

// Change Custom Logo Class

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'navbar-brand', $html );
    $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );

    return $html;
}