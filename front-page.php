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
		<section class="header">
			<div class="content-wrapper">
				<div class="navbar">
					<div class="dropdown">
						<button class="dropbtn">_____</br>_____</br>_____
						<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
						<a href="http://daves-emporium.local/shop/">SHOP</a>
						<a href="http://daves-emporium.local/education/">EDUCATION</a>
						<a href="http://daves-emporium.local/our-story/">ABOUT</a>
						<a href="http://daves-emporium.local/">COMMUNITY</a>
						<a href="http://daves-emporium.local/">SOCIAL</a>
						</div>
					</div>
				</div>
				<figure>
					<div class="header-img">
						<a href="http://daves-emporium.local"> <img src="https://i1.wp.com/davesemporium.xyz/wp-content/uploads/2020/12/DE_LOGO.png?w=1920&ssl=1" /></a>
					</div>
				</figure>
				<div class="header-title">
					<p>Dave's Emporium</p>
				</div>
				<nav>
					<ul>
						<li>
							<a style="color:black;" href="http://daves-emporium.local/shop/">SHOP</a>
						</li>
						<li>
							<a style="color:black;" href="http://daves-emporium.local/education/">EDUCATION</a>						
						</li>
						<li>
							<a style="color:black;" href="http://daves-emporium.local/our-story/">ABOUT</a>
						</li>
						<li>
							<a style="color:black;" href="http://daves-emporium.local/">COMMUNITY</a>
						</li>
						<li>
							<a style="color:black;" href="http://daves-emporium.local/">SOCIAL</a>						
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<section class="mission">
			<div class="content-wrapper">
				<div class="mission-content">
					<?php
						$post_id = 15;
						$queried_post = get_post($post_id);
						echo $queried_post->post_content;
					?>
				</div>
			</div>
		</section>

		<section class="shop">
			<div class="content-wrapper">
				<div class="shop-content">
					<?php
						$post_id = 16;
						$queried_post = get_post($post_id);
						echo $queried_post->post_content;
					?>
					<div class="content-button">
						<button class="button" type="button" onclick="location.href='#contact';">SHOP NOW</button>
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
					<?php
						$post_id = 18;
						$queried_post = get_post($post_id);
						echo $queried_post->post_content;
						?>
					<div class="content-button">
						<button class="button" type="button" onclick="location.href='#contact';">Learn more</button>
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
					<?php
						$post_id = 21;
						$queried_post = get_post($post_id);
						echo $queried_post->post_content;
						?>
					<div class="content-button">
						<button class="button" type="button" onclick="location.href='#contact';">learn more</button>
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
