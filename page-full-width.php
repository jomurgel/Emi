<?php
/**
 * Template Name: Full Width Page
 *
 * @package This_is_a_test
 */

get_header(); ?>

<section id="primary" class="full-width" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content', 'page' ); ?>
	
	<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_footer(); ?>