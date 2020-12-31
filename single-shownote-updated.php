<?php
/*
 * Template Name: Updated Shownote Template
 * Template Post Type: post
 */

get_header();
global $post;
?>

<style>
  .podcast-title a {
    font-family: brandon-grotesque, sans-serif;
    text-transform: uppercase;
    font-size: 16px;
    line-height: 1.2;
    font-weight: 600;
    color: #EC008C;
  }

  .podcast-title a:hover {
    color: #00AEEF;
  }

  .podcast-links {margin-top: 25px;}
  .podcast-links a {
    font-size: 26px;
  }

  img.attachment-post-thumbnail,
  .buzzsprout-player {box-shadow: 0 0 15px #888;}

  .youtube-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; }

  .youtube-container iframe, .video-container object, .video-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

  .shownote_quote {
    font-family: 'PT Serif', serif;
    font-style: italic;
    font-size: 2rem;
    font-weight: 600;
    line-height: 1.1;
    color: #252525;
    max-width: 750px;
    margin: 0 auto;
    text-align: center;
    text-transform: none;
  }

  .shownote_quoteauthor {
    text-align: center;
    font-family: "brandon-grotesque",sans-serif;
    font-weight: 900;
    font-size: 0.875rem;
    line-height: 1;
    text-transform: uppercase;
    margin: 15px auto 50px;
}

  .episode-transcript p {
    font-size: 0.875rem!important;
  }
  .overflow-auto {
    overflow: auto!important;
  }
</style>

<div class="wrapper" id="shownote-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

			<main id="primary" class="site-main">

				<?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content" id="shownote-wrapper" style="margin: auto;">
              <?php
                $postid = get_the_ID();
                $shownote_soundcloud = get_post_meta ( $postid, 'bbshownotes_soundcloud', true );
                $shownote_buzzsprout = get_post_meta ( $postid, 'bbshownotes_buzzsprout', true );
                $shownote_youtube = get_post_meta ( $postid, 'bbshownotes_youtube', true );
                $shownote_quote = get_post_meta( $postid, 'bbshownotes_top_quote', true );
                $shownote_quoteauthor = get_post_meta( $postid, 'bbshownotes_quote_author', true );
                $shownote_quoteauthortwitter = get_post_meta( $postid, 'bbshownotes_quote_author_twitter', true );
                $shownote_topics = get_post_meta( $postid, 'bbshownotes_topics', true );
                $shownote_resources = get_post_meta( $postid, 'bbshownotes_resources', true );
                $fullwidth_optin = get_post_meta( get_the_ID(), 'bbshownotes_optin_select', true );
                $comment_prompt = get_post_meta( $postid, 'bbshownotes_comment_prompt', true );
                $transcript = get_post_meta( $postid, 'bbshownotes_transcript', true ); ?>

              <div class="graysection" style="padding-bottom: 150px;">
                <div class="container">
                  <div class="entry-intro pt-md-5 pb-2">
                    <div class="row row-eq-height align-items-center pagesection30">
                      <div class="col-md-4">
                        <?php the_post_thumbnail(); ?>
                      </div>
                      <div class="col-md-8 shownote_intro pl-md-5">
                        <div class="podcast-title">
                          <?php
                            if (in_category('10minutes')) {
                              echo '<a href="/10minutes">:10 Minutes to Being Boss</a>';
                            } else if (in_category('making-a-business')) {
                              echo '<a href="/making-a-business">Making a Business</a>';
                            } else if (in_category('minisodes')) {
                              echo '<a href="/minisodes">Being Boss Minisodes</a>';
                            } else {
                              if (in_category('archive')) {
                                echo '<a href="/archive">Being Boss Archive</a>';
                              } else {
                                echo '<a href="/podcast">Being Boss Podcast</a>';
                              }
                            }
                          ?>
                        </div>
                        <?php the_title( '<h1 class="shownote-title padbot0">', '</h1>' ); ?>
                        <span class="shownote_date">
                          <?php echo get_the_date(); ?>
                        </span>
                        <div class="shownote_description padbot0"><?php the_content(); ?></div>
                        <div class="podcast-links"><?php get_template_part('/template-parts/podcast-links'); ?></div>
                      </div>
                    </div>
                    <div class="row hidden">
                      <div class="col-md-8 offset-md-2">
                        <h6 class="text-center">Learn More about the Topics Discussed in this Episode</h6>
                      </div>
                    </div>
                    <div class="text-center hidden">
                      <a href="#" class="btn btn-secondary square mx-1 font-weight-normal">Resource</a>
                      <a href="#" class="btn btn-secondary square mx-1 font-weight-normal">Resource</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container" style="margin-top: -115px;">
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <div class="buzzsprout-player"><?php echo $shownote_buzzsprout; ?></div>
                </div>
              </div>
            </div>

            <?php if ( !empty( $shownote_quote ) ) { ?>
              <div class="container" style="margin-top: 50px">
                <div class="row">
                  <div class="col-md-10 offset-md-1">
                    <div class="shownote_quote">"<?php echo $shownote_quote; ?>"</div>
                    <div class="shownote_quoteauthor">- <?php echo $shownote_quoteauthor; ?></div>
                  </div>
                </div>
              </div>
            <?php } ?>

            <div class="container">
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <div class="youtube-container">
                    <iframe src="https://www.youtube.com/embed/<?php echo $shownote_youtube; ?>"></iframe>
                  </div>
                </div>
              </div>
            </div>

            <div class="container py-5 shownote-details">
              <div class="row">
                <div class="col-md-10 offset-md-1">

                  <?php if ( !empty( $shownote_topics ) ) { ?>
                    <h2>Discussed in this Episode</h2>
                    <div class="shownote_topics arrowlist"><?php echo $shownote_topics; ?></div>
                  <?php } ?>

                  <?php if ( !empty( $shownote_resources ) ) { ?>
                    <h3 class="black">Resources</h3>
                    <div class="shownote_resources arrowlist"><?php echo $shownote_resources; ?></div>
                  <?php } ?>

                  <?php $guestdetails = get_post_meta( get_the_ID(), 'bbshownotes_morefrom', true ); ?>
                  <?php if ( !empty( $guestdetails ) ) { ?>
                    <?php foreach ( (array) $guestdetails as $key => $entry ) {

                        $guestname = $guestinfo = '';

                        if ( isset( $entry['bbshownotes_guestname'] ) ) {
                          $guestname = esc_html( $entry['bbshownotes_guestname'] );
                        }

                        if ( isset( $entry['bbshownotes_guestinfo'] ) ) {
                          $guestinfo = wpautop( $entry['bbshownotes_guestinfo'] );
                        }

                        echo "<h3 class='black'>More from ";
                        echo $guestname;
                        echo "</h3>";
                        echo "<div class='shownote_guestinfo arrowlist'>";
                        echo $guestinfo;
                        echo "</div>";
                      }
                    ?>
                  <?php } ?>

                  <?php if($transcript) { ?>
                    <h2 class="mt-5">Transcript</h2>
                    <div class="bd-example d-md-flex episode-transcript">
                      <div class="overflow-auto p-4 mb-3 mb-md-0 mr-md-3" style="max-height: 500px; background-color: #eaeaea;">
                        <?php echo $transcript; ?>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="shownote_nav mb-3">
                    <div class="previouslink"><?php previous_post_link('%link', '<< PREVIOUS EPISODE', true); ?></div>
                    <div class="nextlink"><?php next_post_link('%link', 'NEXT EPISODE >>', true); ?></div>
                  </div>
                </div>
              </div>
            </div>

          </article><!-- #post-<?php the_ID(); ?> -->

          <?php endwhile; // End of the loop.
      		?>

			</main><!-- #main -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->


<?php get_footer(); ?>
