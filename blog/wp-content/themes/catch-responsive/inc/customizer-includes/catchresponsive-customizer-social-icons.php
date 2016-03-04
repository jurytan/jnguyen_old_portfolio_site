<?php
/**
 * The template for Social Links in Customizer
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

	// Social Icons
	if( 4 <= get_bloginfo( 'version' ) ) {
		$wp_customize->add_panel( 'catchresponsive_social_links', array(
		    'capability'     => 'edit_theme_options',
		    'description'	=> __( 'Note: Enter the url for correponding social networking website', 'catchresponsive' ),
		    'priority'       => 600,
			'title'    		 => __( 'Social Links', 'catchresponsive' ),
		) );
	}
	
	$wp_customize->add_section( 'catchresponsive_social_links', array(
		'panel'			=> 'catchresponsive_social_links',
		'priority' 		=> 1,
		'title'   	 	=> __( 'Social Links', 'catchresponsive' ),
	) );

	$catchresponsive_social_icons 	=	catchresponsive_get_social_icons_list();	
	
	$i 	=	1;

	foreach ( $catchresponsive_social_icons as $option ){
		$lower_case_option	=	str_replace( ' ', '_', strtolower( $option ) );
			
		if( $option == 'Skype' ){
			$wp_customize->add_setting( 'catchresponsive_theme_options['. $lower_case_option .'_link]', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback' => 'esc_attr',
				) );

			$wp_customize->add_control( 'catchresponsive_'. $lower_case_option .'_link', array(
				'description'	=> __( 'Skype link can be of formats:<br>callto://+{number}<br> skype:{username}?{action}. More Information in readme file', 'catchresponsive' ),
				'label'    		=> $option,
				'priority' 		=> $i + '2',
				'section'  		=> 'catchresponsive_social_links',
				'settings' 		=> 'catchresponsive_theme_options['. $lower_case_option .'_link]',
				'type'	   		=> 'url',
			) );
		}
		else {
			if( $option == 'Email' ){
				$wp_customize->add_setting( 'catchresponsive_theme_options['. $lower_case_option .'_link]', array(
						'capability'		=> 'edit_theme_options',
						'sanitize_callback' => 'sanitize_email',
					) );
			}
			
			else {
				$wp_customize->add_setting( 'catchresponsive_theme_options['. $lower_case_option .'_link]', array(
						'capability'		=> 'edit_theme_options',
						'sanitize_callback' => 'esc_url_raw',
					) );
			}

			$wp_customize->add_control( 'catchresponsive_'. $lower_case_option .'_link', array(
				'label'    => $option,
				'priority' => $i + '2',
				'section'  => 'catchresponsive_social_links',
				'settings' => 'catchresponsive_theme_options['. $lower_case_option .'_link]',
				'type'	   => 'url',
			) );
		}
	
		$i++;
	}
	// Social Icons End