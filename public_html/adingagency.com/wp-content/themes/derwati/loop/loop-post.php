<?php
/**
 * Blog Post Loop
 */
?>


						<!--BLOG POST START-->
						
								
						<article id="post-<?php  the_ID(); ?>" <?php  post_class('clearfix blog-post'); ?>>
                        
                        	
							 
							 <!--if post is standard-->
                             <?php  if ( get_post_meta($post->ID, 'post_format', true) == ''){ the_post_thumbnail(); }?>
							 <?php  if ( get_post_meta($post->ID, 'post_format', true) == 'post_standard'){ ?>
								<?php the_post_thumbnail( 'full', array( 'class' => 'full-size-img' ) );?>
								<!--if post is gallery-->
								<?php } else if ( get_post_meta($post->ID, 'post_format', true) == 'post_gallery'){ 
								echo '<div class="blog-gallery clearboth clearfix">';
									$derwati_image_ids = get_post_meta(get_the_ID(), 'post_gallery_setting', true);
									$derwati_image_ids = explode( ',', $derwati_image_ids );
									foreach( $derwati_image_ids as $derwati_image_id ) {
										$derwati_image_title  = get_the_title( $derwati_image_id );
										$derwati_image_port = wp_get_attachment_image( $derwati_image_id, 'full' );
										$derwati_imageurl     =   wp_get_attachment_url( $derwati_image_id ); 
										echo '<div>
												<a class="blog-popup-img" href="' . esc_url( $derwati_imageurl ) . '">
													<span>
													<i class="fa fa-search"></i>
													</span>
													' . $derwati_image_port . '
												</a>
											</div>';
								} echo'</div>';
								
								//if post is slider
								}else if ( get_post_meta($post->ID, 'post_format', true) == 'post_slider'){ ?>
                                
									<div class="blog-slider ani-slider slider" data-slick='{"autoplaySpeed":<?php if ( function_exists( 'ot_get_option' ) && ot_get_option( 'blog_slide_delay' ) !='' )
										{echo esc_attr ( ot_get_option( 'blog_slide_delay' ));} else {echo '8000'; } ?> }'>
                                        
									<?php $derwati_simage_ids = get_post_meta(get_the_ID(), 'post_slider_setting', true);
									$derwati_simage_ids = explode( ',', $derwati_simage_ids );
									foreach( $derwati_simage_ids as $derwati_simage_id ) {
										$derwati_simage_port = wp_get_attachment_image( $derwati_simage_id, 'full' );
										$derwati_simageurl     =  esc_url( wp_get_attachment_url( $derwati_simage_id )); ?>
										<div class="slide">
											<div class="slider-mask" data-animation="slideLeftReturn" data-delay="0.1s"></div>
											<div class="slider-img-bg blog-img-bg" data-animation="fadeIn" data-delay="0.2s" data-animation-duration="0.7s" 
											data-background="<?php echo esc_url($derwati_simageurl); ?>"></div>
											<div class="blog-slider-box">
												<div class="slider-content"></div>
											</div><!--/.blog-slider-box-->
										</div><!--/.slide-->
									<?php }
									echo'</div>'; 

									
								//if post video	
								} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_video'){ 
								echo'<div class="video"><iframe width="560" height="315" 
								src="'.esc_attr( get_post_meta($post->ID, 'post_video_setting', true)).'?wmode=opaque;rel=0;showinfo=0;controls=0;iv_load_policy=3"></iframe></div>';
								
								//if post audio
								} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_audio'){ ?>
								<div class="audio">
								<?php $derwati_audio =get_post_meta($post->ID, 'post_audio_setting', true);
								echo wp_kses( $derwati_audio, array( 
									'iframe' => array(
											'src' => array(),
											'width' => array(),
											'height' => array(),
											'scrolling' => array(),
											'frameborder' => array(),
										),
								) ); ?>
								</div>
								<?php }?>
							 
							 <div class="spacing30 clearfix"></div>
                             <a href="<?php the_permalink(); ?>"><h2 class="blog-title"><?php the_title(); ?></h2></a>
                             
							 <ul class="post-detail">
							 	<?php if(has_category()) { ?> 
							 		<li><i class="fa fa-archive"></i> <?php the_category(', '); ?></li>
								<?php }?>
								
								<?php if(get_the_tag_list()) { ?> 
									<li><i class="fa fa-tags"></i>
										<?php the_tags('', ', '); ?>
									</li>
								<?php }?>
								<li><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?> </li>
							  </ul>
							 
							 <div class="spacing30 clearfix"></div>
							 <?php the_excerpt(); ?>
							 <div class="spacing20 clearfix"></div>
							 <a class="content-btn" href="<?php the_permalink(); ?>">
							 	<?php echo esc_html__ ('Read More','derwati') ?>
                             </a>
                             <div class="spacing60 clearfix"></div>
							 <div class="border-post clearfix"></div>
							 <div class="clearboth spacing30"></div>
						</article><!--/.blog-post-->
                        
						<!--BLOG POST END-->

	

