<?php
/**
 * Search form template
 *
 * @package themeHandle
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
	<input type="text" class="hollow" name="s" id="s" placeholder="" />
	<input type="submit" class="submit hollow" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Go!', 'greather-than' ); ?>" />
</form>