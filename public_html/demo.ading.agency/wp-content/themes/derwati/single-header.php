<?php
/*
Single Header
*/
get_header(); ?>
        

        <?php while (have_posts()) : the_post(); ?>
        	
			<div class="derwati-custom-header clearfix">
            <?php the_content(); ?>
            </div>

		<?php endwhile; ?>
        
<?php  get_footer(); ?>