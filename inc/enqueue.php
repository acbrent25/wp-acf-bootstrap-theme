<?php 
/**
 * Enqueue scripts and styles.
 */
function ac_scripts() {
   
   /* Register Styles */
   wp_enqueue_style('boostrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3');
   wp_enqueue_style('fontawesome-style', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), '4.1.3');

   
   /* Enqueue Styles */
   wp_enqueue_style('bootstrap-style');
   wp_enqueue_style('fontawesome-style');
   wp_enqueue_style( 'ac-style', get_stylesheet_uri() );


   /* Register scripts */
   wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true);
   wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.4', true);
   wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.js', array(), '20151215', true );
   
   /* Enqueue Scripts */
	wp_enqueue_script( 'ac-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '3.0.6', true );
   wp_enqueue_script( 'ac-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
   
   wp_enqueue_script('jquery');
   wp_enqueue_script('popper-js');
   wp_enqueue_script('bootstrap-js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ac_scripts' );
