<?php

function your_theme_name_setup() {
	
	load_theme_textdomain( 'your_theme_name', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	
	add_theme_support( 'title-tag' );

	
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'your_theme_name' ),
	) );


	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'your_theme_name_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


}

add_action( 'after_setup_theme', 'your_theme_name_setup' );

function your_theme_name_add_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'your_theme_name_add_editor_styles' );

function your_theme_name_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'your_theme_name_content_width', 1170 );
}
add_action( 'after_setup_theme', 'your_theme_name_content_width', 0 );


function your_theme_name_assets(){
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts','your_theme_name_assets');
