<?php
/**
 * Template Name: Contact Page
 *
 * @package CCG_Theme
 */

get_header();
?>

<section class="hero" style="padding: 8rem 0 4rem;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 0;">
            <span class="eyebrow">Get in Touch</span>
            <h1>Let's Start a Conversation</h1>
            <p>Whether you're a franchise founder, intermediary, or prospective partner, we'd love to hear from you.</p>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">

            <!-- Contact Form -->
            <div>
                <h2 style="margin-bottom: 2rem;">Send Us a Message</h2>

                <form action="#" method="post" style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div>
                            <label for="first_name" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem;">
                        </div>
                        <div>
                            <label for="last_name" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem;">
                        </div>
                    </div>

                    <div>
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Email *</label>
                        <input type="email" id="email" name="email" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <div>
                        <label for="company" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Company</label>
                        <input type="text" id="company" name="company" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem;">
                    </div>

                    <div>
                        <label for="inquiry_type" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">I am a...</label>
                        <select id="inquiry_type" name="inquiry_type" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem; background: white;">
                            <option value="">Select one...</option>
                            <option value="founder">Franchise Founder / Owner</option>
                            <option value="intermediary">Investment Banker / Advisor</option>
                            <option value="independent_sponsor">Independent Sponsor</option>
                            <option value="investor">Prospective Investor</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Message *</label>
                        <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 style="margin-bottom: 2rem;">Contact Information</h2>

                <div style="margin-bottom: 2rem;">
                    <h4 style="margin-bottom: 0.5rem;">Email</h4>
                    <p><a href="mailto:info@ccgro.com">info@ccgro.com</a></p>
                </div>

                <div style="margin-bottom: 2rem;">
                    <h4 style="margin-bottom: 0.5rem;">Connect</h4>
                    <p><a href="https://linkedin.com/company/ccgro" target="_blank" rel="noopener">LinkedIn</a></p>
                </div>

                <div style="background: var(--ccg-light-bg); padding: 2rem; border-radius: var(--radius-lg); margin-top: 3rem;">
                    <h3 style="margin-bottom: 1rem;">For Business Owners</h3>
                    <p style="margin-bottom: 1.5rem;">Considering a capital partner for your franchise? We'd love to learn about your business and explore how we might help accelerate your growth.</p>
                    <a href="<?php echo esc_url(home_url('/investment-criteria')); ?>" class="btn btn-secondary" style="padding: 0.75rem 1.25rem;">View Investment Criteria</a>
                </div>

                <div style="background: var(--ccg-light-bg); padding: 2rem; border-radius: var(--radius-lg); margin-top: 1.5rem;">
                    <h3 style="margin-bottom: 1rem;">For Intermediaries</h3>
                    <p style="margin-bottom: 1.5rem;">Representing a franchise concept? We work closely with investment bankers and advisors. Let's discuss how we can partner.</p>
                    <a href="mailto:deals@ccgro.com" class="btn btn-secondary" style="padding: 0.75rem 1.25rem;">deals@ccgro.com</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
