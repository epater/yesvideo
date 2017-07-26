<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/js/lib/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/js/lib/foundation.min.js', array( 'jquery' ), '6.3.1', true );
    
    // Scroll reveal plugin
    wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/js/lib/scrollreveal.min.js', array( 'jquery' ), '', true );

    // Add lightcase plugin in footer
    wp_enqueue_script('app', get_template_directory_uri() . '/js/lib/lightcase.js', array('jquery'), '', true);

    // Adding app script in footer, initialize libraries and set animation
    wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);