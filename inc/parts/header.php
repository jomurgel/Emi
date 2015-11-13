<?php 
/**
 * Header
 *
 * @package themeHandle
 */
?>

<header id="site-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">       

	<div class="primary-header">
		<a class="logo-icon" href="<?php echo esc_url( home_url() ); ?>/">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/assets/images/logo.png'" alt="<?php bloginfo('name'); ?>" class="img-responsive" width="24" height="24" />
		</a>
	</div>

	<div class="primary-menu">
		<?php get_template_part('inc/parts/nav'); ?>
	</div>

</header><!-- #branding -->