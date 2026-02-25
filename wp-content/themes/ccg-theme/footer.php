</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <span class="logo-text">CCG<span>RO</span></span>
                <p>Conscious Capital Growth is a lower middle market private equity firm that makes control investments in US businesses ready for accelerated growth.</p>
                <p style="margin-top: 1rem; font-size: 0.875rem; color: rgba(255,255,255,0.6);">
                    16220 N. Scottsdale Road, Suite 300<br>
                    Scottsdale, Arizona 85254
                </p>
            </div>

            <!-- Quick Links -->
            <div class="footer-nav">
                <h4>Company</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/team')); ?>">Our Team</a></li>
                    <li><a href="<?php echo esc_url(home_url('/news')); ?>">News</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                </ul>
            </div>

            <!-- Investment -->
            <div class="footer-nav">
                <h4>Investment</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>">Portfolio</a></li>
                    <li><a href="<?php echo esc_url(home_url('/investment-criteria')); ?>">Investment Criteria</a></li>
                    <li><a href="<?php echo esc_url(home_url('/value-creation')); ?>">Value Creation</a></li>
                    <li><a href="<?php echo esc_url(home_url('/resources')); ?>">Resources</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-nav">
                <h4>Connect</h4>
                <ul>
                    <li><a href="mailto:info@ccgro.com">info@ccgro.com</a></li>
                    <li><a href="https://linkedin.com/company/ccgro" target="_blank" rel="noopener">LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Conscious Capital Growth. All rights reserved.</p>
            <div class="footer-social">
                <a href="https://linkedin.com/company/ccgro" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
