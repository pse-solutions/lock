<?php
/**
 * Template Name: IntelliLever Product Page
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main product-page intelli-lever-page">
        <div class="product-container">
            <!-- Hero Section -->
            <section class="product-hero">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1 class="product-title">
                                <?php 
                                if(function_exists('get_field') && get_field('lever_hero_section') && get_field('lever_hero_section')['product_title']):
                                    echo esc_html(get_field('lever_hero_section')['product_title']);
                                else:
                                    echo 'Meet IntelliLever';
                                endif;
                                ?>
                            </h1>
                            <h2 class="product-subtitle">
                                <?php 
                                if(function_exists('get_field') && get_field('lever_hero_section') && get_field('lever_hero_section')['product_subtitle']):
                                    echo esc_html(get_field('lever_hero_section')['product_subtitle']);
                                else:
                                    echo 'Effortless smart access for interior doors';
                                endif;
                                ?>
                            </h2>
                            <p class="product-intro">
                                <?php 
                                if(function_exists('get_field') && get_field('lever_hero_section') && get_field('lever_hero_section')['product_intro']):
                                    echo esc_html(get_field('lever_hero_section')['product_intro']);
                                else:
                                    echo 'No deadbolt? No problem. IntelliLever replaces almost any lever or knob set, turning back‑of‑house, staff, and guest‑room doors into fully connected entry points—without breaking the bank or the drywall.';
                                endif;
                                ?>
                            </p>
                            <div class="hero-ctas">
                                <a href="#specifications" class="btn btn-secondary">
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_hero_section') && get_field('lever_hero_section')['specs_button_text']):
                                        echo esc_html(get_field('lever_hero_section')['specs_button_text']);
                                    else:
                                        echo 'View Specs';
                                    endif;
                                    ?>
                                </a>
                                <a href="<?php echo function_exists('get_field') && get_field('lever_hero_section') && get_field('lever_hero_section')['quote_button_url'] ? esc_url(get_field('lever_hero_section')['quote_button_url']) : '#quote'; ?>" class="btn btn-primary">
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_hero_section') && get_field('lever_hero_section')['quote_button_text']):
                                        echo esc_html(get_field('lever_hero_section')['quote_button_text']);
                                    else:
                                        echo 'Get a Quote';
                                    endif;
                                    ?>
                                </a>
                            </div>
                        </div>
                        <div class="hero-image">
                            <?php if(function_exists('get_field') && get_field('lever_hero_section') && get_field('lever_hero_section')['hero_image']): ?>
                                <img src="<?php echo esc_url(get_field('lever_hero_section')['hero_image']); ?>" alt="IntelliLever smart lock" class="product-img">
                            <?php else: ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellilever.jpg" alt="IntelliLever smart lock" class="product-img">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits Section -->
            <section class="product-benefits">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_benefits_section') && get_field('lever_benefits_section')['benefits_title']):
                            echo esc_html(get_field('lever_benefits_section')['benefits_title']);
                        else:
                            echo 'Why properties choose IntelliLever';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="benefits-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_benefits_section') && 
                           isset(get_field('lever_benefits_section')['benefits']) && 
                           is_array(get_field('lever_benefits_section')['benefits'])):
                            
                            // Define default icons for benefits
                            $default_icons = array(
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>',
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>',
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>'
                            );
                            
                            $i = 0;
                            foreach(get_field('lever_benefits_section')['benefits'] as $benefit):
                                $icon_index = $i % count($default_icons); // Use modulo to cycle through icons
                        ?>
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <?php 
                                    // Check if benefit_icon exists in our JSON
                                    if(isset($benefit['benefit_icon']) && !empty($benefit['benefit_icon'])):
                                        echo $benefit['benefit_icon']; 
                                    else:
                                        echo $default_icons[$icon_index];
                                    endif;
                                    ?>
                                </div>
                                <h3 class="benefit-title"><?php echo esc_html($benefit['benefit_title']); ?></h3>
                                <p class="benefit-description"><?php echo esc_html($benefit['benefit_description']); ?></p>
                            </div>
                        <?php
                                $i++;
                            endforeach;
                        else:
                            // Fallback content if no ACF fields are set
                        ?>
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                </div>
                                <h3 class="benefit-title">Cut install time to &lt; 10 minutes</h3>
                                <p class="benefit-description">Fits standard 35‑65 mm doors with adjustable 60‑70 mm backset—no wiring, no skilled labour.</p>
                            </div>
                            
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                </div>
                                <h3 class="benefit-title">Six ways to unlock</h3>
                                <p class="benefit-description">PIN codes, RFID cards/fobs, mobile keys, Wi‑Fi remote open, fingerprint, or the built‑in mechanical key for total redundancy.</p>
                            </div>
                            
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                                </div>
                                <h3 class="benefit-title">Online and offline resilience</h3>
                                <p class="benefit-description">Cloud control when you want it; autonomous operation when Wi‑Fi drops.</p>
                            </div>
                            
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <h3 class="benefit-title">Operations super‑powers</h3>
                                <p class="benefit-description">Auto‑re‑lock, passage mode for high‑traffic periods, time‑bound PINs, and real‑time access logs.</p>
                            </div>
                            
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                                <h3 class="benefit-title">Stretches your CapEx</h3>
                                <p class="benefit-description">Pair with IntelliMortise on main entries for a mixed‑hardware strategy that slashes per‑door costs.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- Specifications Section -->
            <section id="specifications" class="product-specifications">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_specs_section') && get_field('lever_specs_section')['specs_title']):
                            echo esc_html(get_field('lever_specs_section')['specs_title']);
                        else:
                            echo 'At‑a‑Glance Specifications';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="specs-table-container">
                        <table class="specs-table">
                            <tbody>
                                <?php 
                                if(function_exists('get_field') && get_field('lever_specs_section') && isset(get_field('lever_specs_section')['specs']) && is_array(get_field('lever_specs_section')['specs'])):
                                    $specs_repeater = get_field('lever_specs_section')['specs'];
                                    foreach($specs_repeater as $spec): 
                                        $spec_name = $spec['spec_name'];
                                        $spec_value = $spec['spec_value'];
                                ?>
                                    <tr>
                                        <td class="spec-name"><?php echo esc_html($spec_name); ?></td>
                                        <td class="spec-value"><?php echo esc_html($spec_value); ?></td>
                                    </tr>
                                <?php 
                                    endforeach;
                                else: 
                                ?>
                                    <tr>
                                        <td class="spec-name">Dimensions</td>
                                        <td class="spec-value">195 H × 72 W × 24 D mm</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Materials</td>
                                        <td class="spec-value">Aluminium alloy body, ABS interface</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Power</td>
                                        <td class="spec-value">4 × AA batteries (Micro‑USB backup)</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Door Thickness</td>
                                        <td class="spec-value">35 – 65 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Backset</td>
                                        <td class="spec-value">60 – 70 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Operating Temp</td>
                                        <td class="spec-value">–20 °C to 50 °C</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Humidity</td>
                                        <td class="spec-value">0 – 95 % RH</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Water/Salt</td>
                                        <td class="spec-value">IP55; 200‑hr salt‑spray tested</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            
            <!-- Features Section -->
            <section class="product-features">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_features_section') && get_field('lever_features_section')['features_title']):
                            echo esc_html(get_field('lever_features_section')['features_title']);
                        else:
                            echo 'Feature Checklist';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="features-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_features_section') && 
                           isset(get_field('lever_features_section')['features']) && 
                           is_array(get_field('lever_features_section')['features'])):
                            foreach(get_field('lever_features_section')['features'] as $feature):
                        ?>
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text"><?php echo esc_html($feature['feature_text']); ?></div>
                            </div>
                        <?php 
                            endforeach;
                        else:
                        ?>
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Custom 4‑ to 9‑digit PINs for tailored security levels</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Door schedules & passage mode for high-traffic periods</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Auto re‑lock timer with configurable delay periods</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Low‑battery warnings & tamper alerts for proactive security</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Comprehensive access-event history exportable to CSV</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Remote management capability via smartphone app</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Temporary access codes with customizable expiration</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Emergency override with mechanical key backup</div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- Compatibility Section -->
            <section class="compatibility-section">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_compatibility_section') && get_field('lever_compatibility_section')['compatibility_title']):
                            echo esc_html(get_field('lever_compatibility_section')['compatibility_title']);
                        else:
                            echo 'Door Compatibility Guide';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="compatibility-tabs">
                        <div class="compatibility-nav">
                            <div class="compatibility-tab active" data-tab="standard">Standard Doors</div>
                            <div class="compatibility-tab" data-tab="specialty">Specialty Doors</div>
                            <div class="compatibility-tab" data-tab="not-compatible">Not Compatible</div>
                        </div>
                        
                        <div class="compatibility-content">
                            <div class="compatibility-item active" id="standard-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['standard_doors']['standard_title'])):
                                        echo esc_html(get_field('lever_compatibility_section')['standard_doors']['standard_title']);
                                    else:
                                        echo 'Perfect for Standard Interior Doors';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['standard_doors']['standard_intro'])):
                                        echo esc_html(get_field('lever_compatibility_section')['standard_doors']['standard_intro']);
                                    else:
                                        echo 'The IntelliLever is designed to fit almost any standard interior door configuration:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['standard_doors']['standard_items']) &&
                                       is_array(get_field('lever_compatibility_section')['standard_doors']['standard_items'])):
                                        foreach(get_field('lever_compatibility_section')['standard_doors']['standard_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Door thickness: 35mm – 65mm (1⅜" – 2½")</li>
                                        <li>Standard backset: 60mm – 70mm (2⅜" – 2¾")</li>
                                        <li>Traditional lever or knob replacements</li>
                                        <li>Most commercial-grade cylindrical locks</li>
                                        <li>Replaces single-hole lever preparations</li>
                                    <?php endif; ?>
                                </ul>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['standard_doors']['standard_conclusion'])):
                                        echo esc_html(get_field('lever_compatibility_section')['standard_doors']['standard_conclusion']);
                                    else:
                                        echo 'IntelliLever features a split-spindle design that works with the vast majority of interior doors, making it an ideal retrofit for staff areas, closets, and secondary entrances.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                            
                            <div class="compatibility-item" id="specialty-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['specialty_doors']['specialty_title'])):
                                        echo esc_html(get_field('lever_compatibility_section')['specialty_doors']['specialty_title']);
                                    else:
                                        echo 'Specialty Door Compatibility';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['specialty_doors']['specialty_intro'])):
                                        echo esc_html(get_field('lever_compatibility_section')['specialty_doors']['specialty_intro']);
                                    else:
                                        echo 'IntelliLever can also work with these specialty door types with the right preparation:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['specialty_doors']['specialty_items']) &&
                                       is_array(get_field('lever_compatibility_section')['specialty_doors']['specialty_items'])):
                                        foreach(get_field('lever_compatibility_section')['specialty_doors']['specialty_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Hollow metal doors (with appropriate strike reinforcement)</li>
                                        <li>Aluminum frame glass doors (with lever handle preparations)</li>
                                        <li>Fire-rated doors (where allowed by local code)</li>
                                        <li>Pocket doors (consult with our team for installation guidance)</li>
                                        <li>Sliding barn-style doors (with appropriate latch mechanism)</li>
                                    <?php endif; ?>
                                </ul>
                                <p class="step-tip">
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['specialty_doors']['specialty_tip'])):
                                        echo esc_html(get_field('lever_compatibility_section')['specialty_doors']['specialty_tip']);
                                    else:
                                        echo 'For specialty door installations, we recommend consulting with our support team to ensure proper fit and function before ordering.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                            
                            <div class="compatibility-item" id="not-compatible-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['not_compatible']['not_compatible_title'])):
                                        echo esc_html(get_field('lever_compatibility_section')['not_compatible']['not_compatible_title']);
                                    else:
                                        echo 'Not Recommended For';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['not_compatible']['not_compatible_intro'])):
                                        echo esc_html(get_field('lever_compatibility_section')['not_compatible']['not_compatible_intro']);
                                    else:
                                        echo 'The IntelliLever is not ideal for these applications:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['not_compatible']['not_compatible_items']) &&
                                       is_array(get_field('lever_compatibility_section')['not_compatible']['not_compatible_items'])):
                                        foreach(get_field('lever_compatibility_section')['not_compatible']['not_compatible_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Main entrance doors (consider our IntelliMortise instead)</li>
                                        <li>Doors requiring deadbolts (use IntelliBolt for additional security)</li>
                                        <li>Highly weathered exterior doors (IP55 rating has limitations)</li>
                                        <li>Extremely thin doors (under 35mm / 1⅜")</li>
                                        <li>Doors with non-standard preparations (custom milling required)</li>
                                    <?php endif; ?>
                                </ul>
                                <p class="step-tip">
                                    <?php 
                                    if(function_exists('get_field') && get_field('lever_compatibility_section') && 
                                       isset(get_field('lever_compatibility_section')['not_compatible']['not_compatible_tip'])):
                                        echo esc_html(get_field('lever_compatibility_section')['not_compatible']['not_compatible_tip']);
                                    else:
                                        echo 'Not sure if IntelliLever is right for your door? Send us photos of your existing hardware and we will recommend the best 33Lock solution for your needs.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Installation Steps Section -->
            <section class="installation-section">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_installation_section') && get_field('lever_installation_section')['installation_title']):
                            echo esc_html(get_field('lever_installation_section')['installation_title']);
                        else:
                            echo '10-Minute Installation Process';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="installation-steps">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_installation_section') && 
                           isset(get_field('lever_installation_section')['installation_steps']) && 
                           is_array(get_field('lever_installation_section')['installation_steps'])):
                            foreach(get_field('lever_installation_section')['installation_steps'] as $step):
                        ?>
                            <div class="installation-step">
                                <div class="step-number"><?php echo esc_html($step['step_number']); ?></div>
                                <div class="step-content">
                                    <h3 class="step-title"><?php echo esc_html($step['step_title']); ?></h3>
                                    <p class="step-description"><?php echo esc_html($step['step_description']); ?></p>
                                    <?php if(!empty($step['step_tip'])): ?>
                                        <p class="step-tip"><?php echo esc_html($step['step_tip']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php 
                            endforeach;
                        else:
                        ?>
                            <div class="installation-step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h3 class="step-title">Remove Existing Hardware</h3>
                                    <p class="step-description">Start by removing your existing lever handle or doorknob. Just unscrew the two mounting screws on the interior side of the door and pull both sides off. No special tools required – a simple Phillips screwdriver will do the job.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h3 class="step-title">Install the Mounting Plate</h3>
                                    <p class="step-description">Place the included mounting plate against the door, feeding the spindle and wire harness through the latch hole. Secure with the supplied screws into the existing screw holes from your previous hardware.</p>
                                    <p class="step-tip"><strong>Pro Tip:</strong> The adjustable backset accommodates both 60mm and 70mm (2⅜" and 2¾") configurations without additional adjustments.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h3 class="step-title">Attach the IntelliLever</h3>
                                    <p class="step-description">Connect the wire harness to the smart lever body. Slide the lever mechanism onto the mounting plate and secure with the set screws on the underside. Load the 4 AA batteries into the battery compartment.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h3 class="step-title">Test & Activate</h3>
                                    <p class="step-description">Test the mechanical function by turning the interior lever. Then activate the smart functions by following the included setup instructions with the 33Lock app. Pair via Bluetooth and connect to your Wi-Fi network.</p>
                                    <p class="step-tip"><strong>Note:</strong> For doors with unusual thickness or custom hardware, our installation kit includes adjustable components to ensure proper fit in almost any situation.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- Testimonial Section -->
            <section class="testimonial-section">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_testimonial_section') && get_field('lever_testimonial_section')['testimonial_title']):
                            echo esc_html(get_field('lever_testimonial_section')['testimonial_title']);
                        else:
                            echo 'What Our Customers Say';
                        endif;
                        ?>
                    </h2>
                    
                    <?php 
                    if(function_exists('get_field') && get_field('lever_testimonial_section') && 
                       isset(get_field('lever_testimonial_section')['testimonials']) && 
                       is_array(get_field('lever_testimonial_section')['testimonials']) &&
                       count(get_field('lever_testimonial_section')['testimonials']) > 0):
                        $testimonial = get_field('lever_testimonial_section')['testimonials'][0]; // Get first testimonial
                    ?>
                        <div class="testimonials-container">
                            <p class="testimonial-text"><?php echo esc_html($testimonial['testimonial_text']); ?></p>
                            
                            <div class="testimonial-author">
                                <?php if(!empty($testimonial['testimonial_avatar'])): ?>
                                    <img src="<?php echo esc_url($testimonial['testimonial_avatar']); ?>" alt="<?php echo esc_attr($testimonial['testimonial_name']); ?>" class="testimonial-avatar-img">
                                <?php else: ?>
                                    <div class="testimonial-avatar"><?php echo esc_html(substr($testimonial['testimonial_name'], 0, 1)); ?></div>
                                <?php endif; ?>
                                <div class="testimonial-info">
                                    <p class="testimonial-name"><?php echo esc_html($testimonial['testimonial_name']); ?></p>
                                    <?php if(!empty($testimonial['testimonial_position'])): ?>
                                        <p class="testimonial-position"><?php echo esc_html($testimonial['testimonial_position']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="testimonials-container">
                            <p class="testimonial-text">The IntelliLever has been a perfect solution for our back-of-house doors. Installation was exactly as promised—under 10 minutes per door—and our staff appreciated the minimal disruption. Best of all, we can now securely control access to our storage areas and monitor entry events, which has been invaluable for accountability.</p>
                            
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">M</div>
                                <div class="testimonial-info">
                                    <p class="testimonial-name">Michael Reynolds</p>
                                    <p class="testimonial-position">Operations Director, City View Hotel</p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
            
            <!-- FAQ Section -->
            <section class="faq-section">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_faq_section') && get_field('lever_faq_section')['faq_title']):
                            echo esc_html(get_field('lever_faq_section')['faq_title']);
                        else:
                            echo 'Frequently Asked Questions';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="faq-container">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_faq_section') && 
                           isset(get_field('lever_faq_section')['faqs']) && 
                           is_array(get_field('lever_faq_section')['faqs'])):
                            $first = true;
                            foreach(get_field('lever_faq_section')['faqs'] as $faq):
                        ?>
                            <div class="faq-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="faq-question"><?php echo esc_html($faq['question']); ?></div>
                                <div class="faq-answer">
                                    <?php echo wp_kses_post($faq['answer']); ?>
                                </div>
                            </div>
                        <?php 
                                $first = false;
                            endforeach;
                        else:
                        ?>
                            <div class="faq-item active">
                                <div class="faq-question">Can IntelliLever replace any lever handle?</div>
                                <div class="faq-answer">
                                    <p>IntelliLever is designed to replace most standard lever handles and doorknobs on interior doors with a thickness of 35-65mm (1⅜" - 2½") and standard backsets of 60-70mm (2⅜" - 2¾"). It is not suitable for mortise locks or deadbolts. If you are unsure about compatibility, our team can help assess your specific door setup before you purchase.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">How long do the batteries last?</div>
                                <div class="faq-answer">
                                    <p>The 4 AA batteries typically last 10-12 months with normal use (approximately 10-15 entries per day). Battery life may vary based on usage frequency, connectivity settings, and environmental factors. The lock provides low battery warnings through the app and on the lock itself when levels reach approximately 20%, giving you ample time to replace them.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">What happens if the batteries die?</div>
                                <div class="faq-answer">
                                    <p>IntelliLever includes multiple backup options: 1) An emergency micro-USB port for temporary power, 2) A mechanical key override, and 3) Non-volatile memory that retains all programming even when power is completely lost. Once power is restored, all your settings and access credentials remain intact without reprogramming.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">Does IntelliLever work with my existing access control system?</div>
                                <div class="faq-answer">
                                    <p>IntelliLever works with most major property management systems through our open API. It integrates directly with platforms like Cloudbeds, Mews, and other popular PMS systems. For specialized integrations, our technical team can provide guidance on API usage or suggest middleware solutions where necessary.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">Can I use IntelliLever for exterior doors?</div>
                                <div class="faq-answer">
                                    <p>While IntelliLever carries an IP55 rating and has been salt-spray tested for 200 hours, we generally recommend our IntelliMortise for primary exterior entrances that require higher security. IntelliLever can be used on protected exterior doors (under covered areas) in moderate climates, but may not be suitable for harsh weather conditions or high-security access points.</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- Use Cases Section -->
            <section class="product-use-cases">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_use_cases_section') && get_field('lever_use_cases_section')['use_cases_title']):
                            echo esc_html(get_field('lever_use_cases_section')['use_cases_title']);
                        else:
                            echo 'Perfect for…';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="use-cases-container">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_use_cases_section') && 
                           isset(get_field('lever_use_cases_section')['use_cases']) && 
                           is_array(get_field('lever_use_cases_section')['use_cases'])):
                            foreach(get_field('lever_use_cases_section')['use_cases'] as $use_case):
                        ?>
                            <div class="use-case-item"><?php echo esc_html($use_case['use_case_text']); ?></div>
                        <?php 
                            endforeach;
                        else:
                        ?>
                            <div class="use-case-item">Staff doors & maintenance closets with access logging</div>
                            <div class="use-case-item">Budget-sensitive retrofit projects requiring rapid deployment</div>
                            <div class="use-case-item">Secondary guest-room entries with coordinated master key systems</div>
                            <div class="use-case-item">Student housing & co-living units requiring scheduled access</div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            
            <!-- CTA Section -->
            <section id="quote" class="product-cta">
                <div class="container">
                    <div class="cta-content">
                        <h2 class="cta-title">
                            <?php 
                            if(function_exists('get_field') && get_field('lever_cta_section') && get_field('lever_cta_section')['cta_title']):
                                echo esc_html(get_field('lever_cta_section')['cta_title']);
                            else:
                                echo 'Ready to upgrade?';
                            endif;
                            ?>
                        </h2>
                        
                        <p class="cta-text">
                            <?php 
                            if(function_exists('get_field') && get_field('lever_cta_section') && get_field('lever_cta_section')['cta_text']):
                                echo esc_html(get_field('lever_cta_section')['cta_text']);
                            else:
                                echo 'Book a 10‑minute demo to see IntelliLever in action or request a volume quote today.';
                            endif;
                            ?>
                        </p>
                        
                        <p class="cta-supplement">
                            <?php 
                            if(function_exists('get_field') && get_field('lever_cta_section') && get_field('lever_cta_section')['cta_supplement']):
                                echo esc_html(get_field('lever_cta_section')['cta_supplement']);
                            else:
                                echo 'Pair IntelliLever with IntelliMortise for suite entrances and enjoy a unified, cost‑effective smart‑access ecosystem.';
                            endif;
                            ?>
                        </p>
                        
                        <a href="<?php echo function_exists('get_field') && get_field('lever_cta_section') && get_field('lever_cta_section')['cta_button_url'] ? esc_url(get_field('lever_cta_section')['cta_button_url']) : '/contact'; ?>" class="btn btn-primary btn-large">
                            <?php 
                            if(function_exists('get_field') && get_field('lever_cta_section') && get_field('lever_cta_section')['cta_button_text']):
                                echo esc_html(get_field('lever_cta_section')['cta_button_text']);
                            else:
                                echo 'Get My Quote';
                            endif;
                            ?>
                        </a>
                    </div>
                </div>
            </section>
            
            <!-- Related Products -->
            <section class="related-products">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_related_products_section') && get_field('lever_related_products_section')['related_products_title']):
                            echo esc_html(get_field('lever_related_products_section')['related_products_title']);
                        else:
                            echo 'Complete your smart access ecosystem';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="related-products-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('lever_related_products_section') && get_field('lever_related_products_section')['related_products']):
                            while(have_rows('lever_related_products_section')['related_products']) : the_row(); 
                                $product_title = get_sub_field('product_title');
                                $product_description = get_sub_field('product_description');
                                $product_image = get_sub_field('product_image');
                                $product_url = get_sub_field('product_url');
                        ?>
                            <div class="related-product-card">
                                <div class="related-product-image">
                                    <?php if($product_image): ?>
                                        <img src="<?php echo esc_url($product_image); ?>" alt="<?php echo esc_attr($product_title); ?> smart lock" class="product-img">
                                    <?php else: ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php echo esc_attr($product_title); ?>" class="product-img">
                                    <?php endif; ?>
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title"><?php echo esc_html($product_title); ?></h3>
                                    <p class="related-product-description"><?php echo esc_html($product_description); ?></p>
                                    <a href="<?php echo esc_url($product_url); ?>" class="related-product-link">Learn More</a>
                                </div>
                            </div>
                        <?php 
                            endwhile;
                        else: 
                        ?>
                            <div class="related-product-card">
                                <div class="related-product-image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellimortise.jpg" alt="IntelliMortise smart lock" class="product-img">
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title">IntelliMortise</h3>
                                    <p class="related-product-description">Flagship security for main entrances and exterior doors</p>
                                    <a href="/locks/intellimortise" class="related-product-link">Learn More</a>
                                </div>
                            </div>
                            
                            <div class="related-product-card">
                                <div class="related-product-image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellibolt.jpg" alt="IntelliBolt smart lock" class="product-img">
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title">IntelliBolt</h3>
                                    <p class="related-product-description">Surface-mount solution for specialty doors</p>
                                    <a href="/locks/intellibolt" class="related-product-link">Learn More</a>
                                </div>
                            </div>
                            
                            <div class="related-product-card">
                                <div class="related-product-image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellireader.jpg" alt="IntelliReader access controller" class="product-img">
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title">IntelliReader</h3>
                                    <p class="related-product-description">Common area access controller for lobbies and facilities</p>
                                    <a href="/locks/intellireader" class="related-product-link">Learn More</a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>