<?php
namespace DerwatiPlugin\Widgets;

use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


		
/**
 * @since 1.1.0
 */
class Derwati_TextIconHover extends Widget_Base {

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
		return 'derwati-texticon-hover';
	}

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
		return __( 'Derwati Text Icon in Hover','derwati_plg' );
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
		return 'fa fa-hourglass';
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
		return [ 'derwati-elements' ];
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
				'label' => __( 'Settings','derwati_plg' ),
			]
		);
		
		
	
		

		$this->add_control(
			'icon',
			[
				'label' => __( 'Icon','derwati_plg' ),
				'type' => Controls_Manager::ICON,
				'label_block' => true,
				'default' => 'fa fa-bell',
			]
		);
		
		
		
		$this->add_control(
			'title',
			[
				'label' => __( 'Title','derwati_plg' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => 'Title Text Icon Here',
			]
		);
		
		
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'title_settings',
			[
				'label' => __( 'Title Setting','derwati_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'title_typography',
				'label'     => __( 'Typography', 'derwati_plg' ),
				'selector'  => '{{WRAPPER}} .icon-cell-sub',
			]
		);
		
		$this->add_control(
			'title_color',
			[
				'label' => __( 'Color','derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .icon-cell-sub' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->end_controls_section();
		

	
		
		$this->start_controls_section(
			'icon_settings',
			[
				'label' => __( 'Icon Setting','derwati_plg' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_responsive_control(
			'icon_size',
			[
				'label' => __( 'Size','derwati_plg' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 6,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .icon-cell' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		
		
		
		
		
		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Color','derwati_plg' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .icon-cell' => 'color: {{VALUE}};',
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
		$this->add_inline_editing_attributes( 'title' , 'basic');
		$this->add_render_attribute( 'title','class','icon-cell-sub' );
		?>
		
        
        <div class="box-padding">
            <i class="icon-cell fa <?php echo esc_attr( $settings['icon']); ?>"></i>
            <div class="spacing20 clearboth"></div>
            <p <?php echo $this->get_render_attribute_string( 'title' ); ?>><?php echo $settings['title']; ?></p>
        </div><!--/.box-padding-->
                    
		
		
		
	<?php }

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


