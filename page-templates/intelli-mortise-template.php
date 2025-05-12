<?php
/**
 * Template Name: IntelliMortise Product Page
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main product-page intelli-mortise-page">
        <div class="product-container">
            <!-- Hero Section -->
            <section class="product-hero">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1 class="product-title">
                                <?php 
                                if(function_exists('get_field') && get_field('mortise_hero_section') && get_field('mortise_hero_section')['product_title']):
                                    echo esc_html(get_field('mortise_hero_section')['product_title']);
                                else:
                                    echo 'Meet IntelliMortise – flagship smart security for primary doors';
                                endif;
                                ?>
                            </h1>
                            <p class="product-intro">
                                <?php 
                                if(function_exists('get_field') && get_field('mortise_hero_section') && get_field('mortise_hero_section')['product_intro']):
                                    echo esc_html(get_field('mortise_hero_section')['product_intro']);
                                else:
                                    echo 'Engineered for high-traffic guest entries, IntelliMortise blends hotel-grade durability with sleek styling in brushed stainless or satin black. Choose a capacitive touchscreen or tactile push-button keypad and upgrade new builds or retrofits in under 15 minutes—no wiring required.';
                                endif;
                                ?>
                            </p>
                            <div class="hero-ctas">
                                <a href="#specifications" class="btn btn-secondary">
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_hero_section') && get_field('mortise_hero_section')['specs_button_text']):
                                        echo esc_html(get_field('mortise_hero_section')['specs_button_text']);
                                    else:
                                        echo 'View Specs';
                                    endif;
                                    ?>
                                </a>
                                <a href="<?php echo function_exists('get_field') && get_field('mortise_hero_section') && get_field('mortise_hero_section')['quote_button_url'] ? esc_url(get_field('mortise_hero_section')['quote_button_url']) : '#quote'; ?>" class="btn btn-primary">
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_hero_section') && get_field('mortise_hero_section')['quote_button_text']):
                                        echo esc_html(get_field('mortise_hero_section')['quote_button_text']);
                                    else:
                                        echo 'Get a Quote';
                                    endif;
                                    ?>
                                </a>
                            </div>
                        </div>
                        <div class="hero-image">
                            <?php if(function_exists('get_field') && get_field('mortise_hero_section') && get_field('mortise_hero_section')['hero_image']): ?>
                                <img src="<?php echo esc_url(get_field('mortise_hero_section')['hero_image']); ?>" alt="IntelliMortise smart lock" class="product-img">
                            <?php else: ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellimortise.jpg" alt="IntelliMortise smart lock" class="product-img">
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
                        if(function_exists('get_field') && get_field('mortise_benefits_section') && get_field('mortise_benefits_section')['benefits_title']):
                            echo esc_html(get_field('mortise_benefits_section')['benefits_title']);
                        else:
                            echo 'Why properties choose IntelliMortise';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="benefits-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('mortise_benefits_section') && 
                           isset(get_field('mortise_benefits_section')['benefits']) && 
                           is_array(get_field('mortise_benefits_section')['benefits'])):
                            
                            // Define default icons for benefits
                            $default_icons = array(
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>',
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>',
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>',
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>'
                            );
                            
                            $i = 0;
                            foreach(get_field('mortise_benefits_section')['benefits'] as $benefit):
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                </div>
                                <h3 class="benefit-title">Built for demanding entrances</h3>
                                <p class="benefit-description">20-minute UL/CAN-ULC fire rating, IP55 weather-seal, and 304 stainless body handle harsh climates and daily use.</p>
                            </div>
                            
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                </div>
                                <h3 class="benefit-title">Seven ways to unlock</h3>
                                <p class="benefit-description">PIN, RFID, mobile key, Wi-Fi remote open, fingerprint, Bluetooth, or mechanical override—guaranteed continuity.</p>
                            </div>
                            
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                                </div>
                                <h3 class="benefit-title">Online power, offline resilience</h3>
                                <p class="benefit-description">Cloud control when connected; autonomous schedules and audit trails when the network drops.</p>
                            </div>
                            
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <h3 class="benefit-title">Fully programmable access</h3>
                                <p class="benefit-description">Time-bound PINs, door schedules, passage mode, and auto-re-lock protect guests and streamline staff rounds.</p>
                            </div>
                            
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                                </div>
                                <h3 class="benefit-title">Future-proof finishes & UI</h3>
                                <p class="benefit-description">Swap keypad style or colourway to match any design refresh—no new holes, no new hardware.</p>
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
                        if(function_exists('get_field') && get_field('mortise_specs_section') && get_field('mortise_specs_section')['specs_title']):
                            echo esc_html(get_field('mortise_specs_section')['specs_title']);
                        else:
                            echo 'At-a-Glance Specifications';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="specs-table-container">
                        <table class="specs-table">
                            <tbody>
                                <?php 
                                if(function_exists('get_field') && get_field('mortise_specs_section') && 
                                   isset(get_field('mortise_specs_section')['specs']) && 
                                   is_array(get_field('mortise_specs_section')['specs'])):
                                    $specs_repeater = get_field('mortise_specs_section')['specs'];
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
                                        <td class="spec-name">Front / Back</td>
                                        <td class="spec-value">173 × 72 × 22 mm / 172 × 72 × 31 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Materials</td>
                                        <td class="spec-value">304 stainless-steel body, ABS interface</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Power</td>
                                        <td class="spec-value">4 × AAA batteries • USB-C backup</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Door Thickness</td>
                                        <td class="spec-value">35 – 65 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Operating Temp</td>
                                        <td class="spec-value">–25 °C to 60 °C</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Humidity</td>
                                        <td class="spec-value">0 – 95 % RH</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Ingress / Corrosion</td>
                                        <td class="spec-value">IP55 • 200 hr salt-spray</td>
                                    </tr>
                                    <tr>
                                        <td class="spec-name">Fire Rating</td>
                                        <td class="spec-value">20 min (UL 10C/B, NFPA 252, CAN/ULC S104)</td>
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
                        if(function_exists('get_field') && get_field('mortise_features_section') && get_field('mortise_features_section')['features_title']):
                            echo esc_html(get_field('mortise_features_section')['features_title']);
                        else:
                            echo 'Feature Checklist';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="features-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('mortise_features_section') && 
                           isset(get_field('mortise_features_section')['features']) && 
                           is_array(get_field('mortise_features_section')['features'])):
                            foreach(get_field('mortise_features_section')['features'] as $feature):
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
                                <div class="feature-text">Online & offline operation</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Touchscreen or push-button keypad</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Custom 4- to 9-digit PINs</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Auto re-lock & passage mode</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Low-battery, tamper & door-ajar alerts</div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div class="feature-text">Exportable access logs</div>
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
                        if(function_exists('get_field') && get_field('mortise_compatibility_section') && get_field('mortise_compatibility_section')['compatibility_title']):
                            echo esc_html(get_field('mortise_compatibility_section')['compatibility_title']);
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
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['standard_doors']['standard_title'])):
                                        echo esc_html(get_field('mortise_compatibility_section')['standard_doors']['standard_title']);
                                    else:
                                        echo 'Ideal for Primary Entrances';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['standard_doors']['standard_intro'])):
                                        echo esc_html(get_field('mortise_compatibility_section')['standard_doors']['standard_intro']);
                                    else:
                                        echo 'IntelliMortise is designed for exterior and primary entrance doors with these specifications:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['standard_doors']['standard_items']) &&
                                       is_array(get_field('mortise_compatibility_section')['standard_doors']['standard_items'])):
                                        foreach(get_field('mortise_compatibility_section')['standard_doors']['standard_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Door thickness: 35mm – 65mm (1⅜" – 2½")</li>
                                        <li>Standard mortise lock preparations</li>
                                        <li>Main entrance doors with mortise deadbolt</li>
                                        <li>Suite and guest-room entrances</li>
                                        <li>Fire-rated doors (20-minute UL/CAN-ULC rating)</li>
                                    <?php endif; ?>
                                </ul>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['standard_doors']['standard_conclusion'])):
                                        echo esc_html(get_field('mortise_compatibility_section')['standard_doors']['standard_conclusion']);
                                    else:
                                        echo 'IntelliMortise delivers outstanding security and durability for primary entries, with flexible keypad options to match your design aesthetic.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                            
                            <div class="compatibility-item" id="specialty-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['specialty_doors']['specialty_title'])):
                                        echo esc_html(get_field('mortise_compatibility_section')['specialty_doors']['specialty_title']);
                                    else:
                                        echo 'Specialty Door Compatibility';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['specialty_doors']['specialty_intro'])):
                                        echo esc_html(get_field('mortise_compatibility_section')['specialty_doors']['specialty_intro']);
                                    else:
                                        echo 'IntelliMortise can also work with these specialty door types:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['specialty_doors']['specialty_items']) &&
                                       is_array(get_field('mortise_compatibility_section')['specialty_doors']['specialty_items'])):
                                        foreach(get_field('mortise_compatibility_section')['specialty_doors']['specialty_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Sliding doors (with mortise lock preparation)</li>
                                        <li>Exterior weatherized doors (with our IP55 rating)</li>
                                        <li>Metal frame doors (with appropriate strike preparation)</li>
                                        <li>Oversized doors (up to 65mm / 2½" thick)</li>
                                        <li>Emergency exit paths (where local code allows)</li>
                                    <?php endif; ?>
                                </ul>
                                <p class="step-tip">
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['specialty_doors']['specialty_tip'])):
                                        echo esc_html(get_field('mortise_compatibility_section')['specialty_doors']['specialty_tip']);
                                    else:
                                        echo 'For specialty applications, our technical team can provide guidance on preparation and installation to ensure proper fit and function.';
                                    endif;
                                    ?>
                                </p>
                            </div>
                            
                            <div class="compatibility-item" id="not-compatible-content">
                                <h3>
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['not_compatible']['not_compatible_title'])):
                                        echo esc_html(get_field('mortise_compatibility_section')['not_compatible']['not_compatible_title']);
                                    else:
                                        echo 'Not Recommended For';
                                    endif;
                                    ?>
                                </h3>
                                <p>
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['not_compatible']['not_compatible_intro'])):
                                        echo esc_html(get_field('mortise_compatibility_section')['not_compatible']['not_compatible_intro']);
                                    else:
                                        echo 'The IntelliMortise is not ideal for these applications:';
                                    endif;
                                    ?>
                                </p>
                                <ul class="compatibility-list">
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['not_compatible']['not_compatible_items']) &&
                                       is_array(get_field('mortise_compatibility_section')['not_compatible']['not_compatible_items'])):
                                        foreach(get_field('mortise_compatibility_section')['not_compatible']['not_compatible_items'] as $item):
                                    ?>
                                        <li><?php echo esc_html($item['item_text']); ?></li>
                                    <?php 
                                        endforeach;
                                    else:
                                    ?>
                                        <li>Cylindrical lock preparations (use IntelliLever instead)</li>
                                        <li>Doors thinner than 35mm / 1⅜"</li>
                                        <li>Doors without adequate mortise preparation</li>
                                        <li>Extreme environment applications (beyond IP55)</li>
                                        <li>Doors without frame preparation for strike plate</li>
                                    <?php endif; ?>
                                </ul>
                                <p class="step-tip">
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_compatibility_section') && 
                                       isset(get_field('mortise_compatibility_section')['not_compatible']['not_compatible_tip'])):
                                        echo esc_html(get_field('mortise_compatibility_section')['not_compatible']['not_compatible_tip']);
                                    else:
                                        echo 'Not sure which 33Lock solution is right for your application? Contact our team with photos of your existing setup for personalized recommendations.';
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
                        if(function_exists('get_field') && get_field('mortise_installation_section') && get_field('mortise_installation_section')['installation_title']):
                            echo esc_html(get_field('mortise_installation_section')['installation_title']);
                        else:
                            echo '15-Minute Installation Process';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="installation-steps">
                        <?php 
                        if(function_exists('get_field') && get_field('mortise_installation_section') && 
                           isset(get_field('mortise_installation_section')['installation_steps']) && 
                           is_array(get_field('mortise_installation_section')['installation_steps'])):
                            foreach(get_field('mortise_installation_section')['installation_steps'] as $step):
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
                                    <p class="step-description">Begin by removing your current lock, including both the interior and exterior components. Use a Phillips screwdriver to remove all mounting screws. For mortise locks, remove the lock body from the door edge.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h3 class="step-title">Insert the Mortise Lock Body</h3>
                                    <p class="step-description">Slide the IntelliMortise lock body into the mortise pocket in the door edge. Secure it with the two screws provided. The lock body should fit snugly with the latch bolt and deadbolt extending from the door edge.</p>
                                    <p class="step-tip"><strong>Pro Tip:</strong> Apply a small amount of the included lithium grease to ensure smooth operation of the lock body components.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h3 class="step-title">Mount the Exterior Escutcheon</h3>
                                    <p class="step-description">Feed the data cable through the door hole, then position the exterior escutcheon on the door, aligning the spindle with the hub in the mortise lock. Hold it in place while continuing to the next step.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h3 class="step-title">Secure Interior Mounting Plate</h3>
                                    <p class="step-description">Connect the data cable to the interior assembly, then attach the interior mounting plate to the exterior escutcheon using the through-bolts provided. Ensure the plate is level before tightening the screws.</p>
                                </div>
                            </div>
                            
                            <div class="installation-step">
                                <div class="step-number">5</div>
                                <div class="step-content">
                                    <h3 class="step-title">Complete Assembly & Test</h3>
                                    <p class="step-description">Attach the interior cover to the mounting plate, install the batteries, and test both mechanical and electronic operation. Follow the included instructions to program your IntelliMortise using the 33Lock mobile app.</p>
                                    <p class="step-tip"><strong>Note:</strong> For proper strike alignment, you may need to adjust the strike plate on the door frame. Use the included shims if needed.</p>
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
                        if(function_exists('get_field') && get_field('mortise_testimonial_section') && get_field('mortise_testimonial_section')['testimonial_title']):
                            echo esc_html(get_field('mortise_testimonial_section')['testimonial_title']);
                        else:
                            echo 'What Our Customers Say';
                        endif;
                        ?>
                    </h2>
                    
                    <?php 
                    if(function_exists('get_field') && get_field('mortise_testimonial_section') && 
                       isset(get_field('mortise_testimonial_section')['testimonials']) && 
                       is_array(get_field('mortise_testimonial_section')['testimonials']) &&
                       count(get_field('mortise_testimonial_section')['testimonials']) > 0):
                        $testimonial = get_field('mortise_testimonial_section')['testimonials'][0]; // Get first testimonial
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
                            <p class="testimonial-text">IntelliMortise has revolutionized our check-in process. The installation was straightforward, and we've reduced front-desk wait times by 80%. Our guests love using their phones to unlock doors, and management appreciates the detailed access logs and ability to grant temporary access to staff.</p>
                            
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">S</div>
                                <div class="testimonial-info">
                                    <p class="testimonial-name">Sarah Johnson</p>
                                    <p class="testimonial-position">General Manager, Oceanview Resort</p>
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
                        if(function_exists('get_field') && get_field('mortise_faq_section') && get_field('mortise_faq_section')['faq_title']):
                            echo esc_html(get_field('mortise_faq_section')['faq_title']);
                        else:
                            echo 'Frequently Asked Questions';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="faq-container">
                        <?php 
                        if(function_exists('get_field') && get_field('mortise_faq_section') && 
                           isset(get_field('mortise_faq_section')['faqs']) && 
                           is_array(get_field('mortise_faq_section')['faqs'])):
                            $first = true;
                            foreach(get_field('mortise_faq_section')['faqs'] as $faq):
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
                                <div class="faq-question">What makes IntelliMortise different from other smart locks?</div>
                                <div class="faq-answer">
                                    <p>IntelliMortise combines commercial-grade durability with user-friendly smart access features. Its key differentiators include the 20-minute fire rating, weather resistance (IP55), and flexibility to choose between touchscreen and push-button interfaces. The mortise design provides superior security compared to cylindrical locks, and our offline operation capability ensures functionality even during network outages.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">How long do the batteries last?</div>
                                <div class="faq-answer">
                                    <p>The 4 AAA batteries typically last 12-15 months with normal use (approximately 10-20 entries per day). Battery life will vary based on usage frequency, connectivity settings, and environmental factors. The lock provides low battery warnings through the app and on the lock itself when levels reach approximately 20%, giving you ample time to replace them.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">What happens if batteries die completely?</div>
                                <div class="faq-answer">
                                    <p>IntelliMortise includes multiple backup options: 1) A USB-C emergency power port on the bottom of the exterior escutcheon, 2) A mechanical key override hidden behind the logo plate, and 3) Non-volatile memory that retains all programming even when power is completely lost. Once power is restored, all your settings and access credentials remain intact without reprogramming.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">Can I integrate IntelliMortise with my property management system?</div>
                                <div class="faq-answer">
                                    <p>Yes. IntelliMortise integrates with most major property management systems (PMS) through our open API. We have direct integrations with platforms like Cloudbeds, Mews, and other popular systems. For specialized PMS integrations, our technical team can provide guidance on API usage or suggest middleware solutions to connect your systems.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">Is IntelliMortise suitable for exterior doors?</div>
                                <div class="faq-answer">
                                    <p>Absolutely. IntelliMortise is specifically designed for exterior doors with its IP55 water and dust resistance rating and salt-spray testing certification. The 304 stainless steel components resist corrosion in most environments. For coastal environments with extreme salt exposure, we recommend the PVD coating option for extended durability.</p>
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
                        if(function_exists('get_field') && get_field('mortise_use_cases_section') && get_field('mortise_use_cases_section')['use_cases_title']):
                            echo esc_html(get_field('mortise_use_cases_section')['use_cases_title']);
                        else:
                            echo 'Perfect for…';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="use-cases-container">
                        <?php 
                        if(function_exists('get_field') && get_field('mortise_use_cases_section') && 
                           isset(get_field('mortise_use_cases_section')['use_cases']) && 
                           is_array(get_field('mortise_use_cases_section')['use_cases'])):
                            foreach(get_field('mortise_use_cases_section')['use_cases'] as $use_case):
                        ?>
                            <div class="use-case-item"><?php echo esc_html($use_case['use_case_text']); ?></div>
                        <?php 
                            endforeach;
                        else: 
                        ?>
                            <div class="use-case-item">Guest-room and suite entrances</div>
                            <div class="use-case-item">Exterior doors exposed to weather</div>
                            <div class="use-case-item">Retrofit projects needing code compliance</div>
                            <div class="use-case-item">Mixed-hardware portfolios (pair with IntelliLever inside)</div>
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
                            if(function_exists('get_field') && get_field('mortise_cta_section') && get_field('mortise_cta_section')['cta_title']):
                                echo esc_html(get_field('mortise_cta_section')['cta_title']);
                            else:
                                echo 'See it in action';
                            endif;
                            ?>
                        </h2>
                        <p class="cta-text">
                            <?php 
                            if(function_exists('get_field') && get_field('mortise_cta_section') && get_field('mortise_cta_section')['cta_text']):
                                echo esc_html(get_field('mortise_cta_section')['cta_text']);
                            else:
                                echo 'Book a 10-minute demo or request a volume quote to discover how IntelliMortise upgrades security, cuts front-desk load, and delights every guest.';
                            endif;
                            ?>
                        </p>
                        <p class="cta-supplement">
                            <?php 
                            if(function_exists('get_field') && get_field('mortise_cta_section') && get_field('mortise_cta_section')['cta_supplement']):
                                echo esc_html(get_field('mortise_cta_section')['cta_supplement']);
                            else:
                                echo 'Bundle IntelliMortise for suites and IntelliLever for back-of-house to slash per-door costs while keeping a single management platform.';
                            endif;
                            ?>
                        </p>
                        <div class="cta-buttons">
                            <a href="<?php echo function_exists('get_field') && get_field('mortise_cta_section') && get_field('mortise_cta_section')['cta_button_url'] ? esc_url(get_field('mortise_cta_section')['cta_button_url']) : '/contact'; ?>" class="btn btn-primary btn-large">
                                <?php 
                                if(function_exists('get_field') && get_field('mortise_cta_section') && get_field('mortise_cta_section')['cta_button_text']):
                                    echo esc_html(get_field('mortise_cta_section')['cta_button_text']);
                                else:
                                    echo 'Request My Quote';
                                endif;
                                ?>
                            </a>
                            
                            <?php if(function_exists('get_field') && get_field('mortise_cta_section') && get_field('mortise_cta_section')['spec_sheet_url']): ?>
                                <a href="<?php echo esc_url(get_field('mortise_cta_section')['spec_sheet_url']); ?>" class="btn btn-secondary btn-large">
                                    <?php 
                                    if(function_exists('get_field') && get_field('mortise_cta_section') && get_field('mortise_cta_section')['spec_sheet_button_text']):
                                        echo esc_html(get_field('mortise_cta_section')['spec_sheet_button_text']);
                                    else:
                                        echo 'Download Spec Sheet';
                                    endif;
                                    ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Related Products -->
            <section class="related-products">
                <div class="container">
                    <h2 class="section-title">
                        <?php 
                        if(function_exists('get_field') && get_field('mortise_related_products_section') && get_field('mortise_related_products_section')['related_products_title']):
                            echo esc_html(get_field('mortise_related_products_section')['related_products_title']);
                        else:
                            echo 'Complete your smart access ecosystem';
                        endif;
                        ?>
                    </h2>
                    
                    <div class="related-products-grid">
                        <?php 
                        if(function_exists('get_field') && get_field('mortise_related_products_section') && 
                           isset(get_field('mortise_related_products_section')['related_products']) &&
                           is_array(get_field('mortise_related_products_section')['related_products'])):
                            $related_products = get_field('mortise_related_products_section')['related_products'];
                            foreach($related_products as $product):
                                $product_title = $product['product_title'];
                                $product_description = $product['product_description'];
                                $product_image = isset($product['product_image']) ? $product['product_image'] : '';
                                $product_url = $product['product_url'];
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
                            endforeach;
                        else: 
                        ?>
                            <div class="related-product-card">
                                <div class="related-product-image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intellilever.jpg" alt="IntelliLever smart lock" class="product-img">
                                </div>
                                <div class="related-product-content">
                                    <h3 class="related-product-title">IntelliLever</h3>
                                    <p class="related-product-description">Retrofit solution for interior doors</p>
                                    <a href="/locks/intellilever" class="related-product-link">Learn More</a>
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