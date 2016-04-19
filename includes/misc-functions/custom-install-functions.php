<?php
/**
 * Custom Installation Functions for the Leben Theme Bundle. Make custom changes for installation here.
 *
 * Strings:
 * LANDSCAPE
 * Leben Theme Bundle
 * leben_theme_bundle
 * leben-theme-bundle
 * landscape
 * Leben
 * 
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks + Leben
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2015, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Returns the array of the custom theme mods for this theme. As a developer, you can get this array under "Appearance" > "Export Customizer" with the MP Stacks + Developer Add-On.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    void
 * @return   array
 */
function leben_theme_bundle_theme_mods(){
			
	return array ( 
		0 => false, 
		'mp_knapstack_header_bg_color_opacity' => '1', 
		'mp_knapstack_header_bg_color' => '#0a0a0a', 
		'mp_knapstack_header_font' => 'Abel', 
		'mp_knapstack_header_fixed' => 'fixed', 
		'mp_knapstack_header_bump_site_down' => true, 
		'mp_core_logo' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/01/lebenlogo.jpg', 
		'mp_core_logo_width' => '100', 
		'mp_core_logo_height' => '50', 
		'nav_menu_locations' => array ( 'primary' => 8, ), 
		'mp_knapstack_font_family' => 'Abel', 
		'mp_knapstack_page_header_bg_color' => '#1e1e1e', 
		'mp_knapstack_page_header_button_submit' => '#1e1e1e', 
		'mp_knapstack_page_header_button_hover' => '#1e1e1e', 
		'mp_knapstack_page_header_button_text_hover' => '#ffffff', 
		'mp_knapstack_button_submit' => '#0a0a0a', 
		'mp_knapstack_button_hover' => '#0a0a0a', 
		'mp_knapstack_borders' => '#ffffff', 
		'mp_knapstack_form_input_border_radius' => '3', 
		'mp_knapstack_background_color' => '#fcfcfc', 
		'mp_stacks_footer_stack' => '14', 
	);
	
}
add_filter( 'mp_stacks_required_theme_mods_for_' . 'leben_theme_bundle', 'leben_theme_bundle_theme_mods' );

/**
 * Return what the dirname of the theme we wish to use should be. 
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    string $theme_dir_name
 * @return   string $theme_dir_name
 */
function leben_theme_bundle_required_theme_dirname_custom( $theme_dir_name ){
	return 'leben-theme-bundle-child-theme';
}
add_filter( 'leben_theme_bundle_required_theme_dirname', 'leben_theme_bundle_required_theme_dirname_custom' );

/**
 * Return what the Fancy Name of theme we wish to use should be. This is the title in the theme's style.css file.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    string $fancy_theme_name
 * @return   string $fancy_theme_name
 */
function leben_theme_bundle_fancy_theme_name_custom( $fancy_theme_name ){
	return 'Leben Theme Bundle (Child Theme)';
}
add_filter( 'leben_theme_bundle_fancy_theme_name', 'leben_theme_bundle_fancy_theme_name_custom' );

/**
 * Set up the Smooth Scroll plugin's default setting for the Leben Theme Bundle
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    string $theme_bundle_slug
 * @return   string $theme_bundle_slug
 */

function leben_theme_bundle_smooth_scroll_up_setup( $theme_bundle_slug ){
	
	if ( $theme_bundle_slug == 'leben_theme_bundle' ){
		
		//MP Smooth Scroll Up Plugin Default Settings
		$smooth_scroll_up_setting = array(
			'scrollup_text' => NULL,
			'scrollup_type' => 'image',
			'scrollup_position' => 'right', 
			'scrollup_show' => '1',
			'scrollup_mobile' => '0',
			'scrollup_animation' => NULL,
			'scrollup_distance' => NULL,
			'scrollup_attr' => NULL 
		);
		update_option( 'scrollup_settings', $smooth_scroll_up_setting );
		
	}
}
add_action( 'mp_stacks_additional_installation_actions', 'leben_theme_bundle_smooth_scroll_up_setup' );