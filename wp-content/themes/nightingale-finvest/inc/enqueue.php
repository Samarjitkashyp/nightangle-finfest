<?php
/**
 * Enqueue scripts and styles
 * @package NightIngaleFinvest
 */

 function nightangle_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');

    // === Styles ===
    wp_enqueue_style( 'nightangle-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );
    wp_enqueue_style( 'nightangle-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
    wp_enqueue_style( 'nightangle-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1' );
    wp_enqueue_style( 'nightangle-owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4' );
    wp_enqueue_style( 'nightangle-owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), '2.3.4' );
    wp_enqueue_style( 'nightangle-swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.0.0' );

    // jQuery UI Datepicker Styles
    wp_enqueue_style( 'nightangle-jquery-ui', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), '1.12.1' );

    // Custom CSS (your own styles)
    wp_enqueue_style( 'nightangle-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), $theme_version );

    // Theme base style (style.css)
    wp_enqueue_style( 'nightangle-style', get_stylesheet_uri(), array(), $theme_version );

    // === Scripts ===
    wp_enqueue_script( 'jquery' );

    // Bootstrap JS Bundle (with Popper)
    // wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );


    // Owl Carousel JS
    wp_enqueue_script( 'nightangle-owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true );

    // Swiper JS
    wp_enqueue_script( 'nightangle-swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.0.0', true );

    // jQuery UI for Datepicker
    wp_enqueue_script( 'nightangle-jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', array('jquery'), '1.12.1', true );

    // Custom JS (your custom logic)
    wp_enqueue_script( 'nightangle-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'nightangle_enqueue_assets' );
