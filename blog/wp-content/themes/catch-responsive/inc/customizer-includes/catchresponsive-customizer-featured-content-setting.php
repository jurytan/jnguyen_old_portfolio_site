<?php
/**
 * The template for adding Featured Content Settings in Customizer
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */

if ( ! defined( 'CATCHRESPONSIVE_THEME_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}
	// Featured Content Options
	if( 4 <= get_bloginfo( 'version' ) ) {
		$wp_customize->add_panel( 'catchresponsive_featured_content_options', array(
		    'capability'     => 'edit_theme_options',
			'description'    => __( 'Options for Featured Content', 'catchresponsive' ),
		    'priority'       => 400,
		    'title'    		 => __( 'Featured Content Options', 'catchresponsive' ),
		) );
	}


	$wp_customize->add_section( 'catchresponsive_featured_content_settings', array(
		'panel'			=> 'catchresponsive_featured_content_options',
		'priority'		=> 1,
		'title'			=> __( 'Featured Content Settings', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[featured_content_option]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_content_option'],
		'sanitize_callback' => 'sanitize_key',
	) );

	$catchresponsive_featured_slider_content_options = catchresponsive_featured_slider_content_options();
	$choices = array();
	foreach ( $catchresponsive_featured_slider_content_options as $catchresponsive_featured_slider_content_option ) {
		$choices[$catchresponsive_featured_slider_content_option['value']] = $catchresponsive_featured_slider_content_option['label'];
	}

	$wp_customize->add_control( 'catchresponsive_theme_options[featured_content_option]', array(
		'choices'  	=> $choices,
		'label'    	=> __( 'Enable Featured Content on', 'catchresponsive' ),
		'priority'	=> '1',
		'section'  	=> 'catchresponsive_featured_content_settings',
		'settings' 	=> 'catchresponsive_theme_options[featured_content_option]',
		'type'	  	=> 'select',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[featured_content_layout]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_content_layout'],
		'sanitize_callback' => 'sanitize_key',
	) );

	$catchresponsive_featured_content_layout_options = catchresponsive_featured_content_layout_options();
	$choices = array();
	foreach ( $catchresponsive_featured_content_layout_options as $catchresponsive_featured_content_layout_option ) {
		$choices[$catchresponsive_featured_content_layout_option['value']] = $catchresponsive_featured_content_layout_option['label'];
	}

	$wp_customize->add_control( 'catchresponsive_theme_options[featured_content_layout]', array(
		'choices'  	=> $choices,
		'label'    	=> __( 'Select Featured Content Layout', 'catchresponsive' ),
		'priority'	=> '2',
		'section'  	=> 'catchresponsive_featured_content_settings',
		'settings' 	=> 'catchresponsive_theme_options[featured_content_layout]',
		'type'	  	=> 'select',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[featured_content_position]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_content_position'],
		'sanitize_callback' => 'catchresponsive_sanitize_checkbox'
	) );

	$wp_customize->add_control( 'catchresponsive_theme_options[featured_content_position]', array(
		'label'		=> __( 'Check to Move above Footer', 'catchresponsive' ),
		'priority'	=> '3',
		'section'  	=> 'catchresponsive_featured_content_settings',
		'settings'	=> 'catchresponsive_theme_options[featured_content_position]',
		'type'		=> 'checkbox',
	) );  

	$wp_customize->add_section( 'catchresponsive_featured_content_type', array(
		'panel'			=> 'catchresponsive_featured_content_options',
		'priority'		=> 2,
		'title'			=> __( 'Featured Content Type', 'catchresponsive' ),
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[featured_content_type]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_content_type'],
		'sanitize_callback'	=> 'sanitize_key',
	) );

	$catchresponsive_featured_content_types = catchresponsive_featured_content_types();
	$choices = array();
	foreach ( $catchresponsive_featured_content_types as $catchresponsive_featured_content_type ) {
		$choices[$catchresponsive_featured_content_type['value']] = $catchresponsive_featured_content_type['label'];
	}

	$wp_customize->add_control( 'catchresponsive_theme_options[featured_content_type]', array(
		'choices'  	=> $choices,
		'label'    	=> __( 'Select Content Type', 'catchresponsive' ),
		'priority'	=> '3',
		'section'  	=> 'catchresponsive_featured_content_type',
		'settings' 	=> 'catchresponsive_theme_options[featured_content_type]',
		'type'	  	=> 'select',
	) );

	$wp_customize->add_setting( 'catchresponsive_theme_options[featured_content_headline]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_content_headline'],
		'sanitize_callback'	=> 'wp_kses_post',
	) );

	$wp_customize->add_control( 'catchresponsive_theme_options[featured_content_headline]' , array(
		'description'	=> __( 'Leave field empty if you want to remove Headline', 'catchresponsive' ),
		'label'    		=> __( 'Headline for Featured Content', 'catchresponsive' ),
		'priority'		=> '4',
		'section'  		=> 'catchresponsive_featured_content_type',
		'settings' 		=> 'catchresponsive_theme_options[featured_content_headline]',
		'type'	   		=> 'text',
		)
	);

	$wp_customize->add_setting( 'catchresponsive_theme_options[featured_content_subheadline]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_content_subheadline'],
		'sanitize_callback'	=> 'wp_kses_post',
	) );

	$wp_customize->add_control( 'catchresponsive_theme_options[featured_content_subheadline]' , array(
		'description'	=> __( 'Leave field empty if you want to remove Sub-headline', 'catchresponsive' ),
		'label'    		=> __( 'Sub-headline for Featured Content', 'catchresponsive' ),
		'priority'		=> '5',
		'section'  		=> 'catchresponsive_featured_content_type',
		'settings' 		=> 'catchresponsive_theme_options[featured_content_subheadline]',
		'type'	   		=> 'text',
		) 
	);

	$wp_customize->add_setting( 'catchresponsive_theme_options[featured_content_number]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['featured_content_number'],
		'sanitize_callback'	=> 'catchresponsive_sanitize_no_of_slider',
	) );

	$wp_customize->add_control( 'catchresponsive_theme_options[featured_content_number]' , array(
		'description'	=> __( 'Save and refresh the page if No. of Featured Content is changed (Max no of Featured Content is 20)', 'catchresponsive' ),
		'input_attrs' 	=> array(
            'style' => 'width: 45px;',
            'min'   => 0,
            'max'   => 20,
            'step'  => 1,
        	),
		'label'    		=> __( 'No of Featured Content', 'catchresponsive' ),
		'priority'		=> '6',
		'section'  		=> 'catchresponsive_featured_content_type',
		'settings' 		=> 'catchresponsive_theme_options[featured_content_number]',
		'type'	   		=> 'number',
		) 
	);


	//loop for featured page content
	for ( $i=1; $i <= $options['featured_content_number'] ; $i++ ) {
		$wp_customize->add_setting( 'catchresponsive_theme_options[featured_content_page_'. $i .']', array(
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'catchresponsive_sanitize_page',
		) );

		$wp_customize->add_control( 'catchresponsive_featured_content_page_'. $i .'', array(
			'label'    	=> __( 'Featured Page', 'catchresponsive' ) . ' ' . $i ,
			'priority'	=> '7' . $i,
			'section'  	=> 'catchresponsive_featured_content_type',
			'settings' 	=> 'catchresponsive_theme_options[featured_content_page_'. $i .']',
			'type'	   	=> 'dropdown-pages',
		) );
	}
// Featured Content Setting End