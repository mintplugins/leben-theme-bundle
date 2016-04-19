<?php 
/**
 * MP Stacks Template About Us
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template About Us
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
	 * Add About Us to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_leben_about_us
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_leben_about_us( $installed_templates ){ 
		
		$installed_templates['mp_stacks_leben_about_us_array'] = array(
			'template_slug' => 'leben_about_us',
			'template_title' => __( 'About Us', 'leben_theme_bundle' ),
			'template_description' => __('Created using: The Leben Theme Bundle\'s "About Us" Stack.', 'leben_theme_bundle' ),
			'template_tags' => 'Leben, About Us',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/leben/about-us',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_leben_about_us' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_leben_about_us_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_leben_about_us_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['page']['leben_about_us'] = array( 'title' => 'About Us','page_template' => 'default','add_to_primary_menu' => 'true', );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'leben_theme_bundle_default_stacks', 'mp_stacks_templates_leben_about_us_to_default_stacks' );
	
	/**
	 * This function holds and returns the About Us Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_leben_about_us_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: The Leben Theme Bundle\'s "About Us" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'About Us Links',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1461016634:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'linkgrid',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'none',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'postgrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => '20',
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
      'postgrid_post_spacing' => 
      array (
        'value' => '0',
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
        'value' => 'postgrid_masonry',
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
              'value' => '#ffffff',
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
              'value' => '#ffffff',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'postgrid_title_show' => 
      array (
        'value' => 'postgrid_title_show',
      ),
      'postgrid_title_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'postgrid_title_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'postgrid_title_google_font' => 
      array (
        'value' => 'Abel',
      ),
      'postgrid_title_animation_keyframes' => 
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
      'postgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'postgrid_title_background_color' => 
      array (
        'value' => '#ffffff',
      ),
      'postgrid_date_show' => 
      array (
        'value' => '',
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
      'postgrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'brick_ct1_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_ct2_shadow_enabled' => 
      array (
        'value' => '',
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
            'show_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'type' => 
            array (
              'value' => 'twitter',
              'attachment' => false,
            ),
            'feed_type' => 
            array (
              'value' => 'hashtag',
              'attachment' => false,
            ),
            'hashtag' => 
            array (
              'value' => '#lebenclothing',
              'attachment' => false,
            ),
            'inner_bg_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'bg_color' => 
            array (
              'value' => '',
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
        'value' => '',
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
        'value' => '',
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
      'mp_stack_id' => 
      array (
        'value' => '12',
      ),
      'brick_max_width' => 
      array (
        'value' => '2000',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'postgrid_featured_images_inner_margin' => 
      array (
        'value' => '0',
      ),
      'postgrid_featured_images_width' => 
      array (
        'value' => '300',
      ),
      'postgrid_featured_images_height' => 
      array (
        'value' => '300',
      ),
      'postgrid_per_page' => 
      array (
        'value' => '3',
      ),
      'socialgrid_per_row' => 
      array (
        'value' => '4',
      ),
      'socialgrid_per_page' => 
      array (
        'value' => '4',
      ),
      'socialgrid_post_spacing' => 
      array (
        'value' => '0',
      ),
      'brick_video_url' => 
      array (
        'value' => 'https://www.youtube.com/watch?v=2YBtspm8j8M',
      ),
      'linkgrid_links_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => '#goals',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
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
              'value' => 'Untitled-1.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'Goals',
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
              'value' => '#staff',
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
              'value' => 'Untitled-2.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'Who are we',
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
              'value' => '#something-about-your-company',
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
              'value' => 'Untitled-3.jpg',
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
        ),
      ),
      'linkgrid_per_page' => 
      array (
        'value' => '3',
      ),
      'linkgrid_post_spacing' => 
      array (
        'value' => '0',
      ),
      'linkgrid_bg_animation_keyframes' => 
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
      'linkgrid_masonry' => 
      array (
        'value' => 'linkgrid_masonry',
      ),
      'linkgrid_link_images_show' => 
      array (
        'value' => 'linkgrid_link_images_show',
      ),
      'linkgrid_link_images_height' => 
      array (
        'value' => '400',
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
              'value' => '#ffffff',
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
      'linkgrid_link_images_width' => 
      array (
        'value' => '500',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'Staff',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1461016502:3',
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
      'feature_shadow_apply_to' => 
      array (
        'value' => '""',
      ),
      'feature_icon_corner_radius' => 
      array (
        'value' => '100',
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
              'value' => 'John Smith',
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
              'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/04/Creative-photo-ideas-for-January-2015-Gotham-Warner-Entertainment-Channel-Five.jpg',
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
              'value' => '&lt;p&gt;CEO&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Jared Teri',
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
              'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/04/alex-gotham-web.jpg',
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
              'value' => '&lt;p&gt;CFO&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Natalie Kavy',
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
              'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/04/217261.max-620x600.jpg',
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
              'value' => '&lt;p&gt;Head of Sales&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Sarah Cooper',
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
              'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/04/tumblr_nbqhgtVjzW1rb6wabo2_r1_1280.jpg',
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
              'value' => '&lt;p&gt;Head Designer&lt;/p&gt;
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
        'value' => '',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mp_stack_id' => 
      array (
        'value' => '12',
      ),
      'feature_title_size' => 
      array (
        'value' => '40',
      ),
      'feature_icon_size' => 
      array (
        'value' => '200',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'features',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#0a0a0a',
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
              'value' => '&lt;p&gt;Staff&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_max_width' => 
      array (
        'value' => '1500',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '20',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Abel',
      ),
    ),
    'brick_3' => 
    array (
      'brick_title' => 'Something about your company',
      'mp_stack_order' => 1020,
      '_edit_lock' => 
      array (
        'value' => '1461016508:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
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
        'value' => '',
      ),
      'brick_bg_video_source' => 
      array (
        'value' => '',
      ),
      'brick_bg_video' => 
      array (
        'value' => 'https://www.youtube.com/watch?v=bYWRpFCX4Ps',
      ),
      'brick_bg_video_color_opacity' => 
      array (
        'value' => '33',
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
              'value' => '30',
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
              'value' => '&lt;p&gt;Something about your company goes here&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '12',
      ),
      'brick_alignment' => 
      array (
        'value' => 'leftright',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Abel',
      ),
      'brick_max_width' => 
      array (
        'value' => '1000',
      ),
      'brick_min_height' => 
      array (
        'value' => '',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'video',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'http://demo.mintplugins.com/leben/wp-content/uploads/sites/15/2016/03/photo-1417144762996-a41c0f6be9c7.jpg',
      ),
      'brick_video_url' => 
      array (
        'value' => 'https://www.youtube.com/watch?v=bYWRpFCX4Ps',
      ),
      'brick_video_max_width' => 
      array (
        'value' => '500',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '71',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#0a0a0a',
      ),
    ),
    'brick_4' => 
    array (
      'brick_title' => 'Goals',
      'mp_stack_order' => 1030,
      '_edit_lock' => 
      array (
        'value' => '1461016666:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'features',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'feature_shadow_apply_to' => 
      array (
        'value' => '""',
      ),
      'feature_icon_stroke_apply_to' => 
      array (
        'value' => '["images"]',
      ),
      'mp_features_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Our Products',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_icon',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => 'fa-tag',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
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
              'value' => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel nisi et nulla efficitur tincidunt nec dapibus justo. Cras porttitor facilisis dolor, at auctor dolor pretium hendrerit. Sed placerat volutpat augue id aliquam. Fusce auctor mauris quis suscipit commodo. Vestibulum tristique risus et vestibulum elementum. Mauris sit amet sodales magna. Fusce sit amet dolor at velit posuere pretium. Donec ac aliquet mi. Etiam a sapien dui. Quisque neque tellus, posuere ut nunc rutrum, efficitur condimentum nulla. In interdum eget odio eget egestas. Suspendisse pulvinar, sapien et ornare volutpat, ligula massa volutpat orci, eu viverra nunc elit id turpis. Praesent nisi odio, venenatis et metus eu, viverra tincidunt massa. Nam laoreet vestibulum turpis, sit amet elementum lectus sollicitudin nec.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Our Goals',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_icon',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => 'fa-crosshairs',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
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
              'value' => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel nisi et nulla efficitur tincidunt nec dapibus justo. Cras porttitor facilisis dolor, at auctor dolor pretium hendrerit. Sed placerat volutpat augue id aliquam. Fusce auctor mauris quis suscipit commodo. Vestibulum tristique risus et vestibulum elementum. Mauris sit amet sodales magna. Fusce sit amet dolor at velit posuere pretium. Donec ac aliquet mi. Etiam a sapien dui. Quisque neque tellus, posuere ut nunc rutrum, efficitur condimentum nulla. In interdum eget odio eget egestas. Suspendisse pulvinar, sapien et ornare volutpat, ligula massa volutpat orci, eu viverra nunc elit id turpis. Praesent nisi odio, venenatis et metus eu, viverra tincidunt massa. Nam laoreet vestibulum turpis, sit amet elementum lectus sollicitudin nec.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'feature_title' => 
            array (
              'value' => 'Our Stores',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_icon',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => 'fa-building-o',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
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
              'value' => '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel nisi et nulla efficitur tincidunt nec dapibus justo. Cras porttitor facilisis dolor, at auctor dolor pretium hendrerit. Sed placerat volutpat augue id aliquam. Fusce auctor mauris quis suscipit commodo. Vestibulum tristique risus et vestibulum elementum. Mauris sit amet sodales magna. Fusce sit amet dolor at velit posuere pretium. Donec ac aliquet mi. Etiam a sapien dui. Quisque neque tellus, posuere ut nunc rutrum, efficitur condimentum nulla. In interdum eget odio eget egestas. Suspendisse pulvinar, sapien et ornare volutpat, ligula massa volutpat orci, eu viverra nunc elit id turpis. Praesent nisi odio, venenatis et metus eu, viverra tincidunt massa. Nam laoreet vestibulum turpis, sit amet elementum lectus sollicitudin nec.&lt;/p&gt;
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
        'value' => '',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mp_stack_id' => 
      array (
        'value' => '12',
      ),
      'features_per_row' => 
      array (
        'value' => '1',
      ),
      'feature_text_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'feature_icon_corner_radius' => 
      array (
        'value' => '30',
      ),
      'feature_icon_stroke_size' => 
      array (
        'value' => '5',
      ),
      'feature_icon_stroke_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'feature_icon_stroke_opacity' => 
      array (
        'value' => '80',
      ),
      'feature_title_size' => 
      array (
        'value' => '40',
      ),
      'feature_icon_size' => 
      array (
        'value' => '70',
      ),
      'feature_icon_vertical_alignment' => 
      array (
        'value' => 'top',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Abel',
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