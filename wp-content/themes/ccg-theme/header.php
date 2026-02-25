<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <span class="logo-text">CCG<span>RO</span></span>
                <?php endif; ?>
            </a>

            <!-- Main Navigation -->
            <nav class="main-nav" id="main-nav">
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>">Portfolio</a>
                <a href="<?php echo esc_url(home_url('/value-creation')); ?>">Value Creation</a>
                <a href="<?php echo esc_url(home_url('/investment-criteria')); ?>">Investment Criteria</a>
                <a href="<?php echo esc_url(home_url('/team')); ?>">Team</a>
                <a href="<?php echo esc_url(home_url('/news')); ?>">News</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-cta">Contact</a>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<main id="main-content">
