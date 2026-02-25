<?php
/**
 * Template Name: Investment Criteria
 *
 * @package CCG_Theme
 */

get_header();
?>

<section class="hero" style="padding: 8rem 0 4rem;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 0;">
            <span class="eyebrow">Investment Focus</span>
            <h1>Investment Criteria</h1>
            <p>Conscious Capital Growth makes control investments in US lower middle market businesses that are ready for accelerated growth. We invest in established companies with high growth potential.</p>
        </div>
    </div>
</section>

<section>
    <div class="container container-narrow">
        <!-- Key Metrics -->
        <div class="value-grid" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 4rem;">
            <div class="value-card" style="text-align: center;">
                <h3 style="color: var(--ccg-teal); margin-bottom: 0.5rem;">EBITDA</h3>
                <p style="font-size: 2rem; color: var(--ccg-navy); font-weight: 700; margin-bottom: 0.5rem;">$2M+</p>
                <p style="margin-bottom: 0; font-size: 0.9375rem;">Minimum EBITDA requirement</p>
            </div>
            <div class="value-card" style="text-align: center;">
                <h3 style="color: var(--ccg-teal); margin-bottom: 0.5rem;">Revenue</h3>
                <p style="font-size: 2rem; color: var(--ccg-navy); font-weight: 700; margin-bottom: 0.5rem;">$10M+</p>
                <p style="margin-bottom: 0; font-size: 0.9375rem;">Annual revenue target</p>
            </div>
            <div class="value-card" style="text-align: center;">
                <h3 style="color: var(--ccg-teal); margin-bottom: 0.5rem;">Transaction</h3>
                <p style="font-size: 2rem; color: var(--ccg-navy); font-weight: 700; margin-bottom: 0.5rem;">Control</p>
                <p style="margin-bottom: 0; font-size: 0.9375rem;">Majority investments preferred</p>
            </div>
        </div>

        <!-- Target Sectors -->
        <h2 style="margin-bottom: 2rem;">Target Sectors</h2>
        <p style="margin-bottom: 2rem;">We invest across high-growth consumer and business services sectors where our operational expertise drives the most value:</p>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 4rem;">
            <?php
            $sectors = array(
                array('icon' => '💆', 'name' => 'Beauty & Personal Care'),
                array('icon' => '🧘', 'name' => 'Health & Wellness'),
                array('icon' => '🐕', 'name' => 'Pet Services'),
                array('icon' => '🍽️', 'name' => 'Food & Beverage'),
                array('icon' => '🛒', 'name' => 'Consumer & Retail'),
                array('icon' => '👥', 'name' => 'Staffing & Healthcare'),
                array('icon' => '📚', 'name' => 'Education Services'),
                array('icon' => '🏢', 'name' => 'Business Services'),
            );
            foreach ($sectors as $sector):
            ?>
            <div style="text-align: center; padding: 1.5rem; background: var(--ccg-light-bg); border-radius: var(--radius-lg);">
                <div style="font-size: 2rem; margin-bottom: 0.5rem;"><?php echo $sector['icon']; ?></div>
                <p style="margin-bottom: 0; font-size: 0.875rem; font-weight: 500;"><?php echo esc_html($sector['name']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- What We Look For -->
        <h2 style="margin-bottom: 2rem;">What We Look For</h2>
        <div style="display: grid; gap: 1.5rem; margin-bottom: 4rem;">
            <div style="display: flex; gap: 1rem; align-items: flex-start; padding: 1.5rem; background: var(--ccg-light-bg); border-radius: var(--radius-lg);">
                <div style="width: 28px; height: 28px; background: var(--ccg-teal); border-radius: 50%; flex-shrink: 0; display: flex; align-items: center; justify-content: center; margin-top: 2px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <div>
                    <h4 style="margin-bottom: 0.5rem;">Established Businesses</h4>
                    <p style="margin-bottom: 0; color: var(--ccg-gray-500);">Proven business models with consistent revenue and demonstrated profitability. We partner with companies that have moved beyond the startup phase and are ready to scale.</p>
                </div>
            </div>

            <div style="display: flex; gap: 1rem; align-items: flex-start; padding: 1.5rem; background: var(--ccg-light-bg); border-radius: var(--radius-lg);">
                <div style="width: 28px; height: 28px; background: var(--ccg-teal); border-radius: 50%; flex-shrink: 0; display: flex; align-items: center; justify-content: center; margin-top: 2px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <div>
                    <h4 style="margin-bottom: 0.5rem;">Strong Leadership Teams</h4>
                    <p style="margin-bottom: 0; color: var(--ccg-gray-500);">Founders and management teams committed to growth who share our values of conscious leadership. We partner with leaders, not replace them.</p>
                </div>
            </div>

            <div style="display: flex; gap: 1rem; align-items: flex-start; padding: 1.5rem; background: var(--ccg-light-bg); border-radius: var(--radius-lg);">
                <div style="width: 28px; height: 28px; background: var(--ccg-teal); border-radius: 50%; flex-shrink: 0; display: flex; align-items: center; justify-content: center; margin-top: 2px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <div>
                    <h4 style="margin-bottom: 0.5rem;">Clear Growth Potential</h4>
                    <p style="margin-bottom: 0; color: var(--ccg-gray-500);">Identifiable opportunities for expansion—whether through geographic growth, new service lines, operational improvements, or strategic acquisitions.</p>
                </div>
            </div>

            <div style="display: flex; gap: 1rem; align-items: flex-start; padding: 1.5rem; background: var(--ccg-light-bg); border-radius: var(--radius-lg);">
                <div style="width: 28px; height: 28px; background: var(--ccg-teal); border-radius: 50%; flex-shrink: 0; display: flex; align-items: center; justify-content: center; margin-top: 2px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <div>
                    <h4 style="margin-bottom: 0.5rem;">Defensible Market Position</h4>
                    <p style="margin-bottom: 0; color: var(--ccg-gray-500);">Strong brand recognition, customer loyalty, and competitive differentiation. Businesses with sustainable advantages in their markets.</p>
                </div>
            </div>

            <div style="display: flex; gap: 1rem; align-items: flex-start; padding: 1.5rem; background: var(--ccg-light-bg); border-radius: var(--radius-lg);">
                <div style="width: 28px; height: 28px; background: var(--ccg-teal); border-radius: 50%; flex-shrink: 0; display: flex; align-items: center; justify-content: center; margin-top: 2px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <div>
                    <h4 style="margin-bottom: 0.5rem;">Scalable Operations</h4>
                    <p style="margin-bottom: 0; color: var(--ccg-gray-500);">Businesses with systems and processes that can support significant growth without proportional increases in overhead.</p>
                </div>
            </div>
        </div>

        <!-- Transaction Types -->
        <h2 style="margin-bottom: 2rem;">Transaction Types</h2>
        <div class="value-grid" style="grid-template-columns: 1fr 1fr;">
            <div class="value-card">
                <h4>Buyouts & Recapitalizations</h4>
                <p style="margin-bottom: 0;">Control investments partnering with founders seeking growth capital, liquidity, or succession planning while retaining meaningful upside.</p>
            </div>
            <div class="value-card">
                <h4>Growth Equity</h4>
                <p style="margin-bottom: 0;">Capital to accelerate expansion initiatives, fund acquisitions, or invest in infrastructure for the next stage of growth.</p>
            </div>
            <div class="value-card">
                <h4>Management Buyouts</h4>
                <p style="margin-bottom: 0;">Supporting strong management teams in acquiring businesses from existing owners.</p>
            </div>
            <div class="value-card">
                <h4>Corporate Carve-Outs</h4>
                <p style="margin-bottom: 0;">Acquiring non-core divisions or subsidiaries from larger companies where we can drive focused growth.</p>
            </div>
        </div>
    </div>
</section>

<!-- What We Bring -->
<section class="section-light">
    <div class="container container-narrow">
        <h2 class="text-center mb-4">What We Bring to the Partnership</h2>
        <p class="text-center" style="margin-bottom: 3rem;">Beyond capital, our portfolio companies gain access to:</p>

        <div class="value-grid">
            <div class="value-card">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h3>Experienced Team</h3>
                <p>Decades of operational experience across consumer services, retail, healthcare, and multi-unit businesses. We've been in your shoes.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                </div>
                <h3>Business Intelligence</h3>
                <p>Technology and analytics that bring clarity to your data, enabling better decisions and accelerated growth.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                </div>
                <h3>Operational Support</h3>
                <p>Hands-on assistance with strategic planning, process improvement, talent acquisition, and infrastructure development.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section>
    <div class="container container-narrow">
        <h2 class="text-center mb-4">Our Process</h2>
        <p class="text-center" style="margin-bottom: 3rem;">We believe in transparency and efficiency throughout the investment process.</p>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem;">
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: var(--ccg-navy); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: 700;">1</div>
                <h4>Initial Conversation</h4>
                <p style="font-size: 0.9375rem; color: var(--ccg-gray-500);">We learn about your business and share our approach</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: var(--ccg-navy); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: 700;">2</div>
                <h4>Preliminary Review</h4>
                <p style="font-size: 0.9375rem; color: var(--ccg-gray-500);">Initial analysis and indication of interest</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: var(--ccg-navy); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: 700;">3</div>
                <h4>Due Diligence</h4>
                <p style="font-size: 0.9375rem; color: var(--ccg-gray-500);">Comprehensive review and value creation planning</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 60px; height: 60px; background: var(--ccg-teal); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: 700;">4</div>
                <h4>Partnership</h4>
                <p style="font-size: 0.9375rem; color: var(--ccg-gray-500);">Close and begin accelerating growth together</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Does Your Business Match Our Criteria?</h2>
        <p>We'd love to learn about your business and explore a potential partnership. Every conversation is confidential.</p>
        <div class="btn-group" style="justify-content: center;">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Start a Conversation</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
