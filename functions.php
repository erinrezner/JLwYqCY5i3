<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


//Set Upload Sizes  //not working??
//@ini_set( 'upload_max_size' , '128M' );
//@ini_set( 'post_max_size', '32M');
//@ini_set( 'max_execution_time', '300' );

//Copyright
function copyright() { ?>
 <meta name="copyright" content="Copyright (c) Chris Rezner. All Rights Reserved." />
<?php }
add_action('wp_head', 'copyright');

//Title
add_theme_support( 'title-tag' );

//Remove WP Generator Meta Tag
remove_action('wp_head', 'wp_generator');

//Remove feeds links in header.
function remove_thefeeds() {
 remove_theme_support( 'automatic-feed-links' ); //remove feed links in head
}
add_action( 'after_setup_theme','remove_thefeeds', 100 );

//Remove Dashboard Widgets
//$wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']
//$wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']
//$wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']
//$wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']
//$wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']
?>