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
				<figure>
					<div class="header-img">
						<img src="https://i1.wp.com/davesemporium.xyz/wp-content/uploads/2020/12/DE_LOGO.png?w=1920&ssl=1" />
					</div>
				</figure>
				<div class="header-title">
					<p>Dave's Emporium</p>
				</div>
				<nav>
					<ul>
						<li>SHOP</li>
						<li>EDUCATION</li>
						<li>ABOUT</li>
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
				<?php echo do_shortcode('[metaslider id="47"]'); ?>
			</div>
		</section>

		<section class="shop">
			<div class="content-wrapper">
				<?php
					$post_id = 16;
					$queried_post = get_post($post_id);
					echo $queried_post->post_content;
				?>
			</div>
		</section>

		<section class="education">
			<div class="content-wrapper">
				<?php
					$post_id = 18;
					$queried_post = get_post($post_id);
					echo $queried_post->post_content;
				?>
			</div>
		</section>

		<section class="about">
			<div class="content-wrapper">
				<?php
					$post_id = 21;
					$queried_post = get_post($post_id);
					echo $queried_post->post_content;
				?>
			</div>
		</section>

	</div>
</section>

<?php get_footer(); ?>
