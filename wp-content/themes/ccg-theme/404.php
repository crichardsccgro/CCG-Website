<?php
/**
 * 404 Page Template
 *
 * @package CCG_Theme
 */

get_header();
?>

<section class="hero" style="padding: 10rem 0; text-align: center;">
    <div class="container">
        <h1 style="font-size: 8rem; margin-bottom: 1rem; color: var(--ccg-gray-200);">404</h1>
        <h2>Page Not Found</h2>
        <p class="hero-description" style="margin: 0 auto 2rem;">Sorry, the page you're looking for doesn't exist or has been moved.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Return Home</a>
    </div>
</section>

<?php get_footer(); ?>
