<?php
namespace DerwatiPlugin\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Box_Shadow;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.1.0
 */
class Derwati_PostSlider extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'derwati-post-slider';
	}
	
	//script depend
	public function get_script_depends() { return [ 'jquery-slick','derwati-blog-slider-script' ]; }
	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Derwati Post Slider', 'derwati_plg' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-slider-push';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'derwati-blog-elements' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
	
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Blog Post Settings', 'derwati_plg' ),
			]
		);
		
		
	
		$this->add_control(
            'blog_post',
            [
                'label' => __( 'Total Blog Post to Show in Slider', 'derwati_plg' ),
                'type' => Controls_Manager::NUMBER,
				'default' => '6',

            ]
        );
		
		$this->add_control(
			'sort_cat',
			[
				'label' => __( 'Sort post by Category', 'derwati_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'no',
				'label_on' => __( 'Yes', 'derwati_plg' ),
				'label_off' => __( 'No', 'derwati_plg' ),
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
			'blog_cat',
			[
				'label'   => __( 'Category', 'derwati_plg' ),
				'type'    => Controls_Manager::SELECT2, 'options' => category_choice(),
				'condition' => [
					'sort_cat' => 'yes',
				],
				'multiple'   => 'true',
			]
		);

		
		
		$this->add_control(
			'slider_speed',
			[
				'label' => __( 'Slider Speed', 'derwati_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5000,
				'frontend_available' => true,
			]
		);
		
		$this->add_control(
			'colors_warning',
					[
						'type' =>  Controls_Manager::RAW_HTML,
						'raw' => __( '<b>Note:</b> Make sure you have the same height/width/ratio for each featured images.<br/>
						You can see the better preview of slider(responsiveness) in the actual page.', 'derwati_plg' ),
						'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
						
					]
		);
		
		$this->add_control(
			'show_desktop',
			[
				'label' => __( 'Slides Show in Desktop', 'derwati_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 4,
				'frontend_available' => true,
			]
		);
		
		$this->add_control(
			'show_tablet',
			[
				'label' => __( 'Slides Show in Tablet', 'derwati_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 2,
				'frontend_available' => true,
			]
		);
		
		$this->add_control(
			'show_mobile',
			[
				'label' => __( 'Slides Show in Mobile', 'derwati_plg' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 1,
				'frontend_available' => true,
			]
		);
		
		$this->add_responsive_control(
			'slider_height',
			[
				'label' => __( 'Slider Height(px)', 'derwati_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' =>10,
						'max' => 2000,
					],
				],
				'default' => [
					'size' => 500,
				],
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .blog-with-box ' => 'height: {{SIZE}}px;',
				],
			]
		);
		
		$this->add_control(
			'show_arrows',
			[
				'label' => __( 'Show Arrows','derwati_plg' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'visible' => __( 'Show','derwati_plg' ),
					'hidden' => __( 'Hide','derwati_plg' ),
				],
				'default' => 'visible',
				'selectors' => [
					'{{WRAPPER}} .slider .slick-arrow' => 'visibility: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'meta_show',
			[
				'label' => __( 'Show Post Meta', 'derwati_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => __( 'Show', 'derwati_plg' ),
				'label_off' => __( 'Hide', 'derwati_plg' ),
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
			'cat_show',
			[
				'label' => __( 'Show Post Category', 'derwati_plg' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => __( 'Show', 'derwati_plg' ),
				'label_off' => __( 'Hide', 'derwati_plg' ),
				'return_value' => 'yes',
			]
		);
		
		
		$this->add_responsive_control(
			'content_align_vertical',
			[
				'label' => __( 'Content(in image) Vertical Alignment','derwati_plg' ),
				'type' => Controls_Manager::SELECT,
				'label_block' => 'true',
				'options' => [
					'top' => __( 'Top','derwati_plg' ),
					'middle' => __( 'Middle','derwati_plg' ),
					'bottom' => __( 'Bottom','derwati_plg' ),
				],
				'default' => 'middle',
				'selectors' => [
					'{{WRAPPER}} .derwati-blog-inner' => 'vertical-align: {{VALUE}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'content-align',
			[
				'label' => __( 'Content(in image) Alignment', 'derwati_plg' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'derwati_plg' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'derwati_plg' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'derwati_plg'),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .derwati-blog-box' => 'text-align: {{VALUE}};',
				],
			]
		);
		
		
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'title_section',
			[
				'label' => __( 'Title Settings', 'derwati_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_responsive_control(
			'title_margin',
			[
				'label' => __( 'Margin', 'derwati_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .blog-post-list .derwati-blog-box h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'title_typo',
				'label'     => __( 'Title Typography', 'derwati_plg' ),
				'selector'  => '{{WRAPPER}} .blog-post-list .derwati-blog-box h3',
			]
		);
		
		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .blog-col-inner .derwati-blog-box h3' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'title_color_hover',
			[
				'label' => __( 'Color on Hover', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .blog-col-inner:hover .derwati-blog-box h3' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'cat_section_setting',
			[
				'label' => __( 'Post Category Settings', 'derwati_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_responsive_control(
			'cat_margin',
			[
				'label' => __( 'Margin', 'derwati_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .box-cat-post' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'cat_padding',
			[
				'label' => __( 'Padding', 'derwati_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .box-cat-post' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'cat_typo',
				'label'     => __( 'Typography', 'derwati_plg' ),
				'selector'  => '{{WRAPPER}} .box-cat-post',
			]
		);
		
		$this->add_control(
			'cat_color',
			[
				'label' => __( 'Color', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .box-cat-post' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'cat_bg',
			[
				'label' => __( 'Background Color', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .box-cat-post' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'meta_section',
			[
				'label' => __( 'Post Meta Settings', 'derwati_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'meta_show' => 'yes',
				],
			]
		);
		
		$this->add_responsive_control(
			'meta_margin',
			[
				'label' => __( 'Margin', 'derwati_plg' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .post-meta-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'meta_typo',
				'label'     => __( 'Typography', 'derwati_plg' ),
				'selector'  => '{{WRAPPER}} .post-meta-box',
			]
		);
		
		$this->add_control(
			'meta_color',
			[
				'label' => __( 'Color', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .post-meta-box' => 'color: {{VALUE}};',
				],
			]
		);
		
		
		
		$this->add_control(
			'meta_icon',
			[
				'label' => __( 'Icon Color', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .post-meta-box .fa' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		
		
		
		
		$this->start_controls_section(
			'mask_section',
			[
				'label' => __( 'Slider Mask Settings', 'derwati_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		
		$this->add_control(
			'mask_color',
			[
				'label' => __( 'Color', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .blogmask' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'mask_color_hover',
			[
				'label' => __( 'Color on Hover', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .blog-col-inner:hover .blogmask' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'sl_arrow',
			[
				'label' => __( 'Slider Arrows Settings', 'derwati_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'show_arrows' => 'visible',
				],
			]
		);
		
		$this->add_control(
			'arrow_color',
			[
				'label' => __( 'Color', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .slider .slick-arrow' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'arrow_color_hover',
			[
				'label' => __( 'Color on Hover', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .slider .slick-arrow:hover' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'arrow_bg_color',
			[
				'label' => __( 'Background Color', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .slider .slick-arrow' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'arrow_bg_color_hover',
			[
				'label' => __( 'Background Color on Hover', 'derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .slider .slick-arrow:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings();

		if ( $settings['sort_cat']  == 'yes' ) {
			$query = new \WP_Query(array(
				'posts_per_page'   => $settings['blog_post'],
				'post_type' => 'post',
				'cat'=> $settings['blog_cat']
					
			)); 
		} else { 
			$query = new \WP_Query(array(
				'posts_per_page'   => $settings['blog_post'],
				'post_type' => 'post'
			)); 	
			
		}
		
		
		
		?>
        			<div class="post-slider slider blog-post-list clearfix" 
                    data-slide="<?php echo esc_attr ( $settings['show_desktop'] )?>" data-slide-tablet="<?php echo esc_attr ( $settings['show_tablet'] )?>"
                    data-slide-mobile="<?php echo esc_attr ( $settings['show_mobile'] )?>"
                    data-slick='{"autoplaySpeed": <?php echo esc_attr ( $settings['slider_speed'] )?>}'>
                        <?php while ($query->have_posts()): $query->the_post(); ?> 
                        <div class="slide">
                        
                        	<div class="blog-col-inner">
                            
                            	<?php if ( has_post_thumbnail() ) { ?>
                                 <a class="blog-link-img blog-with-box blog-imgbg" href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
                                 
                                 <?php } else { ?>
                                 <a class="blog-link-img blog-with-box blog-imgbg" href="<?php the_permalink(); ?>" style="background-image:url(<?php echo DERWATI_URL ?>images/no-image.jpg)"> 
                                 <?php } ?>
                                 <div class="blogmask"></div>
                                     <div class="derwati-blog-box">
                                         <div class="derwati-blog-inner">
                                         
                                         
											<?php if  ($settings['cat_show'] == 'yes') { ?>
                                                  <div class="box-cat-post">
                                                      <?php $cat = ''; foreach( (get_the_category()) as $category ) { $cat .= $category->cat_name . ', '; } echo rtrim($cat, ', '); ?>
                                                  </div>
                                            <?php } ?>
                                            
                                            <h3><?php the_title(); ?></h3>
                                             
                                            
                                            <?php if  ($settings['meta_show'] == 'yes') { ?>
                                            <ul class="post-meta-box">
                                                <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                                                <li><i class="fa fa-clock-o"></i> <?php echo get_the_date();  ?></li>
                                            </ul>
                                            <?php } ?>
                                            
                                            
                                        </div>
                                    </div>
                                
                                </a>
                                
                            </div>   
                        </div>
                        
                        <?php endwhile; wp_reset_postdata();?>
                   </div> 
                   
                   <?php 

	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.1.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		
		
	}
}


