/**
 * Section 6: Impact & Savings
 * Animated counter cards, before/after split reveal, testimonial stagger.
 */

const SW3Impact = {
    init(conditions) {
        const section = document.getElementById('section-impact');
        if (!section) return;

        // Counters work on all breakpoints
        this.initCounters(section);

        if (conditions.isMobile) {
            this.initMobile(section);
        } else {
            this.initDesktop(section);
        }
    },

    initCounters(section) {
        section.querySelectorAll('.counter').forEach((el, i) => {
            sw3AnimateCounter(el, {
                trigger: el,
                start: 'top 80%'
            });
        });
    },

    /**
     * DESKTOP/TABLET: Full animations.
     */
    initDesktop(section) {
        // ── Title reveal ──
        gsap.to('.impact-title', {
            opacity: 1,
            y: 0,
            duration: 0.8,
            scrollTrigger: {
                trigger: '.impact-title',
                start: 'top 85%'
            }
        });

        // ── Counter cards stagger ──
        gsap.utils.toArray('.impact-counter').forEach((card, i) => {
            gsap.to(card, {
                opacity: 1,
                y: 0,
                duration: 0.7,
                delay: i * 0.15,
                scrollTrigger: {
                    trigger: '.impact-counters',
                    start: 'top 80%'
                }
            });
        });

        // ── Before/After split reveal ──
        // The "after" panel reveals from left via clip-path
        const splitAfter = section.querySelector('.impact-split__after');
        if (splitAfter) {
            gsap.set(splitAfter, { clipPath: 'inset(0 100% 0 0)' });

            gsap.to(splitAfter, {
                clipPath: 'inset(0 0% 0 0)',
                duration: 1.2,
                ease: 'power2.inOut',
                scrollTrigger: {
                    trigger: '.impact-split',
                    start: 'top 65%',
                    end: 'bottom 40%',
                    scrub: 1
                }
            });
        }

        // Fade in the split container
        gsap.to('.impact-split', {
            opacity: 1,
            y: 0,
            duration: 0.8,
            scrollTrigger: {
                trigger: '.impact-split',
                start: 'top 80%'
            }
        });

        // ── Testimonials stagger ──
        gsap.utils.toArray('.impact-testimonial').forEach((card, i) => {
            gsap.to(card, {
                opacity: 1,
                y: 0,
                duration: 0.7,
                delay: i * 0.2,
                scrollTrigger: {
                    trigger: '.impact-testimonials',
                    start: 'top 80%'
                }
            });
        });

        // ── CTA ──
        gsap.to('.impact-cta', {
            opacity: 1,
            y: 0,
            duration: 0.6,
            scrollTrigger: {
                trigger: '.impact-cta',
                start: 'top 90%'
            }
        });
    },

    /**
     * MOBILE: Simple reveals, no clip-path animation.
     */
    initMobile(section) {
        gsap.utils.toArray('#section-impact [data-animate]').forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.5,
                delay: i * 0.08,
                scrollTrigger: { trigger: el, start: 'top 90%' }
            });
        });
    }
};
