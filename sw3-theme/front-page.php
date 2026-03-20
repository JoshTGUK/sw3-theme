<?php get_header(); ?>

<!-- ═══════════ HERO ═══════════ -->
<section id="section-hero" class="hero" aria-label="Welcome">
    <!-- Sun glow (CSS animated) -->
    <div class="hero__sun" aria-hidden="true"></div>
    <div class="hero__glow" aria-hidden="true"></div>

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
        <p class="section__sub">SW3 Green Energy Services offers a complete range of renewable energy solutions for homes and businesses across the South East and South West of England. As an MCS certified installer, every system we design is built to maximise your savings and minimise your carbon footprint.</p>
        <div class="card-grid card-grid--3">
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="12" y="24" width="24" height="18" rx="2" fill="none" stroke="var(--green)" stroke-width="2"/><polygon points="8,26 24,12 40,26" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="17" y="17" width="6" height="4" rx="1" fill="var(--green)" opacity="0.3"/><rect x="25" y="17" width="6" height="4" rx="1" fill="var(--green)" opacity="0.3"/></svg>
                </div>
                <h3 class="card__title">Domestic Solar Panels</h3>
                <p class="card__text">Bespoke solar panel installation designed around your roof, your energy usage, and your budget. Our domestic systems typically reduce electricity bills by up to 70%, and with battery storage you can slash bills by up to 80%. Every installation is MCS certified, ensuring you qualify for the Smart Export Guarantee.</p>
                <a href="/solar-panels/domestic/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="6" y="18" width="36" height="24" rx="2" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="10" y="12" width="8" height="6" rx="1" fill="var(--green)" opacity="0.3"/><rect x="20" y="12" width="8" height="6" rx="1" fill="var(--green)" opacity="0.3"/><rect x="30" y="12" width="8" height="6" rx="1" fill="var(--green)" opacity="0.3"/></svg>
                </div>
                <h3 class="card__title">Commercial Solar</h3>
                <p class="card__text">Large-scale solar panel installation for businesses, warehouses, schools, and farms. Reduce operating costs, hit your net-zero targets, and benefit from tax incentives. We handle everything from structural surveys and planning applications to grid connection and ongoing maintenance contracts.</p>
                <a href="/solar-panels/commercial/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="14" y="10" width="20" height="30" rx="3" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="19" y="6" width="10" height="4" rx="2" fill="var(--green)"/><rect x="18" y="25" width="12" height="12" rx="2" fill="var(--green)" opacity="0.2"/></svg>
                </div>
                <h3 class="card__title">Battery Storage</h3>
                <p class="card__text">Store surplus solar energy with a Tesla Powerwall, SigEnergy, or Enphase battery system. Power your home around the clock, charge overnight on cheap tariffs, and keep the lights on during power cuts. Battery storage is the key to true energy independence and can slash your energy bills up to 80%.</p>
                <a href="/energy-storage/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><circle cx="24" cy="20" r="10" fill="none" stroke="var(--green)" stroke-width="2"/><path d="M18,32 L30,32 L28,42 L20,42 Z" fill="none" stroke="var(--green)" stroke-width="2"/><line x1="24" y1="6" x2="24" y2="2" stroke="var(--green)" stroke-width="2"/><line x1="34" y1="10" x2="37" y2="7" stroke="var(--green)" stroke-width="2"/><line x1="14" y1="10" x2="11" y2="7" stroke="var(--green)" stroke-width="2"/></svg>
                </div>
                <h3 class="card__title">Air Source Heat Pumps</h3>
                <p class="card__text">Replace your gas boiler with a highly efficient air source heat pump. Extract renewable heat from the outside air to warm your home and provide hot water year-round. When paired with solar panels, a heat pump can dramatically reduce your reliance on fossil fuels and lower your heating costs.</p>
                <a href="/home-energy/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="10" y="16" width="10" height="26" rx="2" fill="none" stroke="var(--green)" stroke-width="2"/><circle cx="15" cy="38" r="2" fill="var(--green)"/><path d="M20,28 L32,28 L32,22 L38,22" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="34" y="14" width="8" height="16" rx="2" fill="none" stroke="var(--green)" stroke-width="2"/></svg>
                </div>
                <h3 class="card__title">EV Chargers</h3>
                <p class="card__text">Charge your electric vehicle at home using energy from your solar panels. We install smart EV chargers that integrate seamlessly with your solar and battery system, allowing you to drive on free sunshine. Compatible with all major EV brands and eligible for OZEV grants where available.</p>
                <a href="/home-energy/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><path d="M14,14 L34,14 L34,38 L14,38 Z" fill="none" stroke="var(--green)" stroke-width="2"/><line x1="14" y1="22" x2="34" y2="22" stroke="var(--green)" stroke-width="1.5"/><line x1="14" y1="30" x2="34" y2="30" stroke="var(--green)" stroke-width="1.5"/><line x1="24" y1="14" x2="24" y2="38" stroke="var(--green)" stroke-width="1.5"/><circle cx="24" cy="10" r="4" fill="none" stroke="var(--green)" stroke-width="2"/><line x1="24" y1="2" x2="24" y2="6" stroke="var(--green)" stroke-width="2"/><line x1="30" y1="6" x2="28" y2="8" stroke="var(--green)" stroke-width="2"/><line x1="18" y1="6" x2="20" y2="8" stroke="var(--green)" stroke-width="2"/></svg>
                </div>
                <h3 class="card__title">Solar Maintenance & Covers</h3>
                <p class="card__text">Protect your investment with our annual maintenance plans and comprehensive solar and battery cover packages. Regular servicing keeps your system running at peak efficiency, extends its lifespan, and ensures your warranty remains valid. We offer one-off cleans, annual service plans, and full breakdown cover.</p>
                <a href="/solar-maintenance/" class="card__link">Learn more →</a>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ ENERGY FLOW ═══════════ -->
<section id="section-energy-flow" class="section section--white">
    <div class="section__inner">
        <p class="section__tag" data-animate>How Solar Powers Your Home</p>
        <h2 class="section__title" data-animate>From Sunlight to Savings</h2>
        <p class="section__sub" data-animate>See how energy flows from the sun, through your solar panels, and into every room of your home. With battery storage and smart technology, you can power your life with clean, free energy around the clock.</p>

        <div class="flow-wrap" data-animate>
            <svg id="energy-flow-svg" viewBox="0 0 800 550" xmlns="http://www.w3.org/2000/svg" aria-label="Energy flow diagram showing solar panels powering a home">

                <!-- Sun -->
                <circle cx="400" cy="45" r="28" fill="var(--solar-gold)" opacity="0.9"/>
                <g stroke="var(--solar-gold)" stroke-width="2.5" stroke-linecap="round" opacity="0.7">
                    <line x1="400" y1="8" x2="400" y2="0"/>
                    <line x1="425" y1="12" x2="432" y2="4"/>
                    <line x1="440" y1="30" x2="452" y2="26"/>
                    <line x1="440" y1="60" x2="452" y2="64"/>
                    <line x1="425" y1="78" x2="432" y2="86"/>
                    <line x1="375" y1="12" x2="368" y2="4"/>
                    <line x1="360" y1="30" x2="348" y2="26"/>
                    <line x1="360" y1="60" x2="348" y2="64"/>
                    <line x1="375" y1="78" x2="368" y2="86"/>
                </g>

                <!-- Sun rays animated -->
                <line x1="400" y1="73" x2="340" y2="110" stroke="var(--solar-gold)" stroke-width="1.5" stroke-dasharray="4,4" opacity="0.4"/>
                <line x1="400" y1="73" x2="400" y2="115" stroke="var(--solar-gold)" stroke-width="1.5" stroke-dasharray="4,4" opacity="0.4"/>
                <line x1="400" y1="73" x2="460" y2="110" stroke="var(--solar-gold)" stroke-width="1.5" stroke-dasharray="4,4" opacity="0.4"/>

                <!-- Roof -->
                <polygon points="200,200 400,110 600,200" fill="none" stroke="var(--green)" stroke-width="2.5"/>

                <!-- Solar panels on roof -->
                <g fill="var(--green-900)" stroke="var(--green)" stroke-width="1.5">
                    <rect x="310" y="140" width="35" height="22" rx="2" opacity="0.8"/>
                    <rect x="350" y="140" width="35" height="22" rx="2" opacity="0.8"/>
                    <rect x="390" y="140" width="35" height="22" rx="2" opacity="0.8"/>
                    <rect x="330" y="166" width="35" height="22" rx="2" opacity="0.8"/>
                    <rect x="370" y="166" width="35" height="22" rx="2" opacity="0.8"/>
                    <rect x="410" y="166" width="35" height="22" rx="2" opacity="0.8"/>
                </g>
                <!-- Panel grid lines -->
                <g stroke="var(--green)" stroke-width="0.5" opacity="0.5">
                    <line x1="327" y1="140" x2="327" y2="162"/>
                    <line x1="367" y1="140" x2="367" y2="162"/>
                    <line x1="407" y1="140" x2="407" y2="162"/>
                    <line x1="310" y1="151" x2="345" y2="151"/>
                    <line x1="350" y1="151" x2="385" y2="151"/>
                    <line x1="390" y1="151" x2="425" y2="151"/>
                    <line x1="347" y1="166" x2="347" y2="188"/>
                    <line x1="387" y1="166" x2="387" y2="188"/>
                    <line x1="427" y1="166" x2="427" y2="188"/>
                    <line x1="330" y1="177" x2="365" y2="177"/>
                    <line x1="370" y1="177" x2="405" y2="177"/>
                    <line x1="410" y1="177" x2="445" y2="177"/>
                </g>

                <!-- House walls -->
                <rect x="220" y="200" width="360" height="250" fill="none" stroke="var(--green)" stroke-width="2.5"/>

                <!-- Room dividers -->
                <line x1="400" y1="200" x2="400" y2="450" stroke="var(--green)" stroke-width="1.5" stroke-dasharray="6,4"/>
                <line x1="220" y1="320" x2="580" y2="320" stroke="var(--green)" stroke-width="1.5" stroke-dasharray="6,4"/>

                <!-- Kitchen (top-left) -->
                <rect class="flow-room flow-room--kitchen" x="225" y="205" width="170" height="110" rx="4" fill="var(--green)" opacity="0.05"/>
                <text x="310" y="230" text-anchor="middle" fill="var(--green)" font-size="13" font-family="var(--font)">Kitchen</text>
                <rect x="250" y="240" width="30" height="20" rx="3" fill="none" stroke="var(--green)" stroke-width="1" opacity="0.5"/>
                <rect x="290" y="240" width="20" height="20" rx="3" fill="none" stroke="var(--green)" stroke-width="1" opacity="0.5"/>
                <circle cx="300" cy="250" r="4" fill="none" stroke="var(--green)" stroke-width="1" opacity="0.5"/>

                <!-- Living room (top-right) -->
                <rect class="flow-room flow-room--living" x="405" y="205" width="170" height="110" rx="4" fill="var(--green)" opacity="0.05"/>
                <text x="490" y="230" text-anchor="middle" fill="var(--green)" font-size="13" font-family="var(--font)">Living Room</text>
                <rect x="440" y="245" width="40" height="8" rx="2" fill="none" stroke="var(--green)" stroke-width="1" opacity="0.5"/>
                <rect x="490" y="240" width="30" height="18" rx="2" fill="none" stroke="var(--green)" stroke-width="1" opacity="0.5"/>

                <!-- Bedroom (bottom-left) -->
                <rect class="flow-room flow-room--bedroom" x="225" y="325" width="170" height="120" rx="4" fill="var(--green)" opacity="0.05"/>
                <text x="310" y="355" text-anchor="middle" fill="var(--green)" font-size="13" font-family="var(--font)">Bedroom</text>
                <rect x="260" y="370" width="50" height="30" rx="3" fill="none" stroke="var(--green)" stroke-width="1" opacity="0.5"/>
                <rect x="320" y="375" width="15" height="20" rx="2" fill="none" stroke="var(--green)" stroke-width="1" opacity="0.5"/>

                <!-- Utility / Battery room (bottom-right) -->
                <rect x="405" y="325" width="170" height="120" rx="4" fill="var(--green)" opacity="0.05"/>
                <text x="490" y="355" text-anchor="middle" fill="var(--green)" font-size="13" font-family="var(--font)">Utility</text>

                <!-- Battery (inside utility) -->
                <rect x="460" y="370" width="60" height="40" rx="6" fill="none" stroke="var(--green)" stroke-width="2"/>
                <rect x="465" y="375" width="50" height="8" rx="2" fill="var(--green)" opacity="0.3"/>
                <rect x="465" y="386" width="50" height="8" rx="2" fill="var(--green)" opacity="0.2"/>
                <rect x="465" y="397" width="50" height="8" rx="2" fill="var(--green)" opacity="0.1"/>
                <text x="490" y="425" text-anchor="middle" fill="var(--green)" font-size="10" font-family="var(--font)" opacity="0.8">Battery</text>

                <!-- Inverter box (outside right) -->
                <rect x="610" y="240" width="60" height="50" rx="6" fill="var(--green-900)" stroke="var(--green)" stroke-width="2"/>
                <text x="640" y="270" text-anchor="middle" fill="var(--green)" font-size="11" font-family="var(--font)">Inverter</text>
                <circle cx="625" cy="257" r="3" fill="var(--green)" opacity="0.5"/>
                <circle cx="640" cy="257" r="3" fill="var(--green)" opacity="0.5"/>
                <circle cx="655" cy="257" r="3" fill="var(--green)" opacity="0.5"/>

                <!-- Energy path: Panels → Inverter → House -->
                <path id="energy-path" d="M 425,188 L 425,195 L 640,195 L 640,240" fill="none" stroke="var(--green)" stroke-width="2.5" stroke-dasharray="8,4" opacity="0.6"/>
                <!-- Inverter → House interior -->
                <path d="M 610,265 L 580,265 L 580,350" fill="none" stroke="var(--green)" stroke-width="2" stroke-dasharray="8,4" opacity="0.5"/>
                <path d="M 610,265 L 580,265 L 580,260 L 400,260" fill="none" stroke="var(--green)" stroke-width="2" stroke-dasharray="8,4" opacity="0.5"/>

                <!-- Energy dots (animated via CSS/JS) -->
                <circle class="energy-dot" cx="425" cy="188" r="5" fill="var(--green)"/>
                <circle class="energy-dot" cx="640" cy="220" r="5" fill="var(--green)"/>
                <circle class="energy-dot" cx="590" cy="265" r="5" fill="var(--green)"/>

                <!-- EV Charger (outside left) -->
                <rect x="120" y="350" width="50" height="80" rx="6" fill="none" stroke="var(--green)" stroke-width="2"/>
                <rect x="130" y="360" width="30" height="20" rx="3" fill="var(--green)" opacity="0.15"/>
                <circle cx="145" cy="405" r="6" fill="none" stroke="var(--green)" stroke-width="2"/>
                <text x="145" y="445" text-anchor="middle" fill="var(--green)" font-size="11" font-family="var(--font)">EV Charger</text>
                <!-- Cable from house to EV charger -->
                <path d="M 220,370 L 170,370" fill="none" stroke="var(--green)" stroke-width="2" stroke-dasharray="6,4" opacity="0.5"/>
                <circle class="energy-dot" cx="195" cy="370" r="4" fill="var(--green)"/>

                <!-- Labels -->
                <text x="400" y="505" text-anchor="middle" fill="var(--green)" font-size="14" font-family="var(--font)" opacity="0.7">Solar energy powers your entire home — kitchen, living room, bedroom — and charges your EV</text>
            </svg>
        </div>
    </div>
</section>


<!-- ═══════════ HOW IT WORKS ═══════════ -->
<section id="section-how" class="section section--grey">
    <div class="section__inner">
        <p class="section__tag">Simple Process</p>
        <h2 class="section__title">How It Works</h2>
        <p class="section__sub">Going solar with SW3 Green Energy is straightforward. We guide you through every step, from the initial conversation to the moment your system goes live. No jargon, no pressure, no hidden costs.</p>
        <div class="steps">
            <div class="step" data-animate>
                <div class="step__num">01</div>
                <h3 class="step__title">Free Survey</h3>
                <p class="step__text">We visit your property, assess your roof orientation, shading, and energy usage, then design a system tailored to your home. Our surveys are completely free and come with no obligation.</p>
            </div>
            <div class="step" data-animate>
                <div class="step__num">02</div>
                <h3 class="step__title">Custom Design</h3>
                <p class="step__text">Your bespoke solar panel system is designed for maximum energy output. We handle all planning applications, DNO notifications, and paperwork so you don't have to lift a finger.</p>
            </div>
            <div class="step" data-animate>
                <div class="step__num">03</div>
                <h3 class="step__title">Installation</h3>
                <p class="step__text">Our MCS-certified engineers install your system in just 1-2 days with minimal disruption. We take care of scaffolding, electrics, and leave your property spotless.</p>
            </div>
            <div class="step" data-animate>
                <div class="step__num">04</div>
                <h3 class="step__title">Start Saving</h3>
                <p class="step__text">Your system goes live and you start generating free electricity immediately. We register you for the Smart Export Guarantee so you earn money for surplus energy exported to the grid.</p>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ WHY CHOOSE SW3 ═══════════ -->
<section id="section-why" class="section section--white">
    <div class="section__inner">
        <p class="section__tag" data-animate>Why Us</p>
        <h2 class="section__title" data-animate>Why Choose SW3 Green Energy</h2>
        <p class="section__sub" data-animate>We are not a faceless national chain. SW3 Green Energy Services is a family-run business with over 20 years of experience in the renewable energy industry. Every installation is carried out by our own in-house team — never subcontracted.</p>
        <div class="card-grid card-grid--3">
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><circle cx="24" cy="16" r="8" fill="none" stroke="var(--green)" stroke-width="2"/><path d="M10,40 C10,30 18,26 24,26 C30,26 38,30 38,40" fill="none" stroke="var(--green)" stroke-width="2"/><circle cx="36" cy="16" r="5" fill="none" stroke="var(--green)" stroke-width="1.5" opacity="0.5"/></svg>
                </div>
                <h3 class="card__title">Family-Run, 20+ Years</h3>
                <p class="card__text">We are a family-run business with more than two decades of hands-on experience in solar panel installation and renewable energy. You deal directly with the people who do the work — no call centres, no middlemen.</p>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><path d="M24,4 L28,16 L40,16 L30,24 L34,36 L24,28 L14,36 L18,24 L8,16 L20,16 Z" fill="none" stroke="var(--green)" stroke-width="2"/></svg>
                </div>
                <h3 class="card__title">MCS Certified & TrustMark</h3>
                <p class="card__text">Our MCS certification means every installation meets the highest industry standards and qualifies you for the Smart Export Guarantee. TrustMark registration provides additional consumer protection backed by the government.</p>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><circle cx="12" cy="24" r="6" fill="none" stroke="var(--green)" stroke-width="2"/><circle cx="36" cy="24" r="6" fill="none" stroke="var(--green)" stroke-width="2"/><line x1="18" y1="24" x2="30" y2="24" stroke="var(--green)" stroke-width="2"/><polyline points="26,20 30,24 26,28" fill="none" stroke="var(--green)" stroke-width="2"/></svg>
                </div>
                <h3 class="card__title">End-to-End Service</h3>
                <p class="card__text">From the initial survey through to design, installation, commissioning, and aftercare — we handle the entire process. One point of contact, one team, no subcontractors. We even take care of all the paperwork and grid registration.</p>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="8" y="12" width="32" height="24" rx="4" fill="none" stroke="var(--green)" stroke-width="2"/><path d="M16,24 L22,30 L34,18" fill="none" stroke="var(--green)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3 class="card__title">Which? Trusted Trader</h3>
                <p class="card__text">We are proud to be a Which? Trusted Trader — independently vetted and regularly assessed. We are also rated on Checkatrade and TrustATrader, giving you complete peace of mind when choosing your solar installer.</p>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="10" y="8" width="28" height="36" rx="3" fill="none" stroke="var(--green)" stroke-width="2"/><line x1="16" y1="16" x2="32" y2="16" stroke="var(--green)" stroke-width="1.5"/><line x1="16" y1="22" x2="32" y2="22" stroke="var(--green)" stroke-width="1.5"/><line x1="16" y1="28" x2="28" y2="28" stroke="var(--green)" stroke-width="1.5"/><path d="M24,34 L28,38 L36,28" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round"/></svg>
                </div>
                <h3 class="card__title">Fully Insured & Guaranteed</h3>
                <p class="card__text">Every installation is backed by comprehensive public liability insurance and solid product and workmanship guarantees. Your solar panels are typically guaranteed for 25 years, inverters for 10-12 years, and batteries for 10 years.</p>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="8" y="22" width="32" height="16" rx="4" fill="none" stroke="var(--green)" stroke-width="2"/><circle cx="16" cy="38" r="4" fill="none" stroke="var(--green)" stroke-width="2"/><circle cx="32" cy="38" r="4" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="14" y="14" width="20" height="8" rx="2" fill="none" stroke="var(--green)" stroke-width="1.5"/><path d="M22,14 L22,8 L30,8 L30,14" fill="none" stroke="var(--green)" stroke-width="1.5"/></svg>
                </div>
                <h3 class="card__title">All-Electric Fleet</h3>
                <p class="card__text">We practise what we preach. Our installation fleet runs entirely on electric vehicles, charged by solar power. When you see the SW3 van pull up, you know you are dealing with a company that is genuinely committed to a greener future.</p>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ PRODUCTS / BRANDS ═══════════ -->
<section id="section-products" class="section section--grey">
    <div class="section__inner">
        <p class="section__tag" data-animate>Premium Brands</p>
        <h2 class="section__title" data-animate>Products We Install</h2>
        <p class="section__sub" data-animate>We only install products from manufacturers with proven track records, industry-leading warranties, and exceptional performance. Here are the battery storage brands we trust and recommend.</p>

        <div class="card-grid card-grid--3">
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="12" y="8" width="24" height="34" rx="4" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="16" y="12" width="16" height="6" rx="2" fill="var(--green)" opacity="0.3"/><line x1="20" y1="24" x2="28" y2="24" stroke="var(--green)" stroke-width="2"/><line x1="24" y1="20" x2="24" y2="28" stroke="var(--green)" stroke-width="2"/></svg>
                </div>
                <h3 class="card__title">Tesla Powerwall</h3>
                <p class="card__text">The world's most popular home battery. 13.5 kWh of usable capacity, seamless integration with solar, and intelligent software that learns your energy patterns. Provides backup power during outages and maximises your self-consumption. 10-year warranty included.</p>
                <div class="card__offer">
                    <strong>Special Offer:</strong> Get £1,500 towards a Tesla Power System — £750 from Tesla and £750 from SW3. Limited time only.
                </div>
                <a href="/energy-storage/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="8" y="12" width="32" height="26" rx="4" fill="none" stroke="var(--green)" stroke-width="2"/><rect x="14" y="18" width="8" height="14" rx="2" fill="var(--green)" opacity="0.2"/><rect x="26" y="18" width="8" height="14" rx="2" fill="var(--green)" opacity="0.2"/></svg>
                </div>
                <h3 class="card__title">SigEnergy</h3>
                <p class="card__text">A modular, scalable battery system with a built-in hybrid inverter — meaning fewer components on your wall and a cleaner installation. SigEnergy offers flexible capacity options from 5 kWh up to 30 kWh, making it ideal for homes of all sizes. Sleek design and whisper-quiet operation.</p>
                <a href="/energy-storage/" class="card__link">Learn more →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><circle cx="24" cy="24" r="14" fill="none" stroke="var(--green)" stroke-width="2"/><circle cx="24" cy="24" r="6" fill="none" stroke="var(--green)" stroke-width="1.5"/><line x1="24" y1="10" x2="24" y2="18" stroke="var(--green)" stroke-width="1.5"/><line x1="24" y1="30" x2="24" y2="38" stroke="var(--green)" stroke-width="1.5"/><line x1="10" y1="24" x2="18" y2="24" stroke="var(--green)" stroke-width="1.5"/><line x1="30" y1="24" x2="38" y2="24" stroke="var(--green)" stroke-width="1.5"/></svg>
                </div>
                <h3 class="card__title">Enphase</h3>
                <p class="card__text">The microinverter specialists. Enphase systems optimise each panel individually, so shading on one panel does not affect the rest. Their IQ Battery range offers reliable, safe lithium iron phosphate storage with a 15-year warranty — the longest in the industry.</p>
                <a href="/energy-storage/" class="card__link">Learn more →</a>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ IMPACT / SAVINGS ═══════════ -->
<section id="section-impact" class="section section--white">
    <div class="section__inner">
        <p class="section__tag" data-animate>Real Results</p>
        <h2 class="section__title" data-animate>Your Savings & Environmental Impact</h2>
        <p class="section__sub" data-animate>Solar panel installation is one of the best investments you can make for your home. With energy prices continuing to rise, generating your own free electricity makes more financial sense than ever. Combine solar panels with battery storage and you can slash your energy bills by up to 80%. Plus, with the Smart Export Guarantee (SEG), you earn money for every unit of surplus electricity you export back to the grid.</p>

        <div class="card-grid card-grid--3">
            <div class="impact-card" data-animate>
                <span class="impact-card__icon">£</span>
                <span class="impact-card__num counter" data-target="1200">0</span>
                <span class="impact-card__label">Average annual savings on energy bills</span>
            </div>
            <div class="impact-card" data-animate>
                <span class="impact-card__num counter" data-target="1800">0</span>
                <span class="impact-card__unit">kg CO₂</span>
                <span class="impact-card__label">Carbon emissions reduced per year</span>
            </div>
            <div class="impact-card" data-animate>
                <span class="impact-card__num counter" data-target="82">0</span>
                <span class="impact-card__unit">trees</span>
                <span class="impact-card__label">Equivalent planted annually per system</span>
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

        <p class="section__sub" data-animate style="margin-top:2rem;">These figures are based on a typical 4-bedroom home in South East England with a 4kW solar panel system and 13.5kWh battery storage. Actual savings depend on your energy usage, roof orientation, and tariff. The Smart Export Guarantee currently pays between 3p and 15p per kWh for exported electricity.</p>
    </div>
</section>


<!-- ═══════════ TESTIMONIALS ═══════════ -->
<section id="section-testimonials" class="section section--grey">
    <div class="section__inner">
        <p class="section__tag" data-animate>What Our Customers Say</p>
        <h2 class="section__title" data-animate>Real Reviews from Real Homeowners</h2>
        <p class="section__sub" data-animate>We are proud to hold a 4.9-star rating on Trustpilot based on hundreds of verified reviews. Here is what some of our customers have to say about their experience with SW3 Green Energy Services.</p>

        <div class="hero__badges" style="justify-content:center;margin-bottom:2rem;" data-animate>
            <img src="<?php echo get_template_directory_uri(); ?>/img/badge-trustpilot.webp" alt="Trustpilot 4.9 star rating" loading="lazy" style="height:48px;">
        </div>

        <div class="card-grid card-grid--3">
            <div class="testimonial" data-animate>
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__quote">"SW3 transformed our home. Our electricity bill dropped from £200 a month to £35. The installation was professional and finished in just two days. We could not be happier with the results."</p>
                <div class="testimonial__author">
                    <strong>Sarah M.</strong>
                    <span>Sevenoaks, Kent</span>
                </div>
            </div>
            <div class="testimonial" data-animate>
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__quote">"The Tesla Powerwall was the game-changer. We barely use any grid electricity now, even in winter. Wish we had done it sooner. The SW3 team were knowledgeable and friendly throughout."</p>
                <div class="testimonial__author">
                    <strong>James & Paula T.</strong>
                    <span>Guildford, Surrey</span>
                </div>
            </div>
            <div class="testimonial" data-animate>
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__quote">"From the initial survey to the final handover, SW3 were fantastic. Clear communication, fair pricing, and a beautiful installation. They even helped us sign up for the Smart Export Guarantee."</p>
                <div class="testimonial__author">
                    <strong>David R.</strong>
                    <span>Brighton, Sussex</span>
                </div>
            </div>
            <div class="testimonial" data-animate>
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__quote">"We had quotes from five companies. SW3 were not the cheapest, but they were by far the most thorough and transparent. The system has exceeded the projected output every month since installation. Brilliant service."</p>
                <div class="testimonial__author">
                    <strong>Karen &amp; Steve L.</strong>
                    <span>Tunbridge Wells, Kent</span>
                </div>
            </div>
            <div class="testimonial" data-animate>
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__quote">"We were nervous about such a big investment, but the SW3 team put us at ease from day one. They explained everything clearly, the install was neat and tidy, and our energy bills have been slashed. Highly recommend."</p>
                <div class="testimonial__author">
                    <strong>Michael P.</strong>
                    <span>Exeter, South West</span>
                </div>
            </div>
            <div class="testimonial" data-animate>
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__quote">"Had solar panels and a battery installed by SW3 for our business premises. The whole process was seamless — from the initial survey right through to commissioning. Already seeing significant savings on our energy costs."</p>
                <div class="testimonial__author">
                    <strong>Rachel W.</strong>
                    <span>Wimbledon, London</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ FUNDING & GRANTS ═══════════ -->
<section id="section-funding" class="section section--white">
    <div class="section__inner">
        <p class="section__tag" data-animate>Funding & Finance</p>
        <h2 class="section__title" data-animate>Grants, Schemes & Financing Options</h2>
        <p class="section__sub" data-animate>Going solar is more affordable than you might think. There are several government-backed schemes and financing options available to help you make the switch to renewable energy without a large upfront cost.</p>

        <div class="card-grid card-grid--3">
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><circle cx="24" cy="24" r="16" fill="none" stroke="var(--green)" stroke-width="2"/><text x="24" y="29" text-anchor="middle" fill="var(--green)" font-size="16" font-family="var(--font)">£</text></svg>
                </div>
                <h3 class="card__title">ECO4 Scheme</h3>
                <p class="card__text">The Energy Company Obligation (ECO4) scheme provides funding for energy-efficient home improvements, including solar panels and insulation, for eligible households. If you receive certain benefits or live in a low-income household, you may qualify for fully funded or heavily subsidised solar panel installation.</p>
                <a href="/funding/" class="card__link">Check eligibility →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><rect x="8" y="16" width="32" height="22" rx="3" fill="none" stroke="var(--green)" stroke-width="2"/><line x1="8" y1="24" x2="40" y2="24" stroke="var(--green)" stroke-width="2"/><rect x="14" y="30" width="12" height="4" rx="1" fill="var(--green)" opacity="0.3"/></svg>
                </div>
                <h3 class="card__title">0% Finance Options</h3>
                <p class="card__text">Spread the cost of your solar panel installation with our flexible finance options. We offer plans from 12 to 120 months, including 0% interest options on selected packages. Get your system installed now and pay in manageable monthly instalments. Subject to status and credit approval.</p>
                <a href="/contact/" class="card__link">Get a quote →</a>
            </div>
            <div class="card" data-animate>
                <div class="card__icon">
                    <svg viewBox="0 0 48 48" width="40" height="40"><path d="M24,6 L30,18 L42,18 L32,26 L36,38 L24,30 L12,38 L16,26 L6,18 L18,18 Z" fill="none" stroke="var(--green)" stroke-width="2"/></svg>
                </div>
                <h3 class="card__title">Smart Export Guarantee</h3>
                <p class="card__text">The Smart Export Guarantee (SEG) pays you for surplus electricity you export to the national grid. As an MCS certified installer, we ensure your system qualifies from day one. Current SEG rates range from 3p to 15p per kWh depending on your energy supplier. This effectively turns your roof into a revenue generator.</p>
                <a href="/contact/" class="card__link">Learn more →</a>
            </div>
        </div>

        <div class="card" data-animate style="margin-top:2rem;text-align:center;padding:2rem;">
            <h3 class="card__title">Octopus Energy — Get £50 Credit</h3>
            <p class="card__text">Sign up to Octopus Energy through SW3 Green Energy and receive £50 credit on your account. Octopus offers some of the best SEG rates and smart tariffs that pair perfectly with solar and battery systems, helping you maximise your savings.</p>
            <a href="/contact/" class="card__link">Ask us about Octopus →</a>
        </div>
    </div>
</section>


<!-- ═══════════ AREAS WE SERVE ═══════════ -->
<section id="section-areas" class="section section--grey">
    <div class="section__inner">
        <p class="section__tag" data-animate>Coverage</p>
        <h2 class="section__title" data-animate>Areas We Serve</h2>
        <p class="section__sub" data-animate>SW3 Green Energy Services provides premium solar panel installation across five regions in the South East and South West of England. Our teams are based locally, meaning shorter travel times, faster response, and a personal touch that national companies simply cannot match.</p>
        <div class="areas" data-animate>
            <a href="/areas/london/" class="area-pill">London</a>
            <a href="/areas/kent/" class="area-pill">Kent</a>
            <a href="/areas/surrey/" class="area-pill">Surrey</a>
            <a href="/areas/sussex/" class="area-pill">Sussex</a>
            <a href="/areas/south-west/" class="area-pill">South West</a>
        </div>

        <div class="card-grid card-grid--3" style="margin-top:2rem;">
            <div class="card" data-animate>
                <h3 class="card__title">London</h3>
                <p class="card__text">From Wimbledon to Wandsworth, Croydon to Camden — we install solar panels across all London boroughs. Many London homes are ideal for solar, even with smaller roofs. We handle conservation area applications and listed building considerations.</p>
            </div>
            <div class="card" data-animate>
                <h3 class="card__title">Kent</h3>
                <p class="card__text">The Garden of England gets plenty of sunshine. We cover Sevenoaks, Tunbridge Wells, Maidstone, Canterbury, and everywhere in between. Kent homeowners are among our most satisfied customers, with some of the highest solar yields in the country.</p>
            </div>
            <div class="card" data-animate>
                <h3 class="card__title">Surrey</h3>
                <p class="card__text">Guildford, Woking, Reigate, Epsom — Surrey is one of our busiest regions. With large detached homes and excellent sun exposure, Surrey properties often see exceptional returns from solar panel installation and battery storage.</p>
            </div>
            <div class="card" data-animate>
                <h3 class="card__title">Sussex (East & West)</h3>
                <p class="card__text">From Brighton and Hove to Chichester, Eastbourne to Horsham — we cover the full breadth of Sussex. Coastal properties benefit from long daylight hours and minimal shading, making Sussex one of the best locations for solar panels in England.</p>
            </div>
            <div class="card" data-animate>
                <h3 class="card__title">South West England</h3>
                <p class="card__text">Expanding across Devon, Somerset, Dorset, and beyond. The South West receives some of the highest solar irradiance in the UK, making it an ideal region for solar panel installation. We are growing our team in this region to meet increasing demand.</p>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════ FAQ ═══════════ -->
<section id="section-faq" class="section section--white">
    <div class="section__inner">
        <p class="section__tag" data-animate>Common Questions</p>
        <h2 class="section__title" data-animate>Frequently Asked Questions</h2>
        <p class="section__sub" data-animate>Everything you need to know about solar panel installation, battery storage, and going green with SW3 Green Energy Services. If your question is not answered here, get in touch and we will be happy to help.</p>

        <div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
            <details class="faq" data-animate itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="faq__question" itemprop="name">How much do solar panels cost in the UK?</summary>
                <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                        <p>The cost of solar panel installation varies depending on the size of your system, the type of panels, and your property. A typical 4kW domestic solar panel system costs between £5,000 and £8,000, while larger systems for bigger homes can range from £8,000 to £14,000. Battery storage adds between £3,000 and £10,000 depending on capacity. At SW3 Green Energy, we provide free, no-obligation quotes tailored to your specific needs so you know exactly what to expect before committing.</p>
                    </div>
                </div>
            </details>

            <details class="faq" data-animate itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="faq__question" itemprop="name">How long does a solar panel installation take?</summary>
                <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                        <p>Most domestic solar panel installations are completed in just 1-2 days. This includes fitting the panels to your roof, installing the inverter and any battery storage, connecting the system to your consumer unit, and testing everything. Larger commercial installations may take longer. We handle scaffolding, electrics, and all the necessary paperwork. From your initial enquiry to a fully operational system, the entire process typically takes 4-6 weeks, though we often complete installations faster.</p>
                    </div>
                </div>
            </details>

            <details class="faq" data-animate itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="faq__question" itemprop="name">Do solar panels work in the UK weather?</summary>
                <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                        <p>Yes, absolutely. Solar panels work with daylight, not direct sunshine, so they generate electricity even on cloudy days — just at a reduced rate. The UK receives enough solar irradiance for solar panels to be a worthwhile investment, especially in the South East and South West. Modern panels are significantly more efficient than earlier generations, and a well-designed system will generate the majority of your electricity needs across the year. Battery storage allows you to store excess energy from sunny days for use during evenings and cloudier periods.</p>
                    </div>
                </div>
            </details>

            <details class="faq" data-animate itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="faq__question" itemprop="name">What is the Smart Export Guarantee (SEG)?</summary>
                <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                        <p>The Smart Export Guarantee (SEG) is a government-backed scheme that requires licensed energy suppliers to pay you for surplus electricity you export to the national grid. To qualify, your solar panel system must be installed by an MCS certified installer — which SW3 Green Energy is. Current SEG rates vary between 3p and 15p per kWh depending on your supplier and tariff. We help you register for the SEG as part of our installation service, so you can start earning from day one.</p>
                    </div>
                </div>
            </details>

            <details class="faq" data-animate itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="faq__question" itemprop="name">Do I need planning permission for solar panels?</summary>
                <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                        <p>In most cases, domestic solar panel installation falls under Permitted Development rights and does not require planning permission. However, there are exceptions for listed buildings, properties in conservation areas, and some flat-roof installations. SW3 Green Energy handles all planning considerations as part of our service. During the free survey, we assess whether any permissions are needed and take care of the entire application process on your behalf if required.</p>
                    </div>
                </div>
            </details>

            <details class="faq" data-animate itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <summary class="faq__question" itemprop="name">What is the difference between a Tesla Powerwall, SigEnergy, and Enphase battery?</summary>
                <div class="faq__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                        <p>All three are excellent battery storage systems, but they suit different needs. The <strong>Tesla Powerwall</strong> (13.5 kWh) is the most well-known option, with intelligent software, backup power capability, and seamless app control — ideal for most homes. <strong>SigEnergy</strong> is a modular system with a built-in hybrid inverter, meaning fewer boxes on your wall and flexible capacity from 5-30 kWh. <strong>Enphase</strong> uses microinverter technology to optimise each panel individually, and their IQ Battery uses safer lithium iron phosphate chemistry with an industry-leading 15-year warranty. During your free survey, we will recommend the best option based on your energy usage, budget, and goals.</p>
                    </div>
                </div>
            </details>
        </div>
    </div>
</section>


<!-- ═══════════ CTA ═══════════ -->
<section class="section section--green">
    <div class="section__inner section__inner--narrow">
        <h2 class="section__title section__title--white">Ready to Slash Your Energy Bills?</h2>
        <p class="section__sub section__sub--white">Join over 5,000 homeowners who have made the switch to solar with SW3 Green Energy. Get a free, no-obligation quote tailored to your home — it takes less than 60 seconds. Or speak to our friendly team directly.</p>
        <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-top:1.5rem;">
            <a href="/contact/" class="btn btn--black btn--lg">Get Your Free Quote</a>
            <a href="tel:+442045381967" class="btn btn--outline btn--lg" style="border-color:#fff;color:#fff;">Call 0204 538 1967</a>
        </div>
        <p class="section__sub section__sub--white" style="margin-top:1.5rem;font-size:0.95rem;opacity:0.85;">Or call us on mobile: <a href="tel:+447713260332" style="color:#fff;text-decoration:underline;">07713 260332</a> &nbsp;|&nbsp; Email: <a href="mailto:info@sw3greenenergyservices.co.uk" style="color:#fff;text-decoration:underline;">info@sw3greenenergyservices.co.uk</a></p>
    </div>
</section>

<?php get_footer(); ?>