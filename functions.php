<?php
/**
 * qualitycheck functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package qualitycheck
 */

if ( ! function_exists( 'qualitycheck_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
 
endif;
 

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 

/**
 * Enqueue scripts and styles.
 */
 
 function cetro_setup() {
 add_theme_support( 'post-thumbnails' );
}
 
add_action( 'after_setup_theme', 'cetro_setup' );


 
 

add_action( 'customize_register', 'lkz_info_extra' );