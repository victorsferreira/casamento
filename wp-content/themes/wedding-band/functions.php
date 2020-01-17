<?php
/**
 * Wedding Band functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wedding_Band
 */


//define theme version
if ( ! defined( 'WEDDING_BAND_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();	
	define ( 'WEDDING_BAND_THEME_VERSION', $theme_data->get( 'Version' ) );
}

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/custom-functions.php';
/**
 * Implement the WordPress Hooks.
 */
require get_template_directory() . '/inc/wp-hooks.php';

/**
 * Metabox for Sidebar Layout
*/
require get_template_directory() .'/inc/metabox.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 ** Custom template functions for this theme.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Implement the template hooks.
 */
require get_template_directory() . '/inc/template-hooks.php';

/**
 * Widgets.
 */
require get_template_directory() .'/inc/widgets/widgets.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load tgmp file.
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';