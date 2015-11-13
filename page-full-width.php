<?php
/**
 * Template Name: Full Width Page
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary-full" class="container-full">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content', 'page' ); ?>
	
	<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_footer(); ?>