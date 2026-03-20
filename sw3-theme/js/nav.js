/**
 * Navigation: Sticky nav, mobile hamburger, progress dots.
 */

(function() {
    'use strict';

    // ── Sticky nav background on scroll ──
    const nav = document.getElementById('sw3-nav');
    if (nav) {
        ScrollTrigger.create({
            start: 'top -80',
            onUpdate(self) {
                if (self.scroll() > 80) {
                    nav.classList.add('is-scrolled');
                } else {
                    nav.classList.remove('is-scrolled');
                }
            }
        });
    }

    // ── Mobile hamburger menu ──
    const hamburger = document.getElementById('nav-hamburger');
    const menu = document.getElementById('sw3-menu');

    if (hamburger && menu) {
        hamburger.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('is-open');
            hamburger.setAttribute('aria-expanded', isOpen);

            // Animate hamburger lines to X
            const lines = hamburger.querySelectorAll('.sw3-nav__hamburger-line');
            if (isOpen) {
                gsap.to(lines[0], { rotation: 45, y: 7, duration: 0.3 });
                gsap.to(lines[1], { opacity: 0, duration: 0.2 });
                gsap.to(lines[2], { rotation: -45, y: -7, duration: 0.3 });
            } else {
                gsap.to(lines[0], { rotation: 0, y: 0, duration: 0.3 });
                gsap.to(lines[1], { opacity: 1, duration: 0.2 });
                gsap.to(lines[2], { rotation: 0, y: 0, duration: 0.3 });
            }
        });

        // Close menu when clicking a link
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.remove('is-open');
                hamburger.setAttribute('aria-expanded', 'false');
                const lines = hamburger.querySelectorAll('.sw3-nav__hamburger-line');
                gsap.to(lines[0], { rotation: 0, y: 0, duration: 0.3 });
                gsap.to(lines[1], { opacity: 1, duration: 0.2 });
                gsap.to(lines[2], { rotation: 0, y: 0, duration: 0.3 });
            });
        });
    }

    // ── Progress dots (desktop only) ──
    if (window.innerWidth > 1024) {
        createProgressDots();
    }

    function createProgressDots() {
        const sections = document.querySelectorAll('.sw3-section');
        if (sections.length === 0) return;

        // Create the dot navigation
        const dotsNav = document.createElement('nav');
        dotsNav.className = 'sw3-progress';
        dotsNav.setAttribute('aria-label', 'Page sections');

        const dotLabels = [
            'Dawn', 'Sun\'s Power', 'Capture', 'Energy Flow',
            'Storage', 'Impact', 'Future'
        ];

        sections.forEach((section, i) => {
            const dot = document.createElement('button');
            dot.className = 'sw3-progress__dot';
            dot.setAttribute('aria-label', dotLabels[i] || `Section ${i + 1}`);
            dot.dataset.section = section.id;

            // Click to scroll to section
            dot.addEventListener('click', () => {
                if (SW3.smoother) {
                    SW3.smoother.scrollTo('#' + section.id, true, 'top top');
                } else {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            });

            dotsNav.appendChild(dot);

            // ScrollTrigger to highlight active dot
            ScrollTrigger.create({
                trigger: section,
                start: 'top center',
                end: 'bottom center',
                onToggle(self) {
                    if (self.isActive) {
                        dotsNav.querySelectorAll('.sw3-progress__dot').forEach(d => {
                            d.classList.remove('is-active');
                        });
                        dot.classList.add('is-active');
                    }
                }
            });
        });

        document.body.appendChild(dotsNav);
    }
})();
