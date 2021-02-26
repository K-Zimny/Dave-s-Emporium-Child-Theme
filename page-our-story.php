<?php
/**
 * The template for displaying all single posts
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
            <?php query_posts('post_type=our_team'); ?>
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
                                <img class="bio-img-left" src="<?php echo $image; ?>" />
                                <p><?php echo $bio; ?></p>
                            </div>
                        </div>
                    </div>
                    
                <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
