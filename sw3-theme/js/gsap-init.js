/**
 * SW3 Green Energy — GSAP Initialisation
 *
 * Registers all GSAP plugins, sets up ScrollSmoother (desktop only),
 * configures responsive breakpoints via matchMedia, handles
 * reduced motion and the animation toggle button.
 *
 * This file MUST load before all section animation scripts.
 */

// ── Global SW3 namespace ──
const SW3 = {
    isDesktop: false,
    isTablet: false,
    isMobile: false,
    animationsEnabled: true,
    smoother: null,
    context: null,

    /**
     * Main initialisation — called after DOM + fonts are ready.
     */
    init() {
        // Register all GSAP plugins
        gsap.registerPlugin(
            ScrollTrigger,
            ScrollSmoother,
            SplitText,
            DrawSVGPlugin,
            MotionPathPlugin
        );

        // Default GSAP config
        gsap.defaults({
            ease: 'power2.out',
            duration: 1
        });

        // ScrollTrigger defaults
        ScrollTrigger.defaults({
            toggleActions: 'play none none none'
        });

        // Account for WordPress admin bar (32px offset when logged in)
        const adminBar = document.getElementById('wpadminbar');
        if (adminBar) {
            ScrollTrigger.config({
                ignoreMobileResize: true
            });
        }

        // ── Responsive matchMedia setup ──
        SW3.context = gsap.matchMedia();

        SW3.context.add({
            isDesktop: '(min-width: 1025px)',
            isTablet: '(min-width: 601px) and (max-width: 1024px)',
            isMobile: '(max-width: 600px)',
            reducedMotion: '(prefers-reduced-motion: reduce)'
        }, (context) => {
            const { isDesktop, isTablet, isMobile, reducedMotion } = context.conditions;

            SW3.isDesktop = isDesktop;
            SW3.isTablet  = isTablet;
            SW3.isMobile  = isMobile;

            // ── Reduced motion: skip all animations ──
            if (reducedMotion) {
                SW3.animationsEnabled = false;
                SW3.showAllContent();
                document.body.classList.add('no-smooth-scroll', 'animations-off');
                return;
            }

            // ── Desktop: enable ScrollSmoother ──
            if (isDesktop) {
                SW3.smoother = ScrollSmoother.create({
                    wrapper: '#smooth-wrapper',
                    content: '#smooth-content',
                    smooth: 1.2,
                    effects: true
                });
            } else {
                // Mobile/tablet: disable smooth scroll wrapper
                document.body.classList.add('no-smooth-scroll');
            }

            // ── Init all section animations ──
            // Each section file defines a global object (SW3Hero, SW3Sun, etc.)
            // with an init() method that receives the breakpoint conditions.
            if (typeof SW3Hero    !== 'undefined') SW3Hero.init(context.conditions);
            if (typeof SW3Sun     !== 'undefined') SW3Sun.init(context.conditions);
            if (typeof SW3Capture !== 'undefined') SW3Capture.init(context.conditions);
            if (typeof SW3Flow    !== 'undefined') SW3Flow.init(context.conditions);
            if (typeof SW3Storage !== 'undefined') SW3Storage.init(context.conditions);
            if (typeof SW3Impact  !== 'undefined') SW3Impact.init(context.conditions);
            if (typeof SW3Future  !== 'undefined') SW3Future.init(context.conditions);
        });

        // ── Animation toggle button ──
        SW3.setupToggle();

        // ── Refresh ScrollTrigger after everything loads ──
        window.addEventListener('load', () => {
            ScrollTrigger.refresh();
        });
    },

    /**
     * Show all content in its final state (for reduced motion / toggle off).
     */
    showAllContent() {
        // Reveal all hidden elements
        gsap.set('[data-animate]', { opacity: 1, y: 0, x: 0, scale: 1 });
        gsap.set('.hero-headline, .hero-subtext, .hero-cta, .hero-badges, .hero-scroll', {
            opacity: 1, y: 0
        });
        gsap.set('.diagram-label', { opacity: 1 });
        gsap.set('.energy-particle', { opacity: 0.8 });
        gsap.set('.community-house, .community-tree', { opacity: 1 });
        gsap.set('.storage-moon', { opacity: 0.8 });
        gsap.set('.storage-star', { opacity: 0.6 });
        gsap.set('.storage-bg', { opacity: 0.5 });
        gsap.set('.future-bg', { opacity: 0.4 });

        // Set counters to their target values
        document.querySelectorAll('.counter').forEach(el => {
            const target = parseInt(el.dataset.target, 10);
            if (!isNaN(target)) {
                el.textContent = target.toLocaleString();
            }
        });

        // Show battery full
        const batteryFill = document.querySelector('.battery-fill');
        if (batteryFill) {
            batteryFill.setAttribute('height', '280');
            batteryFill.setAttribute('y', '25');
        }
        const batteryPercent = document.querySelector('.battery-percent');
        if (batteryPercent) batteryPercent.textContent = '100%';

        // Show rooms lit
        document.querySelectorAll('.flow-room').forEach(room => {
            room.setAttribute('fill', 'var(--sw3-gold)');
            room.setAttribute('opacity', '0.7');
        });

        // Show SVG paths fully drawn
        gsap.set('.flow-energy-path, .sun-ray, .diagram-path', {
            strokeDashoffset: 0
        });
    },

    /**
     * Animation toggle button handler.
     */
    setupToggle() {
        const btn = document.getElementById('animation-toggle');
        if (!btn) return;

        btn.addEventListener('click', () => {
            SW3.animationsEnabled = !SW3.animationsEnabled;

            if (!SW3.animationsEnabled) {
                // Kill all ScrollTriggers and show content
                ScrollTrigger.getAll().forEach(st => st.kill());
                if (SW3.smoother) {
                    SW3.smoother.kill();
                    SW3.smoother = null;
                }
                document.body.classList.add('no-smooth-scroll', 'animations-off');
                SW3.showAllContent();
                btn.textContent = 'Animations: Off';
            } else {
                // Simplest restart: reload the page
                location.reload();
            }
        });
    }
};


// ── Utility: Animate a counter element ──
// Reusable across multiple sections.
function sw3AnimateCounter(element, scrollTriggerConfig) {
    const target = parseInt(element.dataset.target, 10);
    if (isNaN(target)) return;

    const obj = { val: 0 };
    gsap.to(obj, {
        val: target,
        duration: 2,
        ease: 'power1.out',
        snap: { val: 1 },
        scrollTrigger: scrollTriggerConfig,
        onUpdate() {
            element.textContent = Math.round(obj.val).toLocaleString();
        }
    });
}


// ── Boot sequence ──
// Wait for DOM content + fonts before initialising.
document.addEventListener('DOMContentLoaded', () => {
    if (document.fonts && document.fonts.ready) {
        document.fonts.ready.then(() => SW3.init());
    } else {
        // Fallback for browsers without font loading API
        setTimeout(() => SW3.init(), 400);
    }
});
