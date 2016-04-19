<?php 
/**
 * MP Stacks Template Store
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Store
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2016, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */

 /**
 * If required add-ons aren't active, stop and install it now
 */
if (!function_exists('mp_stacks_features_textdomain') || !function_exists('mp_stacks_forms_textdomain') || !function_exists('mp_stacks_googlefonts_textdomain') || !function_exists('mp_stacks_icons_textdomain') || !function_exists('mp_stacks_linkgrid_textdomain') || !function_exists('mp_stacks_mailchimp_textdomain') || !function_exists('mp_stacks_parallax_textdomain') || !function_exists('mp_stacks_postgrid_textdomain') || !function_exists('mp_stacks_second_text_textdomain') || !function_exists('mp_stacks_second_video_textdomain') || !function_exists('mp_stacks_shadows_textdomain') || !function_exists('mp_stacks_slider_textdomain') || !function_exists('mp_stacks_socialgrid_textdomain') || !function_exists('mp_stacks_sociallinks_textdomain') || !function_exists('mp_stacks_video_backgrounds_textdomain') || !function_exists('mp_stacks_widgets_textdomain') || !function_exists('mp_stacks_woogrid_textdomain')){
					
	/**
	 * Check if mp_stacks_features is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-features-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_forms is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-forms-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_googlefonts is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-googlefonts-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_icons is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-icons-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_linkgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-linkgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_mailchimp is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-mailchimp-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_parallax is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-parallax-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_postgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-postgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_second_text is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-second-text-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_second_video is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-second-video-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_shadows is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-shadows-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_slider is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-slider-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_socialgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-socialgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_sociallinks is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-sociallinks-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_video_backgrounds is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-video-backgrounds-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_widgets is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-widgets-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_woogrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-woogrid-check.php' ); 
		
		
}
/**
 * Otherwise, if all required plugins are active, carry out the plugin's functions
 */
else{

	 /**
	 * Add Store to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_leben_store
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_leben_store( $installed_templates ){ 
		
		$installed_templates['mp_stacks_leben_store_array'] = array(
			'template_slug' => 'leben_store',
			'template_title' => __( 'Store', 'leben_theme_bundle' ),
			'template_description' => __('Created using: The Leben Theme Bundle\'s "Store" Stack.', 'leben_theme_bundle' ),
			'template_tags' => 'Leben, Store',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/leben/store',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_leben_store' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_leben_store_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_leben_store_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['page']['leben_store'] = array( 'title' => 'Store','page_template' => 'default','add_to_primary_menu' => 'true', );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'leben_theme_bundle_default_stacks', 'mp_stacks_templates_leben_store_to_default_stacks' );
	
	/**
	 * This function holds and returns the Store Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_leben_store_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: The Leben Theme Bundle\'s "Store" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Store',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1461016576:8',
      ),
      '_edit_last' => 
      array (
        'value' => '8',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'woogrid',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'features_per_row' => 
      array (
        'value' => '3',
      ),
      'feature_shadow_apply_to' => 
      array (
        'value' => '""',
      ),
      'feature_text_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'feature_title_size' => 
      array (
        'value' => '25',
      ),
      'feature_icon_size' => 
      array (
        'value' => '300',
      ),
      'feature_icon_stroke_apply_to' => 
      array (
        'value' => '""',
      ),
      'mp_features_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Shirt 1 - $19.99 CAD',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_image',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/01/10.jpg',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => 'lightbox',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;right&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Info&quot; link=&quot;fix this&quot; btn_bg=&quot;show&quot; color=&quot;#1e73be&quot; hover_color=&quot;#4a88bf&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;lightbox&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;] [mp_button icon=&quot;&quot; icon_position=&quot;right&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Add To Cart&quot; link=&quot;how do i do this&quot; btn_bg=&quot;show&quot; color=&quot;#3dc654&quot; hover_color=&quot;#35ad49&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;lightbox&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Shirt 2 - $19.99 CAD',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_image',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/01/8.jpg',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;right&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Info&quot; link=&quot;fix this&quot; btn_bg=&quot;show&quot; color=&quot;#1e73be&quot; hover_color=&quot;#4a88bf&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;lightbox&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;] [mp_button icon=&quot;&quot; icon_position=&quot;right&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Add To Cart&quot; link=&quot;how do i do this&quot; btn_bg=&quot;show&quot; color=&quot;#3dc654&quot; hover_color=&quot;#35ad49&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;lightbox&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Shirt 3 - $19.99 CAD',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_image',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/01/6-1.jpg',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;right&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Info&quot; link=&quot;fix this&quot; btn_bg=&quot;show&quot; color=&quot;#1e73be&quot; hover_color=&quot;#4a88bf&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;lightbox&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;] [mp_button icon=&quot;&quot; icon_position=&quot;right&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Add To Cart&quot; link=&quot;how do i do this&quot; btn_bg=&quot;show&quot; color=&quot;#3dc654&quot; hover_color=&quot;#35ad49&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;lightbox&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Shirt 4 - $19.99 CAD',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_image',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/01/7.jpg',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;right&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Info&quot; link=&quot;fix this&quot; btn_bg=&quot;show&quot; color=&quot;#1e73be&quot; hover_color=&quot;#4a88bf&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;lightbox&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;] [mp_button icon=&quot;&quot; icon_position=&quot;right&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;Add To Cart&quot; link=&quot;how do i do this&quot; btn_bg=&quot;show&quot; color=&quot;#3dc654&quot; hover_color=&quot;#35ad49&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;lightbox&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_ct1_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_ct2_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'mp_stack_id' => 
      array (
        'value' => '11',
      ),
      'feature_text_area_max_width' => 
      array (
        'value' => '300',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '35',
      ),
      'woogrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => 'all',
              'attachment' => false,
            ),
            'taxonomy_bg_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'woogrid_default_orderby' => 
      array (
        'value' => 'most_popular',
      ),
      'woogrid_post_spacing' => 
      array (
        'value' => '0',
      ),
      'woogrid_bg_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'backgroundColorAlpha' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'woogrid_masonry' => 
      array (
        'value' => 'woogrid_masonry',
      ),
      'woogrid_isotope' => 
      array (
        'value' => 'woogrid_isotope',
      ),
      'woogrid_isotope_filter_groups' => 
      array (
        'value' => '["product_cat"]',
      ),
      'woogrid_isotope_orderby_options' => 
      array (
        'value' => '""',
      ),
      'woogrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'woogrid_isotope_nav_btn_bg',
      ),
      'woogrid_isotope_nav_btn_text' => 
      array (
        'value' => 'woogrid_isotope_nav_btn_text',
      ),
      'woogrid_isotope_nav_btn_icons' => 
      array (
        'value' => '',
      ),
      'woogrid_featured_images_show' => 
      array (
        'value' => 'woogrid_featured_images_show',
      ),
      'woogrid_image_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'woogrid_image_overlay_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#FFF',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'animation_length' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '70',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'woogrid_title_show' => 
      array (
        'value' => 'woogrid_title_show',
      ),
      'woogrid_title_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'woogrid_title_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'woogrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'animation_length' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'woogrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'woogrid_price_show' => 
      array (
        'value' => 'woogrid_price_show',
      ),
      'woogrid_price_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'woogrid_price_spacing' => 
      array (
        'value' => '10',
      ),
      'woogrid_price_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'animation_length' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'woogrid_price_background_show' => 
      array (
        'value' => '',
      ),
      'woogrid_excerpt_show' => 
      array (
        'value' => '',
      ),
      'woogrid_excerpt_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'woogrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Abel',
      ),
      'woogrid_load_more_button_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'woogrid_load_more_button_text_color' => 
      array (
        'value' => '#ffffff',
      ),
      'woogrid_load_more_button_color_mouse_over' => 
      array (
        'value' => '#ffffff',
      ),
      'woogrid_price_color' => 
      array (
        'value' => '#dd3333',
      ),
      'woogrid_price_size' => 
      array (
        'value' => '15',
      ),
      'woogrid_featured_images_inner_margin' => 
      array (
        'value' => '0',
      ),
      'woogrid_per_row' => 
      array (
        'value' => '3',
      ),
      'woogrid_title_size' => 
      array (
        'value' => '25',
      ),
      'woogrid_title_background_padding' => 
      array (
        'value' => '300',
      ),
      'brick_max_width' => 
      array (
        'value' => '2000',
      ),
      'woogrid_isotope_navigation' => 
      array (
        'value' => 'buttons',
      ),
      'woogrid_isotope_navigation_align' => 
      array (
        'value' => 'left',
      ),
      'woogrid_isotope_filter_by_textsize' => 
      array (
        'value' => '15',
      ),
      'woogrid_isotope_filter_by_position' => 
      array (
        'value' => 'above',
      ),
      'woogrid_isotope_filter_by_color' => 
      array (
        'value' => '#ffffff',
      ),
      'woogrid_isotope_nav_btn_bg_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'woogrid_isotope_nav_btn_bg_color_hover' => 
      array (
        'value' => '#ffffff',
      ),
      'woogrid_isotope_filter_by_text' => 
      array (
        'value' => 'Filter By:',
      ),
      'woogrid_isotope_filtering_behavior' => 
      array (
        'value' => 'default_isotope',
      ),
      'woogrid_isotope_nav_btn_text_size' => 
      array (
        'value' => '20',
      ),
      'woogrid_isotope_nav_btn_text_color' => 
      array (
        'value' => '#ffffff',
      ),
      'woogrid_isotope_nav_btn_text_color_hover' => 
      array (
        'value' => '#0a0a0a',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#1e1e1e',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '0',
      ),
      'woogrid_featured_images_height' => 
      array (
        'value' => '500',
      ),
      'woogrid_load_more_button_text_color_mouse_over' => 
      array (
        'value' => '#0a0a0a',
      ),
    ),
  ),
);
		
		//Loop through each brick
		foreach( $template_array['stack_bricks'] as $brick_name => $brick_options ){
			
			//Loop through each meta option
			foreach( $brick_options as $meta_key => $meta_option ){
				
				//If this isn't the title or the order
				if ( $meta_key != 'brick_title' && $meta_key != 'mp_stack_order' ){
						
					//If this is a repeater
					if ( isset( $meta_option['value'] ) && is_array( $meta_option['value'] ) ){
						
						$fixed_repeaters = array();
						
						$repeat_counter = 0;
						
						//Loop thorugh each repeater
						foreach( $meta_option['value'] as $repeaters ){
							
							//Loop through each field in this repeater
							foreach( $repeaters as $field_key_id => $repeater_meta_option ){
								
								//If this is an attachment, set the url to be local to this plugin
								if ( isset( $repeater_meta_option['attachment'] ) && $repeater_meta_option['attachment'] ){
									
									//Check if this field contains any HTML img tags
									if ( strpos( $repeater_meta_option['value'], '&lt;p&gt;&lt;img' ) !== false ){
										
										//Get the URL in each img tag's "src" attribute
										$value_explode_results = explode( 'src=&quot;', $repeater_meta_option['value'] );
										
										$rebuilt_field_value = NULL;
																			
										//Loop through each exploded string
										if ( is_array( $value_explode_results ) ){
											foreach( $value_explode_results as $value_explode_result ){
																						
												//Get the image url
												$temp_explode_holder = explode( '&quot', $value_explode_result );
												$img_url = $temp_explode_holder[0];
												
												$repeater_meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'images/' . $img_url, __FILE__ ), $repeater_meta_option['value'] );
												
											}
										}
										
										$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = $repeater_meta_option['value'];
									}
									else{
									
										$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = plugins_url( 'images/' . $repeater_meta_option['value'], __FILE__ );
									}
									
								}
							}
							
							$repeat_counter = $repeat_counter + 1;
							
						}
					}
					
					//If this is not a repeater
					else{
						
						//If this is an attachment, set the url to be local to this plugin
						if ( isset( $meta_option['attachment'] ) && $meta_option['attachment'] ){
							
							//Check if this field contains any HTML img tags
							if ( strpos( $meta_option['value'], '&lt;p&gt;&lt;img' ) !== false ){
								
								//Get the URL in each img tag's "src" attribute
								$value_explode_results = explode( 'src=&quot;', $meta_option['value'] );
								
								$rebuilt_field_value = NULL;
																
								//Loop through each exploded string
								if ( is_array( $value_explode_results ) ){
									foreach( $value_explode_results as $value_explode_result ){
																				
										//Get the image url
										$temp_explode_holder = explode( '&quot', $value_explode_result );
										$img_url = $temp_explode_holder[0];
	
										$meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'images/' . $img_url, __FILE__ ), $meta_option['value'] );
										
									}
								}
								
								$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = $meta_option['value'];
							}
							else{		
									
								$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = plugins_url( 'images/' . $meta_option['value'], __FILE__ );
							}
						}
						
					}
				}
				
			}
			
		}
		
		return $template_array;
		
	}}