<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" class="container-full">

	<h1 class="entry-title">
		<?php printf( __( 'Search Results for: %s', 'themeTextDomain' ), '<span>' . get_search_query() . '</span>' ); ?>
	</h1>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content'); ?>

		<?php endwhile; ?>

		<?php get_template_part( 'inc/pagination' ); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>