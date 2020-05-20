<?php
/**
 * Template Name: Home - 2019
 *
 *
 * @package understrap
 */
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="home-wrapper">

	<div class="container-fluid" id="content">

		<div class="row" style="margin: 0;">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

							<header class="entry-header">

								<!-- <div class="imagebackground" style="background-image: url('/wp-content/uploads/2020/03/Back_Laptop_5.jpg');">
									<div class="container pagesection80">
										<div class="row">
											<div class="col-lg-8 offset-lg-2 col-md-10 white offset-md-1 center">
												<img class="center mobilehide" src="/wp-content/uploads/2020/03/Diamond_White.png" style="margin: 0 auto;">
												<img class="center mobileshow" src="/wp-content/uploads/2020/03/Diamond_White.png" style="width: 50px; margin: 0 auto;">
												<p class="white fs100 mfs46 bold italic lust upper padbot0 padtop15">Make Time<br>
												TO SHINE</p>
												<h2 class="padbot0 padtop15 fs22 mfs18">A Virtual Conference by Being Boss<br>
												For Creative Business Owners</h2>
												<h2 class="padbot30 padtop15 fs22 mfs18">April 19 – 21, 2020</h2>
												<p><a href="/conference" class="button-yellow">GET TICKETS</a></p>
											</div>
										</div>
									</div>
								</div> -->

								<div class="headersection">
									<a class="home-header-link" href="/community"></a>
									<div class="container">
										<div class="headertext">
											<div class="row align-items-center">
												<div class="col-md-12">
													<a href="/community">
														<p class="brandon giant white upper">Being Boss is<br />Being In it Together</p>

														<p class="white medium brandon mobilehide">Join a community of BUSINESS OWNERS CREATIVES,<br /> + ENTREPRENEURS who are committed to<br />making money doing work they love.</p>

														<p class="white brandon fs16 mobileshow">Join a community of BUSINESS OWNERS CREATIVES, + ENTREPRENEURS who are committed to making money doing work they love.</p>
													</a>
													<a class="button-yellow" href="/community">JOIN THE COMMUNITY >></a>
												</div>
											</div>
										</div>
									</div>
								</div>

							</header><!-- .entry-header -->

							<div class="entry-content">

								<?php the_content(); ?>
								<div class="container">
									<div class="twmsection">
										<?php
												$query_args = array(
														'post_type' => array( 'homeposts' ),
														'posts_per_page' => 3,
														'meta_key'   => 'bbhome_order',
														'orderby'    => 'meta_value_num',
														'order'      => 'ASC'
												);
											
												$home_query = new WP_Query( $query_args );
											if ( $home_query->have_posts() ) {
												while ( $home_query->have_posts() ) {
													$home_query->the_post();
													$post_link = get_post_meta( get_the_ID(), 'bbhome_link', true );
													$post_top_label = get_post_meta( get_the_ID(), 'bbhome_top_label', true );
													$post_link_label = get_post_meta( get_the_ID(), 'bbhome_link_label', true );
													$post_description = get_post_meta( get_the_ID(), 'bbhome_description', true );
										?>
													<div class="twmpostbox">
														<div class="twmpostimage">
															<a href="<?php echo $post_link; ?>" target="_blank" title="<?php the_title(); ?>">
																<span class="twmposticon"><?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?></span>
															</a>
														</div>
														<div class="twmpostbottom">
															<h5>
																<a href="<?php echo $post_link; ?>" target="_blank" title="<?php the_title(); ?>">
																	<span class="twmposttitle"> <?php the_title(); ?></span>
																</a>
															</h5>
															<a href="<?php echo $post_link; ?>" target="_blank" class="twmpostdescription"><p><?php echo $post_description; ?></p></a>
															<a href="<?php echo $post_link; ?>" target="_blank" class="twmpostlistennow"><?php echo $post_link_label; ?></a>
														</div>
													</div>
										<?php
												}
												/* Restore original Post Data */
												wp_reset_postdata();
											} else {
												// no posts found
											}
										?>

									</div>
									<p class="featuredon" style="padding-top: 50px;">AS FEATURED ON: <img class="aligncenter wp-image-3927 size-full" src="/wp-content/uploads/2017/11/Press_FeaturedLogos.png" alt="" width="974" height="124"></p>
									<h2 class="center xlarge" style="padding-top: 80px;">LISTEN TO OUR PODCASTS</h2>
									<hr class="even">
									<div class="container" id="homepodcasts">
										<div class="padtop15 padbot30">
											<div class="row">
												<div class="col-md-4"><a href="/podcast"><img src="/wp-content/themes/beingboss2018/img/BB_Logo_Podcast_Optimized.jpg"></a></div>
												<div class="col-md-4"><a href="/10minutes"><img src="/wp-content/uploads/2020/04/iTunesAvatar_Minisodes_2020_500.jpg"></a></div>
												<div class="col-md-4"><a href="/making-a-business"><img src="/wp-content/themes/beingboss2018/img/MakingABiz_Avatar_2.jpg"></a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="imagebackground" style="background-image: url('/wp-content/uploads/2018/02/Back_Smoke_1.jpg'); margin-top: 75px;">
									<div class="container">
										<div class="capsule pagesection50">
											<p class="lustscript white fs50 center">Being Boss is owning who you are,<br />knowing what you want,<br />and actually making it happen.</p>
										</div>
									</div>
								</div>
								<div class="container pagesection80">
									<div class="discoversection">
										<div class="capsule pagesection50">
											<div class="row">
												<div class="col-lg-5">
													<div style="display: table; margin: -100px auto 50px;"><img src="/wp-content/uploads/2020/01/StartHere_TimeManagement.jpg" style="box-shadow: 0px 0px 15px #888;"></div>
													<p class="brandon large italic">"It's a reframe of mindset. You do have enough time."</p><p class="right brandon smallmedium">- Emily Thompson</p></div>
												<div class="col-lg-7">
													<h3 class="xxmedium">PODCAST EPISODES</h3>
													<div class="episodelist padbot30">
														<div class="episodeitem"><div class="itemleft podcast"></div><div class="itemright"><a href="/podcast/boundaries" target="_blank">EPISODE #214 // Boundaries</a></div></div>
														<div class="episodeitem"><div class="itemleft podcast"></div><div class="itemright"><a href="/podcast/boundaries" target="_blank">EPISODE #209 // Rest for Productivity</a></div></div>
														<div class="episodeitem"><div class="itemleft podcast"></div><div class="itemright"><a href="/podcast/episode-156-design-thinking-jeremy-bailey" target="_blank">EPISODE #156 // Design Thinking with Jeremy Bailey</a></div></div>
														<div class="episodeitem"><div class="itemleft podcast"></div><div class="itemright"><a href="/10minutes/minisode-time-management" target="_blank">10 MINUTES // Time Management for Creative Entrepreneurs</a></div></div>
														<div class="episodeitem"><div class="itemleft podcast"></div><div class="itemright"><a href="/10minutes/minisode-devote-time-to-side-hustle" target="_blank">10 MINUTES // How to Devote Time To Your Side Hustle</a></div></div>
														<div class="episodeitem"><div class="itemleft podcast"></div><div class="itemright"><a href="/10minutes/minisode-scheduling-white-space" target="_blank">10 MINUTES // Scheduling White Space</a></div></div>
													</div>
													<h3 class="xxmedium">ARTICLES</h3>
													<div class="episodelist">
														<div class="episodeitem"><div class="itemleft article"></div><div class="itemright"><a href="/articles/do-the-work-post-it-note-method" target="_blank">Post-It Note Method</a></div></div>
														<div class="episodeitem"><div class="itemleft article"></div><div class="itemright"><a href="/articles/become-boss-of-your-time" target="_blank">5 Ways to Become a Boss of Your Own Time</a></div></div>
														<div class="episodeitem"><div class="itemleft article"></div><div class="itemright"><a href="/articles/time-tracking-know-youre" target="_blank">Time Tracking: Know What You’re Doing</a></div></div>
													</div>
												</div>
											</div>
										</div>
										<div class="discoversubscribe">
											<div class="capsule">
												<div class="row">
													<div class="col-lg-5"><h3 class="xxmedium">FREE TIME MANAGEMENT<br />TRAINING FOR BOSSES</h3></div>
													<div class="col-lg-7"><div style="margin: 20px auto;"><?php echo do_shortcode('[content_block id=13751]'); ?></div></div>
												</div>
											</div>
										</div>
									</div>
									<div style="display: table; text-align: right; width: 100%;"><a class="carousel_link right" href="/resources">VIEW ALL RESOURCES >></a></div>
							</div>
							</div><!-- .entry-content -->

						</article><!-- #post-## -->				

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>