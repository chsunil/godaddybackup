<?php
add_action( 'wp_enqueue_scripts', 'derwati_parent_style',3);
function derwati_parent_style() {
	
  // Register the style for the theme
  wp_enqueue_style
    ('bootstrap', 
    get_template_directory_uri() . '/css/bootstrap.min.css', 
    array(), 
    '1', 
    'all' );
  wp_enqueue_style
    ('fontawesome', 
    get_template_directory_uri() . '/css/font-awesome.min.css', 
    array(), 
    '1', 
    'all' );
  wp_enqueue_style
    ('magnificpopup', 
    get_template_directory_uri() . '/css/magnific-popup.css', 
    array(), 
    '1', 
    'all' );
  wp_enqueue_style
    ('preloader', 
    get_template_directory_uri() . '/css/preloader.css', 
    array(), 
    '1', 
    'all' );
  wp_enqueue_style
    ('animate', 
    get_template_directory_uri() . '/css/animate.css', 
    array(), 
    '1', 
    'all' );
  wp_enqueue_style
    ('magiccss', 
    get_template_directory_uri() . '/css/magic.css', 
    array(), 
    '1', 
    'all' );
   wp_enqueue_style
    ('slick', 
    get_template_directory_uri() . '/css/slick.css', 
    array(), 
    '1', 
    'all' );
  wp_enqueue_style
    ('fatnav', 
    get_template_directory_uri() . '/css/jquery.fatNav.css', 
    array(), 
    '1', 
    'all' );
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
}

function my_display_custom_field( $atts ) {
	$atts = extract( shortcode_atts( array(
		'id' => '',
	), $atts ) );
	if ( ! $id ) return;
	$id   = 'wpex_'. $id; // prefix the id
	$data = get_post_meta( get_the_ID(), $id, true );
	if ( $data ) {
		return '<span class="wpex-custom-field id-'. $id .'">'. $data .'</span>';
	}
}
add_shortcode( 'custom_field', 'my_display_custom_field' );




