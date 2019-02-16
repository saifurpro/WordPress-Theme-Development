<?php

if ( ! function_exists( 'theme_name_setup' ) ) :
	function theme_name_setup() {

		load_theme_textdomain( 'theme-name', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-background', apply_filters( 'theme_name_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'theme-name' ),
		) );

	}
endif;
add_action( 'after_setup_theme', 'theme_name_setup' );


function theme_name_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'theme_name_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_name_content_width', 0 );


function theme_name_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme-name' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme-name' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_name_widgets_init' );


function theme_name_scripts() {
	wp_enqueue_style( 'theme-name-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
