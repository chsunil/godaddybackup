<script src="https://use.fontawesome.com/e603db50f5.js"></script>
<style>
	.close {
		width: 10px;
    height: 10px;
    position: absolute;
    right: 5px;
    top: 0px
	}
#panel, .flip {
/*   font-size: 16px; */
  padding: 10px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
  border: solid 1px #a6d8a8;
  margin: auto;
	z-index: 999;
	}
	.flip {
		position: fixed !important;
    right: 5px;
    bottom: 5px;
   
    z-index: 9;
	}
#panel {
  display: none;
}
	#panel a {
		color:#fff;
	}
	#panel {
		position: fixed !important;
    right: 5px;
		bottom: 60px;
    height: 100px;
    padding: 30px 20px;
		border-radius: 10px;
	}
	@media (max-width: 425px) {
		.flip {
			width:100%;
		}
		
	}
	@media (min-width: 426px) {
		.flip {
			width:50px;
			height:50px;
			 border-radius: 50%;
		}
		
	}
</style>

<div id="panel">
    <div class="close" onclick=myFunction2()>
		<span class="fa fa-close"></span>
		</div>
    <?php 
    $phone = get_post_meta($post->ID, 'phone', true);
    if ( ! empty( $phone ) ) { ?>
    <a href=tel:+91<?php echo $phone; ?> > <?php echo $phone; ?></a>
<?php }
else 
{
    echo "<a href=tel:+919666481447>+919666481447</a>";
}?> 
</div>
        <div class="flip fa fa-2x fa-phone" onclick=myFunction() >
 
</div>
<?php
if ( et_theme_builder_overrides_layout( ET_THEME_BUILDER_HEADER_LAYOUT_POST_TYPE ) || et_theme_builder_overrides_layout( ET_THEME_BUILDER_FOOTER_LAYOUT_POST_TYPE ) ) {
    // Skip rendering anything as this partial is being buffered anyway.
    // In addition, avoids get_sidebar() issues since that uses
    // locate_template() with require_once.
    return;
}

/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
					echo et_core_fix_unclosed_html_tags( et_core_esc_previously( et_get_footer_credits() ) );
					// phpcs:enable
				?>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
	

	<script>
 function myFunction() {
  document.getElementById("panel").style.display = "block";
}
		
		 function myFunction2() {
  document.getElementById("panel").style.display = "none";
}
</script>
</body>
</html>
