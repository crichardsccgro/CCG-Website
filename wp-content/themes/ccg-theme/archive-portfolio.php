<?php
/**
 * Portfolio Archive Template
 *
 * @package CCG_Theme
 */

get_header();
?>

<section class="hero" style="padding: 8rem 0 4rem;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 0;">
            <span class="eyebrow">Our Investments</span>
            <h1>Portfolio Companies</h1>
            <p>We partner with exceptional franchise brands across Beauty, Wellness, Pet Services, and Food & Beverage.</p>
        </div>
    </div>
</section>

<!-- Sector Filter -->
<section style="padding: 2rem 0;">
    <div class="container">
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" class="btn btn-primary" style="padding: 0.5rem 1.25rem;">All</a>
            <?php
            $sectors = get_terms(array(
                'taxonomy' => 'portfolio_category',
                'hide_empty' => true,
            ));
            foreach ($sectors as $sector):
            ?>
                <a href="<?php echo get_term_link($sector); ?>" class="btn btn-secondary" style="padding: 0.5rem 1.25rem;"><?php echo esc_html($sector->name); ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Current Portfolio -->
<section>
    <div class="container">
        <h2 class="mb-4">Current Investments</h2>
        <div class="portfolio-grid">
            <?php
            $current = ccg_get_portfolio('current');
            if ($current):
                foreach ($current as $company):
                    $categories = get_the_terms($company->ID, 'portfolio_category');
                    $category_name = $categories ? $categories[0]->name : 'Franchise';
                    $website = get_post_meta($company->ID, '_ccg_portfolio_website', true);
                    ?>
                    <div class="portfolio-card">
                        <div class="portfolio-card-image">
                            <?php if (has_post_thumbnail($company->ID)): ?>
                                <?php echo get_the_post_thumbnail($company->ID, 'portfolio-logo'); ?>
                            <?php else: ?>
                                <div style="width: 150px; height: 60px; background: var(--ccg-gray-200); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--ccg-gray-500);">Logo</div>
                            <?php endif; ?>
                        </div>
                        <div class="portfolio-card-content">
                            <span class="portfolio-category"><?php echo esc_html($category_name); ?></span>
                            <h3><?php echo esc_html($company->post_title); ?></h3>
                            <p><?php echo esc_html(get_the_excerpt($company->ID)); ?></p>
                            <?php if ($website): ?>
                                <a href="<?php echo esc_url($website); ?>" target="_blank" rel="noopener" style="font-size: 0.875rem; font-weight: 500;">Visit Website &rarr;</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endforeach;
            else:
                echo '<p>Portfolio companies coming soon.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Realized Investments -->
<?php
$realized = ccg_get_portfolio('realized');
if ($realized):
?>
<section class="section-light">
    <div class="container">
        <h2 class="mb-4">Realized Investments</h2>
        <div class="portfolio-grid">
            <?php
            foreach ($realized as $company):
                $categories = get_the_terms($company->ID, 'portfolio_category');
                $category_name = $categories ? $categories[0]->name : 'Franchise';
                ?>
                <div class="portfolio-card">
                    <div class="portfolio-card-image">
                        <?php if (has_post_thumbnail($company->ID)): ?>
                            <?php echo get_the_post_thumbnail($company->ID, 'portfolio-logo'); ?>
                        <?php else: ?>
                            <div style="width: 150px; height: 60px; background: var(--ccg-gray-200); border-radius: 8px;"></div>
                        <?php endif; ?>
                    </div>
                    <div class="portfolio-card-content">
                        <span class="portfolio-category"><?php echo esc_html($category_name); ?></span>
                        <h3><?php echo esc_html($company->post_title); ?></h3>
                        <p><?php echo esc_html(get_the_excerpt($company->ID)); ?></p>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <h2>Interested in Partnering With CCG?</h2>
        <p>We're always looking to meet exceptional franchise founders and concepts.</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Start a Conversation</a>
    </div>
</section>

<?php get_footer(); ?>
