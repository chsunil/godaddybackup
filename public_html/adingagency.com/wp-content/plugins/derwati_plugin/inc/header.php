<?php
// Registers the new post type 

function derwati_header_post_type() {
	register_post_type( 'header',
		array(
			'labels' => array(
				'name' => __( 'Custom Header', 'derwati_plg' ),
				'singular_name' => __( 'Custom Header' , 'cordon_plg'),
				'add_new' => __( 'Add New Custom Header', 'derwati_plg' ),
				'add_new_item' => __( 'Add New Custom Header', 'derwati_plg' ),
				'edit_item' => __( 'Edit Custom Header', 'derwati_plg' ),
				'new_item' => __( 'Add New Custom Header', 'derwati_plg' ),
				'view_item' => __( 'View Custom Header', 'derwati_plg' ),
				'search_items' => __( 'Search Custom Header', 'derwati_plg' ),
				'not_found' => __( 'No Custom Header found', 'derwati_plg' ),
				'not_found_in_trash' => __( 'No Custom Header found in trash', 'derwati_plg' )
			),
			'public' => true,
			'supports' => array( 'title'),
			'capability_type' => 'post',
			'rewrite' => array("slug" => "header"), // Permalinks format
			'menu_position' => 5,
			'menu_icon'           => 'dashicons-menu',
			'exclude_from_search' => true 
		)
	);

}

add_action( 'init', 'derwati_header_post_type' );


add_action( 'admin_init', 'derwati_header_mb' );
function derwati_header_mb() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $derwati_header_mb = array(
    'id'          => 'header_meta_box',
    'title'       => esc_html__( 'Notes:', 'derwati_plg' ),
    'desc'        => '',
    'pages'       => array( 'header' ),
    'context'     => 'normal',
    'priority'    => 'high',
	'fields'      => array(
	  array(
        'id'          => 'header_setting_block',
        'label'       => '',
        'desc'        => esc_html__('You can build your custom header with elementor and use it in any page using the page settings. <br/>
		Make sure you have checklist the Custom Header in Elementor Settings -> Post Type', 'derwati_plg' ),
        'std'         => '',
        'type'        => 'textblock-titled',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
	 array(
        'label'       => esc_html__( 'Header Position', 'derwati_plg' ),
		'desc'          =>  esc_html__( 'Choose the Header Position', 'derwati_plg' ),
        'id'          => 'head_position',
        'type'        => 'select',
		'std'		 => 'default',
		'choices'     => array( 
			  array(
                'value'       => 'default',
                'label'       => esc_html__( 'Relative Header', 'derwati_plg' )
              ),
			  array(
                'value'       => 'custom-absolute-menu',
                'label'       => esc_html__( 'Absolute Header', 'derwati_plg' )
              ),
			  array(
                'value'       => 'custom-fixed-menu',
                'label'       => esc_html__( 'Fixed Header', 'derwati_plg' )
              ),
			  array(
                'value'       => 'custom-sticky-menu',
                'label'       => esc_html__( 'Sticky Header', 'derwati_plg' )
              ),
			  array(
                'value'       => 'custom-sticky-menu custom-absolute-menu',
                'label'       => esc_html__( 'Absolute then Sticky(on scroll) Header', 'derwati_plg' )
              ),
			  
		)
      ),
	  
	  array(
        'label'       => esc_html__( 'Use Dark Background Page', 'derwati_plg' ),
		'desc'          =>  esc_html__( 'Only for preview/editor purpose only. <br/>For better preview in header element white/bright color with opacity.', 'derwati_plg' ),
        'id'          => 'dark_bg',
        'type'        => 'select',
		'std'		 => 'default',
		'choices'     => array( 
			  array(
                'value'       => 'default',
                'label'       => esc_html__( 'Use Default Background', 'derwati_plg' )
              ),
			  array(
                'value'       => 'dark-page',
                'label'       => esc_html__( 'Use Dark Background', 'derwati_plg' )
              ),
			  
		)
      ),
	  
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $derwati_header_mb );

}


add_filter( 'body_class','my_body_classes' );

function my_body_classes( $classes ) {
 	if ( is_singular('header') ) {
	global $post;
    $classes[] = get_post_meta($post->ID, 'dark_bg', true);  
    }  
    return $classes;

}




