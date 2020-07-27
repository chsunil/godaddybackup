<?php
/*
* Related Post
*/ ?>

					<?php 
						$related = derwati_related_post( get_the_ID(), 3 );
						if( $related->have_posts() ):
						?>
					
					<div id="related_posts" class="clearfix">
						<h4 class="title-related-post">
							<?php  esc_html_e('Related Posts', 'derwati'); ?>
						</h4>
						<div class="row">
							<?php 
						while( $related->have_posts() ):
						$related->the_post();
						?>
							<div class="col-sm-4 col-xs-6"> 
                            	
                                <?php if ( function_exists( 'ot_get_option' ) && (ot_get_option( 'related_image') =='show')) {  ?>
                                <a href="<?php  the_permalink()  ?>" rel="bookmark" title="<?php  the_title(); ?>">
                            		<?php the_post_thumbnail( 'derwati-related-post' );  ?>
								</a> 
                                <?php } ?>
                                 
                                <div class="related-inner clerfix">
                                    <a href="<?php  the_permalink()  ?>" rel="bookmark" title="<?php  the_title(); ?>">
                                        
                                        <p class="related-cat">
											<?php $category = get_the_category(); 
                                            if(isset($category) && isset($category[0])) { echo wp_kses_post ( $category[0]->cat_name );} ?>
                                        </p>
                                        
                                        <h3 class="related-title">
                                            <?php  the_title(); ?>
                                        </h3>
                                        
                                        <?php 
											$rel_main_excerpt = get_the_excerpt();
                                            $rel_excerpt = substr( $rel_main_excerpt , 0, 55); 
											if($rel_excerpt != '') { ?>
                                            
                                            <p class="rel-excerpt">
                                            <?php 
                                             echo wp_kses_post ( $rel_excerpt) ?>...
                                            </p>
                                            
                                        <?php } ?>
                                    </a> 
								</div>
                            </div><!--/.col-sm-4-->
							<?php  endwhile; ?>
						</div><!--/.row--> 
					</div><!--related-post-->
					<?php endif;wp_reset_postdata(); ?>