<?php 
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
function load_assets(){
	wp_enqueue_style('style', get_stylesheet_uri());
 
	wp_enqueue_style( 'bootstrapCSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'); 
	wp_enqueue_style( 'bootstrapCssGrid', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap-grid.min.css');
	wp_enqueue_script( 'scriptJquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script( 'boostrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'); 
}
add_action('wp_enqueue_scripts', 'load_assets');
register_nav_menus( array( 'primary' => __( 'Primary Menu', 'THEMENAME' ),));
?>
