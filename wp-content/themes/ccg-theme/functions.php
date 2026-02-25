<?php
/**
 * CCG Theme Functions
 *
 * @package CCG_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

define('CCG_THEME_VERSION', '1.0.0');
define('CCG_THEME_DIR', get_template_directory());
define('CCG_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function ccg_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');

    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'ccg-theme'),
        'footer'    => __('Footer Menu', 'ccg-theme'),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1280;
    }
}
add_action('after_setup_theme', 'ccg_theme_setup');

/**
 * Enqueue scripts and styles
 */
function ccg_enqueue_assets() {
    // Google Fonts - Inter
    wp_enqueue_style(
        'ccg-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'ccg-style',
        get_stylesheet_uri(),
        array('ccg-google-fonts'),
        CCG_THEME_VERSION
    );

    // Theme JavaScript
    wp_enqueue_script(
        'ccg-scripts',
        CCG_THEME_URI . '/assets/js/main.js',
        array(),
        CCG_THEME_VERSION,
        true
    );

    // Localize script for AJAX
    wp_localize_script('ccg-scripts', 'ccgData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('ccg_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'ccg_enqueue_assets');

/**
 * Register Custom Post Types
 */
function ccg_register_post_types() {
    // Portfolio Companies
    register_post_type('portfolio', array(
        'labels' => array(
            'name'               => __('Portfolio', 'ccg-theme'),
            'singular_name'      => __('Portfolio Company', 'ccg-theme'),
            'add_new'            => __('Add New', 'ccg-theme'),
            'add_new_item'       => __('Add New Company', 'ccg-theme'),
            'edit_item'          => __('Edit Company', 'ccg-theme'),
            'new_item'           => __('New Company', 'ccg-theme'),
            'view_item'          => __('View Company', 'ccg-theme'),
            'search_items'       => __('Search Portfolio', 'ccg-theme'),
            'not_found'          => __('No companies found', 'ccg-theme'),
            'not_found_in_trash' => __('No companies in trash', 'ccg-theme'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'portfolio'),
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'    => 'dashicons-building',
        'show_in_rest' => true,
    ));

    // Team Members
    register_post_type('team', array(
        'labels' => array(
            'name'               => __('Team', 'ccg-theme'),
            'singular_name'      => __('Team Member', 'ccg-theme'),
            'add_new'            => __('Add New', 'ccg-theme'),
            'add_new_item'       => __('Add New Team Member', 'ccg-theme'),
            'edit_item'          => __('Edit Team Member', 'ccg-theme'),
            'new_item'           => __('New Team Member', 'ccg-theme'),
            'view_item'          => __('View Team Member', 'ccg-theme'),
            'search_items'       => __('Search Team', 'ccg-theme'),
            'not_found'          => __('No team members found', 'ccg-theme'),
            'not_found_in_trash' => __('No team members in trash', 'ccg-theme'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'team'),
        'supports'     => array('title', 'editor', 'thumbnail'),
        'menu_icon'    => 'dashicons-groups',
        'show_in_rest' => true,
    ));

    // Testimonials
    register_post_type('testimonial', array(
        'labels' => array(
            'name'               => __('Testimonials', 'ccg-theme'),
            'singular_name'      => __('Testimonial', 'ccg-theme'),
            'add_new'            => __('Add New', 'ccg-theme'),
            'add_new_item'       => __('Add New Testimonial', 'ccg-theme'),
            'edit_item'          => __('Edit Testimonial', 'ccg-theme'),
        ),
        'public'       => true,
        'has_archive'  => false,
        'supports'     => array('title', 'editor', 'thumbnail'),
        'menu_icon'    => 'dashicons-format-quote',
        'show_in_rest' => true,
    ));
}
add_action('init', 'ccg_register_post_types');

/**
 * Register Custom Taxonomies
 */
function ccg_register_taxonomies() {
    // Portfolio Categories (Franchise sectors)
    register_taxonomy('portfolio_category', 'portfolio', array(
        'labels' => array(
            'name'          => __('Sectors', 'ccg-theme'),
            'singular_name' => __('Sector', 'ccg-theme'),
            'search_items'  => __('Search Sectors', 'ccg-theme'),
            'all_items'     => __('All Sectors', 'ccg-theme'),
            'edit_item'     => __('Edit Sector', 'ccg-theme'),
            'add_new_item'  => __('Add New Sector', 'ccg-theme'),
        ),
        'hierarchical' => true,
        'rewrite'      => array('slug' => 'sector'),
        'show_in_rest' => true,
    ));

    // Team Departments
    register_taxonomy('team_department', 'team', array(
        'labels' => array(
            'name'          => __('Departments', 'ccg-theme'),
            'singular_name' => __('Department', 'ccg-theme'),
        ),
        'hierarchical' => true,
        'rewrite'      => array('slug' => 'department'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'ccg_register_taxonomies');

/**
 * Add custom meta boxes
 */
function ccg_add_meta_boxes() {
    // Team Member Meta
    add_meta_box(
        'team_member_details',
        __('Team Member Details', 'ccg-theme'),
        'ccg_team_meta_callback',
        'team',
        'normal',
        'high'
    );

    // Portfolio Company Meta
    add_meta_box(
        'portfolio_details',
        __('Company Details', 'ccg-theme'),
        'ccg_portfolio_meta_callback',
        'portfolio',
        'normal',
        'high'
    );

    // Testimonial Meta
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'ccg-theme'),
        'ccg_testimonial_meta_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'ccg_add_meta_boxes');

/**
 * Team Member Meta Box Callback
 */
function ccg_team_meta_callback($post) {
    wp_nonce_field('ccg_team_meta', 'ccg_team_meta_nonce');

    $role = get_post_meta($post->ID, '_ccg_team_role', true);
    $linkedin = get_post_meta($post->ID, '_ccg_team_linkedin', true);
    $email = get_post_meta($post->ID, '_ccg_team_email', true);
    $order = get_post_meta($post->ID, '_ccg_team_order', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="ccg_team_role">Role/Title</label></th>
            <td><input type="text" id="ccg_team_role" name="ccg_team_role" value="<?php echo esc_attr($role); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="ccg_team_linkedin">LinkedIn URL</label></th>
            <td><input type="url" id="ccg_team_linkedin" name="ccg_team_linkedin" value="<?php echo esc_url($linkedin); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="ccg_team_email">Email</label></th>
            <td><input type="email" id="ccg_team_email" name="ccg_team_email" value="<?php echo esc_attr($email); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="ccg_team_order">Display Order</label></th>
            <td><input type="number" id="ccg_team_order" name="ccg_team_order" value="<?php echo esc_attr($order); ?>" class="small-text"></td>
        </tr>
    </table>
    <?php
}

/**
 * Portfolio Meta Box Callback
 */
function ccg_portfolio_meta_callback($post) {
    wp_nonce_field('ccg_portfolio_meta', 'ccg_portfolio_meta_nonce');

    $website = get_post_meta($post->ID, '_ccg_portfolio_website', true);
    $location = get_post_meta($post->ID, '_ccg_portfolio_location', true);
    $year_acquired = get_post_meta($post->ID, '_ccg_portfolio_year', true);
    $status = get_post_meta($post->ID, '_ccg_portfolio_status', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="ccg_portfolio_website">Company Website</label></th>
            <td><input type="url" id="ccg_portfolio_website" name="ccg_portfolio_website" value="<?php echo esc_url($website); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="ccg_portfolio_location">Location</label></th>
            <td><input type="text" id="ccg_portfolio_location" name="ccg_portfolio_location" value="<?php echo esc_attr($location); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="ccg_portfolio_year">Year Acquired</label></th>
            <td><input type="text" id="ccg_portfolio_year" name="ccg_portfolio_year" value="<?php echo esc_attr($year_acquired); ?>" class="small-text" placeholder="2024"></td>
        </tr>
        <tr>
            <th><label for="ccg_portfolio_status">Status</label></th>
            <td>
                <select id="ccg_portfolio_status" name="ccg_portfolio_status">
                    <option value="current" <?php selected($status, 'current'); ?>>Current</option>
                    <option value="realized" <?php selected($status, 'realized'); ?>>Realized</option>
                </select>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Testimonial Meta Box Callback
 */
function ccg_testimonial_meta_callback($post) {
    wp_nonce_field('ccg_testimonial_meta', 'ccg_testimonial_meta_nonce');

    $author_title = get_post_meta($post->ID, '_ccg_testimonial_author_title', true);
    $company = get_post_meta($post->ID, '_ccg_testimonial_company', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="ccg_testimonial_author_title">Author Title</label></th>
            <td><input type="text" id="ccg_testimonial_author_title" name="ccg_testimonial_author_title" value="<?php echo esc_attr($author_title); ?>" class="regular-text" placeholder="CEO"></td>
        </tr>
        <tr>
            <th><label for="ccg_testimonial_company">Company</label></th>
            <td><input type="text" id="ccg_testimonial_company" name="ccg_testimonial_company" value="<?php echo esc_attr($company); ?>" class="regular-text"></td>
        </tr>
    </table>
    <?php
}

/**
 * Save Meta Box Data
 */
function ccg_save_meta_boxes($post_id) {
    // Team meta
    if (isset($_POST['ccg_team_meta_nonce']) && wp_verify_nonce($_POST['ccg_team_meta_nonce'], 'ccg_team_meta')) {
        if (isset($_POST['ccg_team_role'])) {
            update_post_meta($post_id, '_ccg_team_role', sanitize_text_field($_POST['ccg_team_role']));
        }
        if (isset($_POST['ccg_team_linkedin'])) {
            update_post_meta($post_id, '_ccg_team_linkedin', esc_url_raw($_POST['ccg_team_linkedin']));
        }
        if (isset($_POST['ccg_team_email'])) {
            update_post_meta($post_id, '_ccg_team_email', sanitize_email($_POST['ccg_team_email']));
        }
        if (isset($_POST['ccg_team_order'])) {
            update_post_meta($post_id, '_ccg_team_order', intval($_POST['ccg_team_order']));
        }
    }

    // Portfolio meta
    if (isset($_POST['ccg_portfolio_meta_nonce']) && wp_verify_nonce($_POST['ccg_portfolio_meta_nonce'], 'ccg_portfolio_meta')) {
        if (isset($_POST['ccg_portfolio_website'])) {
            update_post_meta($post_id, '_ccg_portfolio_website', esc_url_raw($_POST['ccg_portfolio_website']));
        }
        if (isset($_POST['ccg_portfolio_location'])) {
            update_post_meta($post_id, '_ccg_portfolio_location', sanitize_text_field($_POST['ccg_portfolio_location']));
        }
        if (isset($_POST['ccg_portfolio_year'])) {
            update_post_meta($post_id, '_ccg_portfolio_year', sanitize_text_field($_POST['ccg_portfolio_year']));
        }
        if (isset($_POST['ccg_portfolio_status'])) {
            update_post_meta($post_id, '_ccg_portfolio_status', sanitize_text_field($_POST['ccg_portfolio_status']));
        }
    }

    // Testimonial meta
    if (isset($_POST['ccg_testimonial_meta_nonce']) && wp_verify_nonce($_POST['ccg_testimonial_meta_nonce'], 'ccg_testimonial_meta')) {
        if (isset($_POST['ccg_testimonial_author_title'])) {
            update_post_meta($post_id, '_ccg_testimonial_author_title', sanitize_text_field($_POST['ccg_testimonial_author_title']));
        }
        if (isset($_POST['ccg_testimonial_company'])) {
            update_post_meta($post_id, '_ccg_testimonial_company', sanitize_text_field($_POST['ccg_testimonial_company']));
        }
    }
}
add_action('save_post', 'ccg_save_meta_boxes');

/**
 * Register Widget Areas
 */
function ccg_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'ccg-theme'),
        'id'            => 'footer-widgets',
        'description'   => __('Add widgets here to appear in footer.', 'ccg-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'ccg_widgets_init');

/**
 * Customize excerpt length
 */
function ccg_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'ccg_excerpt_length');

/**
 * Customize excerpt more text
 */
function ccg_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'ccg_excerpt_more');

/**
 * Add custom image sizes
 */
function ccg_add_image_sizes() {
    add_image_size('team-thumbnail', 400, 400, true);
    add_image_size('portfolio-logo', 600, 400, false);
    add_image_size('hero-image', 1200, 800, true);
}
add_action('after_setup_theme', 'ccg_add_image_sizes');

/**
 * Helper function to get team members
 */
function ccg_get_team_members($limit = -1) {
    return get_posts(array(
        'post_type'      => 'team',
        'posts_per_page' => $limit,
        'orderby'        => 'meta_value_num',
        'meta_key'       => '_ccg_team_order',
        'order'          => 'ASC',
    ));
}

/**
 * Helper function to get portfolio companies
 */
function ccg_get_portfolio($status = 'current', $limit = -1) {
    $args = array(
        'post_type'      => 'portfolio',
        'posts_per_page' => $limit,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    if ($status !== 'all') {
        $args['meta_query'] = array(
            array(
                'key'   => '_ccg_portfolio_status',
                'value' => $status,
            ),
        );
    }

    return get_posts($args);
}

/**
 * Helper function to get testimonials
 */
function ccg_get_testimonials($limit = -1) {
    return get_posts(array(
        'post_type'      => 'testimonial',
        'posts_per_page' => $limit,
        'orderby'        => 'rand',
    ));
}

/**
 * Admin customizations
 */
function ccg_admin_styles() {
    echo '<style>
        .post-type-team .wp-list-table .column-title { width: 25%; }
        .post-type-portfolio .wp-list-table .column-title { width: 25%; }
    </style>';
}
add_action('admin_head', 'ccg_admin_styles');

/**
 * Create default pages on theme activation
 */
function ccg_create_default_pages() {
    $pages = array(
        array(
            'title'    => 'Contact',
            'slug'     => 'contact',
            'template' => 'page-contact.php',
        ),
        array(
            'title'    => 'Investment Criteria',
            'slug'     => 'investment-criteria',
            'template' => 'page-investment-criteria.php',
        ),
        array(
            'title'    => 'Value Creation',
            'slug'     => 'value-creation',
            'template' => 'page-value-creation.php',
        ),
        array(
            'title'    => 'News',
            'slug'     => 'news',
            'template' => '',
        ),
    );

    foreach ($pages as $page_data) {
        // Check if page already exists
        $existing = get_page_by_path($page_data['slug']);

        if (!$existing) {
            $page_id = wp_insert_post(array(
                'post_title'     => $page_data['title'],
                'post_name'      => $page_data['slug'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
            ));

            // Set page template if specified
            if ($page_id && !empty($page_data['template'])) {
                update_post_meta($page_id, '_wp_page_template', $page_data['template']);
            }
        } else {
            // Page exists, make sure it has the right template
            if (!empty($page_data['template'])) {
                update_post_meta($existing->ID, '_wp_page_template', $page_data['template']);
            }
        }
    }

    // Set permalink structure to post name if not already set
    if (get_option('permalink_structure') !== '/%postname%/') {
        update_option('permalink_structure', '/%postname%/');
        flush_rewrite_rules();
    }
}
add_action('after_switch_theme', 'ccg_create_default_pages');

/**
 * Flush rewrite rules on theme activation (for custom post types)
 */
function ccg_rewrite_flush() {
    ccg_register_post_types();
    ccg_register_taxonomies();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'ccg_rewrite_flush');
