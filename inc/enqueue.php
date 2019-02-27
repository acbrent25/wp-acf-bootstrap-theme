<?php 
/**
 * Enqueue scripts and styles.
 */
function ac_scripts() {
   
    /* Register Styles */
    wp_register_style('fontawesome-style', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), '4.1.3');
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:200,400', array(), '1.0.0');
    wp_register_style('boostrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3');
    wp_register_style('animate-style', get_template_directory_uri() . '/css/custom.css', array(), '3.7.0');
    wp_register_style('custom-style', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0');

    /* Enqueue Styles */
    
    wp_enqueue_style('fontawesome-style');
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('boostrap-style');
    wp_enqueue_style('animate-style');
    wp_enqueue_style( 'ac-style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom-style');


    /* Register scripts */
    wp_register_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true);
    wp_register_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.4', true);
    wp_register_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.min.js', array(), '20151215', true );
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '1.3.0', true );

   
    /* Enqueue Scripts */
    wp_enqueue_script( 'ac-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '3.0.6', true );
    wp_enqueue_script( 'ac-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
   
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('isotope-js');
    wp_enqueue_script('wow-js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

