<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

	<footer class="wrapper" id="wrapper-footer">

		<div class="<?php echo esc_attr( $container ); ?>">

					<div class="site-info">
						<?php if ( dynamic_sidebar('footer_copyright') ) : else : endif; ?>
					</div><!-- .site-info -->

		</div><!-- container end -->

	</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->




<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="/wp-content/themes/beingboss2018/drawer/drawer.min.js" charset="utf-8"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('.drawer').drawer();
    });
</script>
</body>

</html>
