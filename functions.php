<?php

    add_action( 'wp_enqueue_scripts', 'leadership_styles' );
    add_action( 'wp_enqueue_scripts', 'leadership_scripts' );

    function leadership_styles() {
        wp_enqueue_style( 'leadership-style', get_stylesheet_uri() );
        wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css' );
    }
    
    function leadership_scripts() {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
        wp_enqueue_script( 'jquery' );
        // wp_enqueue_script( 'validate-script', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), null, true );
        /* wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/assets/js/wow.min.js' ); */
        wp_enqueue_script( 'leadership-scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );
    }

    add_theme_support( 'custom-logo' );

?>