<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip link for accessibility -->
<a href="#main-content" class="skip-link">Skip to content</a>

<!-- ── Sticky Navigation ── -->
<nav class="sw3-nav" id="sw3-nav" role="navigation" aria-label="Main navigation">
    <div class="sw3-nav__inner">
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw3-nav__logo" aria-label="SW3 Green Energy - Home">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="SW3 Green Energy Services" class="sw3-nav__logo-img" width="160" height="48">
        </a>

        <!-- Desktop Menu -->
        <ul class="sw3-nav__menu" id="sw3-menu">
            <li><a href="#section-hero">Home</a></li>
            <li><a href="/solar-panels/">Solar Panels</a></li>
            <li><a href="/energy-storage/">Energy Storage</a></li>
            <li><a href="/home-energy/">Home Energy</a></li>
            <li><a href="/funding-grants/">Funding & Grants</a></li>
            <li><a href="/areas/">Areas We Serve</a></li>
            <li><a href="/about/">About Us</a></li>
        </ul>

        <!-- Right side: toggle + CTA + hamburger -->
        <div class="sw3-nav__actions">
            <!-- Animation toggle (accessibility) -->
            <button class="sw3-nav__toggle-anim" id="animation-toggle" type="button" aria-label="Toggle animations">
                Animations: On
            </button>

            <!-- CTA Button -->
            <a href="/contact/" class="sw3-nav__cta">Get Free Quote</a>

            <!-- Mobile hamburger -->
            <button class="sw3-nav__hamburger" id="nav-hamburger" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="sw3-menu">
                <span class="sw3-nav__hamburger-line"></span>
                <span class="sw3-nav__hamburger-line"></span>
                <span class="sw3-nav__hamburger-line"></span>
            </button>
        </div>
    </div>
</nav>

<!-- ScrollSmoother wrapper (desktop only — JS inits ScrollSmoother on these) -->
<div id="smooth-wrapper">
<div id="smooth-content">

<!-- Main content start -->
<main id="main-content">
