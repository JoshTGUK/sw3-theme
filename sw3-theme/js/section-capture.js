/**
 * Section 3: Capturing the Light
 * Solar panel reveal, photon particles, DrawSVG cell diagram.
 */

const SW3Capture = {
    init(conditions) {
        const section = document.getElementById('section-capture');
        if (!section) return;

        if (conditions.isMobile) {
            this.initMobile(section);
        } else {
            this.initDesktop(section, conditions.isTablet);
        }
    },

    /**
     * DESKTOP/TABLET: Panel reveal, photons, DrawSVG diagram.
     */
    initDesktop(section, isTablet) {
        // ── Panel scale-in ──
        gsap.from('.capture-panel', {
            scale: 0.7,
            rotation: -5,
            opacity: 0,
            duration: 1.2,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.capture-panel-wrap',
                start: 'top 75%'
            }
        });

        // ── Photon particles (desktop only) ──
        if (!isTablet) {
            this.createPhotons(section);
        }

        // ── Content reveals ──
        gsap.utils.toArray('#section-capture [data-animate]').forEach((el, i) => {
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

        // ── DrawSVG cell diagram ──
        this.initDiagram();
    },

    /**
     * MOBILE: Simple reveals, no photons.
     */
    initMobile(section) {
        // Static panel — just fade in
        gsap.from('.capture-panel', {
            opacity: 0,
            y: 20,
            duration: 0.6,
            scrollTrigger: {
                trigger: '.capture-panel-wrap',
                start: 'top 85%'
            }
        });

        // Content reveals
        gsap.utils.toArray('#section-capture [data-animate]').forEach((el, i) => {
            gsap.to(el, {
                opacity: 1,
                y: 0,
                duration: 0.5,
                delay: i * 0.1,
                scrollTrigger: { trigger: el, start: 'top 90%' }
            });
        });

        // Simplified diagram — just show labels
        this.initDiagram();
    },

    /**
     * Animate the photovoltaic cell cross-section diagram.
     * DrawSVG traces paths, then labels fade in.
     */
    initDiagram() {
        const diagram = document.querySelector('.capture-diagram');
        if (!diagram) return;

        // Get all paths and labels
        const paths = diagram.querySelectorAll('.diagram-path');
        const labels = diagram.querySelectorAll('.diagram-label');

        // Draw paths sequentially
        gsap.from(paths, {
            drawSVG: '0%',
            duration: 0.8,
            stagger: 0.2,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: diagram,
                start: 'top 70%',
                end: 'bottom 40%',
                scrub: 1
            }
        });

        // Fade in labels after paths
        gsap.to(labels, {
            opacity: 1,
            duration: 0.4,
            stagger: 0.15,
            scrollTrigger: {
                trigger: diagram,
                start: 'top 60%'
            }
        });
    },

    /**
     * Create photon particle dots that fall from top to panel.
     */
    createPhotons(section) {
        const container = section.querySelector('.capture-photons');
        const panel = section.querySelector('.capture-panel-wrap');
        if (!container || !panel) return;

        // Create 15 photon dots
        for (let i = 0; i < 15; i++) {
            const photon = document.createElement('div');
            photon.style.cssText = `
                position: absolute;
                width: ${4 + Math.random() * 3}px;
                height: ${4 + Math.random() * 3}px;
                border-radius: 50%;
                background: var(--sw3-gold);
                opacity: 0;
                top: 0;
                left: ${20 + Math.random() * 60}%;
                pointer-events: none;
                filter: blur(1px);
            `;
            container.appendChild(photon);

            // Animate downward with slight x drift
            gsap.to(photon, {
                y: '50vh',
                x: (Math.random() - 0.5) * 60,
                opacity: 0.7,
                duration: 1.5 + Math.random() * 1.5,
                delay: Math.random() * 3,
                repeat: -1,
                repeatDelay: Math.random() * 2,
                ease: 'power1.in',
                onRepeat() {
                    gsap.set(photon, {
                        y: 0,
                        x: 0,
                        opacity: 0,
                        left: (20 + Math.random() * 60) + '%'
                    });
                }
            });
        }
    }
};
