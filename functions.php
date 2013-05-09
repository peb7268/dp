<?php
define('THEME_DIR', get_template_directory_uri());
define('CSS_DIR', THEME_DIR.'/styles');	
define('JS_DIR', THEME_DIR.'/js');	
define('IMG_DIR', THEME_DIR.'/img');
define('VIDEOS_DIR', THEME_DIR.'/videos');
define('SLIDESHOW_DIR', IMG_DIR.'/slideshow');

function initTheme()
{
	add_action('wp_enqueue_scripts', 'setupTheme'); //Ensures page conditionals work
}
function removeDefaults()
{
	remove_filter ('the_content','wpautop');
	remove_filter ('the_excerpt','wpautop');
}
function registerScripts()
{
	wp_register_script('fancybox', JS_DIR.'/fancybox/source/jquery.fancybox.js', array(), false, false);
	wp_register_script('home', JS_DIR.'/home.js', array('fancybox'), false, true);
	wp_register_script('global', JS_DIR.'/global.js', array(), false, true);
	wp_register_script('nivo', JS_DIR.'/nivo-slider/jquery.nivo.slider.pack.js', array(), false, false);
	//wp_register_style( $handle, $src, $deps = array, $ver = false, $media = 'all' )
	wp_register_style('nivo', JS_DIR.'/nivo-slider/nivo-slider.css', array(), false, 'all');
	wp_register_style('fancybox', JS_DIR.'/fancybox/source/jquery.fancybox.css', array(), false, 'all');
}
function enqueueScripts()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('global');

	if(is_page('home') || is_front_page()){
		wp_enqueue_script('home');
		wp_enqueue_script('nivo');
		wp_enqueue_script('fancybox');

		wp_enqueue_style('nivo');
		wp_enqueue_style('fancybox');
	}
}
function setupTheme()
{	
	removeDefaults();
	registerScripts();
	enqueueScripts();
	//registerStickyPosts();

	//Configure Featured Imaged
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 655, 0, false );						//Sets the default size
	
	//Set a $size var equal to default WP sizes for these in your themes
	//Sizes are: "thumbnail", "medium", "large" and "full" ( full being the cropped default size we said )
	add_image_size( 'banner-full-lanscape', 655, 9999, false);		
	add_image_size( 'banner-full-square', 655, 9999, false);
	add_image_size( 'featured-square', 180, 999, false);
}
function custom_excerpt_length( $length ) 
{
	return 20;
}

//Configs
register_nav_menus( array(
	'Primary' => 'Primary Navigation Menu',
	'Footer' => 'Footer Navigation Menu'
) );


//Actions
add_action('wp_loaded', 'initTheme');

//Filters
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
