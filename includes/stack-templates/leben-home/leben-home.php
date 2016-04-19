<?php 
/**
 * MP Stacks Template Home
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Home
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2016, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */

 /**
 * If required add-ons aren't active, stop and install it now
 */
if (!function_exists('mp_stacks_features_textdomain') || !function_exists('mp_stacks_googlefonts_textdomain') || !function_exists('mp_stacks_linkgrid_textdomain') || !function_exists('mp_stacks_parallax_textdomain') || !function_exists('mp_stacks_postgrid_textdomain') || !function_exists('mp_stacks_slider_textdomain') || !function_exists('mp_stacks_socialgrid_textdomain') || !function_exists('mp_stacks_sociallinks_textdomain') || !function_exists('mp_stacks_video_backgrounds_textdomain') || !function_exists('mp_stacks_widgets_textdomain') || !function_exists('mp_stacks_woogrid_textdomain')){
					
	/**
	 * Check if mp_stacks_features is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-features-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_googlefonts is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-googlefonts-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_linkgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-linkgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_parallax is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-parallax-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_postgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-postgrid-check.php' ); 
		
	
					
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
	 * Add Home to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_leben_home
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_leben_home( $installed_templates ){ 
		
		$installed_templates['mp_stacks_leben_home_array'] = array(
			'template_slug' => 'leben_home',
			'template_title' => __( 'Home', 'leben_theme_bundle' ),
			'template_description' => __('Created using: The Leben Theme Bundle\'s "Home" Stack.', 'leben_theme_bundle' ),
			'template_tags' => 'Leben, Home',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/leben',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_leben_home' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_leben_home_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_leben_home_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['page']['leben_home'] = array( 'title' => 'Home','is_home' => true,'page_template' => 'page','add_to_primary_menu' => 'true', );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'leben_theme_bundle_default_stacks', 'mp_stacks_templates_leben_home_to_default_stacks' );
	
	/**
	 * This function holds and returns the Home Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_leben_home_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: The Leben Theme Bundle\'s "Home" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Home Page Slider',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1461016555:3',
      ),
      'mp_stack_id' => 
      array (
        'value' => '7',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_min_height' => 
      array (
        'value' => '125',
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'slider',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'none',
      ),
      'mp_stacks_slider_images' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'mp_stacks_slider_image_url' => 
            array (
              'value' => 'Untitled-4-3.jpg',
              'attachment' => true,
            ),
            'mp_stacks_slider_video_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_link_url' => 
            array (
              'value' => 'http://demo.mintplugins.com/leben/store',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_url_open_type' => 
            array (
              'value' => 'parent',
              'attachment' => false,
            ),
            'mp_slider_lightbox_width' => 
            array (
              'value' => '640',
              'attachment' => false,
            ),
            'mp_slider_lightbox_height' => 
            array (
              'value' => '360',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'mp_stacks_slider_image_url' => 
            array (
              'value' => 'Untitled-5.jpg',
              'attachment' => true,
            ),
            'mp_stacks_slider_video_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_link_url' => 
            array (
              'value' => 'http://demo.mintplugins.com/leben/store',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_url_open_type' => 
            array (
              'value' => 'parent',
              'attachment' => false,
            ),
            'mp_slider_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'mp_stacks_slider_image_url' => 
            array (
              'value' => 'Untitled-6.jpg',
              'attachment' => true,
            ),
            'mp_stacks_slider_video_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_link_url' => 
            array (
              'value' => 'http://demo.mintplugins.com/leben/store',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_url_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'mp_stacks_slider_image_url' => 
            array (
              'value' => 'Untitled-7.jpg',
              'attachment' => true,
            ),
            'mp_stacks_slider_video_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_link_url' => 
            array (
              'value' => 'http://demo.mintplugins.com/leben/store',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_url_open_type' => 
            array (
              'value' => 'parent',
              'attachment' => false,
            ),
            'mp_slider_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '40',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Noto Sans',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;FEATURED&lt;/p&gt;',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Abel',
      ),
      'mp_stacks_nav_color' => 
      array (
        'value' => '#0c0c0c',
      ),
      'mp_stacks_animation_style' => 
      array (
        'value' => 'slide',
      ),
      'mp_stacks_slider_speed' => 
      array (
        'value' => '5',
      ),
      'mp_stacks_slider_width' => 
      array (
        'value' => '1100',
      ),
      'mp_stacks_slider_height' => 
      array (
        'value' => '475',
      ),
      'mp_stacks_show_nav' => 
      array (
        'value' => 'bottom_center_inside',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '',
      ),
      'brick_overall_google_font_weight_style' => 
      array (
        'value' => '400',
      ),
      'brick_max_width' => 
      array (
        'value' => '2000',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'brick_min_below' => 
      array (
        'value' => '0',
      ),
      'brick_ct1_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_ct2_shadow_enabled' => 
      array (
        'value' => '',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'What&#8217;s in Store for you?',
      'mp_stack_order' => 1010,
      'mp_stack_id' => 
      array (
        'value' => '7',
      ),
      '_edit_lock' => 
      array (
        'value' => '1461016561:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Abel',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p style=&quot;text-align: center;&quot;&gt;WHAT&#039;S IN STORE FOR YOU?&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#939393',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '20',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Abel',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p style=&quot;text-align: center;&quot;&gt;[mp_button icon=&quot;&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;COME FIND OUT&quot; link=&quot;http://demo.mintplugins.com/leben/store&quot; btn_bg=&quot;hide&quot; color=&quot;&quot; hover_color=&quot;&quot; text_color=&quot;#939393&quot; hover_text_color=&quot;#939393&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Abel',
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
        'value' => '',
      ),
      'woogrid_isotope' => 
      array (
        'value' => '',
      ),
      'woogrid_isotope_filter_groups' => 
      array (
        'value' => '""',
      ),
      'woogrid_isotope_orderby_options' => 
      array (
        'value' => '["most_popular","date_newest_to_oldest","date_oldest_to_newest"]',
      ),
      'woogrid_isotope_navigation' => 
      array (
        'value' => 'dropdown',
      ),
      'woogrid_isotope_navigation_align' => 
      array (
        'value' => 'right',
      ),
      'woogrid_isotope_filter_by_color' => 
      array (
        'value' => '#0c0c0c',
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
        'value' => 'woogrid_isotope_nav_btn_icons',
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
              'value' => '600',
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
              'value' => '600',
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
      'woogrid_load_more_behaviour' => 
      array (
        'value' => 'none',
      ),
      'brick_max_width' => 
      array (
        'value' => '2000',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'woogrid_title_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'woogrid_title_color' => 
      array (
        'value' => '#0c0c0c',
      ),
      'woogrid_title_spacing' => 
      array (
        'value' => '10',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'woogrid',
      ),
      'brick_min_above_c1' => 
      array (
        'value' => '50',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '50',
      ),
      'woogrid_per_page' => 
      array (
        'value' => '3',
      ),
      'brick_ct1_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_ct2_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'woogrid_featured_images_height' => 
      array (
        'value' => '500',
      ),
      'woogrid_price_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'woogrid_price_color' => 
      array (
        'value' => '#dd3333',
      ),
    ),
    'brick_3' => 
    array (
      'brick_title' => 'Latest From Blog',
      'mp_stack_order' => 1020,
      '_edit_lock' => 
      array (
        'value' => '1461016433:3',
      ),
      'mp_stack_id' => 
      array (
        'value' => '7',
      ),
      '_edit_last' => 
      array (
        'value' => '8',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'postgrid',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Abel',
      ),
      'postgrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => '19',
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
      'postgrid_bg_animation_keyframes' => 
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
      'postgrid_masonry' => 
      array (
        'value' => '',
      ),
      'postgrid_isotope' => 
      array (
        'value' => '',
      ),
      'postgrid_isotope_filter_groups' => 
      array (
        'value' => '""',
      ),
      'postgrid_isotope_orderby_options' => 
      array (
        'value' => '""',
      ),
      'postgrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'postgrid_isotope_nav_btn_bg',
      ),
      'postgrid_isotope_nav_btn_text' => 
      array (
        'value' => 'postgrid_isotope_nav_btn_text',
      ),
      'postgrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'postgrid_isotope_nav_btn_icons',
      ),
      'postgrid_featured_images_show' => 
      array (
        'value' => 'postgrid_featured_images_show',
      ),
      'postgrid_image_animation_keyframes' => 
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
      'postgrid_image_overlay_animation_keyframes' => 
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
              'value' => '600',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '50',
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
      'postgrid_title_show' => 
      array (
        'value' => 'postgrid_title_show',
      ),
      'postgrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '600',
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
      'postgrid_title_background_show' => 
      array (
        'value' => 'postgrid_title_background_show',
      ),
      'postgrid_date_show' => 
      array (
        'value' => 'postgrid_date_show',
      ),
      'postgrid_date_animation_keyframes' => 
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
      'postgrid_date_background_show' => 
      array (
        'value' => 'postgrid_date_background_show',
      ),
      'postgrid_excerpt_show' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_animation_keyframes' => 
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
      'postgrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;FOLLOW WHAT&#039;S HAPPENING&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#939393',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '20',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;LATEST FROM OUR BLOG&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_bg_color' => 
      array (
        'value' => '#0c0c0c',
      ),
      'postgrid_per_page' => 
      array (
        'value' => '3',
      ),
      'postgrid_post_spacing' => 
      array (
        'value' => '-5',
      ),
      'postgrid_featured_images_height' => 
      array (
        'value' => '400',
      ),
      'postgrid_title_placement' => 
      array (
        'value' => 'over_image_bottom_left',
      ),
      'postgrid_title_color' => 
      array (
        'value' => '#ffffff',
      ),
      'brick_max_width' => 
      array (
        'value' => '2000',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'brick_min_above_c1' => 
      array (
        'value' => '50',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '50',
      ),
      'postgrid_featured_images_width' => 
      array (
        'value' => '400',
      ),
      'brick_ct1_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_ct2_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'linkgrid_links_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/leben/about-us',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '640',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '360',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'Untitled-2.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'Who Are We',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/leben/about-us',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'Untitled-1.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'Adventures',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/leben/store',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/04/woman_3.jpg',
              'attachment' => false,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'New Merch',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_bg_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '',
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
            'scale' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_masonry' => 
      array (
        'value' => 'linkgrid_masonry',
      ),
      'linkgrid_link_images_show' => 
      array (
        'value' => 'linkgrid_link_images_show',
      ),
      'linkgrid_image_animation_keyframes' => 
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
      'linkgrid_image_overlay_animation_keyframes' => 
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
              'value' => '100',
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
      'linkgrid_title_show' => 
      array (
        'value' => 'linkgrid_title_show',
      ),
      'linkgrid_title_animation_keyframes' => 
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
      'linkgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'linkgrid_description_show' => 
      array (
        'value' => 'linkgrid_description_show',
      ),
      'linkgrid_description_animation_keyframes' => 
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
      'linkgrid_description_background_show' => 
      array (
        'value' => '',
      ),
      'linkgrid_per_page' => 
      array (
        'value' => '3',
      ),
      'linkgrid_post_spacing' => 
      array (
        'value' => '0',
      ),
      'linkgrid_link_images_height' => 
      array (
        'value' => '400',
      ),
      'linkgrid_title_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'linkgrid_title_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'linkgrid_title_google_font' => 
      array (
        'value' => 'Abel',
      ),
      'linkgrid_title_background_opacity' => 
      array (
        'value' => '0',
      ),
      'linkgrid_link_images_width' => 
      array (
        'value' => '400',
      ),
      'postgrid_excerpt_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'postgrid_excerpt_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'postgrid_date_placement' => 
      array (
        'value' => 'over_image_bottom_left',
      ),
      'postgrid_date_color' => 
      array (
        'value' => '#ffffff',
      ),
      'postgrid_title_background_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'postgrid_title_background_opacity' => 
      array (
        'value' => '2',
      ),
      'postgrid_date_background_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'postgrid_date_background_opacity' => 
      array (
        'value' => '2',
      ),
      'postgrid_title_background_padding' => 
      array (
        'value' => '1',
      ),
      'postgrid_date_background_padding' => 
      array (
        'value' => '1',
      ),
      'postgrid_date_spacing' => 
      array (
        'value' => '4',
      ),
      'postgrid_title_size' => 
      array (
        'value' => '17',
      ),
    ),
    'brick_4' => 
    array (
      'brick_title' => 'Live The Adventure &#8211; Video',
      'mp_stack_order' => 1030,
      '_edit_lock' => 
      array (
        'value' => '1461016439:3',
      ),
      'mp_stack_id' => 
      array (
        'value' => '7',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_video_url' => 
      array (
        'value' => 'https://cdn.shopify.com/s/files/1/0899/6642/files/insta_gear_fortheweekend_small.mp4?11197141753190337088',
      ),
      'brick_video_max_width' => 
      array (
        'value' => '2000',
      ),
      'brick_max_width' => 
      array (
        'value' => '1500',
      ),
      'brick_min_height' => 
      array (
        'value' => '600',
      ),
      'brick_bg_video_source' => 
      array (
        'value' => 'youtube',
      ),
      'brick_bg_video_custom_url' => 
      array (
        'value' => 'https://cdn.shopify.com/s/files/1/0899/6642/files/insta_gear_fortheweekend_small.mp4?11197141753190337088',
      ),
      'brick_bg_video_color_opacity' => 
      array (
        'value' => '0',
      ),
      'brick_ct1_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_ct2_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_bg_video' => 
      array (
        'value' => 'https://www.youtube.com/watch?v=0RuzPNndGLo',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Abel',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '75',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '60',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p style=&quot;text-align: center;&quot;&gt;Live The&lt;br /&gt;
Adventure&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => 'mp_stacks_parallax_on',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '',
      ),
      'brick_float_c1' => 
      array (
        'value' => 'center',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '50',
      ),
    ),
    'brick_5' => 
    array (
      'brick_title' => 'Social Media',
      'mp_stack_order' => 1040,
      'mp_stack_id' => 
      array (
        'value' => '7',
      ),
      '_edit_lock' => 
      array (
        'value' => '1461016587:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'socialgrid',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'mp_socialgrid_source_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'type' => 
            array (
              'value' => 'instagram',
              'attachment' => false,
            ),
            'feed_type' => 
            array (
              'value' => 'user',
              'attachment' => false,
            ),
            'hashtag' => 
            array (
              'value' => '@lebenclothing',
              'attachment' => false,
            ),
            'show_icon' => 
            array (
              'value' => 'mp_socialgrid_source_repeater[0][show_icon]',
              'attachment' => false,
            ),
            'inner_bg_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'bg_color' => 
            array (
              'value' => '#222222',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => 'mp_socialgrid_source_repeater[0][socialgrid_twitter_exclude_instagram]',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_post_spacing' => 
      array (
        'value' => '0',
      ),
      'socialgrid_bg_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_masonry' => 
      array (
        'value' => 'socialgrid_masonry',
      ),
      'socialgrid_isotope' => 
      array (
        'value' => '',
      ),
      'socialgrid_isotope_filter_groups' => 
      array (
        'value' => '""',
      ),
      'socialgrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'socialgrid_isotope_nav_btn_bg',
      ),
      'socialgrid_isotope_nav_btn_text' => 
      array (
        'value' => 'socialgrid_isotope_nav_btn_text',
      ),
      'socialgrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'socialgrid_isotope_nav_btn_icons',
      ),
      'socialgrid_featured_images_show' => 
      array (
        'value' => 'socialgrid_featured_images_show',
      ),
      'socialgrid_image_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_image_overlay_animation_keyframes' => 
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
              'value' => '10',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#000',
              'attachment' => false,
            ),
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
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
              'value' => '50',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_text_w_img_show' => 
      array (
        'value' => 'socialgrid_text_w_img_show',
      ),
      'socialgrid_text_w_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_text_w_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_text_w_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_text_w_img_background_show' => 
      array (
        'value' => 'socialgrid_text_w_img_background_show',
      ),
      'socialgrid_text_wo_img_show' => 
      array (
        'value' => 'socialgrid_text_wo_img_show',
      ),
      'socialgrid_text_wo_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_text_wo_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_text_wo_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_text_wo_img_background_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_w_img_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_w_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_w_img_italic' => 
      array (
        'value' => 'socialgrid_date_w_img_italic',
      ),
      'socialgrid_date_w_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_date_w_img_background_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_wo_img_show' => 
      array (
        'value' => 'socialgrid_date_wo_img_show',
      ),
      'socialgrid_date_wo_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_wo_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_date_wo_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_date_wo_img_background_show' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_w_img_show' => 
      array (
        'value' => 'socialgrid_author_w_img_show',
      ),
      'socialgrid_author_w_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_w_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_w_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_author_w_img_background_show' => 
      array (
        'value' => 'socialgrid_author_w_img_background_show',
      ),
      'socialgrid_author_wo_img_show' => 
      array (
        'value' => 'socialgrid_author_wo_img_show',
      ),
      'socialgrid_author_wo_img_bold' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_wo_img_italic' => 
      array (
        'value' => '',
      ),
      'socialgrid_author_wo_img_animation_keyframes' => 
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'socialgrid_twitter_exclude_instagram' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'socialgrid_author_wo_img_background_show' => 
      array (
        'value' => '',
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '35',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Abel',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;SOCIAL MEDIA&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#8c8c8c',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '20',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Abel',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;@lebenclothing&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_max_width' => 
      array (
        'value' => '2000',
      ),
      'brick_min_below' => 
      array (
        'value' => '0',
      ),
      'brick_ct1_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_ct2_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_min_above_c1' => 
      array (
        'value' => '50',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '50',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'socialgrid_load_more_behaviour' => 
      array (
        'value' => 'none',
      ),
      'socialgrid_text_w_img_color' => 
      array (
        'value' => '#ffffff',
      ),
      'socialgrid_author_w_img_color' => 
      array (
        'value' => '#ffffff',
      ),
      'socialgrid_text_w_img_lineheight' => 
      array (
        'value' => '24',
      ),
      'socialgrid_text_w_img_size' => 
      array (
        'value' => '20',
      ),
      'socialgrid_text_w_img_background_padding' => 
      array (
        'value' => '1',
      ),
      'socialgrid_text_w_img_background_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'socialgrid_text_w_img_background_opacity' => 
      array (
        'value' => '3',
      ),
      'socialgrid_author_w_img_size' => 
      array (
        'value' => '13',
      ),
      'socialgrid_author_w_img_spacing' => 
      array (
        'value' => '4',
      ),
      'socialgrid_author_w_img_background_padding' => 
      array (
        'value' => '1',
      ),
      'socialgrid_author_w_img_background_color' => 
      array (
        'value' => '#000000',
      ),
      'socialgrid_author_w_img_background_opacity' => 
      array (
        'value' => '3',
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