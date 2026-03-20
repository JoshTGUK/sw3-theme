/**
 * Section 4: Energy Flows Home
 * DrawSVG energy path trace, MotionPath particles, sequential house illumination.
 * This is the most complex animation section.
 */

const SW3Flow = {
    init(conditions) {
        const section = document.getElementById('section-flow');
        if (!section) return;

        if (conditions.isMobile) {
            this.initMobile(section);
        } else {
            this.initDesktop(section, conditions.isTablet);
        }
    },

    /**
     * DESKTOP/TABLET: Full energy flow animation.
     */
    initDesktop(section, isTablet) {
        // ── Title + subtitle reveal ──
        gsap.utils.toArray('#section-flow [data-animate]').forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.8,
                delay: i * 0.15,
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%'
                }
            });
        });

        const illustration = section.querySelector('.flow-illustration');
        if (!illustration) return;

        // ── Master timeline for the energy flow ──
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: '.flow-illustration-wrap',
                start: 'top 60%',
                end: 'bottom 20%',
                scrub: 1
            }
        });

        // Phase 1: Draw the energy path (0% → 40%)
        tl.fromTo('.flow-energy-path',
            { drawSVG: '0%' },
            { drawSVG: '100%', duration: 0.4, ease: 'none' },
            0
        );

        // Phase 2: Energy particles follow the path (15% → 70%)
        const particles = illustration.querySelectorAll('.energy-particle');
        const energyPath = illustration.querySelector('#energy-path');

        if (particles.length && energyPath) {
            particles.forEach((particle, i) => {
                tl.to(particle, {
                    opacity: 0.9,
                    duration: 0.05
                }, 0.15 + (i * 0.08));

                tl.to(particle, {
                    motionPath: {
                        path: '#energy-path',
                        align: '#energy-path',
                        alignOrigin: [0.5, 0.5],
                        autoRotate: false
                    },
                    duration: 0.5,
                    ease: 'power1.inOut'
                }, 0.15 + (i * 0.08));
            });
        }

        // Phase 3: Light up rooms sequentially (40% → 90%)
        const rooms = [
            { selector: '.flow-room--kitchen', time: 0.4 },
            { selector: '.flow-room--living',  time: 0.5 },
            { selector: '.flow-room--bedroom', time: 0.6 },
            { selector: '.flow-room--hall',    time: 0.7 }
        ];

        rooms.forEach(room => {
            const el = illustration.querySelector(room.selector);
            if (!el) return;

            tl.to(el, {
                attr: { fill: '#F9A825' },
                opacity: 0.7,
                duration: 0.1,
                ease: 'power2.in'
            }, room.time);

            // Add a subtle glow pulse after lighting up
            if (!isTablet) {
                tl.to(el, {
                    opacity: 0.5,
                    duration: 0.05,
                    yoyo: true,
                    repeat: 1
                }, room.time + 0.1);

                tl.to(el, {
                    opacity: 0.7,
                    duration: 0.05
                }, room.time + 0.2);
            }
        });

        // Phase 4: Inverter glow
        tl.to('.flow-inverter', {
            attr: { fill: '#1a3a5c' },
            duration: 0.1
        }, 0.35);
    },

    /**
     * MOBILE: Show house in final lit state, simple fade-in.
     */
    initMobile(section) {
        // Reveal title + subtitle
        gsap.utils.toArray('#section-flow [data-animate]').forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.5,
                delay: i * 0.1,
                scrollTrigger: { trigger: el, start: 'top 90%' }
            });
        });

        // Show the illustration with a fade
        gsap.from('.flow-illustration-wrap', {
            opacity: 0,
            y: 20,
            duration: 0.8,
            scrollTrigger: {
                trigger: '.flow-illustration-wrap',
                start: 'top 85%'
            }
        });

        // Immediately show the final state
        gsap.set('.flow-energy-path', { drawSVG: '100%' });
        gsap.set('.flow-room', {
            attr: { fill: '#F9A825' },
            opacity: 0.7
        });
    }
};
