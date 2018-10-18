<?php
/**
 *  The template for displaying about section in front page.
 *
 *  @package WordPress
 *  @subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$general_title = get_theme_mod( 'illdy_about_general_title', __( 'About', 'illdy' ) );
	$general_entry = get_theme_mod( 'illdy_about_general_entry', __( 'It is an amazing one-page theme with great features that offers an incredible experience. It is easy to install, make changes, adapt for your business. A modern design with clean lines and styling for a wide variety of content, exactly how a business design should be. You can add as many images as you want to the main header area and turn them into slider.', 'illdy' ) );
} else {
	$general_title = get_theme_mod( 'illdy_about_general_title' );
	$general_entry = get_theme_mod( 'illdy_about_general_entry' );
}
$custom_css = '';
if ( ! $general_title && ! $general_entry ) {
	$custom_css = 'padding-top: 130px;';
}
?>

<?php if ( '' != $general_title || '' != $general_entry || is_active_sidebar( 'front-page-about-sidebar' ) ) { ?>

<section id="about" class="front-page-section" style="<?php echo $custom_css; ?>">
	
	<div class="section-content">
		<div class="container">
			<div class="row">
				<h3 align="center">We're on Instagram</h3>
				<?php echo do_shortcode('[instagram-feed]'); ?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#about.front-page-section-->

<?php }// End if().
	?>
