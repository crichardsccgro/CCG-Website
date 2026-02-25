<?php
/**
 * Team Archive Template
 *
 * @package CCG_Theme
 */

get_header();
?>

<section class="hero" style="padding: 8rem 0 4rem;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 0;">
            <span class="eyebrow">Our Team</span>
            <h1>Meet the CCG Team</h1>
            <p>Experienced operators and investors united by a shared commitment to conscious leadership and franchise excellence.</p>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <!-- Leadership -->
        <h2 class="mb-4">Leadership</h2>
        <div class="team-grid" style="margin-bottom: 4rem;">
            <?php
            $team = ccg_get_team_members();
            if ($team):
                foreach ($team as $member):
                    $role = get_post_meta($member->ID, '_ccg_team_role', true);
                    $linkedin = get_post_meta($member->ID, '_ccg_team_linkedin', true);
                    ?>
                    <div class="team-card">
                        <div class="team-photo">
                            <?php if (has_post_thumbnail($member->ID)): ?>
                                <?php echo get_the_post_thumbnail($member->ID, 'team-thumbnail'); ?>
                            <?php else: ?>
                                <div style="width: 100%; height: 100%; background: linear-gradient(135deg, var(--ccg-gray-200), var(--ccg-gray-300)); display: flex; align-items: center; justify-content: center; color: var(--ccg-gray-500);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </div>
                            <?php endif; ?>
                        </div>
                        <h3><?php echo esc_html($member->post_title); ?></h3>
                        <p class="team-role"><?php echo esc_html($role); ?></p>
                        <?php if ($member->post_content): ?>
                            <p class="team-bio"><?php echo wp_trim_words($member->post_content, 25); ?></p>
                        <?php endif; ?>
                        <?php if ($linkedin): ?>
                            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 0.25rem; font-size: 0.875rem; margin-top: 0.5rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                LinkedIn
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php
                endforeach;
            else:
                ?>
                <p>Team members coming soon.</p>
                <?php
            endif;
            ?>
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

        <div class="value-grid">
            <div class="value-card" style="background: rgba(255,255,255,0.1); color: white;">
                <h3 style="color: white;">Conscious Leadership</h3>
                <p style="color: rgba(255,255,255,0.8);">We lead with intention, prioritizing long-term value creation over short-term gains.</p>
            </div>
            <div class="value-card" style="background: rgba(255,255,255,0.1); color: white;">
                <h3 style="color: white;">Authentic Partnership</h3>
                <p style="color: rgba(255,255,255,0.8);">We build genuine relationships founded on trust, transparency, and mutual respect.</p>
            </div>
            <div class="value-card" style="background: rgba(255,255,255,0.1); color: white;">
                <h3 style="color: white;">Servant Mentality</h3>
                <p style="color: rgba(255,255,255,0.8);">We exist to serve our portfolio companies, their teams, and their customers.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section" style="background: var(--ccg-teal);">
    <div class="container">
        <h2>Join Our Network</h2>
        <p>We're always looking to connect with talented operators and investors.</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Get in Touch</a>
    </div>
</section>

<?php get_footer(); ?>
