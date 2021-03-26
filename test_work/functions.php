<?php

/**
 * test_work functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package test_work
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('test_work_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function test_work_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on test_work, use a find and replace
		 * to change 'test_work' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('test_work', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'test_work'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'test_work_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'test_work_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function test_work_content_width()
{
	$GLOBALS['content_width'] = apply_filters('test_work_content_width', 640);
}
add_action('after_setup_theme', 'test_work_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function test_work_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'test_work'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'test_work'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'test_work_widgets_init');

function test_work_widget_services_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Services', 'test_work'),
			'id'            => 'widget_services',
			'description'   => esc_html__('Add widgets here.', 'test_work'),
			'before_widget' => '<div class="col-md-4 animate-box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'test_work_widget_services_init');

function test_work_widget_footer_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Footer', 'test_work'),
			'id'            => 'widget_footer',
			'description'   => esc_html__('Add widgets here.', 'test_work'),
			'before_widget' => '<div class="col-md-4 animate-box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'test_work_widget_footer_init');

function test_work_widget_social_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Social link', 'test_work'),
			'id'            => 'social_link',
			'description'   => esc_html__('Add widgets here.', 'test_work'),
			'before_widget' => '<div class="col-md-3">',
			'after_widget'  => '</div>',
		)
	);
}
add_action('widgets_init', 'test_work_widget_social_init');

/**
 * Enqueue scripts and styles.
 */
function test_work_scripts()
{
	wp_enqueue_style('test_work-animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('test_work-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
	wp_enqueue_style('test_work-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('test_work-style', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_script('test_work-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', true);
	wp_enqueue_script('test_work-jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), '1.0', true);
	wp_enqueue_script('test_work-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true);
	wp_enqueue_script('test_work-jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), '1.0', true);
	wp_enqueue_script('test_work-modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', array(), '1.0', false);
	wp_enqueue_script('test_work-respond', get_template_directory_uri() . '/assets/js/respond.min.js', array(), '1.0', true);
	wp_enqueue_script('test_work-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'test_work_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Widgets Settings
 */
require get_template_directory() . '/widgets/widget-services.php';
require get_template_directory() . '/widgets/widget-social-links.php';
require get_template_directory() . '/widgets/widgets.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
