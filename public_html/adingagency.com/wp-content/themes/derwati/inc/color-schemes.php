<?php 
//color scheme
function derwati_color_scheme() {
	if ( function_exists( 'ot_get_option' ) ) { 
		$general =  ot_get_option( 'color_general' );
        $color_general = "
		.post.sticky .content-btn:hover,.blog-slider .slide-nav:hover,.tagcloud a:hover,.searchform .searchsubmit,.post-detail::after,.content-btn,
		.form-submit #submit,.slide-btn,.line-subtext::before,.port-hov i,.work-content .slide-nav,
		.box-relative .sub-title::before,.portfolio-gallery a i,.wpcf7-submit,.pagination > .active > a, .pagination > .active > span, #wp-calendar caption,
		.pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus,.top-title > span,.teams-btn,
		#wp-calendar td a:hover,.team-social a,.port-hover i,.hero-btn,.abtw-soc a:hover,.sk-cube-grid .sk-cube,
		.home-slider .owl-page.active,.progress-bar-derwati,.slider-btn,.port-filter a::after,.port-filter a.active,.banner-btn::after,.dbox-relative,
		.to-top:hover,.to-top::after,.blog-gallery a i,.spinner > div,#testimonial .fa,.widget-border,.port-filter a::after,.port-filter a::before,
		.to-top::after,.to-top::before,.color-bg ,.wpcf7-submit, .dark-page .wpcf7-submit,.testimonial .fa,.box-with-icon .fa,.left-box-slider .slider-line,.abtw-soc a,
		.sk-folding-cube .sk-cube:before,.img-pagination a:hover .img-pagi .fa,.slider .slick-arrow:hover,.pagi-nav-box:hover .img-pagi
		{background-color:$general;}

		.content-btn:hover,a:hover,.form-submit #submit:hover,.work-content .slide-nav:hover,.wpcf7-submit:hover,.content-title span,.slider-title span,.table-content h3 > span,.box-small-icon > i,
		.blog-slider .slide-nav:hover,.blog-slider .slide-nav,.team-social a:hover,.slide-btn:hover,.hero-btn:hover,.port-filter a,.team-list-two .team-sicon li a,.blog-post-list a:hover h4,
		.personal-color,.slide-nav:hover,.tagcloud a:hover,.slider-btn:hover,.banner-btn,.team-soc a:hover,.content-box-title i,.portfolio-type-two .dbox-relative p,
		.hero-title span,.tagcloud a,.footer a,.blog-post-list a:hover h3,.abtw-soc a:hover,.slider .slick-arrow,.sidebar .widgettitle::before,.related-cat,.sidebar .widget ul li::before
		{color:$general;}
		
		.p-table a ,.content-btn,.blog-slider .slide-nav:hover,.work-content .slide-nav:hover,.slider-btn,.port-filter a:hover,.tagcloud a:hover
		{color:#fff;}
		.abtw-soc a:hover{background-color:#fff;}
		.wpcf7-submit:hover, .dark-page .wpcf7-submit:hover{background:transparent;}

		.blog-slider .slide-nav,.content-btn,.form-submit #submit,.form-submit #submit:hover,.blog-slider .slide-nav:hover,.cell-right-border,.cell-left-border,.wpcf7-submit, 
		.dark-page .wpcf7-submit,
		.work-content .slide-nav,.wpcf7-submit:hover,.wpcf7-submit,.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover,.tagcloud a,.tagcloud a:hover,
		 .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus,.port-filter .active,.port-filter a:hover,.port-filter a,.teams-btn,
		 .hero-btn,.abtw-soc a,.widget-about-us h3::before,.content-title::before,.to-top:hover,.content-btn:hover,.ab-bordering
		{border-color:$general;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_general' )) {           
        wp_add_inline_style( 'derwati-styles', $color_general );
		}
		
		$hovers =  ot_get_option( 'custom_hovers' );
        $custom_hovers = "a:hover{color:$hovers;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'custom_hovers' )) {           
        wp_add_inline_style( 'derwati-styles', $custom_hovers );
		}
		
        $color =  ot_get_option( 'color_scheme' );
        $custom_css = "
		a{color:$color;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_scheme' )) {           
        wp_add_inline_style( 'derwati-styles', $custom_css );
		}
		
		$hovers =  ot_get_option( 'custom_hovers' );
        $custom_hovers = "a:hover{color:$hovers;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'custom_hovers' )) {           
        wp_add_inline_style( 'derwati-styles', $custom_hovers );
		}
		
		$heading =  ot_get_option( 'heading_color' );
        $heading_color = "
		h1, h2, h3, h4, h5, h6{color:$heading;} 
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'heading_color' )) {           
        wp_add_inline_style( 'derwati-styles', $heading_color );
		}
		
		$general =  ot_get_option( 'general_color' );
        $general_color = "
		body{color:$general;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'general_color' )) {           
        wp_add_inline_style( 'derwati-styles', $general_color );
		}
		
		$footer =  ot_get_option( 'footer_color' );
        $footer_color = "
		.footer{background-color:$footer;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'footer_color' )) {           
        wp_add_inline_style( 'derwati-styles', $footer_color );
		}
 

		$menu =  ot_get_option( 'stick_menu' );
        $color_menu = "
		.custom-sticky-menu .is-sticky .for-sticky, .is-sticky .for-sticky{background-color: $menu;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'stick_menu' )) {           
        wp_add_inline_style( 'derwati-styles', $color_menu );
		}
		
		$menu2 =  ot_get_option( 'stick_menu2' );
        $color_menu2 = "
		.white-header .is-sticky .for-sticky{background-color: $menu2;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'stick_menu2' )) {           
        wp_add_inline_style( 'derwati-styles', $color_menu2 );
		}
	}
		 
}

		