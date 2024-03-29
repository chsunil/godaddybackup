<?php
/*
* Template Name: Page Wide
* Description:Page wide without sidebar
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
                <?php get_template_part( 'loop/menu'); ?>
                <!--HEADER END-->
            </div><!--/home end-->
            <!--HOME END-->
            
		<?php } ?> 
        
        <div class="content blog-wrapper">  
            <div class="container-fluid clearfix">
                 <div class="row clearfix">
                    <div class="col-md-12 blog-content">
                    
                        <!--BLOG POST START-->
                        <?php while (have_posts()) : the_post(); ?>
                        
                        <article id="post-<?php  the_ID(); ?>" <?php  post_class('clearfix blog-post'); ?>>
                            
                                 <?php  the_post_thumbnail(); ?> 
                                 
                                  <div class="blogtitle-box clearfix <?php if ( !has_post_thumbnail() ) {  echo "boxtitle-wide";} ?>">
                                       <h1 class="blog-title"><?php the_title(); ?></h1>
                                         
                                       <ul class="post-detail">
                                          <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date(); ?> </li>
                                        </ul>
                                        
                                  </div><!--/.blogtitle-box--> 
                                  
                                  <div class="spacing30 clearfix"></div>
                                  <?php the_content(); ?>
                                  <div class="spacing40 clearfix"></div>
                                 
                             <div class="post-pager clearfix">
                                <?php wp_link_pages(); ?>
                             </div>
                             <div class="border-post clearfix"></div>
                             <div class="clearboth spacing40"></div>
                             
                        </article><!--/.blog-post-->
                        <?php endwhile; ?>
                        <!--BLOG POST END-->
                        <?php if ( comments_open() ) { ?>
                           <div id="comments" class="comments clearfix"><?php comments_template(); ?></div>
                        <?php } ?>
                        
                        <div class="spacing40 clearfix"></div>
                    </div><!--/.col-md-8-->
                    
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