<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta name="author" content="<?php the_author_meta('display_name', 1); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" >	
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
	<?php wp_head(); ?> 
</head>
	
    <body <?php body_class(); ?>>
	
	
				<!--preloader function-->
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'preloader_set')) :  
                 $derwati_preload = ot_get_option( 'preloader_set' ); if ($derwati_preload == 'show_home') {  ?>
                    
                    <?php  if (is_front_page() ){ ?>
                            <!-- Preloader -->
                            <div id="preloader">
                                <div id="status">
                                    <div class="sk-folding-cube">
                                      <div class="sk-cube1 sk-cube"></div>
                                      <div class="sk-cube2 sk-cube"></div>
                                      <div class="sk-cube4 sk-cube"></div>
                                      <div class="sk-cube3 sk-cube"></div>
                                    </div>
                                </div><!--status-->
                            </div><!--/preloader-->
                    
                    <?php } 
                } else if ($derwati_preload == 'show_all') {?>
                
                       	<!-- Preloader -->
                        <div id="preloader">
                            <div id="status">
                                <div class="sk-folding-cube">
                                    <div class="sk-cube1 sk-cube"></div>
                                    <div class="sk-cube2 sk-cube"></div>
                                    <div class="sk-cube4 sk-cube"></div>
                                    <div class="sk-cube3 sk-cube"></div>
                                 </div>
                            </div><!--status-->
                        </div><!--/preloader-->
                
                <?php  } endif ; endif; ?>
				