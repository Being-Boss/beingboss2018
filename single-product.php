<?php
/**
 * The template for displaying all single product posts.
 *
 * @package understrap
 * @version 1.6.4
 */

get_header();
$product = get_the_ID();
?>

<div class="wrapper single-product" id="page-wrapper">

	<?php get_template_part( '/template-parts/bp-user-menu' ); ?>

	<div class="container pagesection50" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="row padbot50">
						<div class="col-md-6 padbot50">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail('full'); ?>
							<?php endif; ?>
						</div>
						<div class="col-md-6 colextrapadding">
							<div class="row padbot30">
								<div class="col-sm-9"><h1 class="mobilecenter"><?php the_title(); ?></h1></div>
								<div class="col-sm-3">
									<p class="right brandon fs32 lightgray mobilecenter">$<?php echo $product->get_regular_price(); ?></p>
								</div>
							</div>
							<div class="padbot50">
								<?php the_content(); ?>
								<div class="row padtop30 align-items-center">
									<div class="col-sm-2 offset-sm-2">
										<p class="right brandon fs32 lightgray mobilecenter">$<?php echo $product->get_regular_price(); ?></p>
									</div>
									<div class="col-sm-8">
										<?php woocommerce_simple_add_to_cart(); ?>
									</div>
								</div>
								<div class="row padtop50">
									<div class="col">
										<?php if (is_single(12823)) { ?>
											<p class="center">Need more help with Opt-Ins? <a href="/product/opt-in-upgrades-masterclass">Check out our Opt-Ins and Upgrades Masterclass.</a></p>
										<?php } elseif (is_single(12821)) { ?>
											<p class="center">Looking for more help on overall Email Marketing? <a href="/product/email-marketing-masterclass">Check out our Email Marketing Masterclass.</a></p>
										<?php } else {} ?>
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
