<?php

$serverName = $_SERVER['SERVER_NAME'];
$devMode = $serverName === 'umar.website';
$serverPort = !$devMode ? ':' . $_SERVER['SERVER_PORT'] : '';
$secureProtocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https://" : "http://");

function is_article_page() {
  global $serverName, $serverPort, $secureProtocol;
  $activePage = $secureProtocol . $serverName . $serverPort . $_SERVER['REQUEST_URI'];
  $articlePage = get_permalink( get_option( 'page_for_posts' ) );
  return $articlePage === $activePage;
};

if (!function_exists( 'umar_setup' )) {
  function umar_setup() {
    // Add default post and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Add theme support for title tag <title>
    add_theme_support( 'title-tag' );

    // Add theme support for post-formats
    add_theme_support(
      'post-formats',
      [
        'link',
        'aside',
        'gallery',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
      ]
    );

    // Add theme support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add theme suport for core markup to output valid HTML5
    add_theme_support(
      'html5',
      [
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
      ]
    );

    // Add support for core custom logo
    $logo_height = 40;
    $logo_width  = "auto";

    add_theme_support(
      'custom-logo',
      [
        'height' => $logo_height,
				'width' => $logo_width,
				'flex-width' => true,
				'flex-height' => true,
				'unlink-homepage-logo' => true,
      ]
    );

    // Add theme support for block styles
    // add_theme_support( 'wp-block-styles' );

    // Add theme support for full and wide align images
    add_theme_support( 'align-wide' );

    // Add theme support for editor styles
    add_theme_support( 'editor-styles' );

    // Custom background color.
		add_theme_support(
			'custom-background',
			[
				'default-color' => 'd1e4dd',
      ]
    );
    
    // Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );
  }
}

add_action( 'after_setup_theme', 'umar_setup' );

// remove admin bar
add_filter('show_admin_bar', '__return_false');

if ( ! function_exists( 'umar_excerpt_more' ) ) {
  function umar_excerpt_more( $more ) {
    return '...';
  }
}
add_filter( 'excerpt_more', 'umar_excerpt_more' );

// require template tags
require_once "inc/template-tags.php";

// require template functions
require_once "inc/template-functions.php";

if ( ! function_exists( 'umar_scripts' ) ) {
  function umar_scripts() {
    global $devMode;
    wp_enqueue_style( 
      'umar-main-style', 
      get_template_directory_uri() . (!$devMode ? '/assets/css/bootstrap.css' : '/assets/css/bootstrap.min.css'), 
      [],
      wp_get_theme()->get( 'Version' )
    );
    /* if (is_article_page()) {
      // main script
      wp_enqueue_script( 
        'umar-main-script', 
        get_template_directory_uri() . (!$devMode ? '/assets/js/main.js' : '/assets/js/main.min.js'), 
        [],
        wp_get_theme()->get( 'Version' ),
        true 
      );
    } */
  }
}

add_action( 'wp_enqueue_scripts', 'umar_scripts' );