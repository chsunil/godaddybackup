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
        
			<div class="clearfix content page-content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 news-list aligncenter">
							<h2 class="error-title"><?php esc_html_e('404', 'derwati'); ?></h2>
							<p class="error-text"><?php esc_html_e('Oops..!!! Page not found!','derwati') ?></p>
                            <div class="spacing40 clearboth"></div>
							<a class="content-btn" href="<?php echo esc_url ( home_url('/') ); ?>">
								<?php echo esc_html__('Go Back Now!','derwati') ?>
                            </a>
						</div><!--/.col-md-8-->
						
					 </div><!--/.row-->
				</div><!--/.container-->
			</div><!--/.content-->
    
    
	<?php //custom footer
        if ( function_exists( 'ot_get_option' ) ) { 
			do_action('derwati-custom-footer','derwati_footer_start') ;
        } else {
			//Fall back if no optiontree installed
			get_template_part( 'loop/bottom','footer'); 
		}
        
get_footer(); ?>