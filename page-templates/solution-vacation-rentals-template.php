<?php
/**
 * Template Name: Solution - Vacation Rentals
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main solution-page vacation-rentals-solution">
        
        <!-- HERO Section -->
        <section class="solution-hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-headline">Automate Every Check-in, From Anywhere</h1>
                    <p class="hero-subcopy">Stop driving across town to hand off keys—go 100% self-service with Intelli Series locks.</p>
                    <div class="hero-buttons">
                        <a href="/contact" class="btn btn-primary">Start Saving Time</a>
                        <a href="/case-studies" class="btn btn-secondary">See Customer Stories</a>
                    </div>
                </div>
                <div class="hero-image">
                    <!-- Placeholder for hero image -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vacation-rental-hero.jpg" alt="Vacation rental with Intelli Series smart lock" class="hero-img">
                </div>
            </div>
        </section>
        
        <!-- Owner Pain Points Solved Section -->
        <section class="pain-points-section">
            <div class="container">
                <h2 class="section-title">Owner Pain Points Solved</h2>
                
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                            </svg>
                        </div>
                        <p class="benefit-text">Key hand-offs gone. Dynamic PINs texted to every guest.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="benefit-text">Turnover efficiency. Cleaners get expiry codes that vanish at noon.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="benefit-text">Damage accountability. Time-stamped logs for insurance claims.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Feature-Benefit Snapshot Section -->
        <section class="feature-benefit-section">
            <div class="container">
                <h2 class="section-title">Feature–Benefit Snapshot</h2>
                
                <div class="feature-table">
                    <div class="feature-table-header">
                        <div class="feature-column">Feature</div>
                        <div class="benefit-column">Host Benefit</div>
                    </div>
                    
                    <div class="feature-table-row">
                        <div class="feature-column">Airbnb & Vrbo link</div>
                        <div class="benefit-column">Auto-send codes when booking confirmed.</div>
                    </div>
                    
                    <div class="feature-table-row">
                        <div class="feature-column">Remote unlock</div>
                        <div class="benefit-column">Help guests who forgot the code—right from your phone.</div>
                    </div>
                    
                    <div class="feature-table-row">
                        <div class="feature-column">Long-life batteries</div>
                        <div class="benefit-column">12-month runtime cuts maintenance visits.</div>
                    </div>
                    
                    <div class="feature-table-row">
                        <div class="feature-column">Offline PIN cache</div>
                        <div class="benefit-column">Door works even if Wi-Fi drops.</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ROI Note Section -->
        <section class="roi-section">
            <div class="container">
                <div class="roi-note">
                    <h3 class="roi-title">ROI Note</h3>
                    <p class="roi-text">Typical 20-unit portfolio saves ≈ 140 labour hours each year on key management.</p>
                </div>
            </div>
        </section>
        
        <!-- How It Works Section -->
        <section class="how-it-works-section">
            <div class="container">
                <h2 class="section-title">How It Works</h2>
                
                <div class="steps-container">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <p class="step-description">Sync listings.</p>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-number">2</div>
                        <p class="step-description">Install locks (retrofit lever in <10 min).</p>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-number">3</div>
                        <p class="step-description">Codes auto-issue, audits auto-log.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Banner Section -->
        <section class="cta-banner">
            <div class="container">
                <div class="cta-content">
                    <h2 class="cta-title">Slash turnover time and guest questions—risk-free.</h2>
                    <a href="/contact" class="btn btn-primary">Get My Custom Quote</a>
                </div>
            </div>
        </section>
        
    </main>
</div>

<?php
get_footer();
?>