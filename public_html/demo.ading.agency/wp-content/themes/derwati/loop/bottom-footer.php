<?php
/*
* Bottom Footer
*/ ?>

		<footer class="footer">
        
			<div class="container-fluid">
            
                
                <?php if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'foot_img' ) != '') { ?>
            	<img class="footer-img" src="<?php echo esc_url (ot_get_option( 'foot_img' )); ?>"	 alt="<?php esc_attr_e ('Logo','derwati'); ?>">
                <?php }  ?>
                
                
                <ul class="footer-icon">
                    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'fb_foot')) :  ?>
                        <li><a href="<?php  echo esc_url( ot_get_option( 'fb_foot' )); ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php endif ; endif; ?>
                    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'gp_foot')) :  ?>
                        <li><a href="<?php  echo esc_url(ot_get_option( 'gp_foot' )); ?>"><i class="fa fa-google-plus"></i></a></li>
                    <?php endif ; endif; ?>
                    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'twit_foot')) :  ?>
                        <li><a href="<?php  echo esc_url(ot_get_option( 'twit_foot') ); ?>"><i class="fa fa-twitter"></i></a></li>
                    <?php endif ; endif; ?>
                    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'insta_link')) :  ?>
                        <li><a href="<?php  echo esc_url(ot_get_option( 'insta_link') ); ?>"><i class="fa fa-instagram"></i></a></li>
                    <?php endif ; endif; ?>
                    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'pint_foot')) :  ?>
                        <li><a href="<?php  echo esc_url(ot_get_option( 'pint_foot' )); ?>"><i class="fa fa-pinterest"></i></a></li>
                    <?php endif ; endif; ?>
                    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'xing_foot')) :  ?>
                        <li><a href="<?php  echo esc_url(ot_get_option( 'xing_foot') ); ?>"><i class="fa fa-xing"></i></a></li>
                    <?php endif ; endif; ?>
                    <!--ANOTHER SOCIAL ICON LIST-->
                    <?php
                        if  ( function_exists( 'ot_get_option' )){
                         /* get the icon list */
                         $derwati_hsocials = ot_get_option( 'foot_as_icon', array() );
                         
                         if ( ! empty( $derwati_hsocials ) ) {
                             foreach( $derwati_hsocials as $derwati_hsocial ) {
                                 echo '
                                 <li><a href="' . esc_url( $derwati_hsocial['foot_as_link']) . '"><i class="fa ' . esc_attr( $derwati_hsocial['foot_soc_icon']) . '"></i></a></li>
                                ';
                             }
                         }
                        }				
                    ?>
                    <!--ANOTHER SOCIAL ICON LIST END-->
                </ul><!--/.footer-icon-->
                
                <?php 
				if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'fot_text' )) { 
				$derwati_fot_text = ot_get_option( 'fot_text' );
				echo wp_kses_post( $derwati_fot_text);
				echo '<div class="spacing80 clearfix"></div>'; }
				?>
                
                
			</div><!--/.container-fluid-->
		</footer><!--/.footer-->