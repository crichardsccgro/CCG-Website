/**
 * CCG Theme Main JavaScript
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initHeader();
        initMobileMenu();
        initSmoothScroll();
        initAnimations();
    });

    /**
     * Header scroll behavior
     */
    function initHeader() {
        const header = document.getElementById('site-header');
        if (!header) return;

        let lastScroll = 0;
        const scrollThreshold = 50;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            // Add/remove scrolled class
            if (currentScroll > scrollThreshold) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        });
    }

    /**
     * Mobile menu toggle
     */
    function initMobileMenu() {
        const toggle = document.getElementById('mobile-menu-toggle');
        const nav = document.getElementById('main-nav');

        if (!toggle || !nav) return;

        toggle.addEventListener('click', function() {
            const isOpen = nav.classList.contains('is-open');

            if (isOpen) {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-active');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('menu-open');
            } else {
                nav.classList.add('is-open');
                toggle.classList.add('is-active');
                toggle.setAttribute('aria-expanded', 'true');
                document.body.classList.add('menu-open');
            }
        });

        // Close menu on link click
        nav.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-active');
                document.body.classList.remove('menu-open');
            });
        });

        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && nav.classList.contains('is-open')) {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-active');
                document.body.classList.remove('menu-open');
            }
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Scroll animations using Intersection Observer
     */
    function initAnimations() {
        const animatedElements = document.querySelectorAll('.value-card, .portfolio-card, .team-card, .testimonial-card');

        if (!animatedElements.length) return;

        // Add initial state
        animatedElements.forEach(function(el) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });

        // Create observer
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe elements
        animatedElements.forEach(function(el) {
            observer.observe(el);
        });
    }

    /**
     * Stats counter animation
     */
    function animateStats() {
        const stats = document.querySelectorAll('.stat-number');

        stats.forEach(function(stat) {
            const text = stat.textContent;
            const hasPlus = text.includes('+');
            const hasDollar = text.includes('$');
            const hasM = text.includes('M');
            const numericValue = parseInt(text.replace(/[^0-9]/g, ''));

            if (isNaN(numericValue)) return;

            let current = 0;
            const increment = numericValue / 50;
            const duration = 2000;
            const stepTime = duration / 50;

            const timer = setInterval(function() {
                current += increment;
                if (current >= numericValue) {
                    current = numericValue;
                    clearInterval(timer);
                }

                let display = Math.floor(current);
                if (hasDollar) display = '$' + display;
                if (hasM) display += 'M';
                if (hasPlus) display += '+';

                stat.textContent = display;
            }, stepTime);
        });
    }

    // Trigger stats animation when hero is visible
    const heroStats = document.querySelector('.hero-stats');
    if (heroStats) {
        const statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    animateStats();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        statsObserver.observe(heroStats);
    }

})();
