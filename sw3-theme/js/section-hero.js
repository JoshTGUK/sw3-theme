/**
 * Section 1: Dawn / Hero
 *
 * Content is VISIBLE on load. Scroll triggers:
 * 1. Sunrise gradient + sun rise animation
 * 2. "Scroll to explore" fades out
 * 3. Content fades out as user scrolls past
 */

const SW3Hero = {
    init(conditions) {
        const section = document.getElementById('section-hero');
        if (!section) return;

        if (conditions.isMobile) {
            this.initMobile(section);
        } else if (conditions.isTablet) {
            this.initTablet(section);
        } else {
            this.initDesktop(section);
        }
    },

    /**
     * DESKTOP: Pinned — sunrise plays on scroll, content fades out.
     */
    initDesktop(section) {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                pin: true,
                scrub: 1,
                start: 'top top',
                end: '+=1500',
                anticipatePin: 1
            }
        });

        // ── Scroll indicator fades out immediately ──
        tl.to('.hero-scroll', {
            opacity: 0,
            y: 20,
            duration: 0.1
        }, 0);

        // ── Sunrise: sky gradient transition ──
        tl.to('.hero-bg__layer--mid', {
            opacity: 0.8,
            duration: 0.5
        }, 0);

        tl.to('.hero-bg__layer--glow', {
            opacity: 1,
            duration: 0.5
        }, 0.1);

        // ── Sun rises ──
        tl.to('.hero-sun', {
            y: -300,
            duration: 0.6,
            ease: 'power2.out'
        }, 0.05);

        // ── Cloud parallax ──
        tl.to('.hero-cloud--1', { y: -60, x: 30, duration: 0.8 }, 0);
        tl.to('.hero-cloud--2', { y: -40, x: -20, duration: 0.8 }, 0);
        tl.to('.hero-cloud--3', { y: -80, x: 15, duration: 0.8 }, 0);

        // ── Content fades out as user scrolls (60% → 90%) ──
        tl.to('.hero-content', {
            opacity: 0,
            y: -40,
            duration: 0.3
        }, 0.6);

        tl.to('.hero-badges', {
            opacity: 0,
            y: -20,
            duration: 0.2
        }, 0.65);

        // ── Sun glow pulse (independent loop) ──
        gsap.to('.hero-sun', {
            boxShadow: '0 0 80px 30px rgba(249, 168, 37, 0.6), 0 0 160px 60px rgba(249, 168, 37, 0.25)',
            repeat: -1,
            yoyo: true,
            duration: 2,
            ease: 'sine.inOut'
        });
    },

    /**
     * TABLET: Simplified — no pinning, just sunrise on scroll.
     */
    initTablet(section) {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: 'top top',
                end: 'bottom top',
                scrub: 1
            }
        });

        tl.to('.hero-scroll', { opacity: 0, duration: 0.1 }, 0);
        tl.to('.hero-bg__layer--mid', { opacity: 0.6, duration: 0.5 }, 0);
        tl.to('.hero-bg__layer--glow', { opacity: 0.7, duration: 0.5 }, 0.1);
        tl.to('.hero-sun', { y: -200, duration: 0.6 }, 0);
        tl.to('.hero-content', { opacity: 0, y: -30, duration: 0.3 }, 0.5);
        tl.to('.hero-badges', { opacity: 0, duration: 0.2 }, 0.55);
    },

    /**
     * MOBILE: Simple — scroll indicator visible, content stays.
     */
    initMobile(section) {
        // Just fade the scroll indicator on scroll
        gsap.to('.hero-scroll', {
            opacity: 0,
            scrollTrigger: {
                trigger: section,
                start: 'top top',
                end: '+=100',
                scrub: true
            }
        });

        // Subtle sun glow
        gsap.to('.hero-sun', {
            boxShadow: '0 0 60px 20px rgba(249, 168, 37, 0.5), 0 0 100px 40px rgba(249, 168, 37, 0.2)',
            repeat: -1,
            yoyo: true,
            duration: 2.5,
            ease: 'sine.inOut'
        });
    }
};
