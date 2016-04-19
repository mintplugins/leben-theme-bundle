<?php
/*
Plugin Name: Leben Theme Bundle
Plugin URI: https://mintplugins.com
Description: A bundle of Stack Templates, Plugins, a Theme, and everything needed for the Leben Theme Experience.
Version: 1.0.0.0
Author: Mint Plugins
Author URI: http://mintplugins.com
Text Domain: leben_theme_bundle
Domain Path: languages
License: GPL2
*/

/*  Copyright 2015  Phil Johnston  (email : phil@mintplugins.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Mint Plugins Core.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Mint Plugins Core, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
|--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/
// Plugin version
if( !defined( 'LEBEN_THEME_BUNDLE_VERSION' ) )
	define( 'LEBEN_THEME_BUNDLE_VERSION', '1.0.0.0' );

// Plugin Folder URL
if( !defined( 'LEBEN_THEME_BUNDLE_PLUGIN_URL' ) )
	define( 'LEBEN_THEME_BUNDLE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Plugin Folder Path
if( !defined( 'LEBEN_THEME_BUNDLE_PLUGIN_DIR' ) )
	define( 'LEBEN_THEME_BUNDLE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Plugin Root File
if( !defined( 'LEBEN_THEME_BUNDLE_PLUGIN_FILE' ) )
	define( 'LEBEN_THEME_BUNDLE_PLUGIN_FILE', __FILE__ );

/*
|--------------------------------------------------------------------------
| GLOBALS
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| INTERNATIONALIZATION
|--------------------------------------------------------------------------
*/

function leben_theme_bundle_textdomain() {

	// Set filter for plugin's languages directory
	$leben_theme_bundle_lang_dir = dirname( plugin_basename( LEBEN_THEME_BUNDLE_PLUGIN_FILE ) ) . '/languages/';
	$leben_theme_bundle_lang_dir = apply_filters( 'leben_theme_bundle_languages_directory', $leben_theme_bundle_lang_dir );


	// Traditional WordPress plugin locale filter
	$locale        = apply_filters( 'plugin_locale',  get_locale(), 'leben-theme-bundle' );
	$mofile        = sprintf( '%1$s-%2$s.mo', 'leben-theme-bundle', $locale );

	// Setup paths to current locale file
	$mofile_local  = $leben_theme_bundle_lang_dir . $mofile;
	$mofile_global = WP_LANG_DIR . '/leben-theme-bundle/' . $mofile;

	if ( file_exists( $mofile_global ) ) {
		// Look in global /wp-content/languages/leben_theme_bundle folder
		load_textdomain( 'leben_theme_bundle', $mofile_global );
	} elseif ( file_exists( $mofile_local ) ) {
		// Look in local /wp-content/plugins/message_bar/languages/ folder
		load_textdomain( 'leben_theme_bundle', $mofile_local );
	} else {
		// Load the default language files
		load_plugin_textdomain( 'leben_theme_bundle', false, $leben_theme_bundle_lang_dir );
	}

}
add_action( 'init', 'leben_theme_bundle_textdomain', 1 );

/**
 * Activation Hook Function - Gets Stack Pack License, Redirects to installation of dependencies, saves Theme MetaData.
 */
require( LEBEN_THEME_BUNDLE_PLUGIN_DIR . 'includes/misc-functions/standard-install-functions.php' );

/*
|--------------------------------------------------------------------------
| INCLUDES
|--------------------------------------------------------------------------
*/
function leben_theme_bundle_include_files(){
		
	/**
	 * If mp_core isn't active, stop and install it now
	 */
	if (!function_exists('mp_core_textdomain')){
		
		/**
		 * Include Plugin Checker
		 */
		require( LEBEN_THEME_BUNDLE_PLUGIN_DIR . '/includes/plugin-checker/class-plugin-checker.php' );
		
		/**
		 * Include Plugin Installer
		 */
		require( LEBEN_THEME_BUNDLE_PLUGIN_DIR . '/includes/plugin-checker/class-plugin-installer.php' );
		
		/**
		 * Check if mp_core in installed
		 */
		include_once( LEBEN_THEME_BUNDLE_PLUGIN_DIR . 'includes/plugin-checker/included-plugins/mp-core-check.php' );
		
	}
	//If mp_core IS Active
	else{
		
		//Check the validity of the license for this plugin (boolean)
		$plugin_vars = array(
			'plugin_name' => 'Leben Theme Bundle',
			'plugin_api_url' => 'https://mintplugins.com/',
		);	
	
		$license_key_valid = mp_core_listen_for_license_and_get_validity( $plugin_vars );
		
		//If we don't have a valid license
		if( $license_key_valid != true ){
		
			/**
			 * Show license form at the top of admin pages
			 */	
			new MP_CORE_Show_License_Form_In_Notices( array('plugin_name' => 'Leben Theme Bundle' ) );
			
			/**
			 * Update script - keeps this plugin up to date
			 */
			require( LEBEN_THEME_BUNDLE_PLUGIN_DIR . 'includes/updater/leben-theme-bundle-update.php' );
			
				
		}
		//If MP Stacks or Knapstack aren't installed
		elseif( !leben_theme_bundle_dependencies() ) {
			
			/**
			 * Update script - keeps this plugin up to date
			 */
			require( LEBEN_THEME_BUNDLE_PLUGIN_DIR . 'includes/updater/leben-theme-bundle-update.php' );
			
			//Loop through each required plugin and check for it
			foreach( leben_theme_bundle_dependencies_array() as $function_exist_name => $checker_file_name ){
				
				/**
				 * Check the status of the required plugin and install it if not. Activate it if it is inactive
				 */
				require( LEBEN_THEME_BUNDLE_PLUGIN_DIR . 'includes/plugin-checker/included-plugins/' . $checker_file_name ); 
				
			}

			
		}
		/**
		 * Otherwise, if license passes and all required plugins are installed, carry out the plugin's functions
		 */
		else{
				
			/**
			 * Update script - keeps this plugin up to date
			 */
			require( LEBEN_THEME_BUNDLE_PLUGIN_DIR . 'includes/updater/leben-theme-bundle-update.php' );
			
			
						
		}
	}
}
add_action('after_setup_theme', 'leben_theme_bundle_include_files', 9);

/**
 * Check for the existence of the launchstack dependencies
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    array $args See link for description.
 * @return   boolean
 */
function leben_theme_bundle_dependencies(){
	
	//These values come from each Stack template's Utility File and are pasted in			
	$required_text_domain_strings = leben_theme_bundle_dependencies_array();
	
	//Loop through each textdomain
	foreach ( $required_text_domain_strings as $text_domain => $plugin_checker_file ){
		
		//If this function does not exist
		if ( !function_exists( $text_domain ) ){
			
			//If this is not a function but it is a class
			if ( class_exists( $text_domain ) ){
				return true;	
			}
			
			//Return false
			return false;
		}
		
	}
	
	//Return true - all text domains required exist.
	return true;
		
}

function leben_theme_bundle_dependencies_array(){
	return array(
		//Hard Coded Stuff:
		'mp_core_textdomain' => 'mp-core-check.php',
		'mp_stacks_textdomain' => 'mp-stacks-check.php',
		'mp_knapstack_textdomain' => 'mp-knapstack-check.php',
		'mp_menu_textdomain' => 'mp-menu-check.php',
		'mp_buttons_textdomain' => 'mp-buttons-check.php',
		'mp_customizer_backups_textdomain' => 'mp-customizer-backups-check.php',
		
		//Pasted from Stack Template's Utility File:
		'mp_stacks_features_textdomain' => 'mp-stacks-features-check.php',
		'mp_stacks_forms_textdomain' => 'mp-stacks-forms-check.php',
		'mp_stacks_googlefonts_textdomain' => 'mp-stacks-googlefonts-check.php',
		'mp_stacks_icons_textdomain' => 'mp-stacks-icons-check.php',
		'mp_stacks_linkgrid_textdomain' => 'mp-stacks-linkgrid-check.php',
		'mp_stacks_mailchimp_textdomain' => 'mp-stacks-mailchimp-check.php',
		'mp_stacks_parallax_textdomain' => 'mp-stacks-parallax-check.php',
		'mp_stacks_postgrid_textdomain' => 'mp-stacks-postgrid-check.php',
		'mp_stacks_second_text_textdomain' => 'mp-stacks-second-text-check.php',
		'mp_stacks_second_video_textdomain' => 'mp-stacks-second-video-check.php',
		'mp_stacks_shadows_textdomain' => 'mp-stacks-shadows-check.php',
		'mp_stacks_slider_textdomain' => 'mp-stacks-slider-check.php',
		'mp_stacks_socialgrid_textdomain' => 'mp-stacks-socialgrid-check.php',
		'mp_stacks_sociallinks_textdomain' => 'mp-stacks-sociallinks-check.php',
		'mp_stacks_video_backgrounds_textdomain' => 'mp-stacks-video-backgrounds-check.php',
		'mp_stacks_widgets_textdomain' => 'mp-stacks-widgets-check.php',
		'mp_stacks_woogrid_textdomain' => 'mp-stacks-woogrid-check.php',
		
		//Don't forget to copy and paste the "check" files into the "includes > plugin-checker > included-plugins" directory.

	);	
}
			