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
					A Community Market for Patients by Patients
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
						<button class="button" type="button" onclick="location.href='https://davesemporium.xyz/shop/';">Shop Now</button>
					</div>
				</div>
				<figure>
					<div class="shop-img">
						<?php echo do_shortcode('[metaslider id="1032"]'); ?>
					</div>
				</figure>
			</div>
		</section>

		<section class="education">
			<div class="content-wrapper">
				<div class="education-content">
					<h2>Education</h2>
					<p>
						View our library to read articles, find groups, and learn more about seeds and accessories.
					</p>
					<div class="content-button">
						<button class="button" type="button" onclick="location.href='https://davesemporium.xyz/education/';">Learn More</button>
					</div>
				</div>
				<figure>
					<div class="education-img">
						<?php echo do_shortcode('[metaslider id="1039"]'); ?>
						</div>
				</figure>
			</div>
		</section>

		<section class="about">
			<div class="content-wrapper">
				<div class="about-content">
				<h2>About us</h2>
				<p>
					Dave's Emporium started with a dream. Now that dream is being the best collection of seeds on the web. Read the whole story now!
				</p>
					<div class="content-button">
						<button class="button" type="button" onclick="location.href='https://davesemporium.xyz/our-story/';">Learn More</button>
					</div>
				</div>
				<figure>
					<div class="about-img">
						<?php echo do_shortcode('[metaslider id="1037"]'); ?>
					</div>
				</figure>
			</div>
		</section>

	</div>
</section>


<?php get_footer(); ?>
