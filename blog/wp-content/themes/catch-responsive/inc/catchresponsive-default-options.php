<?php
/**
 * Implement Default Theme/Customizer Options
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


/**
 * Returns the default options for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_get_default_theme_options() {
	
	$default_theme_options = array(
		//Site Title an Tagline
		'logo'												=> get_template_directory_uri() . '/images/headers/logo.png',
		'logo_alt_text' 									=> '',
		'logo_disable'										=> 1,
		'move_title_tagline'								=> 0,
		
		//Layout
		'theme_layout' 										=> 'right-sidebar',
		'content_layout'									=> 'excerpt-image-left',
		'single_post_image_layout'							=> 'disabled',
		
		//Header Image
		'enable_featured_header_image'						=> 'disabled',
		'featured_image_size'								=> 'full',
		'featured_header_image_url'							=> '',
		'featured_header_image_alt'							=> '',
		'featured_header_image_base'						=> 0,

		//Breadcrumb Options
		'breadcumb_option'									=> 0,
		'breadcumb_onhomepage'								=> 0,
		'breadcumb_seperator'								=> '&raquo;',

		//Custom CSS
		'custom_css'										=> '',

		//Excerpt Options
		'excerpt_length'									=> '55',
		'excerpt_more_text'									=> __( 'Read More ...', 'catchresponsive' ),
		
		//Homepage / Frontpage Settings
		'front_page_category'								=> array(),
		
		//Pagination Options
		'pagination_type'									=> 'default',

		//Promotion Headline Options
		'promotion_headline_option'							=> 'disabled',		
		'promotion_headline_type'							=> 'promotion-headline-content',
		'promotion_headline'								=> __( 'Catch Responsive is a Premium Responsive WordPress Theme', 'catchresponsive' ),
		'promotion_subheadline'								=> __( 'This is promotion headline. You can edit this from Appearance -> Customize -> Theme Options -> Promotion Headline Options', 'catchresponsive' ),
		'promotion_headline_button'							=> __( 'Reviews', 'catchresponsive' ),
		'promotion_headline_url'							=> esc_url( 'http://wordpress.org/support/view/theme-reviews/catch-responsive' ),
		'promotion_headline_target'							=> 1,

		//Search Options
		'search_text'										=> __( 'Search...', 'catchresponsive' ),

		//Basic Color Options
		'color_scheme' 										=> 'light',	
		
		//Featured Content Options
		'featured_content_option'							=> 'homepage',
		'featured_content_layout'							=> 'layout-three',
		'featured_content_position'							=> 0,
		'featured_content_headline'							=> __( 'Featured Content', 'catchresponsive' ),
		'featured_content_subheadline'						=> __( 'Here you can showcase the x number of Featured Content.', 'catchresponsive' ),
		'featured_content_type'								=> 'demo-featured-content',
		'featured_content_number'							=> '4',

		//Featured Slider Options
		'featured_slider_option'							=> 'homepage',
		'featured_slider_image_loader'						=> 'true',
		'featured_slide_transition_effect'					=> 'fadeout',
		'featured_slide_transition_delay'					=> '4',
		'featured_slide_transition_length'					=> '1',
		'featured_slider_type'								=> 'demo-featured-slider',
		'featured_slide_number'								=> '4',
		
		//Reset all settings
		'reset_all_settings'								=> 0,
	);

	return apply_filters( 'catchresponsive_default_theme_options', $default_theme_options );
}


/**
 * Returns an array of color schemes registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_color_schemes() {
	$color_scheme_options = array(
		'light' => array(
			'value' 				=> 'light',
			'label' 				=> __( 'Light', 'catchresponsive' ),
		),
		'dark' => array(
			'value' 				=> 'dark',
			'label' 				=> __( 'Dark', 'catchresponsive' ),
		),
	);

	return apply_filters( 'catchresponsive_color_schemes', $color_scheme_options );
}


/**
 * Returns an array of layout options registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_layouts() {
	$layout_options = array(
		'left-sidebar' 	=> array(
			'value' => 'left-sidebar',
			'label' => __( 'Primary Sidebar, Content', 'catchresponsive' ),
		),
		'right-sidebar' => array(
			'value' => 'right-sidebar',
			'label' => __( 'Content, Primary Sidebar', 'catchresponsive' ),
		),
		'no-sidebar'	=> array(
			'value' => 'no-sidebar',
			'label' => __( 'No Sidebar ( Content Width )', 'catchresponsive' ),
		),
	);
	return apply_filters( 'catchresponsive_layouts', $layout_options );
}


/**
 * Returns an array of content layout options registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_get_archive_content_layout() {
	$layout_options = array(
		'excerpt-image-left' => array(
			'value' => 'excerpt-image-left',
			'label' => __( 'Show Excerpt', 'catchresponsive' ),
		),		
		'full-content' => array(
			'value' => 'full-content',
			'label' => __( 'Show Full Content (No Featured Image)', 'catchresponsive' ),
		),
	);

	return apply_filters( 'catchresponsive_get_archive_content_layout', $layout_options );
}


/**
 * Returns an array of feature header enable options
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_enable_featured_header_image_options() {
	$enable_featured_header_image_options = array(
		'homepage' 		=> array(
			'value'	=> 'homepage',
			'label' => __( 'Homepage / Frontpage', 'catchresponsive' ),
		),
		'exclude-home' 		=> array(
			'value'	=> 'exclude-home',
			'label' => __( 'Excluding Homepage', 'catchresponsive' ),
		),
		'exclude-home-page-post' 	=> array(
			'value' => 'exclude-home-page-post',
			'label' => __( 'Excluding Homepage, Page/Post Featured Image', 'catchresponsive' ),
		),
		'entire-site' 	=> array(
			'value' => 'entire-site',
			'label' => __( 'Entire Site', 'catchresponsive' ),
		),
		'entire-site-page-post' 	=> array(
			'value' => 'entire-site-page-post',
			'label' => __( 'Entire Site, Page/Post Featured Image', 'catchresponsive' ),
		),
		'pages-posts' 	=> array(
			'value' => 'pages-posts',
			'label' => __( 'Pages and Posts', 'catchresponsive' ),
		),
		'disabled'		=> array(
			'value' => 'disabled',
			'label' => __( 'Disabled', 'catchresponsive' ),
		),
	);

	return apply_filters( 'catchresponsive_enable_featured_header_image_options', $enable_featured_header_image_options );
}


/**
 * Returns an array of feature image size
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_featured_image_size_options() {
	$featured_image_size_options = array(
		'full' 		=> array(
			'value'	=> 'full',
			'label' => __( 'Full Image', 'catchresponsive' ),
		),
		'large' 	=> array(
			'value' => 'large',
			'label' => __( 'Large Image', 'catchresponsive' ),
		),
		'slider'		=> array(
			'value' => 'slider',
			'label' => __( 'Slider Image', 'catchresponsive' ),
		),
	);

	return apply_filters( 'catchresponsive_featured_image_size_options', $featured_image_size_options );
}


/**
 * Returns an array of content and slider layout options registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_featured_slider_content_options() {
	$featured_slider_content_options = array(
		'homepage' 		=> array(
			'value'	=> 'homepage',
			'label' => __( 'Homepage / Frontpage', 'catchresponsive' ),
		),
		'entire-site' 	=> array(
			'value' => 'entire-site',
			'label' => __( 'Entire Site', 'catchresponsive' ),
		),
		'disabled'		=> array(
			'value' => 'disabled',
			'label' => __( 'Disabled', 'catchresponsive' ),
		),
	);

	return apply_filters( 'catchresponsive_featured_slider_content_options', $featured_slider_content_options );
}


/**
 * Returns an array of feature content types registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_featured_content_types() {
	$featured_content_types = array(
		'demo-featured-content' => array(
			'value' => 'demo-featured-content',
			'label' => __( 'Demo Featured Content', 'catchresponsive' ),
		),
		'featured-page-content' => array(
			'value' => 'featured-page-content',
			'label' => __( 'Featured Page Content', 'catchresponsive' ),
		)
	);

	return apply_filters( 'catchresponsive_featured_content_types', $featured_content_types );
}


/**
 * Returns an array of featured content options registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_featured_content_layout_options() {
	$featured_content_layout_option = array(
		'layout-three' 		=> array(
			'value'	=> 'layout-three',
			'label' => __( '3 columns', 'catchresponsive' ),
		),
		'layout-four' 	=> array(
			'value' => 'layout-four',
			'label' => __( '4 columns', 'catchresponsive' ),
		),
	);

	return apply_filters( 'catchresponsive_featured_content_layout_options', $featured_content_layout_option );
}


/**
 * Returns an array of feature slider types registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_featured_slider_types() {
	$featured_slider_types = array(
		'demo-featured-slider' => array(
			'value' => 'demo-featured-slider',
			'label' => __( 'Demo Featured Slider', 'catchresponsive' ),
		),
		'featured-page-slider' => array(
			'value' => 'featured-page-slider',
			'label' => __( 'Featured Page Slider', 'catchresponsive' ),
		),
	);

	return apply_filters( 'catchresponsive_featured_slider_types', $featured_slider_types );
}


/**
 * Returns an array of feature slider transition effects
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_featured_slide_transition_effects() {
	$featured_slide_transition_effects = array(
		'fade' 		=> array(
			'value'	=> 'fade',
			'label' => __( 'Fade', 'catchresponsive' ),
		),
		'fadeout' 	=> array(
			'value'	=> 'fadeout',
			'label' => __( 'Fade Out', 'catchresponsive' ),
		),
		'none' 		=> array(
			'value' => 'none',
			'label' => __( 'None', 'catchresponsive' ),
		),
		'scrollHorz'=> array(
			'value' => 'scrollHorz',
			'label' => __( 'Scroll Horizontal', 'catchresponsive' ),
		),
		'scrollVert'=> array(
			'value' => 'scrollVert',
			'label' => __( 'Scroll Vertical', 'catchresponsive' ),
		),
		'flipHorz'	=> array(
			'value' => 'flipHorz',
			'label' => __( 'Flip Horizontal', 'catchresponsive' ),
		),
		'flipVert'	=> array(
			'value' => 'flipVert',
			'label' => __( 'Flip Vertical', 'catchresponsive' ),
		),
		'tileSlide'	=> array(
			'value' => 'tileSlide',
			'label' => __( 'Tile Slide', 'catchresponsive' ),
		),
		'tileBlind'	=> array(
			'value' => 'tileBlind',
			'label' => __( 'Tile Blind', 'catchresponsive' ),
		),
		'shuffle'	=> array(
			'value' => 'shuffle',
			'label' => __( 'Suffle', 'catchresponsive' ),
		)
	);

	return apply_filters( 'catchresponsive_featured_slide_transition_effects', $featured_slide_transition_effects );
}


/**
 * Returns an array of featured slider image loader options
 *
 * @since Catch Responsive 2.1
 */
function catchresponsive_featured_slider_image_loader() {
	$color_scheme_options = array(
		'true' => array(
			'value' 				=> 'true',
			'label' 				=> __( 'True', 'catchresponsive' ),
		),
		'wait' => array(
			'value' 				=> 'wait',
			'label' 				=> __( 'Wait', 'catchresponsive' ),
		),
		'false' => array(
			'value' 				=> 'false',
			'label' 				=> __( 'False', 'catchresponsive' ),
		),		
	);

	return apply_filters( 'catchresponsive_color_schemes', $color_scheme_options );
}


/**
 * Returns an array of color schemes registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_get_pagination_types() {
	$pagination_types = array(
		'default' => array(
			'value' => 'default',
			'label' => __( 'Default(Older Posts/Newer Posts)', 'catchresponsive' ),
		),
		'numeric' => array(
			'value' => 'numeric',
			'label' => __( 'Numeric', 'catchresponsive' ),
		),
		'infinite-scroll-click' => array(
			'value' => 'infinite-scroll-click',
			'label' => __( 'Infinite Scroll (Click)', 'catchresponsive' ),
		),
		'infinite-scroll-scroll' => array(
			'value' => 'infinite-scroll-scroll',
			'label' => __( 'Infinite Scroll (Scroll)', 'catchresponsive' ),
		),
	);

	return apply_filters( 'catchresponsive_get_pagination_types', $pagination_types );
}


/**
 * Returns an array of content featured image size.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_single_post_image_layout_options() {
	$single_post_image_layout_options = array(
		'featured' => array(
			'value' => 'featured',
			'label' => __( 'Featured', 'fullframe' ),
		),
		'full-size' => array(
			'value' => 'full-size',
			'label' => __( 'Full Size', 'fullframe' ),
		),
		'disabled' => array(
			'value' => 'disabled',
			'label' => __( 'Disabled', 'fullframe' ),
		),
	);
	return apply_filters( 'catchresponsive_single_post_image_layout_options', $single_post_image_layout_options );
}


/**
 * Returns list of social icons currently supported
 *
 * @since Catch Responsive 1.0
*/
function catchresponsive_get_social_icons_list() {
	$catchresponsive_social_icons_list =	array( 
											__( 'Facebook', 'catchresponsive' ), 
											__( 'Twitter', 'catchresponsive' ), 
											__( 'Googleplus', 'catchresponsive' ),
											__( 'Email', 'catchresponsive' ),
											__( 'Feed', 'catchresponsive' ),	
											__( 'WordPress', 'catchresponsive' ), 
											__( 'GitHub', 'catchresponsive' ), 
											__( 'LinkedIn', 'catchresponsive' ), 
											__( 'Pinterest', 'catchresponsive' ), 
											__( 'Flickr', 'catchresponsive' ), 
											__( 'Vimeo', 'catchresponsive' ), 
											__( 'YouTube', 'catchresponsive' ), 
											__( 'Tumblr', 'catchresponsive' ), 
											__( 'Instagram', 'catchresponsive' ), 
											__( 'PollDaddy', 'catchresponsive' ),
											__( 'CodePen', 'catchresponsive' ), 
											__( 'Path', 'catchresponsive' ), 
											__( 'Dribbble', 'catchresponsive' ), 
											__( 'Skype', 'catchresponsive' ), 
											__( 'Digg', 'catchresponsive' ), 
											__( 'Reddit', 'catchresponsive' ), 
											__( 'StumbleUpon', 'catchresponsive' ), 
											__( 'Pocket', 'catchresponsive' ), 
											__( 'DropBox', 'catchresponsive' ),
											__( 'Foursquare', 'catchresponsive' ),									
											__( 'Spotify', 'catchresponsive' ),
											__( 'Twitch', 'catchresponsive' ),
										);

	return apply_filters( 'catchresponsive_social_icons_list', $catchresponsive_social_icons_list );
}


/**
 * Returns an array of metabox layout options registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_metabox_layouts() {
	$layout_options = array(
		'default' 	=> array(
			'id' 	=> 'catchresponsive-layout-option',
			'value' => 'default',
			'label' => __( 'Default', 'catchresponsive' ),
		),
		'left-sidebar' 	=> array(
			'id' 	=> 'catchresponsive-layout-option',
			'value' => 'left-sidebar',
			'label' => __( 'Primary Sidebar, Content', 'catchresponsive' ),
		),
		'right-sidebar' => array(
			'id' 	=> 'catchresponsive-layout-option',
			'value' => 'right-sidebar',
			'label' => __( 'Content, Primary Sidebar', 'catchresponsive' ),
		),
		'no-sidebar'	=> array(
			'id' 	=> 'catchresponsive-layout-option',
			'value' => 'no-sidebar',
			'label' => __( 'No Sidebar ( Content Width )', 'catchresponsive' ),
		),
	);
	return apply_filters( 'catchresponsive_layouts', $layout_options );
}

/**
 * Returns an array of metabox header featured image options registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_metabox_header_featured_image_options() {
	$header_featured_image_options = array(
		'default' => array(
			'id'		=> 'catchresponsive-header-image',
			'value' 	=> 'default',
			'label' 	=> __( 'Default', 'catchresponsive' ),
		),
		'enable' => array(
			'id'		=> 'catchresponsive-header-image',
			'value' 	=> 'enable',
			'label' 	=> __( 'Enable', 'catchresponsive' ),
		),	
		'disable' => array(
			'id'		=> 'catchresponsive-header-image',
			'value' 	=> 'disable',
			'label' 	=> __( 'Disable', 'catchresponsive' )
		)
	);
	return apply_filters( 'header_featured_image_options', $header_featured_image_options );
}


/**
 * Returns an array of metabox featured image options registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_metabox_featured_image_options() {
	$featured_image_options = array(
		'default' => array(
			'id'		=> 'catchresponsive-featured-image',
			'value' 	=> 'default',
			'label' 	=> __( 'Default', 'catchresponsive' ),
		),							   
		'featured' => array(
			'id'		=> 'catchresponsive-featured-image',
			'value' 	=> 'featured',
			'label' 	=> __( 'Featured Image', 'catchresponsive' )
		),
		'full-size' => array(
			'id' => 'catchresponsive-featured-image',
			'value' => 'full-size',
			'label' => __( 'Full Image', 'catchresponsive' )
		),
		'disable' => array(
			'id' => 'catchresponsive-featured-image',
			'value' => 'disable',
			'label' => __( 'Disable Image', 'catchresponsive' )
		)
	);
	return apply_filters( 'featured_image_options', $featured_image_options );
}


/**
 * Returns catchresponsive_contents registered for catchresponsive.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_get_content() {
	$theme_data = wp_get_theme();

	$catchresponsive_content['left'] 	= sprintf( _x( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', '1: Year, 2: Site Title with home URL', 'catchresponsive' ), date( 'Y' ), '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a>' );

	$catchresponsive_content['right']	= esc_attr( $theme_data->get( 'Name') ) . '&nbsp;' . __( 'by', 'catchresponsive' ). '&nbsp;<a target="_blank" href="'. esc_url( $theme_data->get( 'AuthorURI' ) ) .'">'. esc_attr( $theme_data->get( 'Author' ) ) .'</a>';

	return apply_filters( 'catchresponsive_get_content', $catchresponsive_content );
}