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
                <?php
                // Check if a WordPress menu is assigned
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'link_before'    => '',
                        'link_after'     => '',
                    ));
                } else {
                    // Fallback: use page lookups
                    $nav_items = array(
                        array('title' => 'Portfolio', 'slug' => 'portfolio', 'cpt' => true),
                        array('title' => 'Value Creation', 'slug' => 'value-creation'),
                        array('title' => 'Investment Criteria', 'slug' => 'investment-criteria'),
                        array('title' => 'Team', 'slug' => 'team', 'cpt' => true),
                        array('title' => 'News', 'slug' => 'news'),
                        array('title' => 'Contact', 'slug' => 'contact', 'cta' => true),
                    );

                    foreach ($nav_items as $item) {
                        // For custom post type archives
                        if (!empty($item['cpt'])) {
                            if ($item['slug'] === 'portfolio') {
                                $url = get_post_type_archive_link('portfolio');
                            } elseif ($item['slug'] === 'team') {
                                $url = get_post_type_archive_link('team');
                            } else {
                                $url = home_url('/' . $item['slug']);
                            }
                        } else {
                            // Look up the page by slug
                            $page = get_page_by_path($item['slug']);
                            if ($page) {
                                $url = get_permalink($page->ID);
                            } else {
                                // Fallback to constructed URL (works with pretty permalinks)
                                $url = home_url('/' . $item['slug']);
                            }
                        }

                        $class = !empty($item['cta']) ? 'nav-cta' : '';
                        echo '<a href="' . esc_url($url) . '" class="' . esc_attr($class) . '">' . esc_html($item['title']) . '</a>';
                    }
                }
                ?>
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
