<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" role="main" class="col pull-left span_8">

	<article id="post-0" class="post error404 not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Aw, Snap!', 'themeTextDomain' ); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php _e( 'You broke the internet.  Maybe you can search for what you&rsquo;re looking for.', 'themeTextDomain' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>?>