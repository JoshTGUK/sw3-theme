/**
 * Section 7: The Future
 * Community growth SVG, background sunrise return, final CTA.
 */

const SW3Future = {
    init(conditions) {
        const section = document.getElementById('section-future');
        if (!section) return;

        // Counter works on all breakpoints
        section.querySelectorAll('.counter').forEach(el => {
            sw3AnimateCounter(el, {
                trigger: el,
                start: 'top 80%'
            });
        });

        if (conditions.isMobile) {
            this.initMobile(section);
        } else {
            this.initDesktop(section);
        }
    },

    /**
     * DESKTOP/TABLET: Community growth, gradient return, staggered reveals.
     */
    initDesktop(section) {
        // ── Background gradient: return to warm sunrise ──
        gsap.to('.future-bg', {
            opacity: 0.5,
            scrollTrigger: {
                trigger: section,
                start: 'top 60%',
                end: 'center center',
                scrub: 1
            }
        });

        // ── Title + subtitle ──
        gsap.utils.toArray('#section-future [data-animate]').forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.8,
                delay: i * 0.12,
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%'
                }
            });
        });

        // ── Community growth: houses and trees appear with stagger ──
        const community = section.querySelector('.future-community');
        if (community) {
            // Houses appear one by one
            const houses = community.querySelectorAll('.community-house:not(.community-house--main)');
            gsap.to(houses, {
                opacity: 1,
                scale: 1,
                duration: 0.6,
                stagger: 0.25,
                ease: 'back.out(1.4)',
                scrollTrigger: {
                    trigger: '.future-community-wrap',
                    start: 'top 65%',
                    end: 'bottom 40%',
                    scrub: 1
                }
            });

            // Trees grow in slightly after houses
            const trees = community.querySelectorAll('.community-tree');
            gsap.to(trees, {
                opacity: 1,
                scale: 1,
                duration: 0.5,
                stagger: 0.2,
                ease: 'back.out(1.2)',
                scrollTrigger: {
                    trigger: '.future-community-wrap',
                    start: 'top 55%',
                    end: 'bottom 35%',
                    scrub: 1
                }
            });

            // Window lights in new houses glow
            houses.forEach(house => {
                const windows = house.querySelectorAll('rect[fill="var(--sw3-gold)"]');
                if (windows.length) {
                    gsap.to(windows, {
                        opacity: 0.4,
                        duration: 1.5,
                        repeat: -1,
                        yoyo: true,
                        ease: 'sine.inOut',
                        delay: Math.random() * 2
                    });
                }
            });
        }
    },

    /**
     * MOBILE: Simple reveals, show community in final state.
     */
    initMobile(section) {
        // Show background
        gsap.set('.future-bg', { opacity: 0.3 });

        // Show all community elements
        gsap.set('.community-house, .community-tree', { opacity: 1 });

        // Simple reveals
        gsap.utils.toArray('#section-future [data-animate]').forEach((el, i) => {
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
