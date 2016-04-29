<?php
/**
 * Custom Installation Functions for the Leben Theme Bundle. Make custom changes for installation here.
 *
 * Strings:
 * LEBEN
 * Leben Theme Bundle
 * leben_theme_bundle
 * leben-theme-bundle
 * leben
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
 * WooCommerce doesn't have this function defined upon installation so we custom define it for them here to prevent errors.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    void
 * @return   void
 */
function leben_maybe_define_wc_functions(){
	if (!function_exists('wc_get_screen_ids')) {
		function wc_get_screen_ids (){
			
			$wc_screen_id = sanitize_title( __( 'WooCommerce', 'woocommerce' ) );
			$screen_ids   = array(
				'toplevel_page_' . $wc_screen_id,
				$wc_screen_id . '_page_wc-reports',
				$wc_screen_id . '_page_wc-settings',
				$wc_screen_id . '_page_wc-status',
				$wc_screen_id . '_page_wc-addons',
				'toplevel_page_wc-reports',
				'product_page_product_attributes',
				'edit-product',
				'product',
				'edit-shop_coupon',
				'shop_coupon',
				'edit-product_cat',
				'edit-product_tag',
				'edit-product_shipping_class',
				'profile',
				'user-edit'
			);
		
			foreach ( wc_get_order_types() as $type ) {
				$screen_ids[] = $type;
				$screen_ids[] = 'edit-' . $type;
			}
		
			return apply_filters( 'woocommerce_screen_ids', $screen_ids );

		}
	}
}
add_action( 'admin_init', 'leben_maybe_define_wc_functions');