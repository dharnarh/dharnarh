<?php

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
    add_theme_support( 'wp-block-styles' );

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