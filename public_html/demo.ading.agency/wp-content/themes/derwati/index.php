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
						<?php while (have_posts()) : the_post(); 
							  get_template_part( 'loop/loop', 'post' ); 
							  endwhile ?>
                        
                        <ul class="pagination clearfix">
                            <li><?php  previous_posts_link( esc_html__( 'Previous Page', 'derwati' ) ); ?></li>
                            <li><?php next_posts_link( esc_html__( 'Next Page', 'derwati' ) ); ?> </li>
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