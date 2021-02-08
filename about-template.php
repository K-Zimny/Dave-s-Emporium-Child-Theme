
<?php
/*
 * Template Name: about-template
 * description: >-
  Page template for about page
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="header">
				<div class="content-wrapper">
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

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
