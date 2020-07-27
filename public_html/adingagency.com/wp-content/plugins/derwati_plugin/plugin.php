<?php
namespace DerwatiPlugin;

use DerwatiPlugin\Widgets\Rdn_Slider;
use DerwatiPlugin\Widgets\Derwati_Portfolio;
use DerwatiPlugin\Widgets\Derwati_PortfolioMasonry;
use DerwatiPlugin\Widgets\Derwati_PortfolioInfo;
use DerwatiPlugin\Widgets\Derwati_Title;
use DerwatiPlugin\Widgets\Derwati_PortfolioTitle;
use DerwatiPlugin\Widgets\Derwati_PortfolioCategory;
use DerwatiPlugin\Widgets\Derwati_Team;
use DerwatiPlugin\Widgets\Derwati_TeamHover;
use DerwatiPlugin\Widgets\Derwati_Testimonial;
use DerwatiPlugin\Widgets\Derwati_TextIcon;
use DerwatiPlugin\Widgets\Derwati_TextIconHover;
use DerwatiPlugin\Widgets\Derwati_Post;
use DerwatiPlugin\Widgets\Derwati_PostTwo;
use DerwatiPlugin\Widgets\Derwati_PostThree;
use DerwatiPlugin\Widgets\Derwati_PostFour;
use DerwatiPlugin\Widgets\Derwati_PostSlider;
use DerwatiPlugin\Widgets\Derwati_Menu;
use DerwatiPlugin\Widgets\Derwati_Contact;
use DerwatiPlugin\Widgets\Derwati_OtherPortfolio;
use DerwatiPlugin\Widgets\Derwati_Gallery;
use DerwatiPlugin\Widgets\Derwati_MasonGallery;
use DerwatiPlugin\Widgets\Derwati_Logo;
use DerwatiPlugin\Widgets\Derwati_Sidebar;
use DerwatiPlugin\Widgets\Derwati_Share;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Main Plugin Class
 *
 * Register new elementor widget.
 *
 * @since 1.0.0
 */
class DerwatiPlugin {

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {
		$this->add_actions();
	}

	/**
	 * Add Actions
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function add_actions() {
		//register all script 
		add_action( 'elementor/widgets/widgets_registered',[ $this, 'on_widgets_registered' ] );
		//isotope script
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('jquery-isotope',DERWATI_URL .'widgets/js/isotope.pkgd.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('derwati-portfolio',DERWATI_URL .'widgets/js/portfolio.js', array('jquery'), null, true  );} );
		//blog masonry script
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('derwati-blog-masonry',DERWATI_URL .'widgets/js/blog-mason.js', array('jquery'), null, true  );} );
		//slider script
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('jquery-slick',DERWATI_URL .'widgets/js/slick.min.js.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('derwati-animation',DERWATI_URL .'widgets/js/slick-animation.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('derwati-slider-script',DERWATI_URL .'widgets/js/slider.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('derwati-blog-slider-script',DERWATI_URL .'widgets/js/blog-slider.js', array('jquery'), null, true  );} );
		//gallery popup
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('jquery-magnificpopup',DERWATI_URL .'widgets/js/jquery.magnific-popup.min.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('derwati-gallery-popup',DERWATI_URL .'widgets/js/popup-gallery.js', array('jquery'), null, true  );} );
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('derwati-blog-script',DERWATI_URL .'widgets/js/blog.js', array('jquery'), null, true  );} );
		
		//gallery  masonry
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('derwati-masonry-gallery',DERWATI_URL .'widgets/js/mason-gallery.js', array('jquery'), null, true  );} );
		
		//share script
		add_action( 'elementor/frontend/after_register_scripts', function() {  wp_register_script('derwati-share',DERWATI_URL .'widgets/js/share.js', array('jquery'), null, true  );} );
		
	}

	/**
	 * On Widgets Registered
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function on_widgets_registered() {
		$this->includes();
		$this->register_widget();
	}

	/**
	 * Includes
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function includes() {
		require __DIR__ . '/widgets/rdn-slider.php';
		require __DIR__ . '/widgets/portfolio.php';
		require __DIR__ . '/widgets/portfolio-masonry.php';
		require __DIR__ . '/widgets/portfolio-info.php';
		require __DIR__ . '/widgets/portfolio-title.php';
		require __DIR__ . '/widgets/portfolio-category.php';
		require __DIR__ . '/widgets/title.php';
		require __DIR__ . '/widgets/testimonial.php';
		require __DIR__ . '/widgets/team.php';
		require __DIR__ . '/widgets/team-hover.php';
		require __DIR__ . '/widgets/text-icon.php';
		require __DIR__ . '/widgets/text-icon-hover.php';
		require __DIR__ . '/widgets/post.php';
		require __DIR__ . '/widgets/post-two.php';
		require __DIR__ . '/widgets/post-three.php';
		require __DIR__ . '/widgets/post-four.php';
		require __DIR__ . '/widgets/post-slider.php';
		require __DIR__ . '/widgets/menu.php';
		require __DIR__ . '/widgets/contact.php';
		require __DIR__ . '/widgets/other-portfolio.php';
		require __DIR__ . '/widgets/gallery.php';
		require __DIR__ . '/widgets/mason-gallery.php';
		require __DIR__ . '/widgets/logo.php';
		require __DIR__ . '/widgets/sidebar.php';
		require __DIR__ . '/widgets/share.php';
		
	}
	

	/**
	 * Register Widget
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function register_widget() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Rdn_Slider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Portfolio() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_PortfolioMasonry() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_PortfolioInfo() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_PortfolioTitle() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_PortfolioCategory() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Title() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Team() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_TeamHover() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Testimonial() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_TextIcon() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_TextIconHover() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Post() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_PostTwo() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_PostThree() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_PostFour() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_PostSlider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Menu() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Contact() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Gallery() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_MasonGallery() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_OtherPortfolio() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Logo() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Sidebar() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Derwati_Share() );
		
	}
}

new DerwatiPlugin();



