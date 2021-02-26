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
		<?php while ( have_posts() ) : the_post();
			$mission_statement = get_field("mission_statement");

			$shop_title = get_field("shop_title");
			$shop_content = get_field("shop_content");

			$education_title = get_field("education_title");
			$education_content = get_field("education_content");

			$about_title = get_field("about_title");
			$about_content = get_field("about_content");

		?>


		
			<section class="mission">
				<div class="content-wrapper">
					<div class="mission-content">
						<h1>
							<?php echo $mission_statement; ?>
						</h1>
					</div>
				</div>
			</section>

			<section class="shop">
				<div class="content-wrapper">
					<div class="shop-content">
						<h2>
							<?php echo $shop_title ?>
						</h2>
						<p>
							<?php echo $shop_content ?>
						</p>
						<div class="content-button">
							<button class="button" type="button" onclick="location.href='<?php echo site_url('/shop/') ?>';">Shop Now</button>
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
						<h2>
							<?php echo $education_title ?>
						</h2>
						<p>
							<?php echo $education_content ?>
						</p>
						<div class="content-button">
							<button class="button" type="button" onclick="location.href='<?php echo site_url('/education/') ?>';">Learn More</button>
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
					<h2>
						<?php echo $about_title ?>
					</h2>
					<p>
						<?php echo $about_content ?>
					</p>
						<div class="content-button">
							<button class="button" type="button" onclick="location.href='<?php echo site_url('/our-story/') ?>';">Learn More</button>
						</div>
					</div>
					<figure>
						<div class="about-img">
							<?php echo do_shortcode('[metaslider id="1037"]'); ?>
						</div>
					</figure>
				</div>
			</section>

		<?php endwhile; ?> 
	</div>
</section>


<?php get_footer(); ?>
