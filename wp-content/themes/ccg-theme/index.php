<?php
/**
 * Main Template File
 *
 * @package CCG_Theme
 */

get_header();
?>

<section class="hero" style="padding: 8rem 0 4rem;">
    <div class="container">
        <h1><?php
            if (is_home()) {
                echo 'News & Insights';
            } elseif (is_archive()) {
                the_archive_title();
            } elseif (is_search()) {
                printf('Search Results for: %s', get_search_query());
            } else {
                the_title();
            }
        ?></h1>
    </div>
</section>

<section>
    <div class="container">
        <?php if (have_posts()): ?>
            <div class="portfolio-grid">
                <?php while (have_posts()): the_post(); ?>
                    <article class="portfolio-card">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="portfolio-card-image">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="portfolio-card-content">
                            <span class="portfolio-category"><?php echo get_the_date('M j, Y'); ?></span>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="text-center mt-5">
                <?php
                the_posts_pagination(array(
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                ));
                ?>
            </div>
        <?php else: ?>
            <p class="text-center">No posts found.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
