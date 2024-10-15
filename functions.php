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

//high quality thumb
add_filter('jpeg_quality', function($arg){return 100;});

//[portvimeo video=""]
// function that runs when shortcode is called
function fcn_portvimeo( $atts, $content = null ) {
	$video = shortcode_atts( array(
		'video' => '#######',
	), $atts );
// Things that you want to do.

$vidcode = $atts['video'];
$open = '<div class="port-vimeo">
	<iframe src="https://player.vimeo.com/video/';
$close = '?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;maxwidth=1000&amp;maxheight=700" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"></iframe>
</div>
<script src="https://player.vimeo.com/api/player.js"></script>';
// Output needs to be return
return $open.$vidcode.$close;
}
// register shortcode
add_shortcode('portvimeo', 'fcn_portvimeo');

//Remove Dashboard Widgets
//$wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']
//$wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']
//$wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']
//$wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']
//$wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']
?>
