<?php
/**
 * The template for adding additional theme options in Customizer
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */

// Additional Color Scheme (added to Color Scheme section in Theme Customizer)
if ( ! defined( 'CATCHRESPONSIVE_THEME_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

	
	//Theme Options
	if( 4 <= get_bloginfo( 'version' ) ) {
		$wp_customize->add_panel( 'catchresponsive_theme_options', array(
		    'description'    => __( 'Basic theme Options', 'catchresponsive' ),
		    'capability'     => 'edit_theme_options',
		    'priority'       => 200,
		    'title'    		 => __( 'Theme Options', 'catchresponsive' ),
		) );
	}

	// Breadcrumb Option
	$wp_customize->add_section( 'catchresponsive_breadcumb_options', array(
		'description'	=> __( 'Breadcrumbs are a great way of letting your visitors find out where they are on your site with just a glance. You can enable/disable them on homepage and entire site.', 'catchresponsive' ),
		'panel'			=> 'catchresponsive_theme_options',
		'title'    		=> __( 'Breadcrumb Options', 'catchresponsive' ),
		'priority' 		=> 201,
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[breadcumb_option]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['breadcumb_option'],
		'sanitize_callback' => 'catchresponsive_sanitize_checkbox'
	) );

	$wp_customize->add_control( 'catchresponsive_breadcumb_options', array(
		'label'    => __( 'Check to enable Breadcrumb', 'catchresponsive' ),
		'section'  => 'catchresponsive_breadcumb_options',
		'settings' => 'catchresponsive_theme_options[breadcumb_option]',
		'type'     => 'checkbox',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[breadcumb_onhomepage]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['breadcumb_onhomepage'],
		'sanitize_callback' => 'catchresponsive_sanitize_checkbox'
	) );

	$wp_customize->add_control( 'catchresponsive_breadcumb_onhomepage', array(
		'label'    => __( 'Check to enable Breadcrumb on Homepage', 'catchresponsive' ),
		'section'  => 'catchresponsive_breadcumb_options',
		'settings' => 'catchresponsive_theme_options[breadcumb_onhomepage]',
		'type'     => 'checkbox',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[breadcumb_seperator]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['breadcumb_seperator'],
		'sanitize_callback'	=> 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'catchresponsive_breadcumb_seperator', array(
			'input_attrs' => array(
	            'style' => 'width: 40px;'
            	),
            'label'    	=> __( 'Seperator between Breadcrumbs', 'catchresponsive' ),
			'section' 	=> 'catchresponsive_breadcumb_options',
			'settings' 	=> 'catchresponsive_theme_options[breadcumb_seperator]',
			'type'     	=> 'text'
		) 
	);
   	// Breadcrumb Option End
   	
   	// Custom CSS Option
	$wp_customize->add_section( 'catchresponsive_custom_css', array(
		'description'	=> __( 'Custom/Inline CSS', 'catchresponsive'),
		'panel'  		=> 'catchresponsive_theme_options',
		'priority' 		=> 203,
		'title'    		=> __( 'Custom CSS Options', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[custom_css]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['custom_css'],
		'sanitize_callback' => 'catchresponsive_sanitize_custom_css',
	) );

	$wp_customize->add_control( new Catchresponsive_Customize_Textarea_Control ( $wp_customize, 'catchresponsive_theme_options[custom_css]', array(
			'label'		=> __( 'Enter Custom CSS', 'catchresponsive' ),
	        'priority'	=> 1,
			'section'   => 'catchresponsive_custom_css',
	        'settings'  => 'catchresponsive_theme_options[custom_css]',
			'type'		=> 'textarea',
	) ) );
   	// Custom CSS End

   	// Excerpt Options
	$wp_customize->add_section( 'catchresponsive_excerpt_options', array(
		'panel'  	=> 'catchresponsive_theme_options',
		'priority' 	=> 204,
		'title'    	=> __( 'Excerpt Options', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[excerpt_length]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['excerpt_length'],
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'catchresponsive_excerpt_length', array(
		'description' => __('Excerpt length. Default is 55 words', 'catchresponsive'),
		'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5,
            'style' => 'width: 60px;'
            ),
        'label'    => __( 'Excerpt Length (words)', 'catchresponsive' ),
		'section'  => 'catchresponsive_excerpt_options',
		'settings' => 'catchresponsive_theme_options[excerpt_length]',
		'type'	   => 'number',
	)	);


	$wp_customize->add_setting( 'catchresponsive_theme_options[excerpt_more_text]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['excerpt_more_text'],
		'sanitize_callback'	=> 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'catchresponsive_excerpt_more_text', array(
		'label'    => __( 'Read More Text', 'catchresponsive' ),
		'section'  => 'catchresponsive_excerpt_options',
		'settings' => 'catchresponsive_theme_options[excerpt_more_text]',
		'type'	   => 'text',
	) );
	// Excerpt Options End

	//Homepage / Frontpage Options
	$wp_customize->add_section( 'catchresponsive_homepage_options', array(
		'description'	=> __( 'Only posts that belong to the categories selected here will be displayed on the front page', 'catchresponsive' ),
		'panel'			=> 'catchresponsive_theme_options',
		'priority' 		=> 209,
		'title'   	 	=> __( 'Homepage / Frontpage Options', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[front_page_category]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['front_page_category'],
		'sanitize_callback'	=> 'catchresponsive_sanitize_category_list',
	) );

	$wp_customize->add_control( new Catchresponsive_Customize_Dropdown_Categories_Control( $wp_customize, 'catchresponsive_theme_options[front_page_category]', array(
        'label'   	=> __( 'Select Categories', 'catchresponsive' ),
        'name'	 	=> 'catchresponsive_theme_options[front_page_category]',
		'priority'	=> '6',
        'section'  	=> 'catchresponsive_homepage_options',
        'settings' 	=> 'catchresponsive_theme_options[front_page_category]',
        'type'     	=> 'dropdown-categories',
    ) ) );
	//Homepage / Frontpage Settings End
	
	// Icon Options
	$wp_customize->add_section( 'catchresponsive_icons', array(
		'description'	=> __( 'Remove Icon images to disable.', 'catchresponsive'),
		'panel'  => 'catchresponsive_theme_options',
		'priority' 		=> 210,
		'title'    		=> __( 'Icon Options', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[favicon]', array(
		'capability'		=> 'edit_theme_options',
		'sanitize_callback'	=> 'catchresponsive_sanitize_image',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'catchresponsive_theme_options[favicon]', array(
		'label'		=> __( 'Select/Add Favicon', 'catchresponsive' ),
		'section'    => 'catchresponsive_icons',
        'settings'   => 'catchresponsive_theme_options[favicon]',
	) ) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[web_clip]', array(
		'capability'		=> 'edit_theme_options',
		'sanitize_callback'	=> 'catchresponsive_sanitize_image',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'catchresponsive_theme_options[web_clip]', array(
		'description'	=> __( 'Web Clip Icon for Apple devices. Recommended Size - Width 144px and Height 144px height, which will support High Resolution Devices like iPad Retina.', 'catchresponsive'),
		'label'		 	=> __( 'Select/Add Web Clip Icon', 'catchresponsive' ),
		'section'    	=> 'catchresponsive_icons',
        'settings'   	=> 'catchresponsive_theme_options[web_clip]',
	) ) );
	// Icon Options End

	// Layout Options
	$wp_customize->add_section( 'catchresponsive_layout', array(
		'capability'=> 'edit_theme_options',
		'panel'		=> 'catchresponsive_theme_options',
		'priority'	=> 211,
		'title'		=> __( 'Layout Options', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[theme_layout]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['theme_layout'],
		'sanitize_callback' => 'sanitize_key',
	) );

	$layouts = catchresponsive_layouts();
	$choices = array();
	foreach ( $layouts as $layout ) {
		$choices[ $layout['value'] ] = $layout['label'];
	}

	$wp_customize->add_control( 'catchresponsive_theme_options[theme_layout]', array(
		'choices'	=> $choices,
		'label'		=> __( 'Default Layout', 'catchresponsive' ),
		'section'	=> 'catchresponsive_layout',
		'settings'   => 'catchresponsive_theme_options[theme_layout]',
		'type'		=> 'select',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[content_layout]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['content_layout'],
		'sanitize_callback' => 'sanitize_key',
	) );

	$layouts = catchresponsive_get_archive_content_layout();
	$choices = array();
	foreach ( $layouts as $layout ) {
		$choices[ $layout['value'] ] = $layout['label'];
	}

	$wp_customize->add_control( 'catchresponsive_theme_options[content_layout]', array(
		'choices'   => $choices,
		'label'		=> __( 'Archive Content Layout', 'catchresponsive' ),
		'section'   => 'catchresponsive_layout',
		'settings'  => 'catchresponsive_theme_options[content_layout]',
		'type'      => 'select',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[single_post_image_layout]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['single_post_image_layout'],
		'sanitize_callback' => 'sanitize_key',
	) );

	
	$single_post_image_layouts = catchresponsive_single_post_image_layout_options();
	$choices = array();
	foreach ( $single_post_image_layouts as $single_post_image_layout ) {
		$choices[$single_post_image_layout['value']] = $single_post_image_layout['label'];
	}

	$wp_customize->add_control( 'catchresponsive_theme_options[single_post_image_layout]', array(
			'label'		=> __( 'Single Page/Post Image Layout ', 'catchresponsive' ),
			'section'   => 'catchresponsive_layout',
	        'settings'  => 'catchresponsive_theme_options[single_post_image_layout]',
	        'type'	  	=> 'select',
			'choices'  	=> $choices,
	) );
   	// Layout Options End
	
	// Pagination Options
	$pagination_type	= $options['pagination_type'];

	$catchresponsive_navigation_description = sprintf( __( 'Numeric Option requires <a target="_blank" href="%s">WP-PageNavi Plugin</a>.<br/>Infinite Scroll Options requires <a target="_blank" href="%s">JetPack Plugin</a> with Infinite Scroll module Enabled.', 'catchresponsive' ), esc_url( 'https://wordpress.org/plugins/wp-pagenavi' ), esc_url( 'https://wordpress.org/plugins/jetpack/' ) );
	
	/**
	 * Check if navigation type is Jetpack Infinite Scroll and if it is enabled
	 */
	if ( ( 'infinite-scroll-click' == $pagination_type || 'infinite-scroll-scroll' == $pagination_type ) ) {
		if ( ! (class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) ) ) {
			$catchresponsive_navigation_description = sprintf( __( 'Infinite Scroll Options requires <a target="_blank" href="%s">JetPack Plugin</a> with Infinite Scroll module Enabled.', 'catchresponsive' ), esc_url( 'https://wordpress.org/plugins/jetpack/' ) );
		}
		else {
			$catchresponsive_navigation_description = '';
		}
	}
	/**
	* Check if navigation type is numeric and if Wp-PageNavi Plugin is enabled
	*/
	else if ( 'numeric' == $pagination_type ) {
		if ( !function_exists( 'wp_pagenavi' ) ) {
			$catchresponsive_navigation_description = sprintf( __( 'Numeric Option requires <a target="_blank" href="%s">WP-PageNavi Plugin</a>.', 'catchresponsive' ), esc_url( 'https://wordpress.org/plugins/wp-pagenavi' ) );
		}
		else {
			$catchresponsive_navigation_description = '';
		}
    }

	$wp_customize->add_section( 'catchresponsive_pagination_options', array(
		'description'	=> $catchresponsive_navigation_description,
		'panel'  		=> 'catchresponsive_theme_options',
		'priority'		=> 212,
		'title'    		=> __( 'Pagination Options', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[pagination_type]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['pagination_type'],
		'sanitize_callback' => 'sanitize_key',
	) );

	$pagination_types = catchresponsive_get_pagination_types();
	$choices = array();
	foreach ( $pagination_types as $pagination_type ) {
		$choices[$pagination_type['value']] = $pagination_type['label'];
	}

	$wp_customize->add_control( 'catchresponsive_pagination_options', array(
		'choices'  => $choices,
		'label'    => __( 'Pagination type', 'catchresponsive' ),
		'section'  => 'catchresponsive_pagination_options',
		'settings' => 'catchresponsive_theme_options[pagination_type]',
		'type'	   => 'select',
	) );
	// Pagination Options End

	//Promotion Headline Options
    $wp_customize->add_section( 'catchresponsive_promotion_headline_options', array(
		'description'	=> __( 'To disable the fields, simply leave them empty.', 'catchresponsive' ),
		'panel'			=> 'catchresponsive_theme_options',
		'priority' 		=> 213,
		'title'   	 	=> __( 'Promotion Headline Options', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[promotion_headline_option]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['promotion_headline_option'],
		'sanitize_callback' => 'sanitize_key',
	) );

	$catchresponsive_featured_slider_content_options = catchresponsive_featured_slider_content_options();
	$choices = array();
	foreach ( $catchresponsive_featured_slider_content_options as $catchresponsive_featured_slider_content_option ) {
		$choices[$catchresponsive_featured_slider_content_option['value']] = $catchresponsive_featured_slider_content_option['label'];
	}

	$wp_customize->add_control( 'catchresponsive_theme_options[promotion_headline_option]', array(
		'choices'  	=> $choices,
		'label'    	=> __( 'Enable Promotion Headline on', 'catchresponsive' ),
		'priority'	=> '0.5',
		'section'  	=> 'catchresponsive_promotion_headline_options',
		'settings' 	=> 'catchresponsive_theme_options[promotion_headline_option]',
		'type'	  	=> 'select',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[promotion_headline]', array(
		'capability'		=> 'edit_theme_options',
		'default' 			=> $defaults['promotion_headline'],
		'sanitize_callback'	=> 'wp_kses_post'
	) );

	$wp_customize->add_control( new Catchresponsive_Customize_Textarea_Control( $wp_customize, 'catchresponsive_theme_options[promotion_headline]', array(
		'description'	=> __( 'Appropriate Words: 10', 'catchresponsive' ),
		'label'    	=> __( 'Promotion Headline Text', 'catchresponsive' ),
		'priority'	=> '1',
		'section' 	=> 'catchresponsive_promotion_headline_options',
		'settings'	=> 'catchresponsive_theme_options[promotion_headline]',
	) ) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[promotion_subheadline]', array(
		'capability'		=> 'edit_theme_options',
		'default' 			=> $defaults['promotion_subheadline'],
		'sanitize_callback'	=> 'wp_kses_post'
	) );

	$wp_customize->add_control( new Catchresponsive_Customize_Textarea_Control( $wp_customize, 'catchresponsive_theme_options[promotion_subheadline]', array(
		'description'	=> __( 'Appropriate Words: 15', 'catchresponsive' ),
		'label'    	=> __( 'Promotion Subheadline Text', 'catchresponsive' ),
		'priority'	=> '2',
		'section' 	=> 'catchresponsive_promotion_headline_options',
		'settings'	=> 'catchresponsive_theme_options[promotion_subheadline]',
	) ) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[promotion_headline_button]', array(
		'capability'		=> 'edit_theme_options',
		'default' 			=> $defaults['promotion_headline_button'],
		'sanitize_callback'	=> 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'catchresponsive_theme_options[promotion_headline_button]', array(
		'description'	=> __( 'Appropriate Words: 3', 'catchresponsive' ),
		'label'    	=> __( 'Promotion Headline Button Text ', 'catchresponsive' ),
		'priority'	=> '3',
		'section' 	=> 'catchresponsive_promotion_headline_options',
		'settings'	=> 'catchresponsive_theme_options[promotion_headline_button]',
		'type'		=> 'text',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[promotion_headline_url]', array(
		'capability'		=> 'edit_theme_options',
		'default' 			=> $defaults['promotion_headline_url'],
		'sanitize_callback'	=> 'esc_url_raw'
	) );

	$wp_customize->add_control( 'catchresponsive_theme_options[promotion_headline_url]', array(
		'label'    	=> __( 'Promotion Headine Link', 'catchresponsive' ),
		'priority'	=> '4',
		'section' 	=> 'catchresponsive_promotion_headline_options',
		'settings'	=> 'catchresponsive_theme_options[promotion_headline_url]',
		'type'		=> 'text',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[promotion_headline_target]', array(
		'capability'		=> 'edit_theme_options',
		'default' 			=> $defaults['promotion_headline_target'],
		'sanitize_callback' => 'catchresponsive_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'catchresponsive_theme_options[promotion_headline_target]', array(
		'label'    	=> __( 'Check to Open Link in New Window/Tab', 'catchresponsive' ),
		'priority'	=> '5',
		'section'  	=> 'catchresponsive_promotion_headline_options',
		'settings' 	=> 'catchresponsive_theme_options[promotion_headline_target]',
		'type'     	=> 'checkbox',
	) );
	// Promotion Headline Options End

	// Search Options
	$wp_customize->add_section( 'catchresponsive_search_options', array(
		'description'=> __( 'Change default placeholder text in Search.', 'catchresponsive'),
		'panel'  => 'catchresponsive_theme_options',
		'priority' => 216,
		'title'    => __( 'Search Options', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[search_text]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['search_text'],
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'catchresponsive_theme_options[search_text]', array(
		'label'		=> __( 'Default Display Text in Search', 'catchresponsive' ),
		'section'   => 'catchresponsive_search_options',
        'settings'  => 'catchresponsive_theme_options[search_text]',
		'type'		=> 'text',
	) );
	// Search Options End
//Theme Option End