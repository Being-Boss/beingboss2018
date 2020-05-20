<?php
/**
 * The template for displaying all single webinar posts.
 *
 * @package understrap
 */

get_header( 'squeeze' );
?>

<div class="wrapper" id="webinar-wrapper">
	<div class="container-fluid" id="content" tabindex="-1">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php if( (get_the_ID() == '11715') || (get_the_ID() == '11727') ) { ?>
						<div class="container">
							<div class="row">
								<div class="col-md-12 content-area" id="primary">
									<section class="error-404 not-found">
										<div class="pagesection80 center">
											<div class="error-number"><img src="http://beingboss.club/wp-content/uploads/2016/03/404oops.png"></div>
											<p class="xxmedium">Please excuse us. This webinar is under construction.</p>
											<p class="xxmedium">While you wait for it to come back, we have other training you can take!</p>
											<p class="xxmedium"><a href="/webinar/timemanagement">Check out our free Time Management Training >></a></p>
										</div>
									</section><!-- .error-404 -->
								</div><!-- #primary -->
							</div><!-- .row -->
						</div><!-- Container end -->
					<?php } else { ?>

					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<?php $postid = get_the_ID(); ?>
						<?php $webinar_custom_tracker = get_post_meta( $postid, 'bbwebinar_custom_tracker', true ); ?>
						<?php $webinar_mode = get_post_meta( $postid, 'bbwebinar_mode_select', true ); ?>
						<?php $webinar_header_image = get_post_meta ( $postid, 'bbwebinar_header_image', true ); ?>
						<?php $webinar_main_title = get_post_meta( $postid, 'bbwebinar_main_title', true ); ?>
						<?php $webinar_header_text = get_post_meta( $postid, 'bbwebinar_header_text', true ); ?>
						<?php $webinar_guest_one_name = get_post_meta( $postid, 'bbwebinar_guest_one_name', true ); ?>
						<?php $webinar_guest_one_image = get_post_meta( $postid, 'bbwebinar_guest_one_image', true ); ?>
						<?php $webinar_guest_two_name = get_post_meta( $postid, 'bbwebinar_guest_two_name', true ); ?>
						<?php $webinar_guest_two_image = get_post_meta( $postid, 'bbwebinar_guest_two_image', true ); ?>

						<header class="entry-header">

							<?php if($webinar_header_image) { ?>
								<figure class="bbpage-header" style="background-image: url('<?php echo $webinar_header_image; ?>');">
							<?php } else { ?>
								<figure class="bbpage-header" style="background-image: url('/wp-content/uploads/2018/01/Clubhouse_Back1.jpg');">
							<?php } ?>
									<div class="container">
										<div class="row align-items-center row-eq-height">
											<?php if($webinar_guest_two_name) { ?>
												<div class="col-md-6 headertext">
													<?php echo $webinar_header_text; ?>
													<h1 class="webinar-title"><?php echo $webinar_main_title; ?></h1>
												</div>
												<div class="col-md-6 headerguests">
													<div class="row align-items-center row-eq-height">
														<div class="col-md-6 guest">
															<img class="guest-image" src="<?php echo $webinar_guest_one_image; ?>">
															<p><?php echo $webinar_guest_one_name; ?></p>
														</div>

														<div class="col-md-6 guest">
															<img class="guest-image" src="<?php echo $webinar_guest_two_image; ?>">
															<p><?php echo $webinar_guest_two_name; ?></p>
														</div>
													</div>
												</div>
											<?php } else { ?>
												<div class="col-md-8 headertext">
													<?php echo $webinar_header_text; ?>
													<h1 class="webinar-title"><?php echo $webinar_main_title; ?></h1>
												</div>
												<div class="col-md-4 headerguests">
													<div class="guest">
														<img class="guest-image" src="<?php echo $webinar_guest_one_image; ?>">
														<p><?php echo $webinar_guest_one_name; ?></p>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</figure>

						</header><!-- .entry-header -->

						<?php if($webinar_mode == 'signupreplay') {
							get_template_part( '/template-parts/webinar-signupreplay' );
						} elseif($webinar_mode == 'replay') {
							get_template_part( '/template-parts/webinar-replay' );
						} else {
							get_template_part( '/template-parts/webinar-upcoming' );
						} ?>
						

					<?php echo $webinar_custom_tracker; ?>
					</article><!-- #post-## -->

				<?php } ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer( 'squeeze' ); ?>
