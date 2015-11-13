<?php 
/**
 * Navigation
 *
 * @package themeHandle
 */
?>

<button type="button" class="menu-toggle" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
	<span class="text">Toggle navigation</span>
	<span class="bar top-bar"></span>
	<span class="bar middle-bar"></span>
	<span class="bar bottom-bar"></span>
</button>
<nav class="access" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav><!-- #access -->  