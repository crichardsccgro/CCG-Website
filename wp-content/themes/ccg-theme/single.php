<?php
/**
 * Single Post Template
 *
 * @package CCG_Theme
 */

get_header();
?>

<article class="single-post">
    <section class="hero" style="padding: 8rem 0 3rem;">
        <div class="container container-narrow">
            <span class="eyebrow"><?php echo get_the_date('F j, Y'); ?></span>
            <h1><?php the_title(); ?></h1>
            <?php if (has_excerpt()): ?>
                <p class="hero-description"><?php echo get_the_excerpt(); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <?php if (has_post_thumbnail()): ?>
        <section style="padding: 0 0 3rem;">
            <div class="container">
                <div style="border-radius: var(--radius-xl); overflow: hidden;">
                    <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section style="padding-top: 0;">
        <div class="container container-narrow">
            <div class="post-content" style="font-size: 1.125rem; line-height: 1.8;">
                <?php the_content(); ?>
            </div>

            <!-- Share / Navigation -->
            <div style="margin-top: 4rem; padding-top: 2rem; border-top: 1px solid var(--ccg-gray-200);">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                    <div>
                        <?php
                        $prev_post = get_previous_post();
                        if ($prev_post):
                        ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" style="display: flex; align-items: center; gap: 0.5rem;">
                                &larr; <?php echo esc_html($prev_post->post_title); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php
                        $next_post = get_next_post();
                        if ($next_post):
                        ?>
                            <a href="<?php echo get_permalink($next_post); ?>" style="display: flex; align-items: center; gap: 0.5rem;">
                                <?php echo esc_html($next_post->post_title); ?> &rarr;
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>

<!-- Related Posts -->
<section class="section-light">
    <div class="container">
        <h2 class="text-center mb-4">More News</h2>
        <div class="portfolio-grid" style="grid-template-columns: repeat(3, 1fr);">
            <?php
            $related = new WP_Query(array(
                'posts_per_page' => 3,
                'post__not_in'   => array(get_the_ID()),
                'orderby'        => 'rand',
            ));
            while ($related->have_posts()): $related->the_post();
            ?>
                <article class="portfolio-card">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="portfolio-card-image" style="aspect-ratio: 16/9;">
                            <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                        </div>
                    <?php endif; ?>
                    <div class="portfolio-card-content">
                        <span class="portfolio-category"><?php echo get_the_date('M j, Y'); ?></span>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                </article>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
