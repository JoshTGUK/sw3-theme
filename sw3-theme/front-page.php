<?php get_header(); ?>

<!-- ═══════════ HERO ═══════════ -->
<section id="section-hero" class="hero" aria-label="Welcome">
    <div class="hero__inner">
        <p class="hero__tag">South East England's Trusted Solar Installer</p>
        <h1 class="hero__title">Power Your Future<br>With <span class="hero__green">Sunshine</span></h1>
        <p class="hero__sub">Save up to £1,200 per year. 20+ years experience. MCS Certified. From survey to switch-on, we handle everything.</p>
        <div class="hero__actions">
            <a href="/contact/" class="btn btn--green btn--lg">Get Your Free Quote</a>
            <a href="#section-how" class="btn btn--outline btn--lg">How It Works</a>
        </div>
        <div class="hero__badges">
            <img src="<?php echo get_template_directory_uri(); ?>/img/badge-which.webp" alt="Which? Trusted Trader" loading="eager">
            <img src="<?php echo get_template_directory_uri(); ?>/img/badge-checkatrade.webp" alt="Checkatrade" loading="eager">
            <img src="<?php echo get_template_directory_uri(); ?>/img/badge-trustatrader.webp" alt="TrustATrader" loading="eager">
            <img src="<?php echo get_template_directory_uri(); ?>/img/badge-trustpilot.webp" alt="Trustpilot" loading="eager">
        </div>
        <div class="hero__scroll">
            <span>Scroll to explore</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </div>
    </div>
</section>


<!-- ═══════════ STATS BAR ═══════════ -->
<section class="stats-bar">
    <div class="stats-bar__inner">
        <div class="stats-bar__item">
            <span class="stats-bar__num counter" data-target="5000">0</span><span class="stats-bar__plus">+</span>
            <span class="stats-bar__label">Installations</span>
        </div>
        <div class="stats-bar__item">
            <span class="stats-bar__num counter" data-target="20">0</span><span class="stats-bar__plus">+</span>
            <span class="stats-bar__label">Years Experience</span>
        </div>
        <div class="stats-bar__item">
            <span class="stats-bar__num">4.9</span><span class="stats-bar__star">★</span>
            <span class="stats-bar__label">Trustpilot Rating</span>
        </div>
        <div class="stats-bar__item">
            <span class="stats-bar__num counter" data-target="5">0</span>
            <span class="stats-bar__label">Regions Covered</span>
        </div>
    </div>
</section>


<!-- ═══════════ SERVICES ═══════════ -->
<section id="section-services" class="section section--white">
    <div class="section__inner">
        <p class="section__tag">What We Do</p>
        <h2 class="section__title">Our Services</h2>
        <div class="card-grid card-grid--4">
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="12" y="24" width="24" height="18" rx="2" fill="none" stroke="var(--green)" stroke-width="2"/><polygon points="8,26 24,12 40,26" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="17" y="17" width="6" height="4" rx="1" fill="var(--green)" opacity="0.3"/><rect x="25" y="17" width="6" height="4" rx="1" fill="var(--green)" opacity="0.3"/></svg>
                </div>
                <h3 class="card__title">Residential Solar</h3>
                <p class="card__text">Bespoke solar panel systems designed for your home. Reduce bills by up to 70%.</p>
                <a href="/solar-panels/domestic/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="6" y="18" width="36" height="24" rx="2" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="10" y="12" width="8" height="6" rx="1" fill="var(--green)" opacity="0.3"/><rect x="20" y="12" width="8" height="6" rx="1" fill="var(--green)" opacity="0.3"/><rect x="30" y="12" width="8" height="6" rx="1" fill="var(--green)" opacity="0.3"/></svg>
                </div>
                <h3 class="card__title">Commercial Solar</h3>
                <p class="card__text">Large-scale installations for businesses. Reduce operating costs and hit net zero.</p>
                <a href="/solar-panels/commercial/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="14" y="10" width="20" height="30" rx="3" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="19" y="6" width="10" height="4" rx="2" fill="var(--green)"/><rect x="18" y="25" width="12" height="12" rx="2" fill="var(--green)" opacity="0.2"/></svg>
                </div>
                <h3 class="card__title">Battery Storage</h3>
                <p class="card__text">Tesla Powerwall, SigEnergy & Enphase. Store energy and power your home 24/7.</p>
                <a href="/energy-storage/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><circle cx="24" cy="24" r="16" fill="none" stroke="var(--green)" stroke-width="2"/><path d="M18,28 L22,20 L26,24 L30,16" fill="none" stroke="var(--green)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3 class="card__title">Home Energy</h3>
                <p class="card__text">Air source heat pumps and EV chargers. Complete your green home transformation.</p>
                <a href="/home-energy/" class="card__link">Learn more →</a>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ HOW IT WORKS ═══════════ -->
<section id="section-how" class="section section--grey">
    <div class="section__inner">
        <p class="section__tag">Simple Process</p>
        <h2 class="section__title">How It Works</h2>
        <div class="steps">
            <div class="step" data-animate>
                <div class="step__num">01</div>
                <h3 class="step__title">Free Survey</h3>
                <p class="step__text">We visit your property, assess your roof and energy usage, and design the perfect system.</p>
            </div>
            <div class="step" data-animate>
                <div class="step__num">02</div>
                <h3 class="step__title">Custom Design</h3>
                <p class="step__text">Your system is designed for maximum output. We handle all planning and paperwork.</p>
            </div>
            <div class="step" data-animate>
                <div class="step__num">03</div>
                <h3 class="step__title">Installation</h3>
                <p class="step__text">Our MCS-certified team installs your system in 1–2 days with minimal disruption.</p>
            </div>
            <div class="step" data-animate>
                <div class="step__num">04</div>
                <h3 class="step__title">Start Saving</h3>
                <p class="step__text">Your system is live. Watch your bills drop and earn from the Smart Export Guarantee.</p>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ IMPACT / SAVINGS ═══════════ -->
<section class="section section--white">
    <div class="section__inner">
        <p class="section__tag">Real Results</p>
        <h2 class="section__title">Your Savings & Impact</h2>

        <div class="card-grid card-grid--3">
            <div class="impact-card" data-animate>
                <span class="impact-card__icon">£</span>
                <span class="impact-card__num counter" data-target="1200">0</span>
                <span class="impact-card__label">Average annual savings</span>
            </div>
            <div class="impact-card" data-animate>
                <span class="impact-card__num counter" data-target="1800">0</span>
                <span class="impact-card__unit">kg CO₂</span>
                <span class="impact-card__label">Reduced per year</span>
            </div>
            <div class="impact-card" data-animate>
                <span class="impact-card__num counter" data-target="82">0</span>
                <span class="impact-card__unit">trees</span>
                <span class="impact-card__label">Equivalent planted annually</span>
            </div>
        </div>

        <!-- Before / After -->
        <div class="compare" data-animate>
            <div class="compare__before">
                <span class="compare__tag compare__tag--red">Before Solar</span>
                <span class="compare__amount">£2,400</span>
                <span class="compare__label">Annual energy bill</span>
                <span class="compare__trend compare__trend--red">↑ Rising every year</span>
            </div>
            <div class="compare__after">
                <span class="compare__tag compare__tag--green">After Solar + Battery</span>
                <span class="compare__amount">£450</span>
                <span class="compare__label">Annual energy bill</span>
                <span class="compare__trend compare__trend--green">↓ Plus SEG income</span>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ TESTIMONIALS ═══════════ -->
<section class="section section--grey">
    <div class="section__inner">
        <p class="section__tag">What Our Customers Say</p>
        <h2 class="section__title">Real Reviews</h2>
        <div class="card-grid card-grid--3">
            <div class="testimonial" data-animate>
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__quote">"SW3 transformed our home. Our electricity bill dropped from £200 a month to £35. The installation was professional and finished in just two days."</p>
                <div class="testimonial__author">
                    <strong>Sarah M.</strong>
                    <span>Sevenoaks, Kent</span>
                </div>
            </div>
            <div class="testimonial" data-animate>
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__quote">"The Tesla Powerwall was the game-changer. We barely use any grid electricity now, even in winter. Wish we'd done it sooner."</p>
                <div class="testimonial__author">
                    <strong>James & Paula T.</strong>
                    <span>Guildford, Surrey</span>
                </div>
            </div>
            <div class="testimonial" data-animate>
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__quote">"From the initial survey to the final handover, SW3 were fantastic. Clear communication, fair pricing, and a beautiful installation."</p>
                <div class="testimonial__author">
                    <strong>David R.</strong>
                    <span>Brighton, Sussex</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ AREAS ═══════════ -->
<section class="section section--white">
    <div class="section__inner">
        <p class="section__tag">Coverage</p>
        <h2 class="section__title">Areas We Serve</h2>
        <p class="section__sub">Premium solar installation across the South East and South West of England.</p>
        <div class="areas">
            <a href="/areas/london/" class="area-pill" data-animate>London</a>
            <a href="/areas/kent/" class="area-pill" data-animate>Kent</a>
            <a href="/areas/surrey/" class="area-pill" data-animate>Surrey</a>
            <a href="/areas/sussex/" class="area-pill" data-animate>Sussex</a>
            <a href="/areas/south-west/" class="area-pill" data-animate>South West</a>
        </div>
    </div>
</section>


<!-- ═══════════ CTA ═══════════ -->
<section class="section section--green">
    <div class="section__inner section__inner--narrow">
        <h2 class="section__title section__title--white">Ready to Start Saving?</h2>
        <p class="section__sub section__sub--white">Get a free, no-obligation quote in 60 seconds. Or call us on <a href="tel:+442045381967" class="cta-phone">0204 538 1967</a></p>
        <a href="/contact/" class="btn btn--black btn--lg">Get Your Free Quote</a>
    </div>
</section>

<?php get_footer(); ?>
