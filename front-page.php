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
						<img src="https://images.unsplash.com/photo-1508748169069-82590c9f26e6?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1267&q=80" />
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
						<img src="https://images.unsplash.com/photo-1599008633840-052c7f756385?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" />
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
						<img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" />
					</div>
				</figure>
			</div>
		</section>

	</div>
</section>

<?php get_footer(); ?>
