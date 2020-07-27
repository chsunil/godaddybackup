<?php
/*
Template Name: Blank Page Builder
Template Post Type: page, portfolio,elementor_library 
Description:One Page Builder with container.
*/
get_header(); 
        
		//custom header
		if ( function_exists( 'ot_get_option' ) ) { 
			do_action('derwati-custom-header','derwati_header_start') ;        
        } else { ?>
        
            <!--Fall back if no optiontree installed-->
            <!--HOME START-->
            <div class="default-header clearfix">
                <!--HEADER START-->
                <?php get_template_part( 'loop/menu','normal'); ?>
                <!--HEADER END-->
            </div><!--/home end-->
            <!--HOME END-->
            
		<?php }
		
		
		//page content
        while (have_posts()) : the_post();

            the_content();

		endwhile;

		//custom footer
        if ( function_exists( 'ot_get_option' ) ) { 
			do_action('derwati-custom-footer','derwati_footer_start') ;
        } else {
			//Fall back if no optiontree installed
			get_template_part( 'loop/bottom','footer'); 
		}
        
get_footer(); ?>