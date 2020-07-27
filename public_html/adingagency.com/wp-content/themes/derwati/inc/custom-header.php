<?php 

//function custom header by global settings
function derwati_custom_header_global () {

	global $post ;		
	$header_id =  ot_get_option( 'header_set_list' ); 

	$derwati_header = new WP_Query(array(
		'posts_per_page'   => -1,
		'post_type' =>  'header',
		 'p'         => $header_id,
	)); 
	
	if ($derwati_header->have_posts()) : while  ($derwati_header->have_posts()) : $derwati_header->the_post();$header_id; ?>
	
		<nav class="derwati-custom-header clearfix <?php echo esc_attr ( get_post_meta($post->ID, 'head_position', true))?>">
			<?php the_content(); ?>
		</nav>
	
	<?php endwhile; endif; wp_reset_postdata();
}

//function custom header by page settings
function derwati_custom_header_page () {
	global $post ;
	$header_id =  get_post_meta($post->ID, 'header_list', true); 

	$derwati_header = new WP_Query(array(
		'posts_per_page'   => 1,
		'post_type' =>  'header',
		 'p'         => $header_id,
	)); 
	
	if ($derwati_header->have_posts()) : while  ($derwati_header->have_posts()) : $derwati_header->the_post();?>
	
		<nav class="derwati-custom-header clearfix <?php echo esc_attr ( get_post_meta($post->ID, 'head_position', true))?>">
			<?php the_content(); ?>
		</nav>
	
	<?php endwhile; endif; wp_reset_postdata();
}


//function for output custom header
function derwati_header_start () {
	if ( is_singular()) { //if single page/post
		global $post;
		if (get_post_meta($post->ID, 'custom_header_choice', true) =='custom_header' && get_post_meta($post->ID, 'header_list', true)) { 
		
				//if page setting choose header custom
				do_action('derwati-header-page','derwati_custom_header_page') ;  
				
			 } 
			 
			 //if page setting choose header global
			 else if (get_post_meta($post->ID, 'custom_header_choice', true) =='global'){ 
			    //if custom header & list are selected in theme options
			 	if (ot_get_option( 'header_set' ) =='custom' && ot_get_option( 'header_set_list' ) !='' ) {
					
					do_action('derwati-header-global','derwati_custom_header_global') ; 
					
				} else {
					get_template_part( 'loop/menu','normal');
				}
			 
             }
			 
			 //if page setting choose no header 
			 else if (get_post_meta($post->ID, 'custom_header_choice', true) =='no_header'){
				 //display nothing		 
			 }
			 
			 //if page setting choose header standard
			 else { ?>
			 		
                  <!--HEADER START-->
                  <?php get_template_part( 'loop/menu'); ?>
                  <!--HEADER END-->
                      
            <?php }
			
	} else { //if not single page/post

			//if custom header & list are selected in theme options
			if (ot_get_option( 'header_set' ) =='custom' && ot_get_option( 'header_set_list' ) !='' ) {
				
				do_action('derwati-header-global','derwati_custom_header_global') ;  
				
			} else { //if not use normal menu
				get_template_part( 'loop/menu','normal');
			}
	}
}



