<?php
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

//Load Google Font (prevents failure in https)
function mytheme_SPD_fonts() {
  wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic,900,900italic);');
  wp_enqueue_style( 'googleFonts');
}
//add_action('init', 'mytheme_SPD_fonts');

//Remove WP Generator Meta Tag
remove_action('wp_head', 'wp_generator');

//Remove feeds links in header.
function remove_thefeeds() {
 remove_theme_support( 'automatic-feed-links' ); //remove feed links in head
}
add_action( 'after_setup_theme','remove_thefeeds', 100 );

//Create Custom Thumb Sizes
//add_image_size( 'Featured Image', 343, 343, array( 'center', 'center' ) ); //redundant
add_image_size( 'Full Post Width', 1071, 9999, array( 'center', 'top' ) );

//Featured Image Support
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 343, 343, false ); // default Post Thumbnail dimensions

//Register Menu(s)
function register_my_menus() {
  register_nav_menu('primary',__( 'Primary Menu' ));
}
add_action( 'init', 'register_my_menus' );

function nav_menu_classes( $items ) {
    // Find the last menu item and append
    //  custom class before 'menu-item' class
    $pos = strrpos($items, 'class="menu-item', -1);
    $items=substr_replace($items, 'menu-item-last ', $pos+7, 0);

    // Find first menu item and do same thing
    $pos = strpos($items, 'class="menu-item');
    $items=substr_replace($items, 'menu-item-first ', $pos+7, 0);

    return $items;
}
add_filter( 'wp_nav_menu_items', 'nav_menu_classes' );

//Remove Dashboard Widgets
$wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']
//$wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']
//$wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']
//$wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']
//$wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']
?>
