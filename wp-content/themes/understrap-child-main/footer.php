<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-black text-white pt-0 pb-4" id="wrapper-footer">

	<div class="<?//php echo esc_attr( $container ); ?> p-0">

		<div class="row no-gutters">
			
			<div class="col-6 col-md-3 p-0">
				<img class="img-fluid shadow-lg" src="/wp-content/uploads/2022/06/b1.jpg">
			</div>

			<div class="col-6 col-md-3 p-0">
				<img class="img-fluid shadow-lg" src="/wp-content/uploads/2022/06/b2.jpg">
			</div>

			<div class="col-6 col-md-3 p-0">
				<img class="img-fluid shadow-lg" src="/wp-content/uploads/2022/06/b3.jpg">
			</div>

			<div class="col-6 col-md-3 p-0">
				<img class="img-fluid shadow-lg" src="/wp-content/uploads/2022/06/b4.jpg">
			</div>

			<div class="col-md-12 pt-5 border-top-yellow">

				<footer class="site-footer" id="colophon">

					<div class="site-info text-center">

						<a href="/"><img width="380" class="img-fluid d-block mx-auto pb-3" src="/wp-content/uploads/2022/06/stx-logistics-logo-SILVER.svg"></a>
						
						<p class="small">Copyright © <?php echo date("Y"); ?> STX Logistics. All Rights Reserved.</p>
						
						<p class="small">Website by <a href="https://acceleratemediainc.com/" target="_blank"><img width="60" class="img-fluid" src="/wp-content/uploads/2022/06/am-logo-stx-red.svg"></a></p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

