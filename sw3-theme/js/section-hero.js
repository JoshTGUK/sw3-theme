/**
 * Section 1: Dawn / Hero
 * Sunrise gradient animation, SplitText headline, parallax clouds, sun rise.
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
     * DESKTOP: Full pinned experience with parallax, sunrise, SplitText.
     */
    initDesktop(section) {
        // ── Master timeline (pinned, scrub-driven) ──
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

        // Phase 1: Sky gradient transition (0% → 40%)
        tl.to('.hero-bg__layer--mid', {
            opacity: 0.7,
            duration: 0.4
        }, 0);

        tl.to('.hero-bg__layer--glow', {
            opacity: 0.8,
            duration: 0.4
        }, 0.1);

        // Phase 2: Sun rises (10% → 50%)
        tl.to('.hero-sun', {
            y: -280,
            duration: 0.5,
            ease: 'power2.out'
        }, 0.1);

        // Phase 3: Cloud parallax (background depth)
        tl.to('.hero-cloud--1', { y: -60, x: 30, duration: 0.8 }, 0);
        tl.to('.hero-cloud--2', { y: -40, x: -20, duration: 0.8 }, 0);
        tl.to('.hero-cloud--3', { y: -80, x: 15, duration: 0.8 }, 0);

        // Phase 4: SplitText headline reveal (30% → 60%)
        const headline = document.querySelector('.hero-headline');
        if (headline) {
            const split = new SplitText(headline, { type: 'chars' });

            // Reset initial state
            gsap.set(headline, { opacity: 1, y: 0 });
            gsap.set(split.chars, { opacity: 0, y: 50 });

            tl.to(split.chars, {
                opacity: 1,
                y: 0,
                stagger: 0.02,
                duration: 0.3,
                ease: 'power3.out'
            }, 0.3);
        }

        // Phase 5: Subtext + CTA fade in (50% → 70%)
        tl.to('.hero-subtext', {
            opacity: 1,
            y: 0,
            duration: 0.15,
            ease: 'power2.out'
        }, 0.5);

        tl.to('.hero-cta', {
            opacity: 1,
            y: 0,
            duration: 0.15,
            ease: 'power2.out'
        }, 0.55);

        // Phase 6: Trust badges (60% → 80%)
        tl.to('.hero-badges', {
            opacity: 1,
            y: 0,
            duration: 0.15,
            ease: 'power2.out'
        }, 0.65);

        // Phase 7: Scroll indicator (75% → 90%)
        tl.to('.hero-scroll', {
            opacity: 1,
            duration: 0.1
        }, 0.75);

        // ── Sun glow pulse (independent loop) ──
        gsap.to('.hero-sun', {
            boxShadow: '0 0 80px 30px rgba(240, 165, 0, 0.5), 0 0 160px 60px rgba(240, 165, 0, 0.25)',
            repeat: -1,
            yoyo: true,
            duration: 2,
            ease: 'sine.inOut'
        });

        // ── Scroll chevron bounce (independent loop) ──
        gsap.to('.hero-scroll__chevron', {
            y: 8,
            repeat: -1,
            yoyo: true,
            duration: 0.8,
            ease: 'sine.inOut'
        });
    },

    /**
     * TABLET: Simplified — no pinning, reduced parallax.
     */
    initTablet(section) {
        // Fade in content elements on scroll
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: 'top 80%',
                end: 'center center',
                scrub: 1
            }
        });

        // Show sky layers
        tl.to('.hero-bg__layer--mid', { opacity: 0.5, duration: 0.5 }, 0);
        tl.to('.hero-bg__layer--glow', { opacity: 0.6, duration: 0.5 }, 0.1);
        tl.to('.hero-sun', { y: -200, duration: 0.6 }, 0);

        // Headline — simple SplitText
        const headline = document.querySelector('.hero-headline');
        if (headline) {
            const split = new SplitText(headline, { type: 'chars' });
            gsap.set(headline, { opacity: 1, y: 0 });
            gsap.set(split.chars, { opacity: 0, y: 30 });

            gsap.to(split.chars, {
                opacity: 1,
                y: 0,
                stagger: 0.02,
                duration: 0.6,
                scrollTrigger: {
                    trigger: headline,
                    start: 'top 80%'
                }
            });
        }

        // Other elements
        gsap.utils.toArray(['.hero-subtext', '.hero-cta', '.hero-badges']).forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.6,
                delay: i * 0.15,
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%'
                }
            });
        });

        gsap.to('.hero-scroll', { opacity: 1, duration: 0.5, delay: 0.8 });
    },

    /**
     * MOBILE: Minimal — no parallax, no pinning, simple fades.
     */
    initMobile(section) {
        // Static sky — just show the glow
        gsap.set('.hero-bg__layer--mid', { opacity: 0.4 });
        gsap.set('.hero-bg__layer--glow', { opacity: 0.5 });
        gsap.set('.hero-sun', { y: -180 });

        // Simple reveal of content
        const headline = document.querySelector('.hero-headline');
        if (headline) {
            gsap.set(headline, { opacity: 0, y: 20 });
            gsap.to(headline, {
                opacity: 1,
                y: 0,
                duration: 0.8,
                delay: 0.3
            });
        }

        gsap.utils.toArray(['.hero-subtext', '.hero-cta', '.hero-badges']).forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.6,
                delay: 0.5 + (i * 0.15)
            });
        });

        gsap.to('.hero-scroll', { opacity: 1, duration: 0.5, delay: 1.2 });

        // Chevron bounce
        gsap.to('.hero-scroll__chevron', {
            y: 8,
            repeat: -1,
            yoyo: true,
            duration: 0.8,
            ease: 'sine.inOut'
        });
    }
};
