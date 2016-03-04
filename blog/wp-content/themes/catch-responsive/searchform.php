<?php
/**
 * The template for displaying search forms
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */
?>

<?php $options 	= catchresponsive_get_theme_options(); // Get options ?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'catchresponsive' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( $options[ 'search_text' ] ); ?>" value="<?php esc_attr_e( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'catchresponsive' ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'catchresponsive' ); ?>">
</form>
