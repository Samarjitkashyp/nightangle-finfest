<?php
/**
 * Theme Functions
 * @package NightIngaleFinvest
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define theme version constant
define( 'NIGHT_INGLE_FINFEST_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

// === Include Core Theme Files ===

// Theme Setup
require_once get_template_directory() . '/inc/theme-setup.php';

// Enqueue Scripts and Styles
require_once get_template_directory() . '/inc/enqueue.php';

// Custom Mobile Menu
require_once get_template_directory() . '/inc/custom-mobile-menu.php';

// Bootstrap 5 Nav Walker
// require_once get_template_directory() . '/inc/bootstrap_5_wp_nav_menu_walker.php';
require_once get_template_directory() . '/inc/class-bootstrap-5-navwalker.php';


// === Register Additional Theme Features as Needed ===

// Widgets
// require_once get_template_directory() . '/inc/widgets.php';

// Custom Post Types (e.g., Rooms, Testimonials)
// require_once get_template_directory() . '/inc/custom-post-types.php';

// Booking Functions / Shortcodes
// require_once get_template_directory() . '/inc/booking-functions.php';

// ACF Fields (if using Advanced Custom Fields)
// require_once get_template_directory() . '/inc/acf-fields.php';

// Admin Customizations
// require_once get_template_directory() . '/inc/admin.php';

// require_once get_template_directory() . '/parts/single-rooms.php';
// require_once get_template_directory() . '/parts/archive-rooms.php';


// Use templates from parts/ folder for Rooms CPT
// function load_custom_room_templates( $template ) {
//     if ( is_singular('rooms') ) {
//         $custom_template = locate_template('parts/single-rooms.php');
//         if ( $custom_template ) {
//             return $custom_template;
//         }
//     }

//     if ( is_post_type_archive('rooms') ) {
//         $custom_template = locate_template('parts/archive-rooms.php');
//         if ( $custom_template ) {
//             return $custom_template;
//         }
//     }

//     return $template;
// }
// add_filter( 'template_include', 'load_custom_room_templates' );

