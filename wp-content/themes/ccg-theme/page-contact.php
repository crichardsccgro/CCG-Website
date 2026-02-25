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
            <p>Whether you're a business owner exploring a partnership, an intermediary representing an opportunity, or an investor interested in our fund, we'd love to hear from you.</p>
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
                            <input type="text" id="first_name" name="first_name" required style="width: 100%; padding: 0.875rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem; transition: var(--transition);" onfocus="this.style.borderColor='var(--ccg-teal)'" onblur="this.style.borderColor='var(--ccg-gray-300)'">
                        </div>
                        <div>
                            <label for="last_name" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required style="width: 100%; padding: 0.875rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem; transition: var(--transition);" onfocus="this.style.borderColor='var(--ccg-teal)'" onblur="this.style.borderColor='var(--ccg-gray-300)'">
                        </div>
                    </div>

                    <div>
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Email *</label>
                        <input type="email" id="email" name="email" required style="width: 100%; padding: 0.875rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem; transition: var(--transition);" onfocus="this.style.borderColor='var(--ccg-teal)'" onblur="this.style.borderColor='var(--ccg-gray-300)'">
                    </div>

                    <div>
                        <label for="phone" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Phone</label>
                        <input type="tel" id="phone" name="phone" style="width: 100%; padding: 0.875rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem; transition: var(--transition);" onfocus="this.style.borderColor='var(--ccg-teal)'" onblur="this.style.borderColor='var(--ccg-gray-300)'">
                    </div>

                    <div>
                        <label for="company" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Company</label>
                        <input type="text" id="company" name="company" style="width: 100%; padding: 0.875rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem; transition: var(--transition);" onfocus="this.style.borderColor='var(--ccg-teal)'" onblur="this.style.borderColor='var(--ccg-gray-300)'">
                    </div>

                    <div>
                        <label for="inquiry_type" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">I am a...</label>
                        <select id="inquiry_type" name="inquiry_type" style="width: 100%; padding: 0.875rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem; background: white; transition: var(--transition);" onfocus="this.style.borderColor='var(--ccg-teal)'" onblur="this.style.borderColor='var(--ccg-gray-300)'">
                            <option value="">Select one...</option>
                            <option value="owner">Business Owner / Founder</option>
                            <option value="intermediary">Investment Banker / Advisor</option>
                            <option value="investor">Prospective Investor</option>
                            <option value="portfolio">Portfolio Company Inquiry</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Message *</label>
                        <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.875rem 1rem; border: 1px solid var(--ccg-gray-300); border-radius: var(--radius-md); font-size: 1rem; resize: vertical; transition: var(--transition);" onfocus="this.style.borderColor='var(--ccg-teal)'" onblur="this.style.borderColor='var(--ccg-gray-300)'"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>

                    <p style="font-size: 0.875rem; color: var(--ccg-gray-500);">All inquiries are treated confidentially.</p>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 style="margin-bottom: 2rem;">Contact Information</h2>

                <!-- Office Address -->
                <div style="margin-bottom: 2.5rem;">
                    <h4 style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--ccg-teal)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        Office
                    </h4>
                    <p style="margin-bottom: 0; line-height: 1.8;">
                        16220 N. Scottsdale Road, Suite 300<br>
                        Scottsdale, Arizona 85254
                    </p>
                </div>

                <!-- Email -->
                <div style="margin-bottom: 2.5rem;">
                    <h4 style="margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.5rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--ccg-teal)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        Email
                    </h4>
                    <p style="margin-bottom: 0;">
                        <a href="mailto:info@ccgro.com" style="font-size: 1.125rem;">info@ccgro.com</a>
                    </p>
                </div>

                <!-- Cards for different audiences -->
                <div style="background: var(--ccg-light-bg); padding: 2rem; border-radius: var(--radius-lg); margin-bottom: 1.5rem;">
                    <h3 style="margin-bottom: 1rem; font-size: 1.125rem;">For Business Owners</h3>
                    <p style="margin-bottom: 1rem; font-size: 0.9375rem;">
                        Considering a capital partner for your business? We'd love to learn about your company
                        and explore how we might help accelerate your growth while preserving what makes your business special.
                    </p>
                    <a href="<?php echo esc_url(home_url('/investment-criteria')); ?>" class="btn btn-secondary" style="padding: 0.625rem 1.25rem; font-size: 0.9375rem;">View Investment Criteria</a>
                </div>

                <div style="background: var(--ccg-light-bg); padding: 2rem; border-radius: var(--radius-lg); margin-bottom: 1.5rem;">
                    <h3 style="margin-bottom: 1rem; font-size: 1.125rem;">For Intermediaries</h3>
                    <p style="margin-bottom: 1rem; font-size: 0.9375rem;">
                        Representing a compelling opportunity? We work closely with investment bankers,
                        M&A advisors, and other intermediaries. Let's discuss how we can partner.
                    </p>
                    <a href="mailto:deals@ccgro.com" class="btn btn-secondary" style="padding: 0.625rem 1.25rem; font-size: 0.9375rem;">deals@ccgro.com</a>
                </div>

                <div style="background: var(--ccg-navy); padding: 2rem; border-radius: var(--radius-lg); color: white;">
                    <h3 style="margin-bottom: 1rem; font-size: 1.125rem; color: white;">For Investors</h3>
                    <p style="margin-bottom: 1rem; font-size: 0.9375rem; color: rgba(255,255,255,0.8);">
                        Interested in learning more about investment opportunities with CCG?
                        Contact our investor relations team.
                    </p>
                    <a href="mailto:ir@ccgro.com" class="btn btn-teal" style="padding: 0.625rem 1.25rem; font-size: 0.9375rem;">ir@ccgro.com</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map placeholder -->
<section style="padding-top: 0;">
    <div class="container">
        <div style="background: var(--ccg-gray-200); height: 300px; border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; color: var(--ccg-gray-500);">
            <p>Map: 16220 N. Scottsdale Road, Scottsdale, AZ 85254</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
