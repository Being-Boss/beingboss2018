<?php
/**
 * Template Name: Sales: Gathering
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>

<style>
	h1 {
		font-family: lust, serif;
	    font-weight: 400;
	    font-size: 100px !important;
	    line-height: 1.2 !important;
	    text-transform: uppercase;
		font-style: italic !important;
		color: #fff;
		padding-bottom: 0px !important;
	    padding-top: 15px !important;
	}

	.testimonials .col-md-4 {margin-bottom: 30px;}

	.testimonials .quote {
		font-style: italic;
		line-height: 1.4 !important;
	    font-size: 20px !important;
	}
	.testimonials .author {
		text-align: right;
		font-family: brandon-grotesque, sans-serif;
	    font-style: normal;
	    font-size: 16px !important;
	    font-weight: 900;
	    text-transform: uppercase;
	}

	#footer-subscribe {margin-top: 0;}

	.lusthighlight {
		font-family: lustscript, serif;
	    font-weight: 300;
		font-size: 26px !important;
	    line-height: 32px !important;
	    text-transform: lowercase;
	    font-style: italic !important;
	}

	.gatheringimage {
		position: absolute;
	    left: 15%;
	    transform: rotate(-10deg);
	    top: 50px;
	}

	@media screen and (max-width: 767px) {
		.gatheringimage {
			left: 0;
			top: 15px;
			width: 90%;
		}
	}
	@media screen and (min-width: 768px) and (max-width: 991px) {
		.gatheringimage {left: 1%;width: 70%;top: 15px;}
	}
	@media screen and (min-width: 992px) and (max-width: 1149px) {
		.gatheringimage {left: 1%;width: 65%;}
	}
	@media screen and (min-width: 1150px) and (max-width: 1500px) {.gatheringimage {left: 5%;}}

	.fs24 p {font-size: 24px !important; line-height: 1.3 !important;}

	.conferencespeakers p {
	    font-family: 'PT Serif', serif;
	    font-size: 16px !important;
	    line-height: 1.3 !important;
	    font-style: italic;
	}

	.conferencespeakers h4 {
		font-family: 'PT Serif', serif;
	    font-size: 22px !important;
	    line-height: 1.3 !important;
	    font-style: italic;
	    font-weight: 400;
	    color: #252525;
	}

	.conferencepaymentsection .paymentboxes .box .top {
		color: #252525;
		text-align: left;
		padding: 0 0 0;
	}

	.conferencepaymentsection .paymentboxes .box .top p,
	.conferencepaymentsection .paymentboxes .box .top ul li {
		font-size: 17px !important;
		letter-spacing: .5px;
		line-height: 1.3;
	}

	.conferencepaymentsection .paymentboxes .box .top .label {
		padding-bottom: 30px;
		text-align: center;
	}

	.conferencepaymentsection .paymentboxes .box.box2 .top .label {
		background-image: url('/wp-content/uploads/2019/10/BG-Arrow-LightBlue.png');
	}

	@media screen and (max-width: 800px) {
		.fs50 {font-size: 38px !important; line-height: 1.3 !important;}
		.conferencespeakers img.circle, .conferencespeakers .circle {margin-top: 30px;}
	}

	h3, .h3 {
		margin-bottom: 25px;
	    padding-bottom: 7px;
	    max-width: 80%;
		font-size: 22px;
	}

	p {line-height: 1.3 !important; padding-bottom: 15px;}

	@media screen and (min-width: 992px) and (max-width: 1199px) {
		.fs100 {font-size: 84px !important;}
	}

	@media screen and (min-width: 768px) and (max-width: 991px) {
		.fs100 {font-size: 72px !important;}
	}

	@media screen and (max-width: 767px) {
		.fs100 {font-size: 64px !important;}
	}

	@media screen and (max-width: 500px) {
		.fs100 {font-size: 46px !important; margin-bottom: 15px;}
		h2.fs22 {font-size: 22px !important; line-height: 1.3 !important;}
	}

</style>

<main id="primary" class="site-main">

	<?php
			while ( have_posts() ) :
				the_post(); ?>

	​<div class="imagebackground fixed" style="background-image: url('/wp-content/uploads/2020/08/Background_Magic_1.jpg');">
		<div class="container pagesection80"><img class="gatheringimage" src="/wp-content/uploads/2020/08/Gathering_Gathering.png" />
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 white offset-md-1 center">
					<h1 class="fs100">Guided by<br />
						Intuition</h1>
					<h2 class="padbot0 padtop0 fs22 white"><span class="lusthighlight">a</span> Virtual Event <span class="lusthighlight">for</span> Creative Business Owners<br />
						<span class="lusthighlight">with</span> Woo Woo Vibes
					</h2>
					<h2 class="padbot30 padtop15 fs22 white">· October 8 - 10, 2020 ·</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="pagesection80">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<p class="fs42 mfs32 italic center">"How would you be behaving if you knew what you were trying to manifest was a for sure thing in the future?"</p>
					<p class="brandon fs20 center">- Kelley Knight, Being Boss Podcast Episode #197</p>
				</div>
			</div>
			<div class="row pagesection80">
				<div class="col-md-8 offset-md-2">
					<p>Manifesting. Visualizing. Alignment. Divine timing.</p>
					<p>Tarot. Crystals. Mercury Retrograde.</p>
					<p>Our kind of creative business owner bosses tend towards the mystic, from the Woo-Curious to the Woo-Woo As Fuck amongst you.</p>
					<div style="padding-left: 5%;">
						<p>You practice mindfulness techniques. (Or at least know that you should be.)</p>
						<p>You own a tarot deck, and probably pull cards for your business.</p>
						<p>You probably have a crystal in your pocket, or your bra – to assist in manifesting abundance + prosperity.</p>
					</div>
					<p class="bold padtop15">But how do you connect the dots between your intuition in your business?</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<p class="fs50 mfs32 brandon center">How do you connect with that<br />
						<span class="lust italic lower fs64 mfs46">pull in your heart</span><br />
						+ use it to guide your business<br />
						towards your highest purpose?
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="pagesection80 graysection">
		<div class="container">
			<div class="row row-equal-height align-items-center">
				<div class="col-md-6 padbot50"><img class="" src="/wp-content/uploads/2020/08/Gathering_iMac.png" /></div>
				<div class="col-md-6">
					<h2>About this Event</h2>
					<p>Half-day Thursday. All day Friday. Half-day Saturday.</p>
					<p>Panels, keynotes, workshops, live podcast recordings.</p>
					<p>Plus the Being Boss promise of actionable steps, practical advice, and results-oriented guidance.</p>
					<p>And a whole tribe of bosses ready to connect, dive deep, and do the work.</p>
					<h2 class="padtop30">Who's It For</h2>
					<p>This event is for creative business owners (artists, writers, coaches... bosses) who wish to feel more alignment between their personal and professional, between their heart and their actions.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="imagebackground fixed" style="background-image: url('/wp-content/uploads/2020/08/Background_Magic_4.jpg');">
		<div class="container pagesection50">
			<div class="row">
				<div class="col-md-10 offset-md-1 white center">
					<p class="lustscript fs100">we want you to...</p>
					<div class="brandon fs24">
						<p>· Connect to the wisdom of your intuition</p>
						<p>· Embrace the tools that will help you connect</p>
						<p>· Use your inner guidance to set goals + take action</p>
						<p>· Feel good about that action because it's perfectly aligned</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pagesection100 testimonials">
		<h2 class="center padbot50">Feedback from Past Events</h2>
		<div class="row row-equal-height">
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"Every talk, group conversation, panel, break-out session and workshop provided digestible nuggets that directly applied to my business."</p>
					<p class="author">- Jolinda S.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"I can't wait for the next Being Boss event!"</p>
					<p class="author">- Ann D.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"I loved pluggin in with other bosses, hoping for the future, planning for change, and becoming inspired."</p>
					<p class="author">- Rebecca T.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="graysection pagesection80 conferencespeakers">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="center fs50 padbot0">The Line-Up</h2>
				</div>
			</div>
			<div class="row center pagesection50">
				<div class="col-md-6 offset-md-3">
					<h4 class="center padbot0">hosted + live podcasting by</h4>
					<div class="row">
						<div class="col-md-12"><img class="mobilehide" style="margin: 0 auto;" src="/wp-content/uploads/2019/10/Line-Up-Small.png" /></div>
						<div class="col-md-12"><img class="circle darkblue" src="/wp-content/uploads/2019/10/BB_Emily.jpg" />
							<h5>Emily Thompson</h5>
							<p>host of Being Boss<br />
								owner of Almanac Supply Co.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row center padtop50 lineup">
				<div class="col">
					<h4 class="center padbot0">speakers, teachers, + panelists</h4>
					<div class="row">
						<div class="col-md-12"><img class="mobilehide" style="margin: 0 auto;" src="/wp-content/uploads/2019/10/Line-Up-Big.png" /></div>
						<div class="col-md-3 col-sm-6"><img class="circle pink" src="/wp-content/uploads/2020/09/Conf_Pamela_1-300x300.jpeg" />
							<h5>PAMELA CHEN</h5>
							<p>panelist + instructor</p>
						</div>
						<div class="col-md-3 col-sm-6"><img class="circle blue" src="/wp-content/uploads/2020/09/Conf_Mecca_1-e1599490665398-300x300.jpg" />
							<h5>MECCA WOODS</h5>
							<p>panelist + instructor</p>
						</div>
						<div class="col-md-3 col-sm-6"><img class="circle blue" src="/wp-content/uploads/2020/09/Conf_BrigitSquare_1.jpg" />
							<h5>BRIGIT ESSELMONT</h5>
							<p>panelist + instructor</p>
						</div>
						<div class="col-md-3 col-sm-6"><img class="circle blue" src="/wp-content/uploads/2020/09/Conf_TashaSquare_1.jpg" />
							<h5>TASHA HARRISON</h5>
							<p>panelist + instructor</p>
						</div>
					</div>
					<div class="row justify-content-center padtop30" style="display: none;">
						<div class="col-md-3 col-sm-6"><img class="circle blue" src="/wp-content/uploads/2019/10/Conference_Speaker_TBA.jpg" />
							<h5>TBD</h5>
							<p>boss of something awesome</p>
						</div>
						<div class="col-md-3 col-sm-6"><img class="circle blue" src="/wp-content/uploads/2019/10/Conference_Speaker_TBA.jpg" />
							<h5>TBD</h5>
							<p>boss of something awesome</p>
						</div>
						<div class="col-md-3 col-sm-6"><img class="circle blue" src="/wp-content/uploads/2019/10/Conference_Speaker_TBA.jpg" />
							<h5>TBD</h5>
							<p>boss of something awesome</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="tickets" class="conferencepaymentsection imagebackground fixed" style="background-image: url('/wp-content/uploads/2020/08/Background_Magic_6.jpg');"><?php echo do_shortcode('[content_block id=14136]'); ?></div>
	<div id="agenda" class="container padtop80">
		<p class="pagesection30 lustscript fs100 center">agenda coming soon...</p>
		<div class="aligncenter padbot50" style="max-width: 765px;">
			<p class="fs36 italic center">We're combining intuition with business. The woo with the practical. The head and the heart. With a focus on tarot, crystals, and astrology for business owners.</p>
		</div>
		<h2 class="center padtop80">Feedback from Past Events</h2>
		<div class="row row-equal-height padtop50 testimonials justify-content-center">
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"Never miss another Being Boss event!"</p>
					<p class="author">- Lora D.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"I loved every minute of it!"</p>
					<p class="author">- Erika E.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"What does an online conference look like? Like excitement, magic, affirmations, relevant content and real connections if it's the Being Boss Conference."</p>
					<p class="author">- Cheryl B.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"I walked away with action steps for every single area that needs work, and am bursting with motivation to make it all happen!"</p>
					<p class="author">- Colleen K.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"I can't speak highly enough of this experience. Thank you so much, Being Boss!"</p>
					<p class="author">- Laura H.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"What's most special about Being Boss is the combination of "woo woo" and business."</p>
					<p class="author">- Rebecca T.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="graysection p-4">
					<p class="quote">"It made me want to do better and be better long after the event was over."</p>
					<p class="author">- Eman I.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="pagesection80" style="padding-bottom: 100px;">
		<div class="container" style="max-width: 1000px;">
			<div class="row">
				<div class="col">
					<h2 class="center fs50 padbot30">FAQ</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 padbot30">
					<h5>Will there be replays available?</h5>
					<p>We will make our best effort to make available a replay of each event within 24 hours of recording live. Replays will be available until EOD Friday, 10/16.</p>
					<p>However, know that the most fun of Being Boss events is had when you join LIVE.</p>
					<p><em>Please note: Being Boss is not able to guarante the stability of the third-party software that makes events like this possible, so we are unable to guarantee the delivery of any or all replays.</em></p>
					<h5>What's the schedule? Who's speaking?</h5>
					<p>We will release speakers in a couple of rounds leading up to the event, as well as schedule details.</p>
				</div>
				<div class="col-md-6">
					<h5>How do I become a sponsor?</h5>
					<p>If you think your company would make a great partner for this event, email us at events@beingboss.club</p>
					<h5>How will we be meeting online?</h5>
					<p>We will use Crowdcast to deliver all sessions to our boss attendees. Between and after sessions, we encourage you to interact in the Being Boss Community, where a special group has been created for the event.</p>
					<h5>What's your refund policy?</h5>
					<p>We offer no refunds for this event.</p>
				</div>
			</div>
			<p class="center">Have a question? Email us at hello@beingboss.club</p>
		</div>
	</div>
	<div class="conferencepaymentsection imagebackground fixed" style="background-image: url('/wp-content/uploads/2020/08/Background_Magic_6.jpg');"><?php echo do_shortcode('[content_block id=14136]'); ?></div>


	<?php endwhile; // End of the loop.
			?>

</main><!-- #main -->

<?php
get_footer();
