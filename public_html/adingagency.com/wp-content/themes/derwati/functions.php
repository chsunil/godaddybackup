<?php

		add_action( 'after_setup_theme', 'derwati_theme_setup' );
		function derwati_theme_setup() {
			/* Add filters, actions, and theme-supported features. */
			
			//THEME SUPORT FUNCTION
			//add thumbnail
			add_theme_support( 'post-thumbnails' );
			//custom background
			add_theme_support( 'custom-background' );
			add_theme_support( 'title-tag' );

			//automatic feed
			add_theme_support( 'automatic-feed-links' );
			//add menu homepage,portfolio and blog
			add_action( 'init', 'derwati_register_menu' );
			// Retrieve the directory for the localization files
			$lang_dir = ( get_template_directory() . '/lang');
			 
			// Set the theme's text domain using the unique identifier from above
			load_theme_textdomain('derwati', $lang_dir);
			
			//width content
			if ( ! isset( $content_width ) )$content_width = 1170;
			
			//theme default script and styles
			add_action('wp_enqueue_scripts', 'derwati_theme_scripts');
			add_action('wp_enqueue_scripts', 'derwati_theme_styles');
			
			//register sidebar
			add_action( 'widgets_init', 'derwati_sidebar' );
			
			
			
			
			
			//CUSTOM FILTER
			//custom search setting
			add_filter( 'get_search_form', 'derwati_search_form' );
			//custom excerpt
			add_filter( 'excerpt_length', 'derwati_excerpt_length', 10 );
			//remove [..] in excerpt
			add_filter('get_the_excerpt', 'derwati_trim_excerpt');
			//custom comment styles
			add_filter('comment_form_default_fields','derwati_modify_comment_form_fields');
			//tag cloud filter
			add_filter('wp_generate_tag_cloud', 'derwati_tag_cloud',10,1);
			//preloader script and styles
			add_action( 'wp_enqueue_scripts', 'derwati_preloader_set' );
			add_action( 'wp_enqueue_scripts', 'derwati_preloader' );
			
			//Add "title=" to previous_post_link and next_post_link
	
			add_filter('next_post_link', function($link) {
			  $next_post = get_next_post();
			  $title = esc_attr( $next_post->post_title);
			  $link = str_replace('href=', 'title="'.$title.'" href=', $link);
			  return $link;
			});
			
			add_filter('previous_post_link', function($link) {
			  $previous_post = get_previous_post();
			  $title = esc_attr($previous_post->post_title);
			  $link = str_replace('href=', 'title="'.$title.'" href=', $link);
			  return $link;
			});
			
			//color_schecmes script
			add_action( 'wp_enqueue_scripts', 'derwati_color_scheme',99 );

			
			//custom header
			add_action('derwati-custom-header','derwati_header_start') ;
			add_action('derwati-header-page','derwati_custom_header_page') ;
			add_action('derwati-header-global','derwati_custom_header_global') ;
			
			//custom footer
			add_action('derwati-custom-footer','derwati_footer_start') ;
			
			//add image size
			add_image_size( 'derwati-related-post', 500, 300, array( 'center', 'center' ) );
			
			//add custom css in editor
			add_action( 'admin_init', 'derwati_add_editor_styles' );
			
			//comment reply
			add_action(  'wp_enqueue_scripts', 'derwati_enqueue_comments_reply' );
			
			//color_schecmes script
			add_action( 'wp_enqueue_scripts', 'derwati_color_scheme' );
			
			
	
	}
	
   
	
	//tag cloud filter
	function derwati_tag_cloud($input){
	   return preg_replace('/ style=("|\')(.*?)("|\')/','',$input);
	}
	
	//add menu for all page
	function derwati_register_menu() {
		register_nav_menu('ridianur-homepage-menu',esc_html__( 'Menu that display in All page','derwati' ));
	}
	
	//custom excerpt function
	function derwati_excerpt_length( $length ) {
		return 60;
	}
	// Remove [...]
	function derwati_trim_excerpt($text) {
		$text = str_replace('[', '', $text);
		$text = str_replace(']', '', $text);
		return $text;
	}
	//adding sidebar widget
	function derwati_sidebar() {
		register_sidebar(array(
		'name' => esc_html__('Default Sidebar', 'derwati' ),
		'id' => 'default-sidebar',
		'description' => esc_html__('Appears as the sidebar on blog and pages', 'derwati' ),
		'before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3> <div class="widget-border"></div>',));
	}

	
	/* Replacing the default WordPress search form with an HTML5 version */
	function derwati_search_form( $form ) {
		$form = '<form role="search" method="get" class="searchform" action="' . home_url( '/' ) . '" > 
		<input type="search" placeholder="'.esc_attr__('Search and hit enter...','derwati').'" value="' . get_search_query() . '" name="s" class="search-input-form" />
		<input type="submit" class="searchsubmit" />
		</form>';
		return $form;
	}
	//custom comment form
	function derwati_modify_comment_form_fields($fields){
		$req = get_option('require_name_email');
		$commenter = wp_get_current_commenter();
		$aria_req = ( $req ? " aria-required='true'" : '' ); 
		
		$fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . esc_html__( 'Name', 'derwati' ) . '</label> ' . 
		
		( $req ? '' : '' ) .
						
		'<input id="author" name="author" type="text" placeholder="'. esc_attr__('Your Name ...','derwati').'" value="' . 
						
		esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';
						
		$fields['email'] = '<p class="comment-form-email"><label for="email">' . esc_html__( 'Email', 'derwati' ) . '</label> ' .
		
		( $req ? '' : '' ) .
		
		'<input id="email" name="email" type="text" placeholder="'. esc_attr__('Your Email ...','derwati') .'"  value="' . 
		
		esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';
		
		$fields['url'] = '<p class="comment-form-url"><label for="url">' . esc_html__( 'Website', 'derwati' ) . '</label>' .
		
		'<input id="url" name="url" type="text" placeholder="'. esc_attr__('Your Website ...','derwati').'" value="' . 
		
		esc_url( $commenter['comment_author_url'] ) . '" size="30" /></p>';
		
		return $fields;
	}

	
	//comment reply script
	function derwati_enqueue_comments_reply() {
		 if ( is_single() ) { wp_enqueue_script( "comment-reply" ); }
	}
	
	/**
	 * Registers an editor stylesheet for the theme.
	 */
	function derwati_add_editor_styles() {
		add_editor_style( 'custom-editor-style.css' );
	}

	
	//THEME SCRIPTS & STYLES
	// include theme-script
	include( get_template_directory().'/inc/theme-style.php' );
	include( get_template_directory().'/inc/theme-script.php');
	//included preloader setting
	include( get_template_directory().'/inc/preloader.php');
	//include color schemes 
	include( get_template_directory().'/inc/color-schemes.php');
	//include comment template
	include( get_template_directory().'/inc/comment-template.php');
	//include custom header
	include( get_template_directory().'/inc/custom-header.php');
	//include custom footer
	include( get_template_directory().'/inc/custom-footer.php');
	//include related post
	include( get_template_directory().'/inc/related-post.php');

	//pagination
	include( get_template_directory().'/inc/pagination.php');
	//include TGM activation
	include( get_template_directory().'/inc/plugin-install.php');
	



