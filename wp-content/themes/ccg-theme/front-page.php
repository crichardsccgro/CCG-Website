<?php
/**
 * Front Page Template
 *
 * Homepage for CCG featuring:
 * - Hero with franchise-focused messaging
 * - Key stats/credentials
 * - Value proposition
 * - Featured portfolio companies
 * - Team highlights
 * - Testimonials
 * - CTA
 *
 * @package CCG_Theme
 */

get_header();
?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <span class="hero-badge">Franchise-Focused Private Equity</span>
                <h1>Building Iconic <span>Franchise Brands</span> Through Conscious Partnership</h1>
                <p class="hero-description">
                    We partner with exceptional franchise founders and management teams to accelerate growth,
                    create lasting value, and build enduring brands across Beauty, Wellness, Pet, and Food & Beverage.
                </p>
                <div class="btn-group">
                    <a href="<?php echo esc_url(home_url('/investment-criteria')); ?>" class="btn btn-primary">
                        Explore Partnership
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-secondary">View Portfolio</a>
                </div>

                <!-- Key Stats -->
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">$100M+</div>
                        <div class="stat-label">Capital Deployed</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Portfolio Brands</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Franchise Locations</div>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <!-- Placeholder - replace with actual hero image -->
                <div style="background: linear-gradient(135deg, var(--ccg-navy) 0%, var(--ccg-teal) 100%); aspect-ratio: 4/3; border-radius: var(--radius-xl); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.25rem;">
                    Hero Image
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VALUE PROPOSITION -->
<section class="section-light">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Why Partner With CCG</span>
            <h2>A Different Kind of Private Equity Partner</h2>
            <p>We bring operational expertise, franchise industry knowledge, and a values-driven approach that puts people first.</p>
        </div>

        <div class="value-grid">
            <div class="value-card">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h3>Franchise Expertise</h3>
                <p>Deep understanding of franchise operations, unit economics, and multi-unit scaling strategies built from decades of hands-on experience.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <h3>Conscious Capital</h3>
                <p>Values-driven investing that prioritizes sustainable growth, authentic leadership, and creating positive impact for all stakeholders.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                </div>
                <h3>Growth Acceleration</h3>
                <p>Proven playbooks for franchise development, marketing optimization, and operational excellence that drive measurable results.</p>
            </div>
        </div>
    </div>
</section>

<!-- PORTFOLIO SECTION -->
<section>
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Our Portfolio</span>
            <h2>Partnering with Category-Leading Franchise Brands</h2>
            <p>We invest in exceptional franchise concepts across consumer services with strong unit economics and passionate leadership teams.</p>
        </div>

        <div class="portfolio-grid">
            <?php
            $portfolio_companies = ccg_get_portfolio('current', 6);

            if ($portfolio_companies):
                foreach ($portfolio_companies as $company):
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
            else:
                // Placeholder cards when no portfolio items exist
                $placeholders = array(
                    array('name' => 'RD Nutrition', 'category' => 'Wellness', 'desc' => 'Premium nutrition and supplement franchise concept'),
                    array('name' => 'Portfolio Company', 'category' => 'Beauty', 'desc' => 'Leading beauty services franchise brand'),
                    array('name' => 'Portfolio Company', 'category' => 'Pet Services', 'desc' => 'Pet care and grooming franchise concept'),
                    array('name' => 'Portfolio Company', 'category' => 'Food & Beverage', 'desc' => 'Fast-casual restaurant franchise brand'),
                    array('name' => 'Portfolio Company', 'category' => 'Wellness', 'desc' => 'Health and wellness services concept'),
                    array('name' => 'Portfolio Company', 'category' => 'Beauty', 'desc' => 'Personal care and beauty franchise'),
                );
                foreach ($placeholders as $company):
                    ?>
                    <div class="portfolio-card">
                        <div class="portfolio-card-image">
                            <div style="width: 150px; height: 60px; background: var(--ccg-gray-200); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--ccg-gray-500); font-size: 0.875rem;">Logo</div>
                        </div>
                        <div class="portfolio-card-content">
                            <span class="portfolio-category"><?php echo esc_html($company['category']); ?></span>
                            <h3><?php echo esc_html($company['name']); ?></h3>
                            <p><?php echo esc_html($company['desc']); ?></p>
                        </div>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-secondary">View All Portfolio Companies</a>
        </div>
    </div>
</section>

<!-- TEAM SECTION -->
<section class="section-light">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Our Team</span>
            <h2>Experienced Operators & Investors</h2>
            <p>Our team brings decades of franchise industry experience, operational expertise, and a shared commitment to conscious leadership.</p>
        </div>

        <div class="team-grid">
            <?php
            $team_members = ccg_get_team_members(4);

            if ($team_members):
                foreach ($team_members as $member):
                    $role = get_post_meta($member->ID, '_ccg_team_role', true);
                    ?>
                    <div class="team-card">
                        <div class="team-photo">
                            <?php if (has_post_thumbnail($member->ID)): ?>
                                <?php echo get_the_post_thumbnail($member->ID, 'team-thumbnail'); ?>
                            <?php else: ?>
                                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, var(--ccg-gray-200), var(--ccg-gray-300)); display: flex; align-items: center; justify-content: center; color: var(--ccg-gray-500);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </div>
                            <?php endif; ?>
                        </div>
                        <h3><?php echo esc_html($member->post_title); ?></h3>
                        <p class="team-role"><?php echo esc_html($role); ?></p>
                    </div>
                    <?php
                endforeach;
            else:
                // Placeholder team cards
                $placeholders = array(
                    array('name' => 'Team Member', 'role' => 'Managing Partner'),
                    array('name' => 'Team Member', 'role' => 'Partner'),
                    array('name' => 'Team Member', 'role' => 'Principal'),
                    array('name' => 'Team Member', 'role' => 'Vice President'),
                );
                foreach ($placeholders as $member):
                    ?>
                    <div class="team-card">
                        <div class="team-photo">
                            <div style="width: 100%; height: 100%; background: linear-gradient(135deg, var(--ccg-gray-200), var(--ccg-gray-300)); display: flex; align-items: center; justify-content: center; color: var(--ccg-gray-500);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                        </div>
                        <h3><?php echo esc_html($member['name']); ?></h3>
                        <p class="team-role"><?php echo esc_html($member['role']); ?></p>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo esc_url(home_url('/team')); ?>" class="btn btn-secondary">Meet the Full Team</a>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section>
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">What Founders Say</span>
            <h2>Trusted by Franchise Leaders</h2>
        </div>

        <div class="testimonial-grid">
            <?php
            $testimonials = ccg_get_testimonials(2);

            if ($testimonials):
                foreach ($testimonials as $testimonial):
                    $author_title = get_post_meta($testimonial->ID, '_ccg_testimonial_author_title', true);
                    $company = get_post_meta($testimonial->ID, '_ccg_testimonial_company', true);
                    ?>
                    <div class="testimonial-card">
                        <p class="testimonial-text"><?php echo esc_html($testimonial->post_content); ?></p>
                        <div class="testimonial-author">
                            <?php if (has_post_thumbnail($testimonial->ID)): ?>
                                <?php echo get_the_post_thumbnail($testimonial->ID, 'thumbnail'); ?>
                            <?php else: ?>
                                <div style="width: 50px; height: 50px; background: var(--ccg-gray-200); border-radius: 50%;"></div>
                            <?php endif; ?>
                            <div class="testimonial-author-info">
                                <h4><?php echo esc_html($testimonial->post_title); ?></h4>
                                <p><?php echo esc_html($author_title); ?><?php echo $company ? ', ' . esc_html($company) : ''; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            else:
                // Placeholder testimonials
                ?>
                <div class="testimonial-card">
                    <p class="testimonial-text">"CCG's approach to partnership is unlike any other PE firm we spoke with. They genuinely care about our culture, our people, and building something that lasts beyond the investment horizon."</p>
                    <div class="testimonial-author">
                        <div style="width: 50px; height: 50px; background: var(--ccg-gray-200); border-radius: 50%;"></div>
                        <div class="testimonial-author-info">
                            <h4>Founder Name</h4>
                            <p>CEO, Portfolio Company</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Their franchise expertise made all the difference. CCG understood our business from day one and helped us scale from 50 to 150 locations while maintaining the quality our customers expect."</p>
                    <div class="testimonial-author">
                        <div style="width: 50px; height: 50px; background: var(--ccg-gray-200); border-radius: 50%;"></div>
                        <div class="testimonial-author-info">
                            <h4>Founder Name</h4>
                            <p>Founder, Portfolio Company</p>
                        </div>
                    </div>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Explore a Partnership?</h2>
        <p>Whether you're a founder considering a capital partner or an intermediary representing a franchise concept, we'd love to start a conversation.</p>
        <div class="btn-group" style="justify-content: center;">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Get in Touch</a>
            <a href="<?php echo esc_url(home_url('/investment-criteria')); ?>" class="btn btn-teal">View Investment Criteria</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
