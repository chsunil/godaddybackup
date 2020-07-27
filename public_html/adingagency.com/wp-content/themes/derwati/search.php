<?php

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
            
		<?php } ?>
        
        
    <div class="content blog-wrapper">  
        <div class="container-fluid clearfix">
             <div class="row clearfix">
                <div class="col-md-8 blog-content">
                	<h3 class="search-title"><?php esc_html_e('Search result for ', 'derwati'); the_search_query(); ?>:</h3>
                	<!--BLOG POST START-->
                    <?php if ( have_posts() ) : ?>
                    
					<?php while (have_posts()) : the_post(); get_template_part( 'loop/loop', 'post' ); endwhile  ?>
                    
                    <?php  else: ?>
                    <p><?php esc_html_e('Sorry, no results found, try a different search. ','derwati'); ?></p>
                    
                    <div class="searchform-page">
                    	<?php get_search_form(); ?>
                    </div>
                    
                    <?php endif; ?>
                    <!--BLOG POST END-->
                    
                    <ul class="pagination clearfix">
                        <li><?php  previous_posts_link();  ?></li>
                        <li><?php next_posts_link(); ?> </li>
                    </ul>
                    <div class="spacing40 clearfix"></div>
                </div><!--/.col-md-8-->
                
                <?php get_sidebar(); ?>
             </div><!--/.row-->
        </div><!--/.container-->
	</div><!--/.blog-wrapper-->
	
	<?php //custom footer
        if ( function_exists( 'ot_get_option' ) ) { 
			do_action('derwati-custom-footer','derwati_footer_start') ;
        } else {
			//Fall back if no optiontree installed
			get_template_part( 'loop/bottom','footer'); 
		}
        
get_footer(); ?>