<?php
/**
 * Template: Homepage Scroll Storytelling Experience
 * WordPress automatically uses this for the static front page.
 */
get_header();
?>

<!-- ════════════════════════════════════════════════════════════
     SECTION 1: DAWN / HERO
     Sunrise animation, SplitText headline, parallax layers
     ════════════════════════════════════════════════════════════ -->
<section id="section-hero" class="sw3-section sw3-section--hero" aria-label="Welcome to SW3 Green Energy">
    <div class="sw3-section__inner">

        <!-- Background gradient layers (GSAP animates these) -->
        <div class="hero-bg" aria-hidden="true">
            <div class="hero-bg__layer hero-bg__layer--sky"></div>
            <div class="hero-bg__layer hero-bg__layer--mid"></div>
            <div class="hero-bg__layer hero-bg__layer--glow"></div>
        </div>

        <!-- Sun element -->
        <div class="hero-sun" aria-hidden="true"></div>

        <!-- Cloud layers for parallax depth -->
        <div class="hero-clouds" aria-hidden="true">
            <div class="hero-cloud hero-cloud--1"></div>
            <div class="hero-cloud hero-cloud--2"></div>
            <div class="hero-cloud hero-cloud--3"></div>
        </div>

        <!-- Horizon silhouette SVG -->
        <div class="hero-silhouette" aria-hidden="true">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Rolling hills with rooftop shapes -->
                <path d="M0,280 C120,240 200,260 320,220 C400,195 420,200 480,180 L500,180 L500,160 L520,140 L540,160 L540,180 L560,180 C640,200 720,190 840,210 C960,230 1080,200 1200,220 C1320,240 1400,250 1440,240 L1440,320 L0,320 Z" fill="var(--sw3-charcoal)"/>
                <!-- Solar panels on rooftop -->
                <rect x="505" y="162" width="12" height="8" rx="1" fill="var(--sw3-navy)" opacity="0.7"/>
                <rect x="520" y="158" width="12" height="8" rx="1" fill="var(--sw3-navy)" opacity="0.7"/>
            </svg>
        </div>

        <!-- Hero content -->
        <div class="hero-content">
            <h1 class="hero-headline" data-animate>Power Your Future With Sunshine</h1>
            <p class="hero-subtext" data-animate>South East England's premium solar installer. Save money, reduce emissions, and gain energy independence.</p>
            <a href="/contact/" class="hero-cta btn btn--primary" data-animate>Get Your Free Quote</a>
        </div>

        <!-- Trust badges (real images) -->
        <div class="hero-badges" data-animate aria-label="Accreditations">
            <div class="hero-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/img/badge-which.webp" alt="Which? Trusted Trader" width="80" height="48" loading="eager">
            </div>
            <div class="hero-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/img/badge-checkatrade.webp" alt="Checkatrade" width="120" height="40" loading="eager">
            </div>
            <div class="hero-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/img/badge-trustatrader.webp" alt="TrustATrader Trusted Traders" width="80" height="48" loading="eager">
            </div>
            <div class="hero-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/img/badge-trustpilot.webp" alt="Trustpilot" width="110" height="40" loading="eager">
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="hero-scroll" aria-hidden="true">
            <span class="hero-scroll__text">Scroll to explore</span>
            <svg class="hero-scroll__chevron" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="6 9 12 15 18 9"/>
            </svg>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     SECTION 2: THE SUN'S POWER
     Particle effects, counter animations, horizontal scroll services
     ════════════════════════════════════════════════════════════ -->
<section id="section-sun" class="sw3-section sw3-section--sun" aria-label="The power of the sun">
    <div class="sw3-section__inner">

        <!-- Particle container (JS will populate with dots) -->
        <div class="sun-particles" aria-hidden="true"></div>

        <!-- Sun rays SVG (DrawSVG animation) -->
        <div class="sun-rays-container" aria-hidden="true">
            <svg class="sun-rays-svg" viewBox="0 0 400 400" width="300" height="300">
                <circle cx="200" cy="200" r="40" fill="var(--sw3-gold)"/>
                <!-- 12 rays at 30-degree intervals -->
                <line class="sun-ray" x1="200" y1="140" x2="200" y2="80"  stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="230" y1="148" x2="260" y2="97"  stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="252" y1="170" x2="303" y2="140" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="260" y1="200" x2="320" y2="200" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="252" y1="230" x2="303" y2="260" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="230" y1="252" x2="260" y2="303" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="200" y1="260" x2="200" y2="320" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="170" y1="252" x2="140" y2="303" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="148" y1="230" x2="97"  y2="260" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="140" y1="200" x2="80"  y2="200" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="148" y1="170" x2="97"  y2="140" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
                <line class="sun-ray" x1="170" y1="148" x2="140" y2="97"  stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>
            </svg>
        </div>

        <!-- Stats / Counters -->
        <div class="sun-stats">
            <h2 class="sun-stats__title" data-animate>The Sun's Incredible Power</h2>
            <p class="sun-stats__subtitle" data-animate>The sun delivers enough energy in one hour to power the world for a year.</p>

            <div class="sun-stats__grid">
                <div class="sun-stat" data-animate>
                    <span class="counter" data-target="173000" aria-live="polite">0</span>
                    <span class="sun-stat__unit">TW</span>
                    <span class="sun-stat__label">Solar energy hitting Earth every second</span>
                </div>
                <div class="sun-stat" data-animate>
                    <span class="counter" data-target="203000" aria-live="polite">0</span>
                    <span class="sun-stat__unit">+</span>
                    <span class="sun-stat__label">UK solar installations in 2025</span>
                </div>
                <div class="sun-stat" data-animate>
                    <span class="counter" data-target="94" aria-live="polite">0</span>
                    <span class="sun-stat__unit">%</span>
                    <span class="sun-stat__label">of UK homes still without solar</span>
                </div>
            </div>
        </div>

        <!-- Horizontal scroll service cards -->
        <div class="sun-services-wrap">
            <div class="sun-services">
                <!-- Card 1: Residential Solar -->
                <div class="sun-service-card" data-animate>
                    <div class="sun-service-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 80 80" width="60" height="60">
                            <rect x="20" y="40" width="40" height="30" rx="2" fill="none" stroke="var(--sw3-gold)" stroke-width="2"/>
                            <polygon points="15,42 40,20 65,42" fill="none" stroke="var(--sw3-gold)" stroke-width="2"/>
                            <rect x="28" y="30" width="10" height="6" rx="1" fill="var(--sw3-amber)" opacity="0.8"/>
                            <rect x="42" y="30" width="10" height="6" rx="1" fill="var(--sw3-amber)" opacity="0.8"/>
                        </svg>
                    </div>
                    <h3>Residential Solar</h3>
                    <p>Bespoke solar panel systems designed for your home. Reduce bills by up to 70% and earn from excess energy.</p>
                    <a href="/solar-panels/domestic/" class="sun-service-card__link">Learn more</a>
                </div>

                <!-- Card 2: Commercial Solar -->
                <div class="sun-service-card" data-animate>
                    <div class="sun-service-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 80 80" width="60" height="60">
                            <rect x="10" y="30" width="60" height="40" rx="2" fill="none" stroke="var(--sw3-gold)" stroke-width="2"/>
                            <line x1="10" y1="35" x2="70" y2="35" stroke="var(--sw3-gold)" stroke-width="1"/>
                            <rect x="15" y="22" width="12" height="8" rx="1" fill="var(--sw3-amber)" opacity="0.8"/>
                            <rect x="30" y="22" width="12" height="8" rx="1" fill="var(--sw3-amber)" opacity="0.8"/>
                            <rect x="45" y="22" width="12" height="8" rx="1" fill="var(--sw3-amber)" opacity="0.8"/>
                        </svg>
                    </div>
                    <h3>Commercial Solar</h3>
                    <p>Large-scale installations for businesses. Reduce operating costs and meet sustainability targets.</p>
                    <a href="/solar-panels/commercial/" class="sun-service-card__link">Learn more</a>
                </div>

                <!-- Card 3: Energy Storage -->
                <div class="sun-service-card" data-animate>
                    <div class="sun-service-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 80 80" width="60" height="60">
                            <rect x="22" y="20" width="36" height="50" rx="4" fill="none" stroke="var(--sw3-gold)" stroke-width="2"/>
                            <rect x="32" y="15" width="16" height="5" rx="2" fill="var(--sw3-gold)"/>
                            <rect x="28" y="45" width="24" height="20" rx="2" fill="var(--sw3-green)" opacity="0.6"/>
                            <line x1="36" y1="52" x2="36" y2="60" stroke="var(--sw3-white)" stroke-width="2"/>
                            <line x1="32" y1="56" x2="40" y2="56" stroke="var(--sw3-white)" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Energy Storage</h3>
                    <p>Tesla Powerwall, SigEnergy, and Enphase battery systems. Store solar energy and power your home 24/7.</p>
                    <a href="/energy-storage/" class="sun-service-card__link">Learn more</a>
                </div>

                <!-- Card 4: Home Energy -->
                <div class="sun-service-card" data-animate>
                    <div class="sun-service-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 80 80" width="60" height="60">
                            <circle cx="40" cy="40" r="25" fill="none" stroke="var(--sw3-gold)" stroke-width="2"/>
                            <path d="M30,45 L38,35 L42,40 L50,30" fill="none" stroke="var(--sw3-green)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="40" cy="40" r="5" fill="var(--sw3-amber)" opacity="0.6"/>
                        </svg>
                    </div>
                    <h3>Home Energy</h3>
                    <p>Air source heat pumps and EV chargers. Complete your green home transformation.</p>
                    <a href="/home-energy/" class="sun-service-card__link">Learn more</a>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     SECTION 3: CAPTURING THE LIGHT
     Solar panel illustration, photon particles, DrawSVG cell diagram
     ════════════════════════════════════════════════════════════ -->
<section id="section-capture" class="sw3-section sw3-section--capture" aria-label="How solar panels capture light">
    <div class="sw3-section__inner">

        <!-- Photon particles (JS creates these) -->
        <div class="capture-photons" aria-hidden="true"></div>

        <!-- Solar panel grid SVG -->
        <div class="capture-panel-wrap">
            <svg class="capture-panel" viewBox="0 0 320 200" width="320" height="200" aria-label="Solar panel illustration">
                <!-- Panel frame -->
                <rect x="10" y="10" width="300" height="180" rx="4" fill="var(--sw3-navy)" stroke="var(--sw3-charcoal)" stroke-width="3"/>
                <!-- 4x6 grid of solar cells -->
                <?php
                $cell_w = 45; $cell_h = 38; $gap = 4; $offset_x = 18; $offset_y = 16;
                for ($row = 0; $row < 4; $row++) {
                    for ($col = 0; $col < 6; $col++) {
                        $x = $offset_x + $col * ($cell_w + $gap);
                        $y = $offset_y + $row * ($cell_h + $gap);
                        echo '<rect class="solar-cell" x="' . $x . '" y="' . $y . '" width="' . $cell_w . '" height="' . $cell_h . '" rx="1" fill="#1a3a5c" stroke="#0d2440" stroke-width="0.5"/>';
                        // Cell grid lines
                        $mx = $x + $cell_w / 2;
                        echo '<line x1="' . $mx . '" y1="' . $y . '" x2="' . $mx . '" y2="' . ($y + $cell_h) . '" stroke="#0d2440" stroke-width="0.3"/>';
                    }
                }
                ?>
                <!-- Bus bars (horizontal lines connecting cells) -->
                <line x1="18" y1="35" x2="302" y2="35" stroke="#8a9bae" stroke-width="0.5" opacity="0.5"/>
                <line x1="18" y1="77" x2="302" y2="77" stroke="#8a9bae" stroke-width="0.5" opacity="0.5"/>
                <line x1="18" y1="119" x2="302" y2="119" stroke="#8a9bae" stroke-width="0.5" opacity="0.5"/>
                <line x1="18" y1="161" x2="302" y2="161" stroke="#8a9bae" stroke-width="0.5" opacity="0.5"/>
            </svg>
        </div>

        <!-- Content -->
        <div class="capture-content">
            <h2 class="capture-title" data-animate>Capturing the Light</h2>
            <p class="capture-text" data-animate>Each solar cell converts photons into electrons through the photovoltaic effect. Our premium panels capture up to 22% of the sun's energy — powering your home with nothing but light.</p>
        </div>

        <!-- Photovoltaic cell cross-section diagram -->
        <div class="capture-diagram-wrap">
            <svg class="capture-diagram" viewBox="0 0 400 250" width="400" height="250" aria-label="How a solar cell works diagram">
                <!-- Anti-reflective coating -->
                <path class="diagram-path" d="M50,50 L350,50" fill="none" stroke="var(--sw3-morning-end)" stroke-width="3"/>
                <text class="diagram-label" x="370" y="55" fill="var(--sw3-white)" font-size="11" opacity="0">Anti-reflective coating</text>

                <!-- Glass layer -->
                <rect class="diagram-layer" x="50" y="55" width="300" height="25" fill="#87ceeb" opacity="0.3"/>
                <path class="diagram-path" d="M50,55 L350,55 L350,80 L50,80 Z" fill="none" stroke="var(--sw3-morning-end)" stroke-width="1.5"/>
                <text class="diagram-label" x="200" y="72" text-anchor="middle" fill="var(--sw3-white)" font-size="10" opacity="0">Glass</text>

                <!-- N-type silicon -->
                <rect class="diagram-layer" x="50" y="85" width="300" height="50" fill="#2a5a8a" opacity="0.4"/>
                <path class="diagram-path" d="M50,85 L350,85 L350,135 L50,135 Z" fill="none" stroke="#4a9eff" stroke-width="1.5"/>
                <text class="diagram-label" x="200" y="115" text-anchor="middle" fill="var(--sw3-white)" font-size="11" opacity="0">N-type Silicon (electrons)</text>

                <!-- P-N Junction -->
                <path class="diagram-path diagram-path--junction" d="M50,135 L350,135" fill="none" stroke="var(--sw3-gold)" stroke-width="3" stroke-dasharray="8,4"/>
                <text class="diagram-label" x="370" y="140" fill="var(--sw3-gold)" font-size="11" font-weight="600" opacity="0">P-N Junction</text>

                <!-- P-type silicon -->
                <rect class="diagram-layer" x="50" y="140" width="300" height="50" fill="#8a2a2a" opacity="0.3"/>
                <path class="diagram-path" d="M50,140 L350,140 L350,190 L50,190 Z" fill="none" stroke="#ff6b6b" stroke-width="1.5"/>
                <text class="diagram-label" x="200" y="170" text-anchor="middle" fill="var(--sw3-white)" font-size="11" opacity="0">P-type Silicon (holes)</text>

                <!-- Back contact -->
                <path class="diagram-path" d="M50,195 L350,195" fill="none" stroke="#888" stroke-width="3"/>
                <text class="diagram-label" x="370" y="200" fill="#aaa" font-size="11" opacity="0">Back contact</text>

                <!-- Electron flow arrow -->
                <path class="diagram-path diagram-path--electron" d="M100,160 C100,120 120,100 150,100 L160,100" fill="none" stroke="var(--sw3-green)" stroke-width="2" marker-end="url(#arrowhead)"/>
                <text class="diagram-label" x="170" y="98" fill="var(--sw3-green)" font-size="10" opacity="0">Electron flow</text>

                <defs>
                    <marker id="arrowhead" markerWidth="8" markerHeight="6" refX="8" refY="3" orient="auto">
                        <polygon points="0 0, 8 3, 0 6" fill="var(--sw3-green)"/>
                    </marker>
                </defs>
            </svg>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     SECTION 4: ENERGY FLOWS HOME
     SVG energy path, MotionPath particles, house illumination
     ════════════════════════════════════════════════════════════ -->
<section id="section-flow" class="sw3-section sw3-section--flow" aria-label="How solar energy powers your home">
    <div class="sw3-section__inner">

        <h2 class="flow-title" data-animate>Energy Flows Home</h2>
        <p class="flow-subtitle" data-animate>From rooftop to living room — see how sunlight becomes the electricity that powers your life.</p>

        <!-- Full house + energy flow SVG illustration -->
        <div class="flow-illustration-wrap">
            <svg class="flow-illustration" viewBox="0 0 600 500" width="600" height="500" aria-label="House powered by solar energy illustration">

                <!-- House body -->
                <rect class="flow-house-body" x="150" y="250" width="300" height="200" rx="3" fill="var(--sw3-charcoal)" stroke="#2a3a4a" stroke-width="2"/>

                <!-- Roof -->
                <polygon class="flow-roof" points="130,255 300,140 470,255" fill="#1a2a3a" stroke="#2a3a4a" stroke-width="2"/>

                <!-- Solar panels on roof -->
                <rect class="flow-panel" x="200" y="195" width="40" height="22" rx="2" fill="#1a3a5c" stroke="#0d2440" stroke-width="1" transform="rotate(-22, 220, 206)"/>
                <rect class="flow-panel" x="250" y="180" width="40" height="22" rx="2" fill="#1a3a5c" stroke="#0d2440" stroke-width="1" transform="rotate(-22, 270, 191)"/>
                <rect class="flow-panel" x="300" y="195" width="40" height="22" rx="2" fill="#1a3a5c" stroke="#0d2440" stroke-width="1" transform="rotate(-14, 320, 206)"/>
                <rect class="flow-panel" x="345" y="210" width="40" height="22" rx="2" fill="#1a3a5c" stroke="#0d2440" stroke-width="1" transform="rotate(-14, 365, 221)"/>

                <!-- Energy flow path (DrawSVG will trace this) -->
                <path id="energy-path" class="flow-energy-path"
                      d="M270,190 L270,250 L270,300 C270,310 280,320 300,320 L380,320 C400,320 410,330 410,340 L410,380 C410,400 390,410 380,410 L250,410 C230,410 220,400 220,380 L220,350"
                      fill="none" stroke="var(--sw3-gold)" stroke-width="3" stroke-linecap="round"/>

                <!-- Energy particles (small circles following the path) -->
                <circle class="energy-particle" r="5" fill="var(--sw3-gold)" opacity="0.9"/>
                <circle class="energy-particle" r="4" fill="var(--sw3-amber)" opacity="0.7"/>
                <circle class="energy-particle" r="5" fill="var(--sw3-gold)" opacity="0.9"/>

                <!-- Inverter box -->
                <rect class="flow-inverter" x="255" y="270" width="30" height="40" rx="3" fill="#2a3a4a" stroke="var(--sw3-gold)" stroke-width="1.5"/>
                <text x="270" y="295" text-anchor="middle" fill="var(--sw3-gold)" font-size="7">INV</text>

                <!-- Room windows (these light up sequentially) -->
                <!-- Kitchen (left) -->
                <rect class="flow-room flow-room--kitchen" x="175" y="280" width="50" height="40" rx="2" fill="#0a1628"/>
                <!-- Living room (centre) -->
                <rect class="flow-room flow-room--living" x="310" y="280" width="60" height="50" rx="2" fill="#0a1628"/>
                <!-- Bedroom (upper right) -->
                <rect class="flow-room flow-room--bedroom" x="380" y="270" width="45" height="35" rx="2" fill="#0a1628"/>
                <!-- Hallway light -->
                <rect class="flow-room flow-room--hall" x="240" y="370" width="30" height="30" rx="2" fill="#0a1628"/>

                <!-- Door -->
                <rect x="285" y="400" width="30" height="50" rx="2" fill="#1a2a3a" stroke="#2a3a4a" stroke-width="1"/>
                <circle cx="310" cy="425" r="2" fill="#4a5a6a"/>

                <!-- EV Charger (right side of house) -->
                <rect class="flow-ev" x="480" y="390" width="20" height="50" rx="3" fill="#2a3a4a" stroke="var(--sw3-green)" stroke-width="1.5"/>
                <text x="490" y="420" text-anchor="middle" fill="var(--sw3-green)" font-size="7">EV</text>
                <!-- Car outline -->
                <rect x="510" y="415" width="60" height="25" rx="8" fill="none" stroke="#4a5a6a" stroke-width="1.5"/>
                <circle cx="525" cy="440" r="5" fill="none" stroke="#4a5a6a" stroke-width="1"/>
                <circle cx="555" cy="440" r="5" fill="none" stroke="#4a5a6a" stroke-width="1"/>
                <!-- Cable from house to EV -->
                <path class="flow-ev-cable" d="M450,380 C460,380 470,385 480,400" fill="none" stroke="var(--sw3-green)" stroke-width="1.5" stroke-dasharray="4,3"/>

            </svg>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     SECTION 5: STORAGE & INDEPENDENCE
     Day-to-night transition, battery fill animation
     ════════════════════════════════════════════════════════════ -->
<section id="section-storage" class="sw3-section sw3-section--storage" aria-label="Battery storage and energy independence">
    <div class="sw3-section__inner">

        <!-- Background gradient (animates amber → navy) -->
        <div class="storage-bg" aria-hidden="true"></div>

        <!-- Moon & stars (appear as background darkens) -->
        <div class="storage-sky" aria-hidden="true">
            <div class="storage-moon"></div>
            <div class="storage-star storage-star--1"></div>
            <div class="storage-star storage-star--2"></div>
            <div class="storage-star storage-star--3"></div>
            <div class="storage-star storage-star--4"></div>
            <div class="storage-star storage-star--5"></div>
            <div class="storage-star storage-star--6"></div>
            <div class="storage-star storage-star--7"></div>
            <div class="storage-star storage-star--8"></div>
        </div>

        <div class="storage-content">
            <h2 class="storage-title" data-animate>Power Through the Night</h2>
            <p class="storage-subtitle" data-animate>With battery storage, your solar energy works around the clock. Store excess power during the day and use it after sunset.</p>

            <div class="storage-main">
                <!-- Battery illustration SVG -->
                <div class="storage-battery-wrap">
                    <svg class="storage-battery" viewBox="0 0 200 340" width="180" height="300" aria-label="Battery charging illustration">
                        <!-- Battery terminal -->
                        <rect x="70" y="5" width="60" height="20" rx="6" fill="#2a3a4a" stroke="var(--sw3-green)" stroke-width="2"/>
                        <!-- Battery body -->
                        <rect x="40" y="25" width="120" height="300" rx="12" fill="none" stroke="var(--sw3-green)" stroke-width="3"/>
                        <!-- Battery fill (GSAP animates height from 0 to 280, y from 305 to 30) -->
                        <rect class="battery-fill" x="48" y="305" width="104" height="0" rx="8" fill="url(#batteryGradient)"/>
                        <!-- Percentage text -->
                        <text class="battery-percent" x="100" y="180" text-anchor="middle" fill="var(--sw3-white)" font-size="36" font-weight="700">0%</text>
                        <defs>
                            <linearGradient id="batteryGradient" x1="0" y1="1" x2="0" y2="0">
                                <stop offset="0%" stop-color="var(--sw3-green)"/>
                                <stop offset="100%" stop-color="var(--sw3-green-light)"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <!-- Stats -->
                <div class="storage-stats">
                    <div class="storage-stat" data-animate>
                        <span class="counter" data-target="13" aria-live="polite">0</span>
                        <span class="storage-stat__unit">kWh</span>
                        <span class="storage-stat__label">Stored with Tesla Powerwall 3</span>
                    </div>
                    <div class="storage-stat" data-animate>
                        <span class="counter" data-target="24" aria-live="polite">0</span>
                        <span class="storage-stat__unit">hrs</span>
                        <span class="storage-stat__label">Power your home overnight</span>
                    </div>
                </div>
            </div>

            <!-- Product logos -->
            <div class="storage-brands" data-animate aria-label="Battery storage brands we install">
                <div class="storage-brand">
                    <div class="storage-brand__logo">Tesla Powerwall</div>
                </div>
                <div class="storage-brand">
                    <div class="storage-brand__logo">SigEnergy</div>
                </div>
                <div class="storage-brand">
                    <div class="storage-brand__logo">Enphase</div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     SECTION 6: IMPACT & SAVINGS
     Animated counters, before/after split, testimonials
     ════════════════════════════════════════════════════════════ -->
<section id="section-impact" class="sw3-section sw3-section--impact" aria-label="Your savings and environmental impact">
    <div class="sw3-section__inner">

        <h2 class="impact-title" data-animate>Real Savings. Real Impact.</h2>

        <!-- Counter cards -->
        <div class="impact-counters">
            <div class="impact-counter" data-animate>
                <span class="impact-counter__symbol">&pound;</span>
                <span class="counter impact-counter__number" data-target="1200" aria-live="polite">0</span>
                <span class="impact-counter__label">Average annual savings</span>
            </div>
            <div class="impact-counter" data-animate>
                <span class="counter impact-counter__number" data-target="1800" aria-live="polite">0</span>
                <span class="impact-counter__unit">kg</span>
                <span class="impact-counter__label">CO&#8322; reduced per year</span>
            </div>
            <div class="impact-counter" data-animate>
                <span class="counter impact-counter__number" data-target="82" aria-live="polite">0</span>
                <span class="impact-counter__unit">trees</span>
                <span class="impact-counter__label">Equivalent planted annually</span>
            </div>
        </div>

        <!-- Before / After split comparison -->
        <div class="impact-split" data-animate>
            <div class="impact-split__before">
                <h3>Before Solar</h3>
                <div class="impact-bill">
                    <span class="impact-bill__amount">&pound;2,400</span>
                    <span class="impact-bill__label">Annual energy bill</span>
                    <span class="impact-bill__trend impact-bill__trend--up">Rising every year</span>
                </div>
            </div>
            <div class="impact-split__after">
                <h3>After Solar + Battery</h3>
                <div class="impact-bill impact-bill--solar">
                    <span class="impact-bill__amount">&pound;450</span>
                    <span class="impact-bill__label">Annual energy bill</span>
                    <span class="impact-bill__trend impact-bill__trend--down">Plus SEG income</span>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="impact-testimonials">
            <div class="impact-testimonial" data-animate>
                <blockquote>
                    <p>"SW3 transformed our home. Our electricity bill dropped from &pound;200 a month to &pound;35. The installation was professional and finished in just two days."</p>
                </blockquote>
                <cite>
                    <strong>Sarah M.</strong>
                    <span>Sevenoaks, Kent</span>
                </cite>
            </div>
            <div class="impact-testimonial" data-animate>
                <blockquote>
                    <p>"The Tesla Powerwall was the game-changer. We barely use any grid electricity now, even in winter. Wish we'd done it sooner."</p>
                </blockquote>
                <cite>
                    <strong>James & Paula T.</strong>
                    <span>Guildford, Surrey</span>
                </cite>
            </div>
            <div class="impact-testimonial" data-animate>
                <blockquote>
                    <p>"From the initial survey to the final handover, SW3 were fantastic. Clear communication, fair pricing, and a beautiful installation."</p>
                </blockquote>
                <cite>
                    <strong>David R.</strong>
                    <span>Brighton, Sussex</span>
                </cite>
            </div>
        </div>

        <!-- CTA -->
        <div class="impact-cta" data-animate>
            <a href="/solar-calculator/" class="btn btn--primary btn--large">Calculate Your Savings</a>
        </div>

    </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     SECTION 7: THE FUTURE
     Community growth, gradient bookend, final CTA
     ════════════════════════════════════════════════════════════ -->
<section id="section-future" class="sw3-section sw3-section--future" aria-label="Join the solar revolution">
    <div class="sw3-section__inner">

        <!-- Background gradient (returns to warm sunrise) -->
        <div class="future-bg" aria-hidden="true"></div>

        <h2 class="future-title" data-animate>A Brighter Future Starts Here</h2>
        <p class="future-subtitle" data-animate>One home at a time, we're building a cleaner, greener South East.</p>

        <!-- Community growth SVG -->
        <div class="future-community-wrap">
            <svg class="future-community" viewBox="0 0 800 400" width="800" height="400" aria-label="Growing community of solar-powered homes">

                <!-- Ground -->
                <rect x="0" y="320" width="800" height="80" rx="0" fill="var(--sw3-charcoal)"/>

                <!-- Central house (always visible) -->
                <g class="community-house community-house--main">
                    <rect x="360" y="260" width="80" height="60" rx="2" fill="#1a2a3a" stroke="#2a3a4a" stroke-width="1.5"/>
                    <polygon points="350,264 400,220 450,264" fill="#1a3a5c" stroke="#2a3a4a" stroke-width="1.5"/>
                    <rect x="370" y="250" width="15" height="8" rx="1" fill="var(--sw3-amber)" opacity="0.8"/>
                    <rect x="390" y="245" width="15" height="8" rx="1" fill="var(--sw3-amber)" opacity="0.8"/>
                    <rect x="385" y="290" width="20" height="30" rx="1" fill="#0d1f30"/>
                    <rect x="368" y="275" width="12" height="12" rx="1" fill="var(--sw3-gold)" opacity="0.7"/>
                    <rect x="415" y="275" width="12" height="12" rx="1" fill="var(--sw3-gold)" opacity="0.7"/>
                </g>

                <!-- Left house 1 (fades in) -->
                <g class="community-house community-house--left1" opacity="0">
                    <rect x="200" y="275" width="65" height="45" rx="2" fill="#1a2a3a" stroke="#2a3a4a" stroke-width="1"/>
                    <polygon points="192,279 232,245 272,279" fill="#1a3a5c" stroke="#2a3a4a" stroke-width="1"/>
                    <rect x="210" y="260" width="12" height="7" rx="1" fill="var(--sw3-amber)" opacity="0.7"/>
                    <rect x="225" y="256" width="12" height="7" rx="1" fill="var(--sw3-amber)" opacity="0.7"/>
                    <rect x="215" y="290" width="12" height="12" rx="1" fill="var(--sw3-gold)" opacity="0.5"/>
                </g>

                <!-- Right house 1 (fades in) -->
                <g class="community-house community-house--right1" opacity="0">
                    <rect x="530" y="270" width="70" height="50" rx="2" fill="#1a2a3a" stroke="#2a3a4a" stroke-width="1"/>
                    <polygon points="522,274 565,238 608,274" fill="#1a3a5c" stroke="#2a3a4a" stroke-width="1"/>
                    <rect x="540" y="255" width="12" height="7" rx="1" fill="var(--sw3-amber)" opacity="0.7"/>
                    <rect x="555" y="252" width="12" height="7" rx="1" fill="var(--sw3-amber)" opacity="0.7"/>
                    <rect x="545" y="285" width="12" height="12" rx="1" fill="var(--sw3-gold)" opacity="0.5"/>
                    <rect x="575" y="285" width="12" height="12" rx="1" fill="var(--sw3-gold)" opacity="0.5"/>
                </g>

                <!-- Far left house (fades in later) -->
                <g class="community-house community-house--left2" opacity="0">
                    <rect x="60" y="280" width="55" height="40" rx="2" fill="#1a2a3a" stroke="#2a3a4a" stroke-width="1"/>
                    <polygon points="53,284 87,255 122,284" fill="#1a3a5c" stroke="#2a3a4a" stroke-width="1"/>
                    <rect x="68" y="265" width="10" height="6" rx="1" fill="var(--sw3-amber)" opacity="0.6"/>
                    <rect x="73" y="293" width="10" height="10" rx="1" fill="var(--sw3-gold)" opacity="0.4"/>
                </g>

                <!-- Far right house (fades in later) -->
                <g class="community-house community-house--right2" opacity="0">
                    <rect x="680" y="278" width="60" height="42" rx="2" fill="#1a2a3a" stroke="#2a3a4a" stroke-width="1"/>
                    <polygon points="673,282 710,250 747,282" fill="#1a3a5c" stroke="#2a3a4a" stroke-width="1"/>
                    <rect x="690" y="263" width="10" height="6" rx="1" fill="var(--sw3-amber)" opacity="0.6"/>
                    <rect x="700" y="263" width="10" height="6" rx="1" fill="var(--sw3-amber)" opacity="0.6"/>
                    <rect x="695" y="291" width="10" height="10" rx="1" fill="var(--sw3-gold)" opacity="0.4"/>
                </g>

                <!-- Trees -->
                <g class="community-tree community-tree--1" opacity="0">
                    <rect x="155" y="290" width="6" height="30" fill="#3d2817"/>
                    <polygon points="140,295 158,240 176,295" fill="var(--sw3-green)" opacity="0.7"/>
                </g>
                <g class="community-tree community-tree--2" opacity="0">
                    <rect x="475" y="285" width="6" height="35" fill="#3d2817"/>
                    <polygon points="458,290 478,230 498,290" fill="var(--sw3-green)" opacity="0.7"/>
                </g>
                <g class="community-tree community-tree--3" opacity="0">
                    <rect x="310" y="295" width="5" height="25" fill="#3d2817"/>
                    <polygon points="297,300 312,255 328,300" fill="var(--sw3-green)" opacity="0.6"/>
                </g>
                <g class="community-tree community-tree--4" opacity="0">
                    <rect x="635" y="292" width="5" height="28" fill="#3d2817"/>
                    <polygon points="622,297 637,250 653,297" fill="var(--sw3-green)" opacity="0.6"/>
                </g>

            </svg>
        </div>

        <!-- Community counter -->
        <div class="future-counter" data-animate>
            <span>Join </span>
            <span class="counter" data-target="5000" aria-live="polite">0</span>
            <span> homes powered by solar in the South East</span>
        </div>

        <!-- Final CTA -->
        <div class="future-cta" data-animate>
            <h3>Start Your Solar Journey</h3>
            <p>Get a free, no-obligation quote in 60 seconds.</p>
            <a href="/contact/" class="btn btn--primary btn--large">Get Your Free Quote</a>
            <p class="future-cta__phone">Or call us: <a href="tel:+442045381967">0204 538 1967</a></p>
        </div>

    </div>
</section>

<?php get_footer(); ?>
