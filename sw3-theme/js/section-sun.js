/**
 * Section 2: The Sun's Power
 * Particle effects, counter animations, DrawSVG sun rays, horizontal scroll services.
 */

const SW3Sun = {
    init(conditions) {
        const section = document.getElementById('section-sun');
        if (!section) return;

        // Counters work on all breakpoints
        this.initCounters(section);

        if (conditions.isMobile) {
            this.initMobile(section);
        } else if (conditions.isTablet) {
            this.initTablet(section);
        } else {
            this.initDesktop(section);
        }
    },

    /**
     * Animate counter elements in this section.
     */
    initCounters(section) {
        section.querySelectorAll('.counter').forEach(el => {
            sw3AnimateCounter(el, {
                trigger: el,
                start: 'top 80%'
            });
        });
    },

    /**
     * DESKTOP: Pinned section, particles, DrawSVG rays, horizontal scroll.
     */
    initDesktop(section) {
        // ── Particles ──
        this.createParticles(section, 30);

        // ── DrawSVG sun rays ──
        gsap.from('.sun-ray', {
            drawSVG: '0%',
            duration: 1.5,
            stagger: 0.08,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.sun-rays-container',
                start: 'top 70%',
                end: 'bottom 30%',
                scrub: 1
            }
        });

        // ── Title & subtitle reveal ──
        gsap.utils.toArray('#section-sun [data-animate]').forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.8,
                delay: i * 0.1,
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%'
                }
            });
        });

        // ── Horizontal scroll for service cards ──
        const servicesWrap = section.querySelector('.sun-services-wrap');
        const services = section.querySelector('.sun-services');
        if (servicesWrap && services) {
            // Calculate how far to scroll
            const totalWidth = services.scrollWidth;
            const viewWidth = servicesWrap.offsetWidth;
            const scrollDistance = totalWidth - viewWidth;

            if (scrollDistance > 0) {
                gsap.to(services, {
                    x: -scrollDistance,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: servicesWrap,
                        pin: true,
                        scrub: 1,
                        start: 'top 20%',
                        end: '+=' + (scrollDistance + 200),
                        anticipatePin: 1
                    }
                });
            }
        }
    },

    /**
     * TABLET: No horizontal scroll, simplified particles.
     */
    initTablet(section) {
        this.createParticles(section, 15);

        gsap.from('.sun-ray', {
            drawSVG: '0%',
            duration: 1.5,
            stagger: 0.08,
            scrollTrigger: {
                trigger: '.sun-rays-container',
                start: 'top 75%'
            }
        });

        gsap.utils.toArray('#section-sun [data-animate]').forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.6,
                delay: i * 0.1,
                scrollTrigger: { trigger: el, start: 'top 85%' }
            });
        });
    },

    /**
     * MOBILE: No particles, no horizontal scroll, simple reveals.
     */
    initMobile(section) {
        // Simple ray animation
        gsap.from('.sun-ray', {
            drawSVG: '0%',
            duration: 1,
            stagger: 0.05,
            scrollTrigger: {
                trigger: '.sun-rays-container',
                start: 'top 80%'
            }
        });

        gsap.utils.toArray('#section-sun [data-animate]').forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.5,
                delay: i * 0.08,
                scrollTrigger: { trigger: el, start: 'top 90%' }
            });
        });
    },

    /**
     * Create particle dots that animate outward from centre.
     */
    createParticles(section, count) {
        const container = section.querySelector('.sun-particles');
        if (!container) return;

        for (let i = 0; i < count; i++) {
            const dot = document.createElement('div');
            dot.style.cssText = `
                position: absolute;
                width: ${3 + Math.random() * 4}px;
                height: ${3 + Math.random() * 4}px;
                border-radius: 50%;
                background: var(--sw3-gold);
                opacity: 0;
                top: 50%;
                left: 50%;
                pointer-events: none;
            `;
            container.appendChild(dot);

            // Animate each particle outward with random trajectory
            const angle = Math.random() * Math.PI * 2;
            const distance = 150 + Math.random() * 300;

            gsap.to(dot, {
                x: Math.cos(angle) * distance,
                y: Math.sin(angle) * distance,
                opacity: 0.6,
                duration: 2 + Math.random() * 2,
                delay: Math.random() * 1.5,
                repeat: -1,
                repeatDelay: Math.random() * 2,
                ease: 'power1.out',
                onRepeat() {
                    // Reset position for next cycle
                    gsap.set(dot, { x: 0, y: 0, opacity: 0 });
                }
            });
        }
    }
};
