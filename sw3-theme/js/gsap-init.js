/**
 * SW3 — Simple scroll reveal + counter animations.
 * Uses IntersectionObserver for [data-animate] elements.
 * GSAP used only for counters (no complex ScrollTrigger dependency).
 */

document.addEventListener('DOMContentLoaded', () => {

    // ── Scroll reveal (IntersectionObserver) ──
    const animEls = document.querySelectorAll('[data-animate]');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    // Stagger by index within its parent
                    const siblings = entry.target.parentElement.querySelectorAll('[data-animate]');
                    const idx = Array.from(siblings).indexOf(entry.target);
                    setTimeout(() => {
                        entry.target.classList.add('is-visible');
                    }, idx * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        animEls.forEach(el => observer.observe(el));
    } else {
        // Fallback: show everything
        animEls.forEach(el => el.classList.add('is-visible'));
    }


    // ── Counter animation ──
    const counters = document.querySelectorAll('.counter');

    if (counters.length) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(el => counterObserver.observe(el));
    }

    function animateCounter(el) {
        const target = parseInt(el.dataset.target, 10);
        if (isNaN(target)) return;

        const duration = 2000;
        const start = performance.now();

        function update(now) {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            // Ease out cubic
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.round(eased * target).toLocaleString();

            if (progress < 1) {
                requestAnimationFrame(update);
            }
        }

        requestAnimationFrame(update);
    }


    // ── Sticky nav scroll state ──
    const nav = document.getElementById('sw3-nav');
    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                nav.classList.add('is-scrolled');
            } else {
                nav.classList.remove('is-scrolled');
            }
        }, { passive: true });
    }


    // ── Mobile menu ──
    const hamburger = document.getElementById('nav-hamburger');
    const menu = document.getElementById('sw3-menu');

    if (hamburger && menu) {
        hamburger.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('is-open');
            hamburger.setAttribute('aria-expanded', isOpen);
        });

        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.remove('is-open');
                hamburger.setAttribute('aria-expanded', 'false');
            });
        });
    }


    // ── Animation toggle ──
    const toggleBtn = document.getElementById('animation-toggle');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            document.body.classList.toggle('animations-off');
            const off = document.body.classList.contains('animations-off');
            toggleBtn.textContent = off ? 'Animations: Off' : 'Animations: On';
            if (off) {
                document.querySelectorAll('[data-animate]').forEach(el => el.classList.add('is-visible'));
            }
        });
    }
});
