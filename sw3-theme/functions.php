<?php
/**
 * SW3 Green Energy Theme Functions
 *
 * Enqueues all scripts and styles in the correct order.
 */

// ── Theme Setup ──────────────────────────────────────────────
function sw3_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'sw3_theme_setup' );


// ── Enqueue Styles ───────────────────────────────────────────
function sw3_enqueue_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );
    $theme_dir     = get_template_directory_uri();

    // Satoshi (main font from Fontshare) + DM Serif Display (quotes)
    wp_enqueue_style(
        'sw3-satoshi',
        'https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700,900&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'sw3-dm-serif',
        'https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap',
        array(),
        null
    );

    // Global styles
    wp_enqueue_style( 'sw3-global',    $theme_dir . '/css/global.css',    array( 'sw3-satoshi' ), $theme_version );
    wp_enqueue_style( 'sw3-sections',  $theme_dir . '/css/sections.css',  array( 'sw3-global' ),       $theme_version );
    wp_enqueue_style( 'sw3-animations',$theme_dir . '/css/animations.css',array( 'sw3-sections' ),     $theme_version );
}
add_action( 'wp_enqueue_scripts', 'sw3_enqueue_styles' );


// ── Inline Critical CSS (front page only) ────────────────────
function sw3_inline_critical_css() {
    if ( ! is_front_page() ) return;

    $critical_css_path = get_template_directory() . '/css/critical.css';
    if ( file_exists( $critical_css_path ) ) {
        echo '<style id="sw3-critical">' . file_get_contents( $critical_css_path ) . '</style>';
    }
}
add_action( 'wp_head', 'sw3_inline_critical_css', 5 );


// ── Enqueue Scripts ──────────────────────────────────────────
function sw3_enqueue_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );
    $theme_dir     = get_template_directory_uri();
    $gsap_version  = '3.13.0';
    $cdn_base      = 'https://cdn.jsdelivr.net/npm/gsap@' . $gsap_version . '/dist/';

    // ── GSAP Core + Plugins (CDN, pinned version) ──
    wp_enqueue_script( 'gsap-core',         $cdn_base . 'gsap.min.js',              array(),              $gsap_version, true );
    wp_enqueue_script( 'gsap-scrolltrigger',$cdn_base . 'ScrollTrigger.min.js',     array( 'gsap-core' ), $gsap_version, true );
    wp_enqueue_script( 'gsap-scrollsmoother',$cdn_base . 'ScrollSmoother.min.js',   array( 'gsap-core', 'gsap-scrolltrigger' ), $gsap_version, true );
    wp_enqueue_script( 'gsap-splittext',    $cdn_base . 'SplitText.min.js',         array( 'gsap-core' ), $gsap_version, true );
    wp_enqueue_script( 'gsap-drawsvg',      $cdn_base . 'DrawSVGPlugin.min.js',     array( 'gsap-core' ), $gsap_version, true );
    wp_enqueue_script( 'gsap-motionpath',   $cdn_base . 'MotionPathPlugin.min.js',  array( 'gsap-core' ), $gsap_version, true );

    // ── Local Scripts ──
    wp_enqueue_script( 'sw3-gsap-init',      $theme_dir . '/js/gsap-init.js',       array( 'gsap-core', 'gsap-scrolltrigger', 'gsap-scrollsmoother', 'gsap-splittext', 'gsap-drawsvg', 'gsap-motionpath' ), $theme_version, true );
    wp_enqueue_script( 'sw3-nav',            $theme_dir . '/js/nav.js',             array( 'sw3-gsap-init' ), $theme_version, true );

    // Section animation scripts (only on front page)
    if ( is_front_page() ) {
        $sections = array( 'hero', 'sun', 'capture', 'flow', 'storage', 'impact', 'future' );
        foreach ( $sections as $section ) {
            wp_enqueue_script(
                'sw3-section-' . $section,
                $theme_dir . '/js/section-' . $section . '.js',
                array( 'sw3-gsap-init' ),
                $theme_version,
                true
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'sw3_enqueue_scripts' );


// ── Preconnect to CDN for faster loading ─────────────────────
function sw3_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href'        => 'https://cdn.jsdelivr.net',
            'crossorigin' => 'anonymous',
        );
        $urls[] = array(
            'href'        => 'https://api.fontshare.com',
            'crossorigin' => 'anonymous',
        );
        $urls[] = array(
            'href'        => 'https://fonts.googleapis.com',
            'crossorigin' => 'anonymous',
        );
        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'sw3_resource_hints', 10, 2 );


// ── Disable Gutenberg block library CSS on front-end ─────────
// (We're not using blocks, this saves ~40KB)
function sw3_remove_block_css() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'sw3_remove_block_css', 100 );
