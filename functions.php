<?php

add_theme_support( 'custom-header', [] );
add_theme_support( 'widgets' );

// Enable menus
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

// Register footer widgets
function register_footer_widgets() {
   register_sidebar([
		'name'          => esc_html__( 'Footer Section One', 'nd_dosth' ),
		'id'            => 'footer-section-one',
		'description'   => esc_html__( 'Widgets added here would appear inside the first section of the footer', 'nd_dosth' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ]);
    register_sidebar([
        'name'          => esc_html__( 'Footer Section Two', 'nd_dosth' ),
        'id'            => 'footer-section-two',
        'description'   => esc_html__( 'Widgets added here would appear inside the second section of the footer', 'nd_dosth' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ]);
    register_sidebar([
        'name'          => esc_html__( 'Footer Section Mobile', 'nd_dosth' ),
        'id'            => 'footer-section-mobile',
        'description'   => esc_html__( 'Widgets added here would appear on mobile', 'nd_dosth' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ]);
}
add_action( 'widgets_init', 'register_footer_widgets' );

// Enable page images
add_theme_support( 'post-thumbnails' );
