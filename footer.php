<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package themeHandle
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" class="row" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
	<div id="copyright" class="container">
		&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
		Design by <a href="designerURI" target="_blank" rel="nofollow">themeDesigner</a>.  
		Built by <a href="authorURI" target="_blank" rel="nofollow">themeAuthor</a>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

<?php get_template_part( 'inc/analytics' ); // track your stuff ?>

</body>
</html>