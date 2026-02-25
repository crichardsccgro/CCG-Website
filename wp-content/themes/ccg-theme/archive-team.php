<?php
/**
 * Team Page Template
 *
 * @package CCG_Theme
 */

get_header();

// Team data from actual CCG website
$leadership = array(
    array(
        'name' => 'Christo Demetriades',
        'role' => 'Managing Partner',
        'focus' => 'Finance & Acquisitions',
        'image' => 'https://static.wixstatic.com/media/8e0756_2d71061d1c8242cd8d2c65ccfba63692~mv2.jpg/v1/crop/x_0,y_104,w_1633,h_1365/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/ChristoHS.jpg',
        'tagline' => 'Forte is acquiring and analyzing high-growth and high-potential businesses.',
        'bio' => 'Christo is a proven entrepreneur, visionary and leader. He has successfully created, owned and sold businesses both in the U.S. and internationally. His understanding of international finance, law and business operations, underscored by his strong accounting background, make Christo the perfect resource when acquiring and analyzing high growth/high potential brands. He has taken public a dozen Food, health and education brands leading to over a billion dollars in market cap, internationally on five continents. Among his many lucrative transactions are Health and Racquet Club which he sold to Sir Richard Branson\'s Virgin Active, and Lunchbox Wax which is the latest success story in Christo\'s transaction portfolio selling to WellBiz Brands.',
        'bio2' => 'His three-decade tenure as a CEO, CFO and COO for restaurant, entertainment and self-care brands, means Christo knows how to build and nurture strong, loyal management teams that drive both culture and goal achievement. And by working with executive teams to solidify the financial and operational structure of companies, he sets them up to reach their full potential providing public and private investors viable opportunities and business owners the chance to achieve their dreams.',
    ),
    array(
        'name' => 'Heather Elrod, MBA',
        'role' => 'Managing Partner',
        'focus' => 'Acquisitions, Business Analysis, Operations',
        'image' => 'https://static.wixstatic.com/media/8e0756_f559b61632ce49f483ea97470d6701e3~mv2.jpg/v1/crop/x_0,y_146,w_1395,h_1237/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/HeatherHS.jpg',
        'tagline' => 'Known for effective M&A, growing companies, and increasing value for all stakeholders.',
        'bio' => 'Heather\'s career spans nearly three decades in the beauty and wellness industries. She has held executive positions in multi-billion dollar, as well as emerging companies, and partnered with private equity firms in the acquisition, growth, and sale of businesses across various sectors. Heather is known for her ability to scale companies by finding the key growth levers and moving them dramatically forward. The result is outpaced business growth and increased value for all stakeholders.',
        'bio2' => 'Before Conscious Capital Group, Heather served as CEO of Amazing Lash Studio Franchise. Under her leadership it was named the #5 top growth franchise and the #1 in category by Entrepreneur magazine. She was named #4 on the 2019 Franchise Times Fast and Serious List and awarded the "dealmaker" award for leading the sale of Amazing Lash Studio Franchise to KSL Capital. Heather also was an executive for Mail Boxes Etc.® (with over 4,500 locations worldwide) and participated in the sale of the company to UPS® thereafter transitioning the company to The UPS Store®. She co-founded SkinPhD® Cosmeceuticals and worked as a consultant in the beauty category for Procter and Gamble. She has served on several corporate and charitable boards, and is a former IFA board member.',
    ),
    array(
        'name' => 'Alex Samios',
        'role' => 'Managing Director',
        'focus' => 'Development',
        'image' => 'https://static.wixstatic.com/media/8e0756_bf8e86b885fb4aff841adbde898a6fe9~mv2.jpg/v1/crop/x_18,y_98,w_1625,h_1376/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/AlexHS.jpg',
        'tagline' => 'Proven track record of achievement in start-up, emerging, and accelerated growth organizations.',
        'bio' => 'Alex grew up in the franchise industry and became passionate about the model at an early age. He was introduced to franchising in 1978, when his father became the first franchisee for Jiffy Lube. After joining Papa John\'s Pizza at store 300 in corporate operations, Alex became a franchisee with the brand in 1996, building and operating 34 restaurants. He was nominated \'Franchisee of the Year\' for 3 consecutive years.',
        'bio2' => 'Additionally, for 15 years, Alex was a director and partner in BrandAmerica, a consulting firm which expanded U.S. brands throughout Asia. In 2010, he pioneered a unique alternative wellness studio utilizing infrared saunas and franchised it, spawning an entire industry. That brand is now the category leader. Currently, Alex is the Chief Growth Officer (and investor) in Dogtopia®, the leading and fastest growing franchise in the booming $120B+ pet industry. Under Alex, the brand has grown from 19 locations to 400+ by 2024. He is an active investor and strategic advisor to several emerging brands.',
    ),
);

$team = array(
    array(
        'name' => 'Dedria Ryan',
        'role' => 'Operating Partner',
        'focus' => 'Integration and Growth Acceleration',
        'image' => 'https://static.wixstatic.com/media/8e0756_c90a4b1a81d94c8ab814702294896618~mv2.jpg/v1/crop/x_0,y_50,w_1665,h_1358/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/DeeHS.jpg',
        'tagline' => 'Dee\'s people focus enhances operations performance, grows unit sales, and increases profitability.',
        'bio' => 'Dedria (Dee) Ryan is an Operating Partner. In that role, she oversees strategic plan implementation and growth performance for CCG\'s portfolio brands. Dee is a relationship builder and understands that operations success is more than systems, rules, and metrics. Those are important, but so are the people skills that build great teams at all levels.',
    ),
    array(
        'name' => 'Marco Born',
        'role' => 'Vice President',
        'focus' => 'Investor Relations',
        'image' => 'https://static.wixstatic.com/media/8e0756_d2cacef087f847208aede8c5c3968a2d~mv2.jpg/v1/crop/x_0,y_69,w_1524,h_1343/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/MarcoHS.jpg',
        'tagline' => 'Investor Relations pro with a track record of exceptional relationship building that drives results.',
        'bio' => 'Marco earned his stripes in the world of investor relations in an unlikely place: in the athletic departments of Middle Tennessee University and then Louisiana Tech. Years later, he continued to advance, build relationships with donors, and was named athletic director at Lamar University in Beaumont, TX. Not only did he lead the university\'s athletics department, which included overseeing an $18 million annual budget, he did all the fundraising and investor relations as well.',
    ),
    array(
        'name' => 'Chris Richards',
        'role' => 'Vice President',
        'focus' => 'Technology',
        'image' => 'https://static.wixstatic.com/media/8e0756_03203dd2a78f4e4c9c8acc5097578fc4~mv2.jpg/v1/crop/x_30,y_60,w_1585,h_1492/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/ChrisHS.jpg',
        'tagline' => 'Information technology expert who can turn IT into a competitive advantage.',
        'bio' => 'Chris Richards is a veteran of technology systems. He has spent the better part of his career with well-known brands, including Massage Envy, Amazing Lash Studio, and many others. He is an expert at ensuring companies work with the highest levels of systems and infrastructures available, focusing on using technology to support the business with efficiency, security, and stability.',
    ),
    array(
        'name' => 'Roberta Maldonado Sistos',
        'role' => 'M&A Analyst',
        'focus' => 'Financial Analysis',
        'image' => 'https://static.wixstatic.com/media/8e0756_67b442bc212d4f028ce4c92179791a77~mv2.jpg/v1/crop/x_28,y_0,w_1871,h_1640/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Roberta.jpg',
        'tagline' => 'Data analysis pro who can see the patterns in the numbers and drives business success.',
        'bio' => 'Roberta brings a thoughtful blend of financial analysis, business development, and strategic growth experience to CCG. Her background spans private equity analysis, investment banking, and driving market expansion initiatives for a national franchised brand, giving her a deep understanding of both unit-level performance and system-wide growth dynamics. She has evaluated opportunities across a range of businesses, built detailed financial models, and supported due diligence processes that help shape strategic investment decisions.',
    ),
    array(
        'name' => 'Gina Rossi',
        'role' => 'Outbound Sales Lead',
        'focus' => 'Lead Generation',
        'image' => 'https://static.wixstatic.com/media/8e0756_0f363ffbea034025811d3f4ba2ffd2f5~mv2.jpg/v1/crop/x_0,y_115,w_1535,h_1317/fill/w_400,h_400,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/GinaHS.jpg',
        'tagline' => 'Gina drives CCG\'s outbound growth engine—turning new leads into booked calls.',
        'bio' => 'Gina leads CCG\'s outbound lead generation engine, managing both the pipeline and the performance of our overseas call center team. With a sharp eye for high-potential brands and a data-driven approach, she turns new leads into booked calls, ensuring our development partners stay busy with the right prospects.',
    ),
);

$advisors = array(
    array(
        'name' => 'Jim Graham',
        'role' => 'Advisory Partner',
        'image' => 'https://static.wixstatic.com/media/ec36c2_3408bab7b1074a248ebe87fc8ecf6217~mv2.jpg/v1/fill/w_400,h_300,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Jim%20Graham.jpg',
        'bio' => 'Jim Graham has spent his career helping companies make sound business decisions through his decades of experience designing systems to track and analyze data. Data that has been the catalyst for rapid, if not explosive, business growth. As CCG\'s VP of Business Intelligence, Jim shares his analytical abilities, strategic business wisdom and his experience growing bottom lines with our portfolio companies.',
    ),
    array(
        'name' => 'Ab Igram',
        'role' => 'Advisory Partner',
        'image' => 'https://static.wixstatic.com/media/8e0756_b79c981e1efe46688f1aa75d7150e508~mv2.jpg/v1/crop/x_6,y_39,w_805,h_561/fill/w_400,h_300,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/AbigramHS.jpg',
        'bio' => 'Ab brings over 25 years in a variety of finance, advisory and entrepreneurial roles. He was as managing director, head of franchise, food & beverage for Webster Bank\'s Sponsor and Specialty Finance. Earlier in his career, Ab was VP of GE Capital Franchise Finance and worked with GE Equity, involved in identifying, negotiating, and structuring over $350 million in venture capital investments.',
    ),
    array(
        'name' => 'Kathryn Blackwell',
        'role' => 'Advisory Partner',
        'image' => 'https://static.wixstatic.com/media/8e0756_4d3d732104c4491abcee2390325133af~mv2.png/v1/crop/x_0,y_22,w_811,h_598/fill/w_400,h_300,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/BlackwellHS.png',
        'bio' => 'Kathryn is the co-founder of Kahala Brands, which started with three locations and grew to 14 quick-service restaurants brands with more than 3,000 locations in over 23 countries when she sold in 2014. Kathryn is a highly effective and visionary executive leader with over 25 years proven expertise in strategic marketing and corporate social responsibility programs.',
    ),
    array(
        'name' => 'Jay Scalise',
        'role' => 'Advisory Partner',
        'image' => 'https://static.wixstatic.com/media/014b26_70c4d0f8d1af43088b8efade2ba826b5~mv2.jpg/v1/fill/w_400,h_300,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Jay-Scalise.jpg',
        'bio' => 'For over 18 years Jay led the oversight and execution of over 4,000 UPS locations world-wide. Jay has been involved in acquisitions, mergers, high-level negotiations, trade and labor, strategic alliances, start-ups, growth initiatives and risk management. He\'s also an expert in store design and build-out efficiencies that minimize risk and increase profitability.',
    ),
);
?>

<section class="hero" style="padding: 8rem 0 4rem;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 0;">
            <span class="eyebrow">Our Team</span>
            <h1>Leaders, Advisors, Achievers</h1>
            <p style="max-width: 800px; margin: 0 auto;">
                Imagine a strategic team with deep capabilities who understand the importance of infrastructure
                and know how to invest in your future. How far could your company grow and how fast, if you
                could onboard decades of experience practically overnight?
            </p>
        </div>
    </div>
</section>

<section style="padding-top: 2rem;">
    <div class="container">
        <p style="text-align: center; font-size: 1.125rem; max-width: 800px; margin: 0 auto 4rem;">
            That's how Conscious Capital Growth works. Our portfolio companies get the benefit of our team of experts,
            when they are needed the most. Strategy, guidance, education, and even hands-on project leadership—this
            team of advisors is on board and ready to work. <strong>The mission: Your success.</strong>
        </p>
    </div>
</section>

<!-- Leadership -->
<section style="padding-top: 0;">
    <div class="container">
        <h2 class="text-center mb-5">Leadership</h2>

        <?php foreach ($leadership as $index => $member): ?>
        <div style="display: grid; grid-template-columns: 300px 1fr; gap: 3rem; margin-bottom: 4rem; padding-bottom: 4rem; border-bottom: 1px solid var(--ccg-gray-200);">
            <div>
                <div style="border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 1rem;">
                    <img src="<?php echo esc_url($member['image']); ?>" alt="<?php echo esc_attr($member['name']); ?>" style="width: 100%; aspect-ratio: 1; object-fit: cover;">
                </div>
                <h3 style="margin-bottom: 0.25rem;"><?php echo esc_html($member['name']); ?></h3>
                <p class="team-role" style="margin-bottom: 0.5rem;"><?php echo esc_html($member['role']); ?></p>
                <p style="font-size: 0.875rem; color: var(--ccg-gray-500); margin-bottom: 0;"><?php echo esc_html($member['focus']); ?></p>
            </div>
            <div>
                <p style="font-style: italic; color: var(--ccg-teal); font-size: 1.125rem; margin-bottom: 1.5rem;">
                    "<?php echo esc_html($member['tagline']); ?>"
                </p>
                <p><?php echo esc_html($member['bio']); ?></p>
                <?php if (!empty($member['bio2'])): ?>
                <p><?php echo esc_html($member['bio2']); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Team -->
<section class="section-light">
    <div class="container">
        <h2 class="text-center mb-5">Team</h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
            <?php foreach ($team as $member): ?>
            <div class="value-card" style="text-align: center;">
                <div style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem;">
                    <img src="<?php echo esc_url($member['image']); ?>" alt="<?php echo esc_attr($member['name']); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3 style="font-size: 1.125rem; margin-bottom: 0.25rem;"><?php echo esc_html($member['name']); ?></h3>
                <p class="team-role" style="margin-bottom: 0.5rem;"><?php echo esc_html($member['role']); ?></p>
                <p style="font-size: 0.875rem; color: var(--ccg-gray-500);"><?php echo esc_html($member['focus']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Advisory Partners -->
<section>
    <div class="container">
        <h2 class="text-center mb-5">Advisory Partners</h2>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem;">
            <?php foreach ($advisors as $advisor): ?>
            <div class="team-card">
                <div class="team-photo">
                    <img src="<?php echo esc_url($advisor['image']); ?>" alt="<?php echo esc_attr($advisor['name']); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3><?php echo esc_html($advisor['name']); ?></h3>
                <p class="team-role"><?php echo esc_html($advisor['role']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section-navy">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow" style="color: var(--ccg-teal);">Our Values</span>
            <h2>What Drives Us</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 1.5rem; text-align: center;">
            <div style="padding: 2rem;">
                <h4 style="color: var(--ccg-teal); margin-bottom: 0.5rem;">Be Accountable</h4>
            </div>
            <div style="padding: 2rem;">
                <h4 style="color: var(--ccg-teal); margin-bottom: 0.5rem;">Be Purposeful</h4>
            </div>
            <div style="padding: 2rem;">
                <h4 style="color: var(--ccg-teal); margin-bottom: 0.5rem;">Be Nimble</h4>
            </div>
            <div style="padding: 2rem;">
                <h4 style="color: var(--ccg-teal); margin-bottom: 0.5rem;">Be Innovative</h4>
            </div>
            <div style="padding: 2rem;">
                <h4 style="color: var(--ccg-teal); margin-bottom: 0.5rem;">Be Driven</h4>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section" style="background: var(--ccg-teal);">
    <div class="container">
        <h2>Join Our Network</h2>
        <p>We're always looking to connect with talented operators and investors who share our values.</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Get in Touch</a>
    </div>
</section>

<?php get_footer(); ?>
