<?php
/*
* Header Menu Loop
*/
?>
    
        <!--HEADER START-->
        <nav class="header clean-header not-custom-menu clearfix 
		<?php if ( is_singular() && function_exists( 'ot_get_option' ) && get_post_meta($post->ID, 'menu_format', true)!= 'head_standard'){ echo 'white-header';} 
		else { echo 'custom-absolute-menu';} ?>">
            <div class="nav-box">
                <div class="for-sticky">
                     <div class="container-fluid">
                        
                        <div class="logo-clean">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php if ( is_singular() && function_exists( 'ot_get_option' ) && get_post_meta($post->ID, 'menu_format', true)!= 'head_standard'){ ?>
                                <img alt="<?php esc_attr_e ('Logo','derwati'); ?>" class="logo1" src="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'logo_black' ) ) 
								{ echo esc_url ( ot_get_option( 'logo_black' )); } else { echo get_template_directory_uri(); ?>/images/logo-white.png <?php } ?>">
                                <?php } else { ?>
                                <img alt="<?php esc_attr_e ('Logo','derwati'); ?>" class="logo1" src="<?php if ( is_singular() && function_exists( 'ot_get_option' )&& ot_get_option( 'logo_img' ) ) 
								{ echo esc_url ( ot_get_option( 'logo_img' )); } else { echo get_template_directory_uri(); ?>/images/logo.png <?php } ?>">
								<?php  } ?>    
                            </a>
                        </div><!--/.logo-clean-->
                        
                        <div class="box-header hidden-xs hidden-sm">
                            <div class="menu-box">
                                <?php wp_nav_menu( array( 'items_wrap' => '<ul id="%1$s" class="home-nav navigation %2$s">%3$s</ul>', 'theme_location' => 'ridianur-homepage-menu' ) ); ?>
                            </div><!--/.menu-box-->
                        
                            <ul class="header-icon hidden-sm hidden-xs">
                                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'fb_head')) :  ?>
                                    <li><a href="<?php  echo esc_url( ot_get_option( 'fb_head' )); ?>"><i class="fa fa-facebook"></i></a></li>
                                <?php endif ; endif; ?>
                                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'gp_head')) :  ?>
                                    <li><a href="<?php  echo esc_url(ot_get_option( 'gp_head' )); ?>"><i class="fa fa-google-plus"></i></a></li>
                                <?php endif ; endif; ?>
                                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'twit_head')) :  ?>
                                    <li><a href="<?php  echo esc_url(ot_get_option( 'twit_head') ); ?>"><i class="fa fa-twitter"></i></a></li>
                                <?php endif ; endif; ?>
                                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'insta_head')) :  ?>
                                    <li><a href="<?php  echo esc_url(ot_get_option( 'insta_head') ); ?>"><i class="fa fa-instagram"></i></a></li>
                                <?php endif ; endif; ?>
                                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'pint_head')) :  ?>
                                    <li><a href="<?php  echo esc_url(ot_get_option( 'pint_head' )); ?>"><i class="fa fa-pinterest"></i></a></li>
                                <?php endif ; endif; ?>
                                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'xing_head')) :  ?>
                                    <li><a href="<?php  echo esc_url(ot_get_option( 'xing_head') ); ?>"><i class="fa fa-xing"></i></a></li>
                                <?php endif ; endif; ?>
                                <!--ANOTHER SOCIAL ICON LIST-->
                                <?php
                                    if  ( function_exists( 'ot_get_option' )){
                                     /* get the icon list */
                                     $derwati_hsocials = ot_get_option( 'head_as_icon', array() );
                                     
                                     if ( ! empty( $derwati_hsocials ) ) {
                                         foreach( $derwati_hsocials as $derwati_hsocial ) {
                                             echo '
                                             <li><a href="' . esc_url( $derwati_hsocial['head_as_link']) . '"><i class="fa ' . esc_attr( $derwati_hsocial['head_soc_icon']) . '"></i></a></li>
                                            ';
                                         }
                                     }
                                    }				
                                ?>
                                <!--ANOTHER SOCIAL ICON LIST END-->
                            </ul><!--/.team-icon-->
                        </div><!--/.box-header-->   
                        <div class="box-mobile hidden-lg hidden-md">
                            <div class="mobile-menu-container"> 
                            </div>
                        </div><!--/.box-mobile-->
                        
                       
                        
                        
                        
                    </div><!--/.container-fluid-->	
                </div><!--/.for-sticky-->
            </div><!--/.nav-box-->
        </nav><!--/.header-->
        <!--HEADER END-->