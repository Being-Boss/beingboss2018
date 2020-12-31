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

		<div class="container">

			<div class="row">

				<?php if ( wp_is_mobile() ) { ?>
					<?php get_template_part( '/template-parts/footer-subscribe' ); ?>
					<?php if(!is_front_page()) { ?>
						<?php get_template_part( '/template-parts/footer-menus' ); ?>
					<?php } ?>
				<?php } else { ?>
					<?php get_template_part( '/template-parts/footer-menus' ); ?>
					<?php get_template_part( '/template-parts/footer-subscribe' ); ?>
				<?php } ?>

			</div><!-- row end -->
			<div class="row bottom-row">

				<div class="col-md-4">
					<div class="row" id="footer-social">
						<div class="col-sm-6">
							<h3>LISTEN</h3>
							<ul>
								<li><a href="https://podcasts.apple.com/us/artist/being-boss/1359403924" target="_blank"><i class="fab fa-apple"></i></a></li>
								<li><a href="https://podcasts.google.com/feed/aHR0cHM6Ly93d3cuYnV6enNwcm91dC5jb20vMzc3MDIucnNz" target="_blank"><i class="fab fa-google-play"></i></a></li>
								<li><a href="https://soundcloud.com/beingboss" target="_blank"><i class="fab fa-soundcloud"></i></a></li>
								<li><a href="https://open.spotify.com/show/0tRmU2Ipy2raYtjlz0Dz7w" target="_blank"><i class="fab fa-spotify"></i></a></li>
								<li><a href="https://www.stitcher.com/podcast/being-boss" target="_blank"><i class="stitcher"></i></a></li>
								<li><a href="http://tun.in/pi30v" target="_blank"><i class="tunein"></i></a></li>
								<li><a href="https://music.amazon.com/podcasts/a7c77495-d701-4d3d-a250-155b8a1e959d/Being-Boss-Mindset-Habits-Tactics-and-Lifestyle-for-Creative-Entrepreneurs" target="_blank"><i class="fab fa-amazon"></i></a></li>
							</ul>
						</div>
						<div class="col-sm-6">
							<h3>FOLLOW</h3>
							<ul>
								<li><a href="https://www.instagram.com/beingbossclub/" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://twitter.com/beingbossclub" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/beingbossclub/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://www.pinterest.com/beingboss/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">

				</div>
				<div class="col-md-5">
					<div class="site-info">
						<?php if ( dynamic_sidebar('footer_copyright') ) : else : endif; ?>
					</div><!-- .site-info -->
				</div>

			</div><!-- row end -->

		</div><!-- container end -->

	</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->




<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="/wp-content/themes/beingboss2018/drawer/drawer.min.js" charset="utf-8"></script>

<script>
	jQuery(document).ready(function(){
		 var iFrameDOM = jQuery("iframe#dsq-app1071").contents();
		iFrameDOM.find("li.sso").css("display", "none");
	});
</script>

<script>
	jQuery(document).ready(function(){
	  jQuery(window).bind('scroll', function() {
	    var distance = 50;
	    if (jQuery(window).scrollTop() > distance) {
	      jQuery('.bg-light').addClass('scrolled');
	      jQuery('.navbar-brand').addClass('blacklogo');
	    }
	    else {
	      jQuery('.bg-light').removeClass('scrolled');
	      jQuery('.navbar-brand').removeClass('blacklogo');
	    }
	  });
	});
</script>
</body>

</html>
