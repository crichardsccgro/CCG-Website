<?php
/**
 * Portfolio Archive Template
 *
 * @package CCG_Theme
 */

get_header();

// Current portfolio companies
$current_portfolio = array(
    array(
        'name' => 'RD Nutrition Consultants',
        'sector' => 'Healthcare Services',
        'description' => 'A leading provider of specialized dietitian consulting services across the United States. Acquired January 2026 in partnership with Petra Capital Partners.',
        'logo' => 'https://static.wixstatic.com/media/014b26_07e4270d6fc94524adcadb44d8adbcd5~mv2.jpg/v1/fill/w_300,h_200,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/014b26_07e4270d6fc94524adcadb44d8adbcd5~mv2.jpg',
    ),
    array(
        'name' => 'Uni K Wax',
        'sector' => 'Beauty & Personal Care',
        'description' => 'Premium waxing services provider with locations across the United States.',
        'logo' => 'https://static.wixstatic.com/media/8eeb8f_1d2e9a0ff9544494ad64b329bf82f073~mv2.png/v1/fill/w_300,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/uni%20k.png',
    ),
    array(
        'name' => 'Petra Associates',
        'sector' => 'Staffing & Recruiting',
        'description' => 'Specialized recruiting firm focused on placing top talent across key industries.',
        'logo' => 'https://static.wixstatic.com/media/014b26_dbb123d2359e4a448e8ae99fc3d2c23c~mv2.png/v1/crop/x_0,y_41,w_2280,h_1234/fill/w_300,h_160,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/PA_color_Recruiting%20Specialists.png',
    ),
    array(
        'name' => 'Natural Life',
        'sector' => 'Health & Wellness',
        'description' => 'Wellness-focused consumer brand bringing holistic health solutions to market.',
        'logo' => 'https://static.wixstatic.com/media/014b26_d8d0baca5c8d4c0c95bdf1873e229664~mv2.png/v1/fill/w_300,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Natural-Life-Wellness-Begins-Here-Logo-1024x290.png',
    ),
);

// Prior investments / companies helped develop
$prior_investments = array(
    array(
        'name' => 'WellBiz Brands',
        'sector' => 'Health & Wellness',
        'logo' => 'https://static.wixstatic.com/media/014b26_7c8999313174487f888eb50ddde1dbed~mv2.png/v1/fill/w_200,h_60,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Wellbiz%20Brands.png',
    ),
    array(
        'name' => 'Health & Racquet Club Group',
        'sector' => 'Fitness',
        'logo' => 'https://static.wixstatic.com/media/014b26_6dc571f58a1c454e834cb754dd39f2f5~mv2.jpeg/v1/fill/w_200,h_110,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Health%20%26%20racquet%20club%20group.jpeg',
    ),
    array(
        'name' => 'Procter & Gamble',
        'sector' => 'Consumer Goods',
        'logo' => 'https://static.wixstatic.com/media/014b26_aa73633aeb394960af84c1ee6562cfb8~mv2.png/v1/fill/w_100,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Procter%26Gamble.png',
    ),
    array(
        'name' => 'Rand Sports',
        'sector' => 'Sports & Recreation',
        'logo' => 'https://static.wixstatic.com/media/014b26_905cd5999b544ca98b057c0a51a6b052~mv2.png/v1/fill/w_100,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/rand%20sports.png',
    ),
    array(
        'name' => 'Pro Kennex',
        'sector' => 'Sports Equipment',
        'logo' => 'https://static.wixstatic.com/media/014b26_e91fe17d974246fea45bc4e51935a8f4~mv2.png/v1/fill/w_120,h_80,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/pro%20kennex.png',
    ),
    array(
        'name' => "Ron's",
        'sector' => 'Food & Beverage',
        'logo' => 'https://static.wixstatic.com/media/014b26_7ae59d7111ec4f50978feb5047129bc7~mv2.png/v1/fill/w_120,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/rons.png',
    ),
);
?>

<section class="hero" style="padding: 8rem 0 4rem;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 0;">
            <span class="eyebrow">Our Investments</span>
            <h1>Portfolio</h1>
            <p>We partner with exceptional businesses across consumer services, healthcare, and business services sectors.</p>
        </div>
    </div>
</section>

<!-- Current Portfolio -->
<section>
    <div class="container">
        <h2 class="mb-4">Current Portfolio</h2>
        <div class="portfolio-grid" style="grid-template-columns: repeat(2, 1fr);">
            <?php foreach ($current_portfolio as $company): ?>
            <div class="portfolio-card">
                <div class="portfolio-card-image" style="background: white; padding: 2rem;">
                    <img src="<?php echo esc_url($company['logo']); ?>" alt="<?php echo esc_attr($company['name']); ?>" style="max-width: 200px; max-height: 80px; object-fit: contain;">
                </div>
                <div class="portfolio-card-content">
                    <span class="portfolio-category"><?php echo esc_html($company['sector']); ?></span>
                    <h3><?php echo esc_html($company['name']); ?></h3>
                    <p><?php echo esc_html($company['description']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Prior Investments -->
<section class="section-light">
    <div class="container">
        <h2 class="mb-4">Prior Investments & Partnerships</h2>
        <p style="margin-bottom: 2rem;">Brands our team has previously invested in or helped develop:</p>

        <div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 1.5rem; align-items: center;">
            <?php foreach ($prior_investments as $company): ?>
            <div style="background: white; padding: 1.5rem; border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; min-height: 100px;">
                <img src="<?php echo esc_url($company['logo']); ?>" alt="<?php echo esc_attr($company['name']); ?>" style="max-width: 100%; max-height: 60px; object-fit: contain; filter: grayscale(100%); opacity: 0.7; transition: var(--transition);" onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';" onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Sectors -->
<section>
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Focus Areas</span>
            <h2>Investment Sectors</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
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
            <div style="text-align: center; padding: 2rem; background: var(--ccg-light-bg); border-radius: var(--radius-lg);">
                <div style="font-size: 2.5rem; margin-bottom: 0.75rem;"><?php echo $sector['icon']; ?></div>
                <h4 style="margin-bottom: 0; font-size: 1rem;"><?php echo esc_html($sector['name']); ?></h4>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <h2>Interested in Partnering With CCG?</h2>
        <p>We're always looking to meet exceptional founders and business leaders.</p>
        <div class="btn-group" style="justify-content: center;">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Start a Conversation</a>
            <a href="<?php echo esc_url(home_url('/investment-criteria')); ?>" class="btn btn-secondary" style="border-color: white; color: white;">Investment Criteria</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
