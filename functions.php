<?php 
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
function load_assets(){
	wp_enqueue_style('style', get_stylesheet_uri());
 
	wp_enqueue_style( 'bootstrapCSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css'); 
	wp_enqueue_style( 'bootstrapCssGrid', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap-grid.min.css');
	wp_enqueue_style( 'animateCSS', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css');
	wp_enqueue_script( 'script', 'https://use.fontawesome.com/releases/v5.2.0/js/all.js');
	wp_enqueue_script( 'scriptJquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script( 'boostrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js'); 
	wp_enqueue_script( 'slickJS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js');
	wp_enqueue_script( 'js404', get_template_directory_uri().'/assets/js/scriptGame404.js'); 
}
add_action('wp_enqueue_scripts', 'load_assets');
register_nav_menus( array( 'primary' => __( 'Primary Menu', 'THEMENAME' ),));
?>
