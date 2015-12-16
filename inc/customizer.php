<?php
/**
 * Quinzhee Theme Customizer.
 *
 * @package Quinzhee
 */

/**
 * Setup options in the theme customizer
 */
function quinzhee_register_theme_customizer( $wp_customize ) {
 
    // Site Logo setting
    $wp_customize->add_setting(
        'quinzhee_site_logo_upload'
    );

    // Header Background setting
    $wp_customize->add_setting(
        'quinzhee_header_background'
    );

    // Primary Color setting
    $wp_customize->add_setting(
        'quinzhee_primary_color',
        array(
            'default'   => '#fa5247',
			'transport' => 'postMessage'
        )
    );

    // Site Logo control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'quinzhee_site_logo_upload', array(
                'description' => 'The Site Logo is used in the site header next to the main menu. Logo should be 136px tall for Retina, displays at 68px.',
                'label'       => __( 'Site Logo', 'quinzhee' ),
                'priority'    => 100,
                'section'     => 'title_tagline',
                'settings'    => 'quinzhee_site_logo_upload',
            )
        )
    );

    // Header Background control
    $wp_customize->add_control(
        'quinzhee_header_background',
        array(
            'label'    => 'Show Header Background',
            'priority' => 100,
            'section'  => 'title_tagline',
            'type'     => 'checkbox'
        )
    );

 	// Primary Color control
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_color',
            array(
           		'description' => 'Color for links, buttons, headlines, and other key areas.',
                'label'       => __( 'Primary Color', 'quinzhee' ),
                'section'     => 'colors',
                'settings'    => 'quinzhee_primary_color'
            )
        )
    );
 
}
add_action( 'customize_register', 'quinzhee_register_theme_customizer' );

/**
 * Apply styles from the theme customizer
 */
function quinzhee_customizer_css() {
    ?>
    <style type="text/css">
        .site-content a,
        .main-navigation li li a,
        .main-navigation li a:hover,
        .button,
        .button.secondary-button:hover,
        .main-navigation li.menu-button:last-of-type a:hover,
        .main-navigation li.menu-button:last-of-type li a:hover,
        .cta-widget-area .widget a:hover .fa { color: <?php echo get_theme_mod( 'quinzhee_primary_color' ); ?>; }
        .button:hover,
        .site-content .button,
        .footer-multi-widgets-area .button,
        .main-navigation li.menu-button:last-of-type a,
        .announcement-widget-area,
        .main-navigation li li a:hover,
        .nav-links a { background-color: <?php echo get_theme_mod( 'quinzhee_primary_color' ); ?>; }
        .button:hover,
        .button.secondary-button:hover,
        .cta-widget-area .widget { border-color: <?php echo get_theme_mod( 'quinzhee_primary_color' ); ?>; }
    </style>
    <?php
}
add_action( 'wp_head', 'quinzhee_customizer_css' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function quinzhee_customize_preview_js() {
    wp_enqueue_script( 'quinzhee_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'quinzhee_customize_preview_js' );