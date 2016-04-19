<?php
/**
 * This file contains a function which checks if the Leben Theme Bundle Child Theme is installed.
 *
 * @since 1.0.0
 *
 * @package    MP Core + Features
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2015, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */
 
/**
* Check to make sure the Leben Theme Bundle Child Theme is installed.
*
* @since    1.0.0
* @link     http://mintplugins.com/doc/plugin-checker-class/
* @return   array $plugins An array of plugins to be installed. This is passed in through the mp_core_check_plugins filter.
* @return   array $plugins An array of plugins to be installed. This is passed to the mp_core_check_plugins filter. (see link).
*/
if (!function_exists('mp_leben_theme_bundle_child_theme_plugin_check')){
	function mp_leben_theme_bundle_child_theme_plugin_check( $plugins ) {
		
		//Because Switch_theme doesn't activate until a second page load, we need to double check if it's active here.
		$current_theme = wp_get_theme();
		if ( $current_theme->get( 'Name' ) != 'Leben Theme Bundle (Child Theme)' ){
			
			$add_plugins = array(
				array(
					'plugin_name' => 'Leben Theme Bundle (Child Theme)',
					'plugin_message' => __('You require the Leben Theme Bundle (Child Theme). Install it here.', 'mp_leben_theme_bundle_child_theme'),
					'plugin_filename' => '',
					'plugin_download_link' => 'http://mintplugins.com/theme-bundle-child-themes/leben-theme-bundle-child-theme.zip',
					'plugin_api_url' => 'https://mintplugins.com/',
					'plugin_info_link' => 'http://mintplugins.com/plugins/leben-theme-bundle/',
					'plugin_group_install' => true,
					'plugin_licensed' => false,
					'plugin_licensed_parent_name' => 'Leben Theme Bundle',
					'plugin_required' => true,
					'plugin_wp_repo' => true,
					'plugin_is_theme' => true,
				)
			);
			
			return array_merge( $plugins, $add_plugins );
		}
		else{
			return $plugins;
		}
	}
}
add_filter( 'mp_core_check_plugins', 'mp_leben_theme_bundle_child_theme_plugin_check' );