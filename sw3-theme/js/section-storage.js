/**
 * Section 5: Storage & Independence
 * Day-to-night gradient transition, battery fill animation, stars appearing.
 */

const SW3Storage = {
    init(conditions) {
        const section = document.getElementById('section-storage');
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
        section.querySelectorAll('.counter').forEach(el => {
            sw3AnimateCounter(el, {
                trigger: el,
                start: 'top 80%'
            });
        });
    },

    /**
     * DESKTOP/TABLET: Full day-to-night transition, battery fill, stars.
     */
    initDesktop(section) {
        // ── Background gradient: day → night ──
        gsap.to('.storage-bg', {
            opacity: 1,
            scrollTrigger: {
                trigger: section,
                start: 'top 80%',
                end: 'center center',
                scrub: 1
            }
        });

        // ── Moon appears ──
        gsap.to('.storage-moon', {
            opacity: 0.8,
            y: -20,
            duration: 1.5,
            scrollTrigger: {
                trigger: section,
                start: 'top 50%'
            }
        });

        // ── Stars twinkle in ──
        gsap.utils.toArray('.storage-star').forEach((star, i) => {
            gsap.to(star, {
                opacity: 0.4 + Math.random() * 0.4,
                duration: 0.8,
                delay: 0.3 + (i * 0.12),
                scrollTrigger: {
                    trigger: section,
                    start: 'top 40%'
                }
            });

            // Subtle twinkle loop
            gsap.to(star, {
                opacity: 0.2,
                duration: 1 + Math.random() * 2,
                repeat: -1,
                yoyo: true,
                delay: Math.random() * 3,
                ease: 'sine.inOut'
            });
        });

        // ── Battery fill animation (scroll-linked) ──
        this.initBattery(section);

        // ── Content reveals ──
        gsap.utils.toArray('#section-storage [data-animate]').forEach((el, i) => {
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
    },

    /**
     * MOBILE: Simple reveals, static night sky.
     */
    initMobile(section) {
        // Show night background
        gsap.set('.storage-bg', { opacity: 0.7 });
        gsap.set('.storage-moon', { opacity: 0.6 });
        gsap.utils.toArray('.storage-star').forEach(star => {
            gsap.set(star, { opacity: 0.3 + Math.random() * 0.3 });
        });

        // Battery fill
        this.initBattery(section);

        // Content reveals
        gsap.utils.toArray('#section-storage [data-animate]').forEach((el, i) => {
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
     * Battery fill: animate the inner rect height from 0 → 280,
     * and the y from 305 → 25 (SVG coordinates are top-down).
     */
    initBattery(section) {
        const fill = section.querySelector('.battery-fill');
        const percent = section.querySelector('.battery-percent');
        if (!fill) return;

        const obj = { progress: 0 };

        gsap.to(obj, {
            progress: 1,
            ease: 'power1.out',
            scrollTrigger: {
                trigger: '.storage-battery-wrap',
                start: 'top 70%',
                end: 'bottom 30%',
                scrub: 1
            },
            onUpdate() {
                const p = obj.progress;
                const height = Math.round(p * 280);
                const y = 305 - height;
                fill.setAttribute('height', height);
                fill.setAttribute('y', y);

                if (percent) {
                    percent.textContent = Math.round(p * 100) + '%';
                }
            }
        });
    }
};
