<?php
/**
 * Front Page Template
 *
 * CCG - Lower Middle Market Private Equity
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
                <span class="hero-badge">Lower Middle Market Private Equity</span>
                <h1>Accelerating Growth for <span>Exceptional Businesses</span></h1>
                <p class="hero-description">
                    Conscious Capital Growth makes control investments in US lower middle market businesses
                    ready for accelerated growth. We partner with founders and management teams to build
                    lasting value through operational excellence and strategic capital deployment.
                </p>
                <div class="btn-group">
                    <a href="<?php echo esc_url(home_url('/investment-criteria')); ?>" class="btn btn-primary">
                        Investment Criteria
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-secondary">View Portfolio</a>
                </div>

                <!-- Key Stats -->
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">$2M+</div>
                        <div class="stat-label">Minimum EBITDA</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">30+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">$1B+</div>
                        <div class="stat-label">Transaction Value</div>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <div style="background: linear-gradient(135deg, var(--ccg-navy) 0%, var(--ccg-teal) 100%); aspect-ratio: 4/3; border-radius: var(--radius-xl); display: flex; align-items: center; justify-content: center;">
                    <img src="https://static.wixstatic.com/media/ec36c2_56f00f5006d644b9970d7012ffa11e19~mv2.png" alt="CCG Logo" style="width: 120px; height: auto; filter: brightness(0) invert(1);">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWS BANNER -->
<section style="background: var(--ccg-navy); padding: 1.5rem 0;">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center; gap: 2rem; flex-wrap: wrap; color: white;">
            <span style="background: var(--ccg-teal); padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.75rem; font-weight: 600; text-transform: uppercase;">Latest News</span>
            <a href="<?php echo esc_url(home_url('/news')); ?>" style="color: white; font-size: 1rem;">
                CCG and Petra Capital Partners Acquire RD Nutrition Consultants, a Leading National Clinical Nutrition Platform
                <span style="margin-left: 0.5rem;">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<!-- WHO WE ARE -->
<section>
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <span class="eyebrow" style="color: var(--ccg-teal);">Who We Are</span>
                <h2>Conscious Capital Growth</h2>
                <p style="font-size: 1.125rem; color: var(--ccg-gray-700);">
                    We're servant leaders who grow businesses consciously, authentically, and with higher purpose.
                </p>
                <p>
                    We have led, built, financed, and advised countless companies to the pinnacles of success.
                    Whether you are a founder or investor, our mutual focus is on accelerating your growth.
                    Company success and investment returns go hand in hand.
                </p>
                <p>
                    Our team brings decades of operational experience across consumer services, healthcare,
                    retail, and multi-unit businesses. We don't just provide capital—we roll up our sleeves
                    and work alongside management teams to drive results.
                </p>
                <a href="<?php echo esc_url(home_url('/team')); ?>" class="btn btn-secondary" style="margin-top: 1rem;">Meet Our Team</a>
            </div>
            <div>
                <div style="background: var(--ccg-light-bg); padding: 2.5rem; border-radius: var(--radius-xl);">
                    <h3 style="margin-bottom: 1.5rem;">What "Conscious" Means</h3>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 1rem;">
                        <li style="display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="color: var(--ccg-teal); font-size: 1.25rem;">●</span>
                            <span>Remaining mindful of you, your people, your culture and your brand</span>
                        </li>
                        <li style="display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="color: var(--ccg-teal); font-size: 1.25rem;">●</span>
                            <span>Discovering that point of difference and building from there</span>
                        </li>
                        <li style="display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="color: var(--ccg-teal); font-size: 1.25rem;">●</span>
                            <span>Connecting business disciplines into a proven growth platform</span>
                        </li>
                        <li style="display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="color: var(--ccg-teal); font-size: 1.25rem;">●</span>
                            <span>Being thoughtful about systems, processes and practices that fit</span>
                        </li>
                        <li style="display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="color: var(--ccg-teal); font-size: 1.25rem;">●</span>
                            <span>Remembering that work can be fun and winning is really fun</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VALUE PROPOSITION -->
<section class="section-light">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Our Approach</span>
            <h2>A Proven Acceleration Platform</h2>
            <p>We bring more than capital. Our portfolio companies gain immediate access to decades of experience, operational expertise, and proven growth systems.</p>
        </div>

        <div class="value-grid">
            <div class="value-card">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                </div>
                <h3>Business Intelligence</h3>
                <p>Technology and analytics that bring clarity to your data and drive actionable decisions for accelerated growth.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h3>Experienced Team</h3>
                <p>Industry-leading executives who have grown emerging brands into market leaders, available to support your success.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                </div>
                <h3>Instant Infrastructure</h3>
                <p>Resources and operational support—the vital ingredients for outpaced growth and increased shareholder value.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTORS -->
<section>
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Investment Focus</span>
            <h2>Target Sectors</h2>
            <p>We invest across high-growth consumer and business services sectors where our operational expertise drives the most value.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
            <?php
            $sectors = array(
                array('icon' => '💆', 'name' => 'Beauty & Personal Care'),
                array('icon' => '🧘', 'name' => 'Health & Wellness'),
                array('icon' => '🐕', 'name' => 'Pet Services'),
                array('icon' => '🍽️', 'name' => 'Food & Beverage'),
                array('icon' => '🛒', 'name' => 'Consumer Retail'),
                array('icon' => '👥', 'name' => 'Staffing & Healthcare'),
                array('icon' => '📚', 'name' => 'Education Services'),
                array('icon' => '🏢', 'name' => 'Business Services'),
            );
            foreach ($sectors as $sector):
            ?>
            <div style="text-align: center; padding: 2rem; background: var(--ccg-light-bg); border-radius: var(--radius-lg); transition: var(--transition);" class="value-card">
                <div style="font-size: 2.5rem; margin-bottom: 0.75rem;"><?php echo $sector['icon']; ?></div>
                <h4 style="margin-bottom: 0; font-size: 1rem;"><?php echo esc_html($sector['name']); ?></h4>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo esc_url(home_url('/investment-criteria')); ?>" class="btn btn-primary">View Full Investment Criteria</a>
        </div>
    </div>
</section>

<!-- TEAM PREVIEW -->
<section class="section-light">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Leadership</span>
            <h2>Experienced Operators & Investors</h2>
            <p>Our team brings decades of experience building, scaling, and exiting successful businesses.</p>
        </div>

        <div class="team-grid">
            <!-- Christo -->
            <div class="team-card">
                <div class="team-photo">
                    <img src="https://static.wixstatic.com/media/8e0756_2d71061d1c8242cd8d2c65ccfba63692~mv2.jpg/v1/crop/x_0,y_104,w_1633,h_1365/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/ChristoHS.jpg" alt="Christo Demetriades" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3>Christo Demetriades</h3>
                <p class="team-role">Managing Partner</p>
            </div>

            <!-- Heather -->
            <div class="team-card">
                <div class="team-photo">
                    <img src="https://static.wixstatic.com/media/8e0756_f559b61632ce49f483ea97470d6701e3~mv2.jpg/v1/crop/x_0,y_146,w_1395,h_1237/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/HeatherHS.jpg" alt="Heather Elrod" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3>Heather Elrod, MBA</h3>
                <p class="team-role">Managing Partner</p>
            </div>

            <!-- Alex -->
            <div class="team-card">
                <div class="team-photo">
                    <img src="https://static.wixstatic.com/media/8e0756_bf8e86b885fb4aff841adbde898a6fe9~mv2.jpg/v1/crop/x_18,y_98,w_1625,h_1376/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/AlexHS.jpg" alt="Alex Samios" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3>Alex Samios</h3>
                <p class="team-role">Managing Director</p>
            </div>

            <!-- Dee -->
            <div class="team-card">
                <div class="team-photo">
                    <img src="https://static.wixstatic.com/media/8e0756_c90a4b1a81d94c8ab814702294896618~mv2.jpg/v1/crop/x_0,y_50,w_1665,h_1358/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/DeeHS.jpg" alt="Dedria Ryan" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3>Dedria Ryan</h3>
                <p class="team-role">Operating Partner</p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo esc_url(home_url('/team')); ?>" class="btn btn-secondary">Meet the Full Team</a>
        </div>
    </div>
</section>

<!-- VISION MISSION VALUES -->
<section class="section-navy">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 3rem; text-align: center;">
            <div>
                <h3 style="color: var(--ccg-teal); margin-bottom: 1rem;">Vision</h3>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.125rem;">
                    For businesses & business owners to experience the thrill of growth without sacrificing authenticity and culture.
                </p>
            </div>
            <div>
                <h3 style="color: var(--ccg-teal); margin-bottom: 1rem;">Mission</h3>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.125rem;">
                    To help business owners reach their full potential and improve people's lives in the process.
                </p>
            </div>
            <div>
                <h3 style="color: var(--ccg-teal); margin-bottom: 1rem;">Values</h3>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.125rem;">
                    Be Accountable · Be Purposeful · Be Nimble · Be Innovative · Be Driven
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section" style="background: linear-gradient(135deg, var(--ccg-teal) 0%, var(--ccg-navy) 100%);">
    <div class="container">
        <h2>Ready to Accelerate Your Growth?</h2>
        <p>Whether you're a business owner seeking a strategic partner or an intermediary representing a compelling opportunity, we'd love to start a conversation.</p>
        <div class="btn-group" style="justify-content: center;">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Contact Us</a>
            <a href="<?php echo esc_url(home_url('/investment-criteria')); ?>" class="btn btn-secondary" style="border-color: white; color: white;">Investment Criteria</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
