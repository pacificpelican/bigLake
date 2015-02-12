<?php
/**
 * The template for displaying all single posts.
 *
 * @package Green Lake
 */

get_header(); ?>
<div class="singlepostsupercontainer" id="containerportplus1">
<div class="row">
            
	<div id="primary0" class="content-area0 large-8 columns">
		<main id="main" class="site-main" role="main">
	
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="greenlakesidebar" class="sidebararea-area large-3 columns">
<?php get_sidebar(); ?>
	</div><!-- #greenlakesidebar -->
	
</div><!-- .row -->
<div class="row">
	<div id="greenlakefooter" class="footera-area large-12 columns">
<?php get_footer(); ?>
	</div><!-- #greenlakefooter -->
</div><!-- .row -->
</div><!-- #containerportplus1 -->