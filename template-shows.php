<?php
/**
 * Template Name: Show Landing
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
$postid = get_the_ID();
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

							<div class="entry-content">

								<div class="pagesection80"><h1 class="fs42" style="text-align: center;">Our Shows</h1>
									<div id="homepodcasts">
										<div class="padtop15 padbot30">
											<div class="row">
												<div class="col-md-3">
													<a href="/podcast">
														<img src="/wp-content/uploads/2020/09/iTunesAvatar_2020_500.jpg">
														<h3>Being Boss</h3>
														<p><?php echo do_shortcode('[bb-main-count]'); ?></p>
													</a>
												</div>
												<div class="col-md-3">
													<a href="/10minutes">
														<img src="/wp-content/uploads/2020/04/iTunesAvatar_Minisodes_2020_500.jpg">
														<h3>:10 Minutes to Being Boss</h3>
														<p><?php echo do_shortcode('[bb-10minutes-count]'); ?></p>
													</a>
												</div>
												<div class="col-md-3">
													<a href="/making-a-business">
														<img src="/wp-content/themes/beingboss2018/img/MakingABiz_Avatar_2.jpg">
														<h3>Making a Business</h3>
														<p><?php echo do_shortcode('[bb-mab-count]'); ?></p>
													</a>
												</div>
												<div class="col-md-3">
													<a href="/minisodes">
														<img src="/wp-content/uploads/2020/08/BB-Minisodes-Avatar.jpg">
														<h3>Being Boss Minisodes</h3>
														<p><?php echo do_shortcode('[bb-minisodes-count]'); ?></p>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<?php the_content(); ?>
							</div><!-- .entry-content -->

					</article><!-- #post-## -->

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
