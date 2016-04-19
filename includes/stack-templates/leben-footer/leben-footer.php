<?php 
/**
 * MP Stacks Template Footer
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Footer
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
	 * Add Footer to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_leben_footer
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_leben_footer( $installed_templates ){ 
		
		$installed_templates['mp_stacks_leben_footer_array'] = array(
			'template_slug' => 'leben_footer',
			'template_title' => __( 'Footer', 'leben_theme_bundle' ),
			'template_description' => __('Created using: The Leben Theme Bundle\'s "Footer" Stack.', 'leben_theme_bundle' ),
			'template_tags' => 'Leben, Footer',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/leben',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_leben_footer' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_leben_footer_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_leben_footer_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['none']['leben_footer'] = array( 'title' => 'Footer','is_footer' => true, );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'leben_theme_bundle_default_stacks', 'mp_stacks_templates_leben_footer_to_default_stacks' );
	
	/**
	 * This function holds and returns the Footer Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_leben_footer_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: The Leben Theme Bundle\'s "Footer" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Footer',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1461018089:3',
      ),
      'mp_stack_id' => 
      array (
        'value' => '14',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'widgets',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'sociallinks',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Abel',
      ),
      'linkgrid_links_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => '',
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
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => '',
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
      'brick_ct1_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'brick_ct2_shadow_enabled' => 
      array (
        'value' => '',
      ),
      'mp_sociallinks_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Instagram',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-instagram',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://instagram.com/lebenclothing',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Facebook',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-facebook',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://facebook.com/lebenclothing',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Twitter',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-twitter',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://twitter.com/lebenclothing',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Youtube',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-youtube',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'https://www.youtube.com/moveplugins',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
          4 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Google Plus',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-googleplus',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'https://plus.google.com/',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
          5 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Pinterest',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-pinterest',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'http://pinterest.com',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
          6 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Tumblr',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-tumblr',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'https://www.tumblr.com/',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
          7 => 
          array (
            'sociallink_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-linkedin',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'https://ca.linkedin.com/',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sociallinks_per_row' => 
      array (
        'value' => '4',
      ),
      'sociallinks_color' => 
      array (
        'value' => '#ffffff',
      ),
      'sociallinks_color_hover' => 
      array (
        'value' => '#ffffff',
      ),
      'sociallinks_per_row_tablet' => 
      array (
        'value' => '1',
      ),
      'sociallinks_color_tablet' => 
      array (
        'value' => '#ffffff',
      ),
      'sociallinks_color_hover_tablet' => 
      array (
        'value' => '#ffffff',
      ),
      'sociallinks_per_row_mobile' => 
      array (
        'value' => '1',
      ),
      'sociallinks_color_mobile' => 
      array (
        'value' => '#ffffff',
      ),
      'sociallinks_color_hover_mobile' => 
      array (
        'value' => '#ffffff',
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'brick_max_width' => 
      array (
        'value' => '1200',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '25',
      ),
      'brick_float_c2' => 
      array (
        'value' => 'center',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '50',
      ),
      'mailchimp_success_message' => 
      array (
        'value' => 'Thank you for joining our email list!',
      ),
      'mailchimp_message_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mailchimp_submit_button_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'mailchimp_mouseover_submit_button_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mailchimp_mouseover_submit_button_text_color' => 
      array (
        'value' => '#0a0a0a',
      ),
      'brick_float_c1' => 
      array (
        'value' => 'center',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'widgets_link_underlines' => 
      array (
        'value' => '',
      ),
      'mp_stacks_widgets_brick_sidebar_id' => 
      array (
        'value' => 'mp_stacks_widgets_sidebar_id_' . time(),
      ),
      'widgets_title_color' => 
      array (
        'value' => '#ffffff',
      ),
      'widgets_text_color' => 
      array (
        'value' => '#ffffff',
      ),
      'widgets_links_color' => 
      array (
        'value' => '#ffffff',
      ),
      'widgets_links_hover_color' => 
      array (
        'value' => '#ffffff',
      ),
      'widgets_per_row' => 
      array (
        'value' => '3',
      ),
      'mailchimp_api_key' => 
      array (
        'value' => 'cc4fe0f45988d93b9c8b2d4b3e906a10-us13',
      ),
      'mailchimp_list_id' => 
      array (
        'value' => '3829037f3f',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '1000',
      ),
      'brick_max_width_c2' => 
      array (
        'value' => '',
      ),
      'mailchimp_submit_button_text' => 
      array (
        'value' => 'Email',
      ),
      'sociallinks_spacing' => 
      array (
        'value' => '5',
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