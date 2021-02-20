<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		
		<section class="mission">
			<div class="content-wrapper">
				<div class="mission-content">
					<h1>
						Canna Accessories and Seeds Hand Selected for Patients, By Patients
					</h1>
				</div>
			</div>
		</section>

		<section class="shop">
			<div class="content-wrapper">
				<div class="shop-content">
					<h2>Seeds & Accessories</h2>
					<p>
						View our curated collection of seeds and accessories. From superb variates of seeds to custom accessories, we have everything you've ever wanted!
					</p>
					<div class="content-button">
						<button class="button" type="button" onclick="location.href='http://daves-emporium.local/shop/';">SHOP NOW</button>
					</div>
				</div>
				<figure>
					<div class="shop-img">
						<?php echo do_shortcode('[metaslider id="60"]'); ?>
					</div>
				</figure>
			</div>
		</section>

		<section class="education">
			<div class="content-wrapper">
				<div class="education-content">
					<h2>Education</h2>
					<p>
						We not only nurture the seeds, we nurture the mind. View our library to read articles, find groups, and learn more about seeds, and life.
					</p>
					<div class="content-button">
						<button class="button" type="button" onclick="location.href='http://daves-emporium.local/education/';">Learn more</button>
					</div>
				</div>
				<figure>
					<div class="education-img">
						<?php echo do_shortcode('[metaslider id="75"]'); ?>
						</div>
				</figure>
			</div>
		</section>

		<section class="about">
			<div class="content-wrapper">
				<div class="about-content">
				<h2>About us</h2>
				<p>
					Dave's Emporium started with a dream and with weed. Now that dream is being the best collection of seeds on the web. Read the whole story now!
				</p>
					<div class="content-button">
						<button class="button" type="button" onclick="location.href='http://daves-emporium.local/our-story/';">learn more</button>
					</div>
				</div>
				<figure>
					<div class="about-img">
						<?php echo do_shortcode('[metaslider id="79"]'); ?>
					</div>
				</figure>
			</div>
		</section>

	</div>
</section>


<?php get_footer(); ?>
