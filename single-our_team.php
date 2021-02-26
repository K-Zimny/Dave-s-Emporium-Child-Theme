<?php
/**
 * The template for displayingour team member individual page. 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php while ( have_posts() ) : the_post(); 
				$name = get_field("name");
				$position = get_field("position");
				$image = get_field("image");
				$bio = get_field("bio");
				$size = "full";
            ?>
				<div class="bio">
					<div class="content-wrapper">
						<div class="bio-title">
							<h2><?php echo $name; ?></h2>
							<h4><?php echo $position; ?><h4>
						</div>
						<div class="bio-content">
							<div class="bio-img-left">
								<?php echo wp_get_attachment_image( $image, $size ); ?>
							</div>
							<p><?php echo $bio; ?></p>
						</div>
					</div>
				</div>

            <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
