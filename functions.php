<?php
/**
 * Blanka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sahjanand
 */

if ( ! function_exists( 'firsttheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function firsttheme_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'firsttheme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
	}
endif;
add_action( 'after_setup_theme', 'firsttheme_setup' );


function firsttheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'firsttheme' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'firsttheme' ),
		'before_widget' => '<demo>',
		'after_widget'  => '</demo>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'firsttheme_widgets_init' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function create_post_type_Feature() {
 // set up labels
 $labels = array(
    'name' => 'feature',
    'singular_name' => 'Feature',
    'add_new' => 'Add New Feature',
    'add_new_item' => 'Add New Feature',
    'edit_item' => 'Edit Feature',
    'new_item' => 'New Feature',
    'all_items' => 'All Feature',
    'view_item' => 'View Feature',
    'search_items' => 'Search feature',
    'not_found' =>  'No feature Found',
    'not_found_in_trash' => 'No feature found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Feature',

    );
    //register post type
 register_post_type( 'Feature', array(
   'labels' => $labels,
   'public' => true,
   'has_archive' => true,
   'menu_icon' => 'dashicons-portfolio',
   'supports' => array( 'title','editor','page-attributes','thumbnail' ),
   'exclude_from_search' => false,
   'capability_type' => 'post',
   'rewrite' => array( 'slug' => 'features' ),
   'taxonomies'  => array( 'category','post_tag' ),
  )
 );
}
add_action( 'init', 'create_post_type_Feature' ); 
