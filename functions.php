<?php
/**
 * Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Base_Theme
 */

if ( ! function_exists( 'basetheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function basetheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Base Theme, use a find and replace
		 * to change 'basetheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'basetheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'basetheme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'basetheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'basetheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function basetheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'basetheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'basetheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function basetheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar - Right', 'basetheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets on right sidebar.', 'basetheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		'empty_title'=> '',
	) );

	// uncomment below to add second sidebar

	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Sidebar Name', 'basetheme' ),
	// 	'id'            => 'sidebar-2',
	// 	'description'   => esc_html__( 'Add widgets on right sidebar.', 'basetheme' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h4 class="widget-title">',
	// 	'after_title'   => '</h4>',
	// 	'empty_title'=> '',
	// ) );
}
add_action( 'widgets_init', 'basetheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

// styles
function basetheme_scripts() {
wp_enqueue_style( 'basetheme-style', get_stylesheet_uri() );
wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/assets/css/custom.min.css', '1.0.0' );


// fonts and icons
wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Montserrat|Noto+Serif' );

// 	scripts
wp_enqueue_script( 'basetheme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20160909', true );
wp_enqueue_script( 'basetheme-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );


if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'basetheme_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

