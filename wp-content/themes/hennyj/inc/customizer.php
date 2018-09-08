<?php
/**
 * hennyj Theme Customizer
 *
 * @package hennyj
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hennyj_customize_register( $wp_customize ) {
	
	/*
	 * Create New Section
	**/ 
	 
	// Slider 
	$wp_customize->add_section( 'hennyj_slider_section' , array(
			'title'       => __( 'Slider', 'hennyj' ),
    	  	'priority'    => 91
	));
	
	// Social Network
		$wp_customize->add_section( 'hennyj_social_section' , array(
			'title'       => __( 'Social Network', 'hennyj' ),
    	  	'priority'    => 92
	));
	
	/*
	 * Create New Setting and Control
	**/ 
	
	// Slider
	$wp_customize->add_setting( 'hennyj_slider_on', array('sanitize_callback' => 'hennyj_sanitize_text'));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'hennyj_slider_on',
				array(
					'label'    => 'Show',
					'settings' => 'hennyj_slider_on',
					'section'  => 'hennyj_slider_section',
					'type'	   => 'checkbox',
					'priority'	 => 1
				)
			)
		);
	
	// Facebook
	$wp_customize->add_setting( 'hennyj_social_facebook', array('sanitize_callback' => 'hennyj_sanitize_text'));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'hennyj_social_facebook',
				array(
					'label'    => 'Facebook',
					'settings' => 'hennyj_social_facebook',
					'section'  => 'hennyj_social_section',
					'type'	   => 'text',
					'priority'	 => 1
				)
			)
		);
	
	// Twitter
	$wp_customize->add_setting( 'hennyj_social_twitter', array('sanitize_callback' => 'hennyj_sanitize_text'));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'hennyj_social_twitter',
				array(
					'label'    => 'Twitter',
					'settings' => 'hennyj_social_twitter',
					'section'  => 'hennyj_social_section',
					'type'	   => 'text',
					'priority'	 => 2
				)
			)
		);
		
	// Instagram
	$wp_customize->add_setting( 'hennyj_social_instagram', array('sanitize_callback' => 'hennyj_sanitize_text'));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'hennyj_social_instagram',
				array(
					'label'    => 'Instagram',
					'settings' => 'hennyj_social_instagram',
					'section'  => 'hennyj_social_section',
					'type'	   => 'text',
					'priority'	 => 3
				)
			)
		);
	
	// Pinterest
	$wp_customize->add_setting( 'hennyj_social_pinterest', array('sanitize_callback' => 'hennyj_sanitize_text'));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'hennyj_social_pinterest',
				array(
					'label'    => 'Pinterest',
					'settings' => 'hennyj_social_pinterest',
					'section'  => 'hennyj_social_section',
					'type'	   => 'text',
					'priority'	 => 4
				)
			)
		);
		
	// Youtube
	$wp_customize->add_setting( 'hennyj_social_youtube', array('sanitize_callback' => 'hennyj_sanitize_text'));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'hennyj_social_youtube',
				array(
					'label'    => 'Youtube',
					'settings' => 'hennyj_social_youtube',
					'section'  => 'hennyj_social_section',
					'type'	   => 'text',
					'priority'	 => 5
				)
			)
		);
		
	// Dribbble
	$wp_customize->add_setting( 'hennyj_social_dribbble', array('sanitize_callback' => 'hennyj_sanitize_text'));
	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'hennyj_social_dribbble',
				array(
					'label'    => 'Dribbble',
					'settings' => 'hennyj_social_dribbble',
					'section'  => 'hennyj_social_section',
					'type'	   => 'text',
					'priority'	 => 6
				)
			)
		);
	
	// Remove Section
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'nav');
	
}
add_action( 'customize_register', 'hennyj_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function hennyj_customize_preview_js() {
	wp_enqueue_script( 'hennyj_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'hennyj_customize_preview_js' );

/*
 *  Sanitize	
 */
function hennyj_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}