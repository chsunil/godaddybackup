<?php
function derwati_theme_styles()  
{ 
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
    ('slicknav', 
    get_template_directory_uri() . '/css/slicknav.css', 
    array(), 
    '1', 
    'all' );
  wp_enqueue_style
    ('fatnav', 
    get_template_directory_uri() . '/css/jquery.fatNav.css', 
    array(), 
    '1', 
    'all' );
  wp_enqueue_style
    ('derwati-styles', 
    get_stylesheet_directory_uri() . '/style.css', 
    array(), 
    '1', 
    'all' );

}


/*
Register Google Fonts
*/
function derwati_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'derwati' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Poppins:400,400i,600,600i,700,700i,800,800i|Roboto Slab:400,700|Playfair Display:400,400i' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}
/*
Enqueue scripts and styles.
*/
function derwati_fonts_style() {
    wp_enqueue_style( 'derwati-fonts', derwati_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'derwati_fonts_style' );


//for google font  in editor
function derwati_fonts_editor_style() {
    $font_url = add_query_arg( 'family', urlencode( 'Poppins:400,400i,600,600i,700,700i,800,800i|Roboto Slab:400,700|Playfair Display:400,400i' ), "//fonts.googleapis.com/css" );
    add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'derwati_fonts_editor_style' );


/**
* Enqueue editor styles for Gutenberg
*/
 
function derwati_editor_styles() {
    wp_enqueue_style( 'derwati_add_editor_styles', get_template_directory_uri() . '/custom-editor-style.css' );
    wp_enqueue_style( 'derwati-fonts', derwati_fonts_url(), array(), '1.0.0' );
}
add_action( 'enqueue_block_editor_assets', 'derwati_editor_styles' );